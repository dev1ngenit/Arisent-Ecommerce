<?php

namespace App\Providers;

use Exception;
use App\Models\Sites;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::share('site', null);
        // View::share('categories', []);
        // View::share('brands', []);
        // View::share('admins', []);

        try {

            if (Schema::hasTable('sites')) {
                View::share('site', Sites::first());
            }

            // if (Schema::hasTable('categories')) {
            //     View::share('categories', Category::with('children', 'children.offers', 'offers', 'coupons')->whereNull('parent_id')->get());
            // }

            // if (Schema::hasTable('brands')) {
            //     View::share('brands', Brand::orderBy('name', 'asc')->get());
            // }

            // if (Schema::hasTable('admins')) {
            //     View::share('admins', Admin::orderBy('name', 'asc')->get());
            // }

        } catch (Exception $e) {
            // Log the exception if neede
        }
        Paginator::useBootstrap();

    }
}
