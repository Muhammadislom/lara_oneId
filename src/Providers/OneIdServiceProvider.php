<?php
namespace Muhammadislom\oneId\Providers;

use Illuminate\Support\ServiceProvider as baseServiceProvider;

class oneIdServiceProvider extends baseServiceProvider
{
    /**
     * Загрузка любых служб пакета.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('oneId.php')], 'config');
        $this->mergeConfigFrom($path, 'oneId');
    }
//    /**
//     * Регистрация любых служб пакета.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        $this->mergeConfigFrom(
//            __DIR__.'./../../configs/oneId.php', 'oneId'
//        );
//        $this->app->bind(OneIdClient::class);
//    }
}