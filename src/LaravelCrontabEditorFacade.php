<?php

namespace Pentangle\LaravelCrontabEditor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pentangle\LaravelCrontabEditor\LaravelCrontabEditor
 */
class LaravelCrontabEditorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-crontab-editor';
    }
}
