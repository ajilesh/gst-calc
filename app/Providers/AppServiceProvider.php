<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Gst;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(Gst::class,function(){
        //     dd();
        //     //return new Gst('','');
        // });
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
