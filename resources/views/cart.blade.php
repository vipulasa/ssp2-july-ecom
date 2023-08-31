<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($cart)
                <table>
                    <tr>
                        <td>Title</td>
                        <td>Price Per Product</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td>Actions</td>
                    </tr>

                @foreach($cart->products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->pivot->quantity }}</td>
                        <td>${{ number_format($product->pivot->total, 2) }}</td>
                    </tr>
                @endforeach
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
