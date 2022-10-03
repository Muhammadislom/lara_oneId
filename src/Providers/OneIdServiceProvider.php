<?php
namespace Muhammadislom\oneId\Providers;

use Illuminate\Support\ServiceProvider;

class oneIdServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');
        $this->publishes([$path => config_path('oneId.php')], 'config');
        $this->mergeConfigFrom($path, 'oneId');
    }

//    public function register()
//    {
//        $this->mergeConfigFrom(__DIR__.'../../config/config.php', 'oneId');
//    }
}