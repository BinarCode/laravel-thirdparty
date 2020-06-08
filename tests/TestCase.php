<?php

namespace BinarCode\LaravelThirdParty\Tests;

use BinarCode\LaravelThirdParty\ThirdPartyServiceProvider;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/database/factories');

        Route::thirdparty('my-thirdparty-routes');
    }

    protected function getPackageProviders($app)
    {
        return [
            ThirdPartyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);


        include_once __DIR__.'/../database/migrations/create_third_party_tables.php.stub';
        (new \CreateThirdPartyTables())->up();
    }
}
