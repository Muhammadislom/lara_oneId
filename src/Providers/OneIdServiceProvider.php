<?php
namespace Muhammadislom\oneId\Providers;

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

        $this->publishes([$path => config_path('config.php')], 'oneId');
        $this->mergeConfigFrom($path, 'oneId');
    }

    public function register()
    {
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('config.php'),
        ]);    }
}