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
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('oneId.php'),
        ]);
    }

//    public function register()
//    {
//        $this->mergeConfigFrom(__DIR__.'../../config/config.php', 'oneId');
//    }
}