<?php

namespace BinarCode\LaravelThirdParty;

use Illuminate\Support\ServiceProvider;
use BinarCode\LaravelThirdParty\Commands\SkeletonCommand;

class ThirdPartyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/thirdparty.php' => config_path('thirdparty.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/thirdparty'),
            ], 'views');

            if (! class_exists('CreatePackageTables')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_third_party_tables.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_third_party_tables.php'),
                ], 'migrations');
            }

            $this->commands([
                SkeletonCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'thirdparty');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/thirdparty.php', 'thirdparty');
    }
}
