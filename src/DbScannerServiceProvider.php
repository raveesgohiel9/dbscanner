<?php

namespace Raveesgohiel\Dbscanner;

use Illuminate\Support\ServiceProvider;

class DbScannerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->singleton('dbscanner', function($app){
            return new DbScannerService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
