<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        return redirect()->route('cart.view')->with('success', 'Order placed successfully!');
    }
}
