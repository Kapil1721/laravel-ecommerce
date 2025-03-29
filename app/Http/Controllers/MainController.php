<?php

namespace App\Http\Controllers;

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

    public function products()
    {

        $product = Product::whereBetween('id', [6, 15])->get();
         return response()->json($product, 200);

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
    public function productdetail()
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


}
