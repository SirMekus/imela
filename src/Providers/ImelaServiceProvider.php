<?php
 
namespace Imela\Providers;
 
use Illuminate\Support\ServiceProvider;
 
class ImelaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/imela.php' => config_path('imela.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'imela');
    }
}