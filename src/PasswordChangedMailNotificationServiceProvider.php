<?php

namespace Pradeep-sati12\PasswordChangedMailNotification;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pradeep-sati12\PasswordChangedMailNotification\Commands\PasswordChangedMailNotificationCommand;

class PasswordChangedMailNotificationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('password-changed-mail-notification')
            ->hasViews();

    }
}
