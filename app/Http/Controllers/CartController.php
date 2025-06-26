<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Binafy\LaravelCart\LaravelCart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        // $cart = session()->get('cart', []);

        // if (isset($cart[$product->id])) {
        //     $cart[$product->id]['quantity'] += $request->quantity;
        // } else {
        //     $cart[$product->id] = [
        //         'name' => $product->name,
        //         'price' => $product->price,
        //         'quantity' => $request->quantity,
        //         'image' => $product->image
        //     ];
        // }
        // session()->put('cart', $cart);
        LaravelCart::storeItem($product);

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}