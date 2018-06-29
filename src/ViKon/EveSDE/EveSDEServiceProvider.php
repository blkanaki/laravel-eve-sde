<?php

namespace ViKon\EveSDE;

use Illuminate\Support\ServiceProvider;

class EveSDEServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../../../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register() {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }
}