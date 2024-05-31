<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request, $categoryId)
    {
        $products = Product::where('product_category', $categoryId)->get();
        return response()->json($products);
    }

    public function product()
    {
        $product = Product::all();
        return response()->json($product);
    }
}
