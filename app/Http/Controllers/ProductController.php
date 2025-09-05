<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    $products = Product::all();
    return view('shop.products', compact('products'));
}

public function show($id) {
    $product = Product::findOrFail($id);
    return view('shop.product-details', compact('product'));
}

}
