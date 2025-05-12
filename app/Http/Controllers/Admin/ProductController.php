<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $page = $request->page ?? 1;
        $limit = $request->limit ?? 100;
        $offset = ($page - 1) * $limit;
        $products = Product::offset($offset)->limit($limit)->with(['category.variants', 'media'])->get();

        Log::info($products);
        

        return response()->json($products, 200);
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'category_id'=>'required',
      
            'name'=>'required',
            'short_description' =>'nullable',
            'long_description'=>'nullable',
            'sale_price'=>'nullable',
            'actual_price'=>'nullable',
            'track_stock'=>'nullable',
            'continue_when_oos'=>'nullable',
            'if_sku'=>'nullable',
            'sku'=>'nullable',
            'barcode'=>'nullable',
            'shipping'=>'nullable',
            'weight'=>'nullable',
            'meta_title'=>'nullable',
            'meta_description'=>'nullable',
            'meta_keywords'=>'nullable',
            'status'=>'nullable',
            'slug'=>'nullable',
            'product_type'=>'nullable',
           
        
]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = new Product();
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->short_description = $request->short_description;
       $product->long_description = $request->long_description;
       $product->sale_price = $request->sale_price;
       $product->actual_price = $request->actual_price;
       $product->track_stock = $request->track_stock;
       $product->continue_when_oos = $request->continue_when_oos;
       $product->if_sku = $request->if_sku;
       $product->sku = $request->sku;
       $product->barcode = $request->barcode;
       $product->shipping = $request->shipping;
       $product->weight = $request->weight;
       $product->meta_title = $request->meta_title;
       $product->meta_description = $request->meta_description;
       $product->meta_keywords = $request->meta_keywords;
       $product->slug = $request->slug;
       $product->status = $request->status;
       $product->product_type = $request->product_type;
      

      
       $product->save();
         $product->media()->sync($request->media);
         if($request->variants) {
             foreach ($request->variants as $req) {
                 $req = (object) $req;
                 $inventory = new Inventory();
                 $inventory->product_id = $product->id;
                 $inventory->price = $req->price;
                 // $inventory->compare_at_price = $req->inventory['compare_at_price'];
                 // $inventory->cost_per_item = $req->inventory['cost_per_item'];
                 // $inventory->profit = $req->inventory['profit'];
                 // $inventory->margin = $req->inventory['margin'];
                 $inventory->qty = $req->qty;
                 // $inventory->sku = $req->inventory['sku'];
                 // $inventory->barcode = $req->inventory['barcode'];
                 // $inventory->track_quantity = $req->inventory['track_quantity'];
                 // $inventory->continue_when_oos = $req->inventory['continue_when_oos'];
                 $inventory->variants = $req->variants;
                 $inventory->save();
             }
         }





        return response()->json(['message' => 'Product created successfully'], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with(['category.variants', 'media', 'inventories'])->find($id);
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'category_id'=>'nullable',
            'short_description' =>'nullable',
            'long_description'=>'nullable',
            'sale_price'=>'nullable',
            'actual_price'=>'nullable',
            'track_stock'=>'nullable',
            'continue_when_oos'=>'nullable',
            'if_sku'=>'nullable',
            'sku'=>'nullable',
            'barcode'=>'nullable',
            'shipping'=>'nullable',
            'weight'=>'nullable',
            'meta_title'=>'nullable',   
            'meta_description'=>'nullable',
            'meta_keywords'=>'nullable',
            'status'=>'nullable',
            'slug'=>'nullable',
            'product_type'=>'nullable', 

 ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = Product::findOrFail($id);
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->short_description = $request->short_description;
       $product->long_description = $request->long_description;
       $product->sale_price = $request->sale_price;
       $product->actual_price = $request->actual_price;
       $product->track_stock = $request->track_stock;
       $product->continue_when_oos = $request->continue_when_oos;
       $product->if_sku = $request->if_sku;
       $product->sku = $request->sku;
       $product->barcode = $request->barcode;
       $product->shipping = $request->shipping;
       $product->weight = $request->weight;
       $product->meta_title = $request->meta_title;
       $product->meta_description = $request->meta_description;
       $product->meta_keywords = $request->meta_keywords;
       $product->status = $request->status;
       $product->slug = $request->slug;
       $product->product_type = $request->product_type;

        $product->save();
        if ($request->has('media')) {
            $product->media()->sync($request->media);
        }
        if($request->variants) {
            foreach ($request->variants as $req) {
                $req = (object) $req;
                $inventory = Inventory::findOrNew($req->id);
                $inventory->product_id = $product->id;
                $inventory->price = $req->price;
                // $inventory->compare_at_price = $req->inventory['compare_at_price'];
                // $inventory->cost_per_item = $req->inventory['cost_per_item'];
                // $inventory->profit = $req->inventory['profit'];
                // $inventory->margin = $req->inventory['margin'];
                $inventory->qty = $req->qty;
                // $inventory->sku = $req->inventory['sku'];
                // $inventory->barcode = $req->inventory['barcode'];
                // $inventory->track_quantity = $req->inventory['track_quantity'];
                // $inventory->continue_when_oos = $req->inventory['continue_when_oos'];
                $inventory->variants = $req->variants;
                $inventory->save();
            }
        }
        return response()->json(['message' => 'Product updated successfully'], 201);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        Log::info($product);
        return response()->json(['message' => 'Product deleted successfully'], 200); 

    }
    public function search(string $name)
    {
       return Product::where('name','like','%'.$name.'%')->get();
    }

    public function inventory($id)
    {
        $product = Product::with('inventory')->find($id);
        Log::info($product);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product->inventory, 200);
    }
}
