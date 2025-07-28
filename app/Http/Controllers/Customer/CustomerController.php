<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function update(Request $request) {
        \Log::info($request->user());
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);
        // Get authenticated customer via Sanctum
        $customer = $request->user();
        if(!$customer) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->phone = $request->phone;
        $customer->country_id = $request->country_id;
        $customer->save();

        return response()->json(['message' => 'Customer updated successfully', 'customer' => $customer], 200);
    }

    public function changePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        // Get authenticated customer via Sanctum
        $customer = $request->user();
        if(!$customer) {
            return response()->json(['message' => 'Customer not found'], 401);
        }
        if(!Hash::check($request->current_password, $customer->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 404);
        }
        $customer->password = Hash::make($request->password);
        $customer->save();

        return response()->json(['message' => 'Password changed successfully'], 200);
    }
    public function orders(Request $request): \Illuminate\Http\Response
    {
        $user = $request->user();
        $orders = Orders::where('customer_id', $user->id)->get();
        if(!$orders) {
            return response(['message', 'Orders not found for this user'], 404);
        }
        return response($orders, 200);
    }
    public function order(Request $request, string $id): \Illuminate\Http\Response
    {
        $user = $request->user();
        $order = Orders::where('customer_id', $user->id)->where('id', $id);
        if(!$order->exists()) {
            return response(['message', 'Requested order not exists'], 404);
        }

        $with = $request->with ? explode(',', $request->with) : [];
        $withRelations = [];
        foreach ($with as $relation) {
            $withRelations[] = $relation;
        }

        if (!empty($withRelations)) {
            $order = $order->with($withRelations);
        }
        $order = $order->first();
        return response($order, 200);
    }
}
