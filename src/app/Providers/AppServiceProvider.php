<?php

namespace App\Providers;

use App\Services\PlainHangar\PlainHangar;
use App\Services\PlainHangar\PlainHangarContract;
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
        $this->app->bind(
            PlainHangarContract::class,
            PlainHangar::class
        );
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
