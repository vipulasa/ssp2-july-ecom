<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = (new Product())
            ->published()
            ->sortByOrder()
            ->get();

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
