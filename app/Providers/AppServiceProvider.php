<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        array_map(function ($value) {
            if (preg_match("/(\\w+)(Eloquent).php/", $value, $newValue))
            {
                $this->app->bind(
                    "App\\Repositories\\{$newValue[1]}",
                    "App\\Repositories\\{$newValue[1]}Eloquent"
                );
            }
        }, scandir(app_path('Repositories')));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }
}
