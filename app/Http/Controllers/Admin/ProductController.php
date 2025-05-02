<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $products = Product::offset($offset)->limit($limit)->with('category.variants')->get(); 
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
            // 'category_id'=>'required',
      
            'name'=>'required',
            // 'short_description' =>'required',
            // 'long_description'=>'required',
            'sale_price'=>'required',
            'actual_price'=>'required',
            // 'track_stock'=>'required',
            // 'continue_when_oos'=>'required',
            // 'if_sku'=>'required',
            // 'sku'=>'required',
            // 'barcode'=>'required',
            // 'shipping'=>'required',
            // 'weight'=>'required',
            // 'meta_title'=>'required',
            // 'meta_description'=>'required',
            // 'meta_keywords'=>'required',
            // 'status'=>'required',
            // 'slug'=>'required',
            // 'product_type'=>'required',
           
        
]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = new Product();
       $product->category_id = $request->category_id;
       $product->name = $request->name;
    //    $product->short_description = $request->short_description;
    //    $product->long_description = $request->long_description;
       $product->sale_price = $request->sale_price;
       $product->actual_price = $request->actual_price;
    //    $product->track_stock = $request->track_stock;
    //    $product->continue_when_oos = $request->continue_when_oos;
    //    $product->if_sku = $request->if_sku;
    //    $product->sku = $request->sku;
    //    $product->barcode = $request->barcode;
    //    $product->shipping = $request->shipping;
    //    $product->weight = $request->weight;
    //    $product->meta_title = $request->meta_title;
    //    $product->meta_description = $request->meta_description;
    //    $product->meta_keywords = $request->meta_keywords;
    //    $product->product_type = $request->product_type;
      

      
       $product->save();
        return response()->json(['message' => 'Product created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
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
            // 'category_id'=>'required',
            // 'short_description' =>'required',
            // 'long_description'=>'required',
            'sale_price'=>'required',
            'actual_price'=>'required',
            // 'track_stock'=>'required',
            // 'continue_when_oos'=>'required',
            // 'if_sku'=>'required',
            // 'sku'=>'required',
            // 'barcode'=>'required',
            // 'shipping'=>'required',
            // 'weight'=>'required',
            // 'meta_title'=>'required',   
            // 'meta_description'=>'required',
            // 'meta_keywords'=>'required',
            // 'status'=>'required',
            // 'slug'=>'required',
            // 'product_type'=>'required', 

 ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = Product::findOrFail($id);
    //    $product->category_id = $request->category_id;
       $product->name = $request->name;
    //    $product->short_description = $request->short_description;
    //    $product->long_description = $request->long_description;
       $product->sale_price = $request->sale_price;
       $product->actual_price = $request->actual_price;
    //    $product->track_stock = $request->track_stock;
    //    $product->continue_when_oos = $request->continue_when_oos;
    //    $product->if_sku = $request->if_sku;
    //    $product->sku = $request->sku;
    //    $product->barcode = $request->barcode;
    //    $product->shipping = $request->shipping;
    //    $product->weight = $request->weight;
    //    $product->meta_title = $request->meta_title;
    //    $product->meta_description = $request->meta_description;
    //    $product->meta_keywords = $request->meta_keywords;
    //    $product->status = $request->status;
    //    $product->slug = $request->slug;
    //    $product->product_type = $request->product_type;

$product->save();
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
}
