<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddToCart extends Component
{
    public $product;

    public $message;


    public function addToCart()
    {
        // check if the user is logged in or send them to login page
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // check if the user has a cart
        $cart = auth()->user()->cart()->where('is_paid', false)->first();

        // if the user does not have a cart, create one
        if (!$cart) {
            $cart = auth()->user()->cart()->create([
                'is_paid' => false,
                'total' => 0,
            ]);
        }

        // check if the product is already in the cart
        $productInCart = $cart->products()->where('product_id', $this->product->id)->first();

        // if the product is already in the cart, increment the quantity
        if ($productInCart) {
            $productInCart->pivot->update([
                'quantity' => $productInCart->pivot->quantity + 1,
                'total' => $productInCart->pivot->total + $this->product->price,
            ]);
        } else {
            // if the product is not in the cart, add it
            $cart->products()->attach($this->product->id, [
                'quantity' => 1,
                'total' => $this->product->price,
            ]);
        }

        $cart->refresh();

        // calculate the cart total
        $cartTotal = $cart->products->sum('pivot.total');

        // update the cart total
        $cart->update([
            'total' => $cartTotal,
        ]);

        // emit addToCart event
        $this->emit('addToCart', [
            'cart_id' => $cart->id
        ]);

        $this->message = 'Product added to cart.';
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
