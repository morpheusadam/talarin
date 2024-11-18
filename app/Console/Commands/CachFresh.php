<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class CachFresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cach:fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache and optimize autoload files';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Clearing cache and optimizing autoload files...');

        // Run artisan optimize:clear
        $this->call('optimize:clear');

        // Run composer dump-autoload
        $process = new Process(['composer', 'dump-autoload']);
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        if ($process->isSuccessful()) {
            $this->info('Cache cleared and autoload files optimized successfully!');
        } else {
            $this->error('An error occurred while optimizing autoload files.');
        }
    }
}