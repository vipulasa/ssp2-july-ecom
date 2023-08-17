<?php

namespace App\Http\Controllers;

use App\Events\ProductViewEvent;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\User;
use App\Rules\UppercaseRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

        // mulineb@mailinator.com

        $validator = Validator::make([
            'text' => 'HELLO',
            'email' => 'mulineb@mailinator.com',
            'user' => [
                'email' => 'mulineb@mailinator.com',
                'roles' => [
                    'admin' => [
                        'id' => 1
                    ]
                ]
            ]
        ], [
            'text' => ['required', 'string', new UppercaseRule()],
            'email' => ['required', 'email', 'exists:users,email'],
            'user.email' => ['required', 'email', 'exists:users,email'],
            'user.roles.admin.id' => ['required', 'integer'],
        ]);


        return view('product.create');
    }

    public function store(CreateProductRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create($validated);

        return redirect()->route('product.show', $product);
    }

    public function show(Product $product)
    {
        // this function getting executed

        event(new ProductViewEvent($product));

        return view('product.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
