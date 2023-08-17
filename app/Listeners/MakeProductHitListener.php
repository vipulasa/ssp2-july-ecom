<?php

namespace App\Listeners;

use App\Events\ProductViewEvent;

class MakeProductHitListener
{
    public function __construct()
    {
    }

    public function handle(ProductViewEvent $event): void
    {
        resolve('SSPEcommerce')->makeHit(
            class_basename($event->product),
            $event->product->id,
            'view'
        );
    }
}
