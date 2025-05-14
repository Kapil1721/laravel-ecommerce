<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CollectionCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ColumnCondition;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Support\Str;

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

        // $collection = Collection::create($validated);
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->slug = $request->slug ?? Str::slug($request->name);
        $collection->description = $request->description;
        $collection->type = $request->type;
        $collection->match = $request->match;
        $collection->media_id = $request->media_id;
        $collection->meta_title = $request->meta_title;
        $collection->meta_description = $request->meta_description;
        $collection->meta_keywords = $request->meta_keywords;
        $collection->status = $request->status;
        $collection->save();

        if ($request->has('products')) {
            $collection->products()->sync($request->products);
        }

        if ($request->has('conditions')) {
            foreach ($request->conditions as $item) {
                $condition = new CollectionCondition();
                $condition->collection_id = $collection->id;
                $condition->column_condition_id = $item['column'];
                $condition->condition_id = $item['condition'];
                $condition->value = $item['value'];
                $condition->save();
            }
        }
        $collection->syncProducts();

        return response()->json(['message' => 'Collection created successfully'], 200);
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

    public function conditions()
    {
        $conditions = ColumnCondition::with('conditions')->get();
        return response()->json($conditions, 200);
    }

}
