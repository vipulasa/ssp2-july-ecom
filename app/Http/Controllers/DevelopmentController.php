<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class DevelopmentController extends Controller
{
    public function index(Request $request)
    {

        $brand = new BrandController;

        dd($brand->hello_world);



//        $middleware = function($next){
//            // some validations written here
//            var_dump('ok from the first function');
//            return $next();
//        };
//
//        dd($middleware(function(){
//            return 'ok from the second function';
//        }));
//
//
//        dd(route('product.view', ['id' => 1, 'category' => 'cars']));
//

//
//        // create a new product
//        $product = Product::create([
//            'title' => 'Product 1',
//            'slug' => 'product-1',
//            'summary' => 'Product 1 summary',
//            'description' => 'Product 1 description',
//            'price' => 1000,
//            'stock' => 10,
//        ]);
//
//        dd($product);
//
//        dd(app());
//
//
//        $ssp = resolve('SSPEcommerce');
//
//        $ssp->setName('ok ela kiri');

        return view('dashboard');
    }
}
