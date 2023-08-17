@props(['product' => null])

<div>
    <h1 class="text-2xl font-medium mb-4">Product Form</h1>
    @if ($errors->any())
        <div class="text-red-500 mt-2 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $product->id ? route('product.update', $product->id) : route('product.store') }}" method="post">
        @csrf

        @if($product->id)
            @method('PUT')
        @endif

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
            <input type="text" name="title" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('title')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">URL</label>
            <input type="text" name="slug" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('slug')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">summary</label>
            <input type="text" name="summary" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('summary')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">description</label>
            <input type="text" name="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">price</label>
            <input type="text" name="price" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('price')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">stock</label>
            <input type="text" name="stock" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('stock')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">Sort Order</label>
            <input type="number" name="sort_order" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
            @error('sort_order')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="block font-medium text-sm text-gray-700">status</label>
            <input type="checkbox" name="status" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
