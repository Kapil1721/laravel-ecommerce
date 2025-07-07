<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customer = $request->user();
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 401);
        }
        $addresses = CustomerAddress::where('customer_id', $customer->id)->with(['country', 'zone'])->get();
        return response()->json($addresses, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        $request->validate([
            //
        ]);
        $customer = $request->user();
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 401);
        }
        $address = new CustomerAddress();
        $address->customer_id = $customer->id;
        $address->country_id = $request->country_id;
        $address->fname = $request->fname;
        $address->lname = $request->lname;
        $address->company = $request->company;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city = $request->city;
        $address->zone_id = $request->zone_id;
        $address->postalcode = $request->postalcode;
        $address->telcode = $request->telcode;
        $address->phone = $request->phone;
        $address->save();
        if ($request->has('default') && $request->default == 1) {
            $customer->address_id = $address->id;
            $customer->save();
        }
        return response()->json(['message' => 'Address created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = $request->user();
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 401);
        }
        $address = CustomerAddress::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        $address->customer_id = $customer->id;
        $address->country_id = $request->country_id;
        $address->fname = $request->fname;
        $address->lname = $request->lname;
        $address->company = $request->company;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city = $request->city;
        $address->zone_id = $request->zone_id;
        $address->postalcode = $request->postalcode;
        $address->telcode = $request->telcode;
        $address->phone = $request->phone;
        $address->save();
        if ($request->has('default') && $request->default == 1) {
            $customer->address_id = $address->id;
            $customer->save();
        } else {
            $customer->address_id = null;
            $customer->save();
        }
        return response()->json(['message' => 'Address updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = CustomerAddress::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        $address->delete();
        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
    public function setAsDefault(Request $request, string $id)
    {
        $address = CustomerAddress::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        $customer = $request->user();
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 401);
        }
        $customer->address_id = $address->id;
        $customer->save();
        return response()->json(['message' => 'Address set as default successfully', 'address' => $address, 'customer' => $customer], 200);
    }
}
