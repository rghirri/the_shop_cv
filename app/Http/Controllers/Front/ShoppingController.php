<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
        
       $pdt = Product::find(request()->pdt_id);

        \Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'quantity' => request()->qty,
            'price' => $pdt->price,
            'associatedModel' => 'App\Models\Product'
        ]);

       // Session::flash('success', 'Purchase successfull added to cart.');

        session()->flash('success', 'Purchase successfull added to cart.');

        return redirect()->route('cart');
    }

    public function cart()
    {
        
       // \Cart::clear();
        
        return view('front.products.cart');

    }

    public function cart_delete($id)
    {
        
        \Cart::remove($id);
        
        session()->flash('success', 'Item Cart Removed Successfully !');

        return redirect()->route('cart');

    }


    public function rapid_add($id)
    {

        $pdt = Product::find($id);

        \Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'quantity' => 1,
            'price' => $pdt->price,
            'associatedModel' => 'App\Models\Product'
        ]);

        
       // Session::flash('success', 'Purchase successfull added to cart.');

        session()->flash('success', 'Purchase successfull added to cart.');


        return redirect()->route('cart');

    }

}