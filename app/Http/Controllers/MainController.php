<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Inventory;
use Exception;
use App\Models\Blog;
use App\Models\Meta;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Content;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\Category;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Properties;
use App\Models\Testimonial;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyLocation;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use App\Mail\Enquiry as EnquiryMail;
use Illuminate\Support\Facades\Mail;
use function Flasher\Toastr\Prime\toastr;

class MainController extends Controller
{
    public function index()
    {

        $content = Content::whereBetween('id', [0, 5])->get();
        return response()->json($content, 200);
    }

    public function products(Request $request)
    {
        $page = $request->page ?? 1;
        $limit = $request->limit ?? 100;
        $offset = ($page - 1) * $limit;

        $with = $request->with ? explode(',', $request->with) : [];
        $count = $request->count ? explode(',', $request->count) : [];
        
        $product = Product::offset($offset)->limit($limit);
        
        if($request->filled('ids')) {
            $ids = $request->ids ? explode(',', $request->ids) : [];
            $product = $product->whereIn('id', $ids);
            // \Log::info($product->get());
        }
        if ($request->filled('inventories')) {
            $inventoryIds = explode(',', $request->get('inventories'));
            $product->with(['inventories' => function ($query) use ($inventoryIds) {
                $query->whereIn('id', $inventoryIds);
            }]);
        }
        

        $p = $this->getMaxMinPrice($product);
        $maxPrice = $p['max'];
        $minPrice = $p['min'];

        $withRelations = [];
        foreach ($with as $relation) {
            if ($relation === 'category') {
                // Add closure for category
                $withRelations['category'] = function ($query) {
                    $query->withCount('products');
                };
            } elseif ($relation === 'inventories') {
                $withRelations[] = $relation;
            } else {
                $withRelations[] = $relation; // Add normally
            }
        }

        if (!empty($withRelations)) {
            $product = $product->with($withRelations);
        }

        if (!empty($count)) {
            // Optional: Filter out nested counts like "category.products" if unsupported
            $validCounts = array_filter($count, fn($c) => !str_contains($c, '.'));
            if (!empty($validCounts)) {
                $product = $product->withCount($validCounts);
            }
        }


        $product = $this->applyFilters($product, $request);
        $product = $product->get();

        return $product->isNotEmpty()
            ? response()->json(['products' => $product, 'max' => $maxPrice, 'min' => $minPrice], 200)
            : response()->json(['message' => 'Product not found'], 404);
    }
    public function productdetail(Request $request, string $slug)
    {
        $product = Product::where('slug', $slug);

        $with = $request->with ? explode(',', $request->with) : [];
        $count = $request->count ? explode(',', $request->count) : [];

        $withRelations = [];
        foreach ($with as $relation) {
            if ($relation === 'category') {
                // Add closure for category
                $withRelations['category'] = function ($query) {
                    $query->withCount('products');
                };
            } elseif ($relation === 'inventories') {
                $withRelations[] = $relation;
            } else {
                $withRelations[] = $relation; // Add normally
            }
        }

        if (!empty($withRelations)) {
            $product = $product->with($withRelations);
        }

        if (!empty($count)) {
            // Optional: Filter out nested counts like "category.products" if unsupported
            $validCounts = array_filter($count, fn($c) => !str_contains($c, '.'));
            if (!empty($validCounts)) {
                $product = $product->withCount($validCounts);
            }
        }

        $product = $product->first();
        
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product, 200);
    }

    public function collections(Request $request)
    {
        $collections = Collection::with(['media', 'products'])->withCount('products')->get();
        return response()->json($collections, 200);

    }
    public function collectionDetail(Request $request, string $slug)
    {
        // 1. Find the collection with optional relationships
        $collection = Collection::where('slug', $slug)->first();
        if (!$collection)
            return response()->json(['message' => 'Collection not found'], 404);

        // 2. Build product query from the collection relationship
        $productQuery = $collection->products(); // assumes hasMany or belongsToMany
        $p = $this->getMaxMinPrice($productQuery);
        $maxPrice = $p['max'];
        $minPrice = $p['min'];

        // 3. Eager loading & count
        $with = $request->filled('with') ? explode(',', $request->with) : [];
        $count = $request->filled('count') ? explode(',', $request->count) : [];
        $withRelations = [];
        foreach ($with as $relation) {
            if ($relation === 'category') {
                $withRelations['category'] = fn($query) => $query->withCount('products');
            } else {
                $withRelations[] = $relation;
            }
        }

        if (!empty($withRelations)) {
            $productQuery->with($withRelations);
        }

        if (!empty($count)) {
            $validCounts = array_filter($count, fn($c) => !str_contains($c, '.'));
            $productQuery->withCount($validCounts);
        }

        // 4. Filtering
        $productQuery = $this->applyFilters($productQuery, $request);

        // 5. Pagination
        $limit = $request->input('limit', 100);
        $products = $productQuery->limit($limit)->get();

        // 6. Return both collection and products
        return response()->json([
            'collection' => $collection,
            'products' => $products,
            'max' => $maxPrice,
            'min' => $minPrice
        ]);
    }


    public function category()
    {
        $category = Category::all();
        return response()->json($category, 200);

    }

    public function blogs()
    {
        $blogs = Blog::whereBetween('id', [1, 3])->get();
        return response()->json($blogs, 200);

    }
    public function testimonials()
    {

        $testimonials = Testimonial::all();

        return response()->json($testimonials, 200);

    }
    public function about()
    {

        $content = Content::whereBetween('id', [6, 8])->get();

        return response()->json($content, 200);

    }
    public function teams()
    {

        $team = Team::all();

        return response()->json($team, 200);

    }

    public function shop()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'about')->first();
        $content = Content::all();
        return view('shop', compact('data', 'meta', 'content'));

    }
    public function shopcollection()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'about')->first();
        $content = Content::all();
        return view('shop', compact('data', 'meta', 'content'));

    }
    public function myaccount()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'about')->first();
        $content = Content::all();
        return view('shop', compact('data', 'meta', 'content'));

    }



    public function services()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'services')->first();
        $content = Content::all();
        $services = Services::all();

        return view('services', compact('data', 'meta', 'content', 'services'));
    }
    public function serviceDetail($url)
    {
        $data = Settings::first();
        $content = Content::all();
        $service = Services::where('url', $url)->first(); // Use get() instead of first()
        $services = Services::all();

        // $meta = (object) [
        //     'meta_title' => $service->meta_title,
        //     'meta_description' => $service->meta_description,
        //     'meta_keywords' => $service->meta_keywords
        // ];
        return view('service_inner', compact('data', 'content', 'service', 'services'));
    }

    public function contact()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'contact')->first();
        $content = Content::all();
        return view('contact-us', compact('data', 'meta', 'content'));
    }

    public function policy()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'contact')->first();
        $content = Content::all();
        return view('privacy-policy', compact('data', 'meta', 'content'));
    }
    public function terms()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'contact')->first();
        $content = Content::all();
        return view('terms-conditions', compact('data', 'meta', 'content'));
    }
    // public function blogs()
    // {
    //     $data = Settings::first();
    //     $meta = Meta::where('page', 'blogs')->first();
    //     $content = Content::all();
    //     $blogs = Blog::where('status', true)->get();
    //     return view('blogs', compact('data', 'meta', 'content', 'blogs'));
    // }

    public function career()
    {
        $data = Settings::first();
        $meta = Meta::where('page', 'blogs')->first();
        $content = Content::all();

        return view('career', compact('data', 'meta', 'content'));
    }





    public function blogDetail($url)
    {
        $data = Settings::first();
        $content = Content::all();
        $blog = Blog::where('url', $url)->where('status', true)->first();
        $blogs = Blog::where('status', true)->orderBy('created_at', 'desc')->get();
        $meta = (object) [
            'meta_title' => $blog->metatitle,
            'meta_description' => $blog->metadescription,
            'meta_keywords' => $blog->keywords
        ];
        return view('blog_inner', compact('data', 'meta', 'content', 'blog', 'blogs'));
    }
    private function applyFilters($query, $request)
    {

        // Filter by category slugs
        if ($request->filled('categories')) {
            $categorySlugs = explode(',', $request->categories);
            $query->whereHas('category', fn($q) => $q->whereIn('slug', $categorySlugs));
        }

        // Filter by price range (either on sale_price or inventory price)
        if ($request->filled('min') && $request->filled('max')) {
            $min = (float) $request->min;
            $max = (float) $request->max;

            $query->where(function ($q) use ($min, $max) {
                $q->whereBetween('sale_price', [$min, $max])
                    ->orWhereHas('inventories', fn($q2) => $q2->whereBetween('price', [$min, $max]));
            });
        }

        // Filter by stock availability
        if ($request->stock === 'in-stock') {
            $query->whereHas('inventories', fn($q) => $q->where('qty', '>', 0));
        } elseif ($request->stock === 'out-of-stock') {
            $query->whereDoesntHave('inventories', fn($q) => $q->where('qty', '>', 0));
        }

        $reserved = ['ids', 'inventories', 'with', 'offset', 'categories', 'min', 'max', 'stock', 'limit', 'page'];

        foreach ($request->except($reserved) as $key => $value) {
            if ($request->filled($key)) {
                $values = explode(',', $value);
                $query->whereHas('inventories', function ($subQuery) use ($key, $values) {
                    $subQuery->where(function ($q) use ($key, $values) {
                        foreach ($values as $k => $val) {
                            $queryMethod = $k === 0 ? 'where' : 'orWhere';
                            $q->$queryMethod(function ($innerQ) use ($key, $val) {
                                if($key === "Size") {
                                    $innerQ->whereJsonContains('variants', ['type' => $key, 'value' => $val]);
                                }
                                else {
                                    $innerQ->whereJsonContains('variants', ['type' => $key, 'name' => $val]);
                                }
                            });
                        }
                    });
                });
            }
        }

        return $query;
    }

    private function getMaxMinPrice($query = null)
    {
        // Clone the filtered query for price calculations
        $salePriceMax = $query->clone()->max('sale_price');
        $salePriceMin = $query->clone()->min('sale_price');

        // Get filtered product IDs to filter inventories
        $productIds = $query->clone()->pluck('products.id');

        // Now get inventory prices only for these products
        $inventoryPriceMax = Inventory::whereIn('product_id', $productIds)->max('price');
        $inventoryPriceMin = Inventory::whereIn('product_id', $productIds)->min('price');

        // Final max and min price
        $maxPrice = max($salePriceMax, $inventoryPriceMax);
        $minPrice = min($salePriceMin, $inventoryPriceMin);

        return [
            'max' => (int) $maxPrice ?? 0,
            'min' => (int) $minPrice ?? 0,
        ];
    }
}
