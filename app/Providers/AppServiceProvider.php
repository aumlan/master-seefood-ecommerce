<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Currency;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
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
        View::share('currencies',Currency::find(1));
        View::share('brands', Brand::all());
        View::share('global_categories', Category::paginate(6));

    }
}
