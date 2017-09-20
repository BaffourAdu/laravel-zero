<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

// use Illuminate\Database\Capsule\Manager as DB;

class HelloCommand extends Command
{
    /**
     * The name and signature of the command.
     *
     * @var string
     */
    protected $signature = 'hello {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'The hello app command';

    /**
     * Execute the command. Here goes the code.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->info('Love beautiful code? We do too.');
        $this->notify('Hello ' . $this->argument('name'), 'Enjoy the fresh air!');
        $this->comment('Wanna see more? Type `php your-app-name list`');
    }

    /**
     * Define the command's schedule.
     *
     * Add the following cron entry:
     *     * * * * * php /path-to-your-project/your-app-name schedule:run >> /dev/null 2>&1
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     *
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
