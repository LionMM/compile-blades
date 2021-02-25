<?php

namespace Lionmm\CompileBlades\Console;

use Illuminate\Console\Command;

class CompileAllBlades extends Command
{
    protected $signature = 'blades:all';
    protected $description = 'Compile all predefined views';

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
                'blades:compile',
                [
                    'blade-name' => $blade,
                    '--location' => $location
                ]
            );
            $bar->advance();
        }

        $bar->finish();

        $this->info('All blade templates compiled successfully!');

        return 0;
    }
}
