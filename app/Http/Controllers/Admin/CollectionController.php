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

        $collection = Collection::with(['media', 'products', 'collection_conditions.column_condition', 'collection_conditions.condition'])->withCount(['products'])->get();
        return response()->json($collection, 200);
    }

    public function store(Request $request)
    {
        \Log::info($request->all());
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

        if ($request->has('products') && !empty($request->products)) {
            $collection->products()->sync($request->products);
        }

        if ($request->has('conditions') && !empty($request->conditions)) {
            foreach ($request->conditions as $item) {
                $condition = new CollectionCondition();
                $condition->collection_id = $collection->id;
                $condition->column_condition_id = $item['column'];
                $condition->condition_id = $item['condition'];
                $condition->value = $item['value'];
                $condition->save();
            }
            $collection->syncProducts();
        }

        return response()->json(['message' => 'Collection created successfully'], 200);
    }

    public function show(string $id)
    {
        $collection = Collection::with(['media', 'products', 'collection_conditions.column_condition', 'collection_conditions.condition'])->findOrFail($id);
        return response()->json($collection, 200);
    }

    public function update(Request $request, Collection $collection)
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

        // $collection->update($validated);

        $collection->name = $request->name;
        $collection->slug = $request->slug ?? Str::slug($request->name);
        $collection->description = $request->description;
        $collection->match = $request->match;
        $collection->media_id = $request->media_id;
        $collection->meta_title = $request->meta_title;
        $collection->meta_description = $request->meta_description;
        $collection->meta_keywords = $request->meta_keywords;
        $collection->status = $request->status;
        $collection->save();

        if ($request->has('products') && !empty($request->products)) {
            $collection->products()->sync($request->products);
        }
        if ($request->has('conditions') && !empty($request->conditions)) {
            $incomingConditions = collect($request->conditions);
            // Get existing condition IDs for this collection
            $existingConditions = $collection->collection_conditions()->get();
            $existingIds = $existingConditions->pluck('id');

            // Track submitted IDs
            $submittedIds = $incomingConditions->pluck('id')->filter()->values();

            // 1. Delete conditions not in request
            $idsToDelete = $existingIds->diff($submittedIds);
            if ($idsToDelete->isNotEmpty()) {
                CollectionCondition::whereIn('id', $idsToDelete)->delete();
            }

            // 2. Update or Create
            foreach ($incomingConditions as $item) {
                // Update existing condition
                $condition = CollectionCondition::findOrNew($item['id']);
                if ($condition && $condition->collection_id === $collection->id) {
                    $condition->column_condition_id = $item['column'];
                    $condition->condition_id = $item['condition'];
                    $condition->value = $item['value'];
                    $condition->save();
                }
            }
            $collection->syncProducts();
        }

        return response()->json(['message' => 'Collection updated successfully'], 200);
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
