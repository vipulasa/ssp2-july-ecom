<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {

        if (cache()->get('home_products')) {
            $products = cache()->get('home_products');
        } else {
            $products = (new Product())
                ->published()
                ->sortByOrder()
                ->get();

            cache()->set('home_products', $products, 60 * 60 * 24 * 30);
        }


        return view('home', [
            'products' => $products,
            'generateKeywords' => function ($product) {
                // remove all special characters from the string
                $string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $product->title);

                // make the string small case
                $string = strtolower($string);

                // split the string into array
                $words = explode(' ', $string);

                // return the string imploded with ,
                return implode(',', $words);
            }
        ]);
    }
}
