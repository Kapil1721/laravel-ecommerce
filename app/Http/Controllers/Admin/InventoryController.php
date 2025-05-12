<?php

namespace App\Http\Controllers\admin;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('Success');
        $inventories = Inventory::with(['product.media', 'media'])->get();
        return response()->json($inventories, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // product_id, price, compare_at_price, variant_id, value

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric',
            'compare_at_price' => 'nullable|numeric',
            'variant_id' => 'required|exists:variants,id',
            'value' => 'required|string|max:255',
        ]);
        $inventory = Inventory::create([
            'product_id' => $request->product_id,
            'price' => $request->price,
            'compare_at_price' => $request->compare_at_price,
        ]);
        $inventory->variations()->attach($request->variant_id, ['value' => $request->value]);
        // $inventory->sync($request->media);
        return response()->json([
            'message' => 'Inventory created successfully',
            'inventory' => $inventory,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventory = Inventory::with(['product.media', 'media'])->findOrFail($id);
        $inventories = Inventory::with(['product.media', 'media'])->where('product_id', $inventory->product_id)->get();
        return response()->json(compact('inventory', 'inventories'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        // price, compare_at_price, cost_per_item, profit, margin, qty, sku, barcode, track_quantity, continue_when_oos, media
        $request->validate([
            'price' => 'required|numeric',
            'compare_at_price' => 'nullable|numeric',
            'cost_per_item' => 'nullable|numeric',
            'profit' => 'nullable|numeric',
            'margin' => 'nullable|numeric',
            'qty' => 'nullable|integer',
            'sku' => 'nullable|string|max:255',
            'barcode' => 'nullable|string|max:255',
            'track_quantity' => 'nullable|boolean',
            'continue_when_oos' => 'nullable|boolean',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update([
            'price' => $request->price,
            'compare_at_price' => $request->compare_at_price,
            'cost_per_item' => $request->cost_per_item,
            'profit' => $request->profit,
            'margin' => $request->margin,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'barcode' => $request->barcode,
            'track_quantity' => $request->track_quantity,
            'continue_when_oos' => $request->continue_when_oos,
            'media_id' => $request->media_id
        ]);
        return response()->json([
            'message' => 'Inventory updated successfully',
            'inventory' => $inventory,
        ], 200);    


        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();
        return response()->json(['message' => 'Inventory deleted successfully'], 200);
    }
}
