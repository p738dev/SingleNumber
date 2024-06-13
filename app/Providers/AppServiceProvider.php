<?php

namespace App\Providers;

use App\Services\Contracts\FindSingleNumberInterface;
use App\Services\FindSingleNumberService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FindSingleNumberInterface::class, FindSingleNumberService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}