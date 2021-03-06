<?php

namespace Lionmm\CompileBlades\Console;

use Illuminate\Console\Command;

class CompileAutoBlades extends Command
{
    protected $signature = 'view:compile:auto';
    protected $description = 'Flatten predefined application\'s Blade templates. Run it before view:cache!';

    public function handle(): int
    {
        $autoCompilers = config('compileblades.auto_compilers');

        $bar = $this->output->createProgressBar(count($autoCompilers));
        $bar->start();

        foreach ($autoCompilers as $blade => $location) {
            if (in_array($blade, config('compileblades.excluded_views'), true)) {
                continue;
            }
            $this->callSilent(
                'view:compile',
                [
                    'blade-name' => $blade,
                    '--location' => $location
                ]
            );
            $bar->advance();
        }

        $bar->finish();

        $this->info(PHP_EOL . 'All blade templates compiled successfully!');

        return 0;
    }
}
