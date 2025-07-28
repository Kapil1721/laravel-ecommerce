<?php

namespace App\Http\Controllers;

use App\Models\BillingAddresses;
use App\Models\Discounts;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Product;
use App\Models\ShippingAddresses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        try {
            $order = $this->storeOrder($request);
            return response()->json([
                'message' => 'Order placed successfully',
                'order_id' => $order->id
            ], 200);
        }
        catch(\Exception $e) {
            Log::error($e);
            return response()->json([
                'message' => 'Failed to place order',
            ], 500);
        }
    }

    private function storeOrder($request): Orders
    {
        // dd($request->all());

        // cart items
        // return $request->cart;
        $subtotal = 0;
        $products = [];
        $inventories = [];
        foreach(json_decode(json_encode($request->cart)) as $item) {
            // Log::info((array) $item);
            $product = Product::find($item->product_id);
            if(property_exists($item, 'inventory_id') && $item->inventory_id) {
                $inventory = $product->inventories()->where('id', $item->inventory_id)->first();
                $subtotal += intval($inventory->first()->price) * $item->qty;
                $inventories[] = $inventory;
                Log::info('Inventory: ', (array) $inventory);
                $inventory->qty -= $item->qty;
                $inventory->save();
            }
            else {
                $subtotal += $product->sale_price * $item->qty;
                $product->stock -= $item->qty;
                $product->save();
            }
            $products[] = $product;
        }
        // Log::info('Products: ', (array) $products);
        // Log::info('Products: ', (array) $inventories);
        // Log::info('Products: '.$subtotal);

        Log::info('Customer: ', (array) $request->user());
        $discountAmount = 0;
        if($request->discount_id) {
            $discount = Discounts::find($request->discount_id);
            if($discount) {
                if($discount->discount_type === 'percentage') {
                    $discountAmount = $subtotal * ($discount->amount / 100);
                }
                else {
                    $discountAmount = $discount->amount;
                }
            }
        }
        // order store here
        $order = new Orders();
        $order->customer_id = $request->customer_id;
        $order->sub_total = $subtotal;
        $order->discount_id = $request->discount_id;
        $order->discount_amount = $discountAmount;
        $order->grand_total = $subtotal - $discountAmount;
        $order->payment_method = $request->payment;
        $order->transaction_id = null;
        $order->is_paid = false;
        $order->status = 'pending';
        $order->address = $request->billing_address;
        $order->save();


        // order items store here
        foreach(json_decode(json_encode($request->cart)) as $item) {
            $orderItem = new OrderItems();
            $orderItem->order_id = $order->id;

            $product = Product::find($item->product_id);
            $orderItem->product_id = $item->product_id;
            if(property_exists($item, 'inventory_id') && $item->inventory_id) {
                $inventory = $product->inventories()->where('id', $item->inventory_id)->first();
                Log::info('$inventory', (array) $inventory);
                $orderItem->inventory_id = $item->inventory_id;
                $orderItem->price = $inventory->price;
                $orderItem->sub_total = $inventory->price * $item->qty;
            }
            else {
                $orderItem->price = $product->sale_price;
                $orderItem->sub_total = $product->sale_price * $item->qty;
            }
            $orderItem->qty = $item->qty;
            $orderItem->save();
        }

        // shipping address store
        $shippingAddress = new ShippingAddresses();
        $shippingAddress->order_id = $order->id;
        $shippingAddress->fname = $request->shipping_fname;
        $shippingAddress->lname = $request->shipping_lname;
        $shippingAddress->phone = $request->shipping_phone;
        $shippingAddress->telcode = $request->shipping_telcode;
        $shippingAddress->address_1 = $request->shipping_address_1;
        $shippingAddress->address_2 = $request->shipping_address_2;
        $shippingAddress->city = $request->shipping_city;
        $shippingAddress->zone_id = $request->shipping_zone_id;
        $shippingAddress->country_id = $request->shipping_country_id;
        $shippingAddress->postal_code = $request->shipping_postal_code;
        $shippingAddress->save();

        // billing address store here
        $billingAddress = new BillingAddresses();
        $billingAddress->order_id = $order->id;
        if($request->billing_address === 'same') {
            $billingAddress->fname = $request->shipping_fname;
            $billingAddress->lname = $request->shipping_lname;
            $billingAddress->phone = $request->shipping_phone;
            $billingAddress->telcode = $request->shipping_telcode;
            $billingAddress->address_1 = $request->shipping_address_1;
            $billingAddress->address_2 = $request->shipping_address_2;
            $billingAddress->city = $request->shipping_city;
            $billingAddress->zone_id = $request->shipping_zone_id;
            $billingAddress->country_id = $request->shipping_country_id;
            $billingAddress->postal_code = $request->shipping_postal_code;
        }
        else {
            $billingAddress->fname = $request->billing_fname;
            $billingAddress->lname = $request->billing_lname;
            $billingAddress->phone = $request->billing_phone;
            $billingAddress->telcode = $request->billing_telcode;
            $billingAddress->address_1 = $request->billing_address_1;
            $billingAddress->address_2 = $request->billing_address_2;
            $billingAddress->city = $request->billing_city;
            $billingAddress->zone_id = $request->billing_zone_id;
            $billingAddress->country_id = $request->billing_country_id;
            $billingAddress->postal_code = $request->billing_postal_code;
        }
        $billingAddress->save();
        return $order;
    }
}
