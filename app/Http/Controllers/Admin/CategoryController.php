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
        $category = Category::with('variants')->get();
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
            'parent_id'=>'nullable|exists:categories,id',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
            'slug'=>'required',
     
            'status'=>'required',
       
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $category = new Category();

       $category->name = $request->name;
       $category->description = $request->description;
       $category->status = $request->status;
       $category->parent_id = $request->parent_id;
       $category->meta_title = $request->meta_title;
       $category->meta_description = $request->meta_description;
       $category->meta_keywords = $request->meta_keywords;
       $category->slug = $request->slug;

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
            'status'=>'required',
            'parent_id'=>'nullable|exists:categories,id',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
            'slug'=>'required',
            'status'=>'required',
     
            
           
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $category = Category::findOrFail($id);
       
       $category->name = $request->name;
       $category->description = $request->description;
       $category->status = $request->status;
         $category->parent_id = $request->parent_id;
         $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
            $category->slug = $request->slug;
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

    public function variants($id)
    {

        $category = Category::with('variants')->find($id);
        Log::info($category);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        return response()->json($category->variants, 200);
    }
       
         
}
