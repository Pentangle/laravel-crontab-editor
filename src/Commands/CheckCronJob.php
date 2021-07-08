<?php

namespace Pentangle\LaravelCrontabEditor\Commands;

use Illuminate\Console\Command;
use TiBeN\CrontabManager\CrontabAdapter;
use TiBeN\CrontabManager\CrontabJob;
use TiBeN\CrontabManager\CrontabRepository;

class CheckCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crontab-editor:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle()
    {
        $crontabRepository = new CrontabRepository(new CrontabAdapter());
        $path = getcwd();
        $crontabJob = CrontabJob::createFromCrontabLine('* * * * * cd '.$path.' && php artisan schedule:run >> /dev/null 2>&1');

        $check = collect()->push($crontabJob);

        echo collect($crontabRepository->getJobs())->contains($check->first()) ? "cron job enabled\n" : "cron job disabled\n";
    }
}
