<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        $amount = 49.99;
        return view('cart.stripe_checkout', compact('amount'));
    }

    public function stripePost(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Charge::create([
            'amount' => 4999,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Test payment from laravel app',
        ]);
        return redirect()->route('cart.view')->with('success', 'Payment successful!');
    }
}