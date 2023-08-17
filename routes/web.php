<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dev', [App\Http\Controllers\DevelopmentController::class, 'index']);

Route::get('brands', App\Http\Controllers\BrandController::class);

Route::resource('product', App\Http\Controllers\ProductController::class);

Route::get('analytics', [App\Http\Controllers\AnalyticsController::class, 'index']);

Route::group([
    'prefix' => 'product',
    'as' => 'product.',
    'middleware' => ['role:admin,customer']
], function () {

    Route::get('/list-cars', function () {
        return 'Product list';
    })->name('list');





//    Route::get('/product/{product_uuid}', function (\App\Models\Product $product) {
//        dd($product);
//        return 'Product';
//    })->name('view');
});


Route::get('/', \App\Http\Controllers\HomeController::class)
    ->name('home.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
