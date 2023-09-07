<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartIcon extends Component
{

    public $total_products = 0;

    protected $listeners = [
        'addToCart' => 'calculateTotalProducts'
    ];

    public function calculateTotalProducts($args)
    {
        // get the cart ID from the args
        $cart_id = $args['cart_id'];

        // load the cart id
        $cart = (new Cart())->findOrfail($cart_id);

        // get the total count of products

        $this->total_products = $cart->products()->count();
    }

    public function mount()
    {
        if (auth()->check()) {
            // check if the user has a cart
            $cart = auth()->user()?->cart()->where('is_paid', false)->first();

            if ($cart) {
                $this->total_products = $cart->products()->count();
            }
        }

    }

    public function render()
    {
        return view('livewire.cart-icon');
    }
}
