<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\itemModel;
use App\Observers\ItemObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ItemModel::observe(ItemObserver::class);
        Paginator::useBootstrap();

    }
}
