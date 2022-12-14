<?php

namespace App\Providers;

use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
