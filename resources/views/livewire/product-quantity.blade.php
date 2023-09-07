<div>
    <button type="button" wire:click="decreaseCount">
        -
    </button>

    {{ $product->pivot->quantity }}

    <button type="button" wire:click="increaseCount">
        +
    </button>
</div>
