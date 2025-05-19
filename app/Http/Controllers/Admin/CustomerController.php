<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Customer;
use App\Models\CustomerAddress;
use Hash;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with(['country', 'addresses', 'addresses.country', 'addresses.zone'])->get();
        return response()->json($customers, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email',
        ]);
        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->country_id = $request->country;
        $customer->telcode = $request->telcode;
        $customer->phone = $request->phone;
        $customer->save();

        if ($request->has('address')) {
            $address = new CustomerAddress();
            $address->customer_id = $customer->id;
            $address->country_id = $request->country;
            $address->fname = $request->fname;
            $address->lname = $request->lname;
            $address->address_1 = $request->address_1;
            $address->address_2 = $request->address_2;
            $address->zone_id = $request->zone;
            $address->city = $request->city;
            $address->postalcode = $request->postalcode;
            $address->telcode = $request->telcode;
            $address->phone = $request->phone;
            $address->save();
        }

        return response()->json(['message' => 'Customer created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::with(['addresses', 'addresses.country', 'addresses.zone'])->find($id);
        return response()->json($customer, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => "required|email|unique:customers,email,except,$id",
        ]);
        $customer = Customer::find($id);
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->telcode = $request->telcode;
        $customer->phone = $request->phone;
        $customer->save();

        if ($request->has('address')) {
            $address = CustomerAddress::findOrNew($request->address_id);
            $address->customer_id = $customer->id;
            $address->country_id = $request->country;
            $address->fname = $request->fname;
            $address->lname = $request->lname;
            $address->address_1 = $request->address_1;
            $address->address_2 = $request->address_2;
            $address->zone_id = $request->zone;
            $address->city = $request->city;
            $address->postalcode = $request->postalcode;
            $address->telcode = $request->telcode;
            $address->phone = $request->phone;
            $address->save();
        }
        return response()->json(['message' => 'Customer updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json(['message' => 'Customer deleted successfully'], 200);
    }
    public function countries()
    {
        $countries = Country::with('zones')->get();
        return response()->json($countries, 200);
    }
}
