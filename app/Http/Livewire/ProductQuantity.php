<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductQuantity extends Component
{
    public Product $product;

    public $cart;

    public function mount(Product $product)
    {
        // check if the user has a cart
        $this->cart = auth()->user()->cart()->where('is_paid', false)->first();

        $this->product = $product;
    }

    public function decreaseCount()
    {
        $product = $this->cart->products()->where('product_id', $this->product->id)->first();

        $product->pivot->update([
            'quantity' => $product->pivot->quantity - 1,
            'total' => $product->pivot->total - $product->price,
        ]);

        $this->cart->refresh();

        $this->product = $this->cart->products()->where('product_id', $this->product->id)->first();
    }

    public function increaseCount()
    {
        $product = $this->cart->products()->where('product_id', $this->product->id)->first();

        $new_quantity = $product->pivot->quantity + 1;

        // $new_quantity <= $product->stock

        $product->pivot->update([
            'quantity' => $new_quantity,
            'total' => $product->pivot->total + $product->price,
        ]);

        $this->cart->refresh();

        $this->product = $this->cart->products()->where('product_id', $this->product->id)->first();
    }

    public function render()
    {
        return view('livewire.product-quantity');
    }
}
