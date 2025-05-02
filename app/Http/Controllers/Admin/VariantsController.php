<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
class VariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all variants
        $variants = Variant::all();

        // Return the variants as a JSON response
        return response()->json($variants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
     
            'name' => 'required|string|max:255',
            'value' => 'required|array',
        ]);
       
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        // Create a new variant
        $variant = Variant::create([
           
            'name' => $request->name,
            'value' => $request->value,
        ]);
        //
        $variant->save();
        return response()->json(['message' => 'Variant created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Find the variant by ID
        $variant = Variant::find($id);
        if (!$variant) {
            return response()->json(['message' => 'Variant not found'], 404);
        }
        // Return the variant as a JSON response    
        return response()->json($variant);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [                 
            
            'name' => 'required|string|max:255',
            'value' => 'required|array',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        // Find the variant by ID
        $variant = Variant::find($id);  
        if (!$variant) {
            return response()->json(['message' => 'Variant not found'], 404);
        }                   
        // Update the variant with the request data
       
        $variant->name = $request->name;            
        $variant->value = $request->value;
        $variant->save();
        return response()->json(['message' => 'Variant updated successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variant = Variant::destroy($id);
        Log::info($variant);
        return response()->json(['message' => 'Variant deleted successfully'], 200); 
    }
}
