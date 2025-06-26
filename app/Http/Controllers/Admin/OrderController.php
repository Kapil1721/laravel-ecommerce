<?php

namespace App\Http\Controllers\Admin;


use App\Models\Orders;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Orders::all();
        return response()->json($order, 200);
        Log::info($order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(

            [
                'customer_id' => 'required|exists:customers,id',

                'sub_total' => 'required|numeric',
                'discount_id' => 'nullable|exists:discounts,id',
                'discount_amount' => 'nullable|numeric',
                'grand_total' => 'required|numeric',
                'payment_method' => 'required|string',
                'transaction_id' => 'nullable|string',
                'is_paid' => 'required|boolean',
                'status' => 'required|string',
                'shipping_status' => 'required|string',
                'estimated_delivery' => 'nullable|date',
                'address' => 'required|string',
                'delivered_at' => 'nullable|date',
            ]
        );
        $order = Orders::create($data);
        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Orders::all();
        return response()->json($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Orders::findOrFail($id);
        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'sub_total' => 'required|numeric',
            'discount_id' => 'nullable|exists:discounts,id',
            'discount_amount' => 'nullable|numeric',

            'grand_total' => 'required|numeric',
            'payment_method' => 'required|string',
            'transaction_id' => 'nullable|string',
            'is_paid' => 'required|boolean',
            'status' => 'required|string',
            'shipping_status' => 'required|string',
            'estimated_delivery' => 'nullable|date',
            'address' => 'required|string',
            'delivered_at' => 'nullable|date',
        ]);

        $order->update($data);
        return response()->json(['message' => 'Order updated successfully', 'order' => $order], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Orders::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}
