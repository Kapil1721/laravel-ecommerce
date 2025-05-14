<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $collection = Collection::all();
        return response()->json($collection, 200);
    }

    public function store(Request $request)
        {
         $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        // 'products' => 'nullable|array',
        // 'products.*' => 'exists:products,id',
        // 'column_conditions' => 'nullable|array',
        // 'column_conditions.*' => 'exists:column_conditions,id',
        // 'status' => 'required|boolean',
        // 'type' => 'nullable|string|max:255',
        // 'media_id' => 'nullable|exists:media,id',
        // 'meta_title' => 'nullable|string|max:255',
        // 'meta_description' => 'nullable|string',
        // 'meta_keywords' => 'nullable|string',
    ]);

    $collection = Collection::create($validated);

    if (isset($validated['products'])) {
        $collection->products()->sync($validated['products']);
    }

    if (isset($validated['column_conditions'])) {
        $collection->column_conditions()->sync($validated['column_conditions']);
    }

    return response()->json($collection, 200)->with('success', 'Collection created successfully.');
}

public function update(Request $request, Collection $collection)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'products' => 'nullable|array',
        'products.*' => 'exists:products,id',
        'column_conditions' => 'nullable|array',
        'column_conditions.*' => 'exists:column_conditions,id',
        'status' => 'required|boolean',
        'type' => 'nullable|string|max:255',
        'media_id' => 'nullable|exists:media,id',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
    ]);

    $collection->update($validated);

    if (isset($validated['products'])) {
        $collection->products()->sync($validated['products']);
    } else {
        $collection->products()->detach();
    }

    if (isset($validated['column_conditions'])) {
        $collection->column_conditions()->sync($validated['column_conditions']);
    } else {
        $collection->column_conditions()->detach();
    }

    return redirect()->route('admin.collections.index')->with('success', 'Collection updated successfully.');
}


    public function destroy(string $id)
    {    
        $collection = Collection::destroy($id);
        Log::info($collection);
        return response()->json(['message' => 'Collection deleted successfully'], 200); 
    }
}
