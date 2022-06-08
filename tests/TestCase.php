<?php

namespace Pradeep-sati12\PasswordChangedMailNotification\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Pradeep-sati12\PasswordChangedMailNotification\PasswordChangedMailNotificationServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Pradeep-sati12\\PasswordChangedMailNotification\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PasswordChangedMailNotificationServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        
        $migration = include __DIR__.'/../database/migrations/create_user_table.php.stub';
        $migration->up();
        
    }
}
