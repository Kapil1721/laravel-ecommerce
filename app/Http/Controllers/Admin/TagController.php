<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all variants
        $tags = Tag::all();

        // Return the variants as a JSON response
        return response()->json($tags);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
     
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
       
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        // Create a new variant
        $tags = Tag::create([
           
            'name' => $request->name,
            'slug' => $request->value,
        ]);
        //
        $tags->save();
        return response()->json(['message' => 'Tags created successfully'], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Find the variant by ID
        $tags = Tag::find($id);
        if (!$tags) {
            return response()->json(['message' => 'Tags not found'], 404);
        }
        // Return the variant as a JSON response    
        return response()->json($tags);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        $tags = Validator::make($request->all(), [                 
            
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        // Find the variant by ID
        $tags = Tag::find($id);  
        if (!$tags) {
            return response()->json(['message' => 'Tags not found'], 404);
        }                   
        // Update the variant with the request data
       
        $tags->name = $request->name;            
        $tags->value = $request->value;
        $tags->save();
        return response()->json(['message' => 'Tags Updated Successfully'], 201);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
