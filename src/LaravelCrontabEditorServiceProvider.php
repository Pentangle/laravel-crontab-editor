<?php

namespace Pentangle\LaravelCrontabEditor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pentangle\LaravelCrontabEditor\Commands\LaravelCrontabEditorCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-crontab-editor_table')
            ->hasCommand(LaravelCrontabEditorCommand::class);
    }
}
