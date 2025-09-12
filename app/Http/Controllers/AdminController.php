<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
   
        $this->middleware(['auth','can:access-admin-panel']);
    }

    public function dashboard()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();

        return view('admin.dashboard', compact('productCount','categoryCount'));
    }

    public function products()
    {
        $products = Product::with('category')->paginate(20);
        return view('admin.products', compact('products'));
    }

    public function categories()
    {
        $categories = Category::withCount('products')->paginate(20);
        return view('admin.categories', compact('categories'));
    }
}

