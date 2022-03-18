<?php

namespace Redzjovi\GoogleMapsPlace\Frameworks\Laravel\App\Providers;

use Illuminate\Support\ServiceProvider;
use Redzjovi\GoogleMapsPlace\Client;

class GoogleMapsPlaceServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->offerPublishing();
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/google-maps-place.php', 'google-maps-place');

        $this->app->singleton(Client::class, function () {
            return new Client(
                config('google-maps-place.key')
            );
        });
    }

    protected function offerPublishing()
    {
        if (! function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__.'/../../config/google-maps-place.php' => config_path('google-maps-place.php'),
        ], 'config');
    }
}