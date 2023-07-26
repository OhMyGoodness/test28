<?php

namespace App\Providers;

use App\Interfaces\Auto\AutoServiceInterface;
use App\Interfaces\AutoMark\AutoMarkServiceInterface;
use App\Interfaces\AutoModel\AutoModelServiceInterface;
use App\Services\Auto\AutoService;
use App\Services\AutoMark\AutoMarkService;
use App\Services\AutoModel\AutoModelService;
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
        if (app()->environment('testing')) {
        } else {
            $this->app->bind(AutoMarkServiceInterface::class, AutoMarkService::class);
            $this->app->bind(AutoModelServiceInterface::class, AutoModelService::class);
            $this->app->bind(AutoServiceInterface::class, AutoService::class);
        }
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
