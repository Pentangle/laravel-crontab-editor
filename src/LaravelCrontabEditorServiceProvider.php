<?php

namespace Pentangle\LaravelCrontabEditor;

use Pentangle\LaravelCrontabEditor\Commands\CheckCronJob;
use Pentangle\LaravelCrontabEditor\Commands\DisableCronJob;
use Pentangle\LaravelCrontabEditor\Commands\RegisterCronJob;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasCommand(CheckCronJob::class)
            ->hasCommand(DisableCronJob::class)
            ->hasCommand(RegisterCronJob::class);
    }
}
