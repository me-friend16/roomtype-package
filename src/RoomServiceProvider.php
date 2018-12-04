<?php

namespace Sameer\Roompkg;

use Illuminate\Support\serviceProvider;

class RoomServiceProvider extends ServiceProvider
{

    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
       $this->loadViewsFrom(__DIR__.'/views','roompkg');
       $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    } 

    public function register()
    {

    }

}

?>