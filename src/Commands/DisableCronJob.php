<?php

namespace Pentangle\LaravelCrontabEditor\Commands;

use Illuminate\Console\Command;
use TiBeN\CrontabManager\CrontabAdapter;
use TiBeN\CrontabManager\CrontabJob;
use TiBeN\CrontabManager\CrontabRepository;

class DisableCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crontab-editor:disable';

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
     * @return int
     */
    public function handle()
    {
        $crontabRepository = new CrontabRepository(new CrontabAdapter());
        $path = getcwd();
        $crontabJob = CrontabJob::createFromCrontabLine('* * * * * cd '.$path.' && php artisan schedule:run >> /dev/null 2>&1');

        $check = collect()->push($crontabJob);

        if (collect($crontabRepository->getJobs())->contains($check->first())) {
            $results = $crontabRepository->findJobByRegex('/php\ artisan\ schedule:run/');
            $crontabJob = $results[0];
            $crontabRepository->removeJob($crontabJob);
            $crontabRepository->persist();
            echo "cron job removed\n";
        }
    }
}
