<?php

namespace App\Providers;

use App\Models\Setting;
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
        view()->composer('*',function($view) {
            $view->with('hospital_name', Setting::where('setting_name', '=', 'hospital_name')->first());
            $view->with('hospital_code', Setting::firstWhere('setting_name', 'hospital_code'));

        });
    }
}
