<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('Success');
        $category = Category::all();
        return response()->json($category, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
       
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $category = new Category();
       $category->category_id = $request->category_id;
       $category->name = $request->name;
       $category->description = $request->description;
       $category->status = $request->status;
       $category->save();
        return response()->json(['message' => 'Category created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return response()->json($category, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
           
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $category = Category::findOrFail($id);
       $category->category_id = $request->category_id;
       $category->name = $request->name;
       $category->description = $request->description;
       $category->status = $request->status;
       $category->save();
        return response()->json(['message' => 'Category updated successfully'], 201);
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    
    {

        Category::destroy($id);
        return response()->json(['message' => 'Category deleted successfully'], 200);
      }
       
         
}
