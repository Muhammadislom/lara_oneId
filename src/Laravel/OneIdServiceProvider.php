<?php
namespace oneId\Laravel;

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
        $this->publishes([
            __DIR__.'./../../configs/oneId.php' => config_path('oneId.php'),
        ]);
    }
    /**
     * Регистрация любых служб пакета.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'./../../configs/oneId.php', 'oneId'
        );
        $this->app->bind(OneIdClient::class);
    }
}