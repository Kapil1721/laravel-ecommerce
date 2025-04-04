<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
            Log::info('Success');
            $blogs = Blog::all();
            return response()->json($blogs, 200);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'url'=>'required',
            'image'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'meta_title'=>'required',
            'meta_keywords'=>'required',
            'meta_description'=>'required',
            'status'=>'required'
            
          
       
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $blogs = new Blog();
       $blogs->name = $request->name;
       $blogs->url = $request->url;
       $blogs->image = $request->image;
       $blogs->short_description = $request->short_description;
       $blogs->description = $request->description;
       $blogs->meta_title = $request->meta_title;
       $blogs->meta_keywords = $request->meta_keywords;
       $blogs->meta_description = $request->meta_description;
       $blogs->status = $request->status;

       $blogs->save();
        return response()->json(['message' => 'Blog created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::find($id);
        return response()->json($blogs, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'url'=>'required',
            'image'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'meta_title'=>'required',
            'meta_keywords'=>'required',
            'meta_description'=>'required',
             'status'=>'required'
           
        ]);
       if ($validator->fails()) {
           return response()->json(['error'=>$validator->errors()], 400);
       }
       $blogs = Blog::findOrFail($id);
       $blogs->name = $request->name;
       $blogs->url = $request->url;
       $blogs->image = $request->image;
       $blogs->short_description = $request->short_description;
       $blogs->description = $request->description;
       $blogs->meta_title = $request->meta_title;
       $blogs->meta_keywords = $request->meta_keywords;
       $blogs->meta_description = $request->meta_description;
       $blogs->status = $request->status;
       $blogs->save();
        return response()->json(['message' => 'Blog updated successfully'], 201);
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::destroy($id);
        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }
}
