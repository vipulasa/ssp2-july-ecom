<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with([
                'user' => auth()->check() ? auth()->user() : null,
            ]);
        });

        $ssp = resolve('SSPEcommerce');

        $ssp->setName('elaa');

    }
}
