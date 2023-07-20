<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SSPEcommerceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('SSPEcommerce', function () {
            return new \App\SSPEcommerce();
        });
    }

    public function boot(): void
    {

    }
}
