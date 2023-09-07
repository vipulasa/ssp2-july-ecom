<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {

        if(auth()->check()){

            // check if the user has a cart
            $cart = auth()->user()->cart()->where('is_paid', false)->first();


            return view('cart', [
                'cart' => $cart
            ]);
        }


        return redirect('/');
    }
}
