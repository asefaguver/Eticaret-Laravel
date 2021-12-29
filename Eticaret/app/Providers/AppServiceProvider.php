<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\shopcart;
use Illuminate\Support\Facades\Auth;
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
        view()->composer("layouts.homelayout", function ($view){
            $title = Category::all();
            $dataList= shopcart::where('user_id',Auth::id())->get();
            $view->with(['title'=>$title, 'dataList'=>$dataList]);   
        });
    }
}
