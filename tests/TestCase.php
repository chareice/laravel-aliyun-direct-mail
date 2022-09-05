<?php

namespace Chareice\LaravelAliyunDirectMail\Tests;

use Chareice\LaravelAliyunDirectMail\LaravelAliyunDirectMailServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAliyunDirectMailServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-aliyun-direct-mail_table.php.stub';
        $migration->up();
        */
    }
}
