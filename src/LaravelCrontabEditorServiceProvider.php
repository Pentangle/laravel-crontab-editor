<?php

namespace Pentangle\LaravelCrontabEditor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pentangle\LaravelCrontabEditor\Commands\RegisterCronJob;

class LaravelCrontabEditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-crontab-editor')
            ->hasConfigFile()
            ->hasCommand(RegisterCronJob::class);
    }
}
