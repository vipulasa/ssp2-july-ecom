<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->title }}
        </h2>
    </x-slot>

    <div class="py-12 product">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2">

                </div>
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-2xl font-bold">{{ $product->title }}</h2>
                    <p class="text-xl font-bold text-gray-500">{{ $product->price }} €</p>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <div class="mt-4">
                        <button type="button" x-analytic-hit:product.click="{{ $product->id }}">Add to Cart</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</x-app-layout>
