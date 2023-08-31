<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 product">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <span x-text="user.name"></span>
                <span x-text="user.email"></span>

                <div class="grid grid-cols-6 gap-y-2 gap-x-5 p-6">


                    @foreach($products as $product)

                        <!-- component -->
                        <div class="py-6 col-span-3">
                            <div class="flex bg-white shadow-lg rounded-lg overflow-hidden">
                                <div class="w-1/3 bg-cover" style="background-image: url('https://source.unsplash.com/random/?{{ $generateKeywords($product) }}')">
                                </div>
                                <div class="w-2/3 p-4">
                                    <h1 class="text-gray-900 font-bold text-2xl">{{ $product->title }}</h1>
                                    <p class="mt-2 text-gray-600 text-sm">{{ $product->summary }}</p>
                                    <div class="flex item-center mt-2">
                                        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                        </svg>
                                        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                        </svg>
                                        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                        </svg>
                                        <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                        </svg>
                                        <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex item-center justify-between mt-3">
                                        <h1 class="text-gray-700 font-bold text-xl">${{ $product->price }}</h1>
                                        <button class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>


        </div>
    </div>
</x-app-layout>
