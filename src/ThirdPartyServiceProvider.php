<?php

namespace BinarCode\LaravelThirdParty;

use BinarCode\LaravelThirdParty\Commands\MakeThirdPartyCommand;
use BinarCode\LaravelThirdParty\Http\Controllers\ThirdPartyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ThirdPartyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/thirdparty.php' => config_path('thirdparty.php'),
            ], 'config');

            if (! class_exists('CreatePackageTables')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_third_party_tables.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_third_party_tables.php'),
                ], 'migrations');
            }

            $this->commands([
                MakeThirdPartyCommand::class,
            ]);

            Route::macro('thirdparty', function (string $prefix) {
                Route::prefix($prefix)->group(function () {
                    Route::get('/', [ThirdPartyController::class, 'index']);
                });
            });
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/thirdparty.php', 'thirdparty');
    }
}
