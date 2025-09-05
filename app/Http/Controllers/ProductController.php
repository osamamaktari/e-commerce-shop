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



public function create() {
    return view('shop.create-product');
}

public function store(Request $request) {
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', 'public');
        $validated['image'] = $path;
    }

    Product::create($validated);
    return redirect('/products')->with('success', 'Product created successfully!');
}




public function edit($id) {
    $product = Product::findOrFail($id);
    return view('shop.edit-product', compact('product'));
}

public function update(Request $request, $id) {
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', 'public');
        $validated['image'] = $path;
    }

    $product->update($validated);
    return redirect('/products')->with('success', 'Product updated successfully!');
}


}
