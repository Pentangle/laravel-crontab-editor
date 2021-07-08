<?php

namespace Pentangle\LaravelCrontabEditor\Commands;

use Illuminate\Console\Command;

class LaravelCrontabEditorCommand extends Command
{
    public $signature = 'laravel-crontab-editor';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
