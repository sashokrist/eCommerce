<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Illuminate\Http\Request;
use Cart;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function pay()
    {
       // dd(\request()->all());

        \Stripe\Stripe::setApiKey("sk_test_1ThjtNYnnXVAKPWEX7l3i4mW");
        //get token
        $token = \request()->stripeToken;

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Buying cool staff',
            'source' => $token,
        ]);
        //dd('cart was charged');
        Session::flash('success', 'Your payment is accepted, wait for an email');

        Cart::destroy(); //empry cart after customer pay

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PaymentSuccessful);

        return redirect('/');
    }
}
