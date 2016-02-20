<?php

namespace App\Providers;

use Tymon\JWTAuth\Providers\JWTAuthServiceProvider;

class CustomJWTAuthServiceProvider extends JWTAuthServiceProvider
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
     * Override JWTAuthServiceProvider to allow custom config file
     *
     * @return void
     */
    public function boot()
    {
        $this->app['config']->set('jwt', __DIR__.'/../../config/jwt.php');

        $this->bootBindings();
        $this->commands('tymon.jwt.generate');
    }
}
