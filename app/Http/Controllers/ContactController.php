<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact ()
    {

        return view('shop.contact');
    }
    
    public function showForm() {
    return view('contact');
}

public function submit(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);


    return back()->with('success', 'Message sent successfully!');
}

}
