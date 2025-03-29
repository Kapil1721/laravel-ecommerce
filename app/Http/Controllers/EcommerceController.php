<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function categories() {
        $categories = Category::all();

        return response()->json($categories, 200);
    }
}
