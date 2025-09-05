<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
      public function products()
    {

        return view('shop.products');
    }

      public function about ()
    {

        return view('shop.about');
    }

     public function cart ()
    {

        return view('shop.cart');
    }
    public function register(){
        return view('shop.register');
    }
}
