<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Mail;
use Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(\Cart::getContent()->count() == 0)
        {

            Session::flash('info', 'Your cart is still empty. do some shopping.');
            return redirect()->back();

        }

        return view('front.products.checkout');

    }

    public function pay()
    {

        //dd(request()->all());

        Stripe::setApiKey("sk_test_51Hfob3BhIJ1kVATVzouYZFsDMQHGBqaInA5D7OACQ42r0CTCsHKVnYz1cokr1r1mtOqqDlHzKDT2qi6x9mBJ60Ak00xa6UzUKu");

        $charge = Charge::create([
            'amount' => \Cart::getSubTotal() * 100,
            'currency' => 'usd',
            'description' => 'udemy course practice selling books',
            'source' => request()->stripeToken
        ]);

        //dd('Purchase successfull. wait for our email.');

        Session::flash('success', 'Purchase successfull. wait for our email.');

        \Cart::clear();

        \Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);  // The email address needs to be a working email

        return redirect('/products');

    }

}