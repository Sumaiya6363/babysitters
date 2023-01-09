<?php

namespace App\Providers;

use App\Models\Websetting;
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
        view()->composer('*', function($view){
            $websetting = Websetting::find(1) ?? new WebSetting();
            $view->with('websetting',$websetting);
        });
    }
}
