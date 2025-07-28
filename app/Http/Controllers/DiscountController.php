<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use App\Models\Orders;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DiscountController extends Controller
{
    public function apply(Request $request)
    {
        // return $request->cart;
        $code = $request->code;
        $discount = Discounts::where('code', $code)->first();
        $message = '';
        $items = collect(json_decode(json_encode($request->cart)));
        $valid = false;

        // Step 1: Check the discount exists
        if(!$discount) {
            return response()->json(['message' => 'Discount not found'], 400);
        }

        // Step 2: Check status
        if(!$discount->active) {
            return response()->json(['message' => 'Discount is not active'], 400);
        }

        // Step 3: Check discount available
        if(Carbon::parse($discount->start_date . ' ' . $discount->start_time) > now()) {
            return response()->json(['message' => 'Discount is not available yet'], 400);
        }

        // Step 4: Check is discount expired
        if(!empty($discount->end_date) && Carbon::parse($discount->end_date . ' ' . $discount->end_time) < now()) {
            return response()->json(['message' => 'Discount is expired'], 400);
        }

        // Step 5: Check total usage
        if(!($discount->total_usage > 0 && Orders::where('discount_id', $discount->id)->count() <= $discount->total_usage)) {
            return response()->json(['message' => 'Discount is already used'], 400);
        }

        // Step 6: Check is current user used this discount
        if($request->user('sanctum') && $discount->once_per_customer && Orders::where('discount_id', $discount->id)->where('customer_id', $request->user('sanctum')->id)->count() > 0) {
            return response()->json(['message' => 'You already used this discount'], 400);
        }

        // Step 7: Check is the current user eligible for this discount
        if($discount->eligible_customers === 'specific') {
            if(!($request->user('sanctum') && $discount->customers->contains($request->user('sanctum')->id))) {
                return response()->json(['message' => 'You are not eligible for this discount'], 400);
            }
        }

        // Step 8: Check requirements for discount when the discount type is amount-off-order
        if($discount->type === 'amount-off-order') {
            $subtotal = 0;
            $quantity = 0;
            foreach($items as $item) {
                $product = Product::find($item->product_id);
                if(property_exists($item, 'inventory_id') && $item->inventory_id) {
                    $inventory = $product->inventories()->where('id', $item->inventory_id)->first();
                    $subtotal += $inventory->price * $item->qty;
                    $quantity += $item->qty;
                }
                else {
                    $quantity += $item->qty;
                    $subtotal += $product->sale_price * $item->qty;
                }
            }
            Log::info('Subtotal: '. $subtotal);
            Log::info('Quantity: '. $quantity);
            if($discount->requirement === 'minimum_purchase_amount') {
                if($discount->min_amount > $subtotal) {
                    return response()->json(['message' => 'Minimum purchase amount is not met'], 400);
                }
            } elseif($discount->requirement === 'minimum_quantity_items') {
                if($discount->min_qty > $quantity) {
                    return response()->json(['message' => 'Minimum quantity items is not met'], 400);
                }
            }
        }

        // Step 9: Check are cart products eligible for this discount
        if($discount->type === 'amount-off-product') {
            $validItems = [];
            if ($discount->applies_to === 'products') {
                $products = $discount->products; // Assuming this is a collection of Product models

                $invalidProducts = [];
                $invalidVariants = [];

                foreach ($items as $item) {
                    // Check if this item matches a product in the discount
                    $product = $products->firstWhere('id', $item->product_id);

                    if (!$product) {
                        $invalidProducts[] = $item->product_id;
                        continue;
                    }

                    // If product is variable, validate inventory
                    if ($product->product_type === 'variable' && $item->inventory_id) {
                        $inventories = $product->inventories ?? collect();

                        if (!$inventories->contains('id', $item->inventory_id)) {
                            $invalidVariants[] = [
                                'product_id' => $item->product_id,
                                'inventory_id' => $item->inventory_id
                            ];
                            continue;
                        }
                    }

                    // Passed all checks
                    $validItems[] = $item;
                }

                // ❌ If no valid item exists, reject the whole request
                if (empty($validItems)) {
                    return response()->json(['message' => 'None of the products in your cart are eligible for this discount'], 400);
                }




            }

            // Step 10: Check requirements for discount when the discount type is amount-off-product
            $matched = false;

            foreach ($validItems as $item) {
                $product = Product::find($item->product_id);

                if (property_exists($item, 'inventory_id') && $item->inventory_id) {
                    $inventory = $product->inventories()->where('id', $item->inventory_id)->first();
                    $itemTotal = $inventory->price * $item->qty;
                } else {
                    $itemTotal = $product->sale_price * $item->qty;
                }
                if ($discount->requirement === 'minimum_purchase_amount' && $itemTotal >= $discount->min_amount) {
                    $matched = true;
                }
                if ($discount->requirement === 'minimum_quantity_items' && $item->qty >= $discount->min_qty) {
                    $matched = true;
                }
            }

            if (!$matched) {
                if ($discount->requirement === 'minimum_purchase_amount') {
                    return response()->json(['message' => 'No product meets the minimum purchase amount requirement for discount'], 400);
                } elseif ($discount->requirement === 'minimum_quantity_items') {
                    return response()->json(['message' => 'No product meets the minimum quantity requirement for discount'], 400);
                }
            }
        } elseif($discount->type === 'buy-x-get-y') {
            return response()->json(['message' => 'Discount type is not available yet'], 400);
        } elseif($discount->type === 'free-shipping') {
            return response()->json(['message' => 'Discount type is not available yet'], 400);
        }

        // Step 10: Check is the current user's country eligible for this discount


        // return response back to the front end
        return response()->json(['message' => 'Discount applied successfully', 'discount' => $discount->load(['products', 'collections'])], 200);
    }
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $discount = Discounts::find($id);
        if(!$discount) {
            return response()->json(['message' => 'Discount not found'], 400);
        }
        return response()->json($discount->load(['products', 'collections']), 200);
    }
}
