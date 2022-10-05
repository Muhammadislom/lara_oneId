<?php
namespace muhammadislom\oneid\Providers;

use Illuminate\Support\ServiceProvider;

class oneIdServiceProvider extends ServiceProvider
{
    /**
     * Загрузка любых служб пакета.
     *
     * @return void
     */


    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('oneId.php')], 'oneId');
        $this->mergeConfigFrom($path, 'oneId');

//        $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
//        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom();


    }

    public function register()
    {
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('oneId.php'),
        ]);    }
}