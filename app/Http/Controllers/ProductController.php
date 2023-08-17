<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\User;
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

//        $validator = Validator::make([
//            'email' => 'mulineb@mailinator.com',
//            'user' => [
//                'email' => 'mulineb@mailinator.com',
//                'roles' => [
//                    'admin' => [
//                        'id' => 1
//                    ]
//                ]
//            ]
//        ], [
//            'email' => ['required', 'email', 'exists:users,email'],
//            'user.email' => ['required', 'email', 'exists:users,email'],
//            'user.roles.admin.id' => ['required', 'integer'],
//        ]);




        return view('product . create');
    }

    public function store(CreateProductRequest $request)
    {
        dd($request);
    }

    public function show(Product $product)
    {
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
