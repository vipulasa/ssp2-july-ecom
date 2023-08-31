<div>
    @if($message)
        <div class="absolute bg-green-100 border border-green-400 left-0 px-4 py-3 rounded text-green-700 top-0"
             role="alert" x-data="{state: true}" x-show="state" x-init="setTimeout(() => { state = false; }, 1000)">
            <strong class="font-bold">Added to cart!</strong>
            <span class="block sm:inline">You can now proceed to checkout.</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" x-on:click="state = false">
                <svg class="fill-current h-6 w-6 text-green-500" role="button"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                            d="M14.348 5.652a.5.5 0 010 .707L10.707 10l3.641 3.641a.5.5 0 11-.707.707L10 10.707l-3.641 3.641a.5.5 0 01-.707-.707L9.293 10 5.652 6.359a.5.5 0 01.707-.707L10 9.293l3.641-3.641a.5.5 0 01.707 0z"/>
                </svg>
            </span>
        </div>
    @endif
        <button class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded" wire:click="addToCart">
            Add to Cart
        </button>
</div>

