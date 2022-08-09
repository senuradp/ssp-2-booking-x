<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\SSP2BookingX;

class SSP2BookingXServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //registered custom object/class SSP2BookingX as a singleton instance into the container itself
        $this->app->singleton('SSP2BookingX', function (){
            return new SSP2BookingX();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
