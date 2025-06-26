<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        $order = $this->storeOrder($request);
        return $request->all();
    }

    private function storeOrder($request) {
//        dd($request->all());
    }
}
