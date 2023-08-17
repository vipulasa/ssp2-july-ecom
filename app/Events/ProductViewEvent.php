<?php

namespace App\Events;

use App\Models\Product;
use Illuminate\Foundation\Events\Dispatchable;

class ProductViewEvent
{
    use Dispatchable;

    public Product $product;

    public function __construct(
        Product $product
    )
    {
        $this->product = $product;
    }
}
