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
    public function index()
    {
        
        $products = Product::all();

        return response()->json($products, 200);
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'status'=>'required'
       ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = new Product();
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->slug = $request->slug;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->stock = $request->stock;
       $product->status = $request->status;
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
            'slug'=>'required',
            'description'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'status'=>'required'
       ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $product = Product::findOrFail($id);
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->slug = $request->slug;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->stock = $request->stock;
       $product->status = $request->status;
       $product->save();
        return response()->json(['message' => 'Product updated successfully'], 201);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       return Product::destroy($id);
    }
    public function search(string $name)
    {
       return Product::where('name','like','%'.$name.'%')->get();
    }
}
