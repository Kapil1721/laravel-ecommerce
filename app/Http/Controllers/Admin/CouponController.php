<?php

namespace App\Http\Controllers\admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::all();
        return response()->json($coupons);
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
        'code' => 'required|string|unique:coupons',
        'discount_type' => 'required|in:fixed,percentage',
        'discount_value' => 'required|numeric|min:0',
        'usage_limit' => 'nullable|integer|min:1',
        'expires_at' => 'nullable|date|after:today',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Convert date format if exists
    $data = $request->all();
    if (!empty($data['expires_at'])) {
        $data['expires_at'] = \Carbon\Carbon::createFromFormat('d-m-Y', $data['expires_at'])->format('Y-m-d');
    }

    $coupon = Coupon::create($data);

    return response()->json(['message' => 'Coupon created successfully', 'coupon' => $coupon], 201);
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return response()->json(['message' => 'Coupon deleted successfully']);
    }


    public function apply(Request $request)

{
        $request->validate(['code' => 'required|string']);

        $coupon = Coupon::where('code', $request->code)->first();

        if (!$coupon) {
            return response()->json(['message' => 'Invalid coupon'], 404);
        }

        if ($coupon->expires_at && now()->greaterThan($coupon->expires_at)) {
            return response()->json(['message' => 'Coupon has expired'], 400);
        }

        if ($coupon->usage_limit && $coupon->used_count >= $coupon->usage_limit) {
            return response()->json(['message' => 'Coupon usage limit reached'], 400);
        }

        return response()->json(['message' => 'Coupon applied successfully', 'coupon' => $coupon]);
    }
}
