<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\Discounts;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $discount = Discounts::query();

        if ($request->with) {
            $with = explode($request->with, ',');
            $discount->with($with);
        }

        $discount = $discount->get();
        return response()->json($discount, 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $discount = new Discounts();
        $discount->type = $request->type;
        $discount->method = $request->method;
        $discount->code = $request->code;
        $discount->title = $request->title;
        $discount->discount_type = $request->discount_type;
        $discount->amount = $request->amount;
        $discount->applies_to = $request->applies_to;
        $discount->requirement = $request->requirement;
        $discount->min_amount = $request->min_amount;
        $discount->min_qty = $request->min_qty;
        $discount->buys = $request->buys;
        $discount->gets_qty = $request->gets_qty;
        $discount->gets_applies_to = $request->gets_applies_to;
        $discount->discounted_value_type = $request->discounted_value_type;
        $discount->eligible_countries = $request->eligible_countries;
        $discount->exclude_shipping_over_an_amount = $request->exclude_shipping_over_an_amount;
        $discount->shipping_amount = $request->shipping_amount;
        $discount->eligible_customers = $request->eligible_customers;
        $discount->total_usage  = $request->total_usage;
        $discount->once_per_customer = $request->once_per_customer;
        $discount->start_date = $request->start_date;
        $discount->end_date = $request->end_date;
        $discount->start_time = $request->start_time;
        $discount->end_time = $request->end_time;

        $discount->save();

        if ($request->has('collections') && $request->applies_to === 'collections') {
            $discount->collections()->sync($request->collections);
        }

        if ($request->has('products') && $request->applies_to === 'products') {
            $syncData = [];
            foreach ($request->products as $product) {
                $syncData[$product['id']] = [
                    'inventories' => json_encode($product['inventories'])
                ];
            }
            $discount->products()->sync($syncData);
        }

        if ($request->has('gets_collections') && $request->gets_applies_to === 'collections') {
            $discount->gets_collections()->sync($request->gets_collections);
        }

        if ($request->has('gets_products') && $request->applies_to === 'products') {
            $syncData = [];
            foreach ($request->gets_products as $product) {
                $syncData[$product['id']] = [
                    'inventories' => json_encode($product['inventories'])
                ];
            }
            $discount->gets_products()->sync($syncData);
        }

        if ($request->has('countries') && $request->eligible_countries === 'specific') {
            $discount->countries()->sync($request->countries);
        }

        if ($request->has('customers') && $request->eligible_customers === 'specific') {
            $discount->customers()->sync($request->customers);
        }



        $collections = Collection::all();

        foreach ($collections as $collection) {
            $collection->syncProducts();
        }


        return response()->json(['message' => 'Discount created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $discount = Discounts::find($id);
        if (!$discount) {

            return response()->json(['message' => 'Discount Not Found'], 404);
        }
        if ($request->with) {
            $with = explode($request->with, ',');
            $discount->with($with);
        }

        $discount = $discount->get();
        return response()->json($discount, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $discount = Discounts::find($id);
        if (!$discount) {

            return response()->json(['message' => 'Discount Not Found'], 404);
        }

        $discount->type = $request->type;
        $discount->method = $request->method_type;
        $discount->code = $request->code;
        $discount->title = $request->title;
        $discount->discount_type = $request->discount_type;
        $discount->amount = $request->amount;
        $discount->applies_to = $request->applies_to;
        $discount->requirement = $request->requirement;
        $discount->min_amount = $request->min_amount;
        $discount->min_qty = $request->min_qty;
        $discount->gets_qty = $request->gets_qty;
        $discount->gets_applies_to = $request->gets_applies_to;
        $discount->discounted_value_type = $request->discounted_value_type;
        $discount->eligible_countries = $request->eligible_countries;
        $discount->exclude_shipping_over_an_amount = $request->exclude_shipping_over_an_amount;
        $discount->shipping_amount = $request->shipping_amount;
        $discount->total_usage  = $request->total_usage;
        $discount->once_per_customer = $request->once_per_customer;
        $discount->start_date = $request->start_date;
        $discount->end_date = $request->end_date;
        $discount->start_time = $request->start_time;
        $discount->end_time = $request->end_time;


        $discount->save();

        if ($request->has('collections') && $request->applies_to === 'collections') {
            $discount->collections()->sync($request->collections);
        }

        if ($request->has('products') && $request->applies_to === 'products') {
            $syncData = [];
            foreach ($request->products as $product) {
                $syncData[$product['id']] = [
                    'inventories' => json_encode($product['inventories'])
                ];
            }
            $discount->products()->sync($syncData);
        }

        if ($request->has('gets_collections') && $request->gets_applies_to === 'collections') {
            $discount->gets_collections()->sync($request->gets_collections);
        }

        if ($request->has('gets_products') && $request->applies_to === 'products') {
            $syncData = [];
            foreach ($request->gets_products as $product) {
                $syncData[$product['id']] = [
                    'inventories' => json_encode($product['inventories'])
                ];
            }
            $discount->gets_products()->sync($syncData);
        }
        if ($request->has('countries') && $request->eligible_countries === 'specific') {
            $discount->countries()->sync($request->countries);
        }

        if ($request->has('customers') && $request->eligible_customers === 'specific') {
            $discount->customers()->sync($request->customers);
        }


        return response()->json(['message' => 'Discount updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $discount = Discounts::find($id);
        if (!$discount) {

            return response()->json(['message' => 'Discount Not Found'], 404);
        }
        $discount->delete();

        return response()->json(['message' => 'Discount deleted successfully'], 200);
    }

}
