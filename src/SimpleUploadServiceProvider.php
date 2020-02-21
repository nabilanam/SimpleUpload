<?php

namespace nabilanam\SimpleUpload;

use Illuminate\Support\ServiceProvider;

class SimpleUploadServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
        $this->app['config']['filesystems.disks.simpleupload'] = config('simpleupload.disk_config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/simpleupload.php', 'simpleupload');

        $this->app->bind('SimpleUpload', function ($app) {
            return new SimpleUpload;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['simpleupload'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        $this->publishes([
            __DIR__ . '/../config/simpleupload.php' => config_path('simpleupload.php'),
        ], 'simpleupload.config');
    }
}
