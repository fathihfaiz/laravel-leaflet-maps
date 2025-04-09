<?php

namespace FathihFaiz\LeafletMaps;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelLeafletMapsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'leaflet-maps');

        Blade::component('leaflet-maps::components.leaflet', Components\Leaflet::class);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/leaflet-maps'),
        ], 'leaflet-views');
    }

    public function register(): void {}
}
