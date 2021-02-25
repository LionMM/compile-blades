<?php

namespace Techo\CompileBlades\Console;

use Illuminate\Console\Command;

class CompileAllBlades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compile:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compile all predefined views';

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
     * @return mixed
     */
    public function handle()
    {
        $autoCompilers = config('compileblades.auto_compilers');

        $bar = $this->output->createProgressBar(count($autoCompilers));
        $bar->start();

        foreach($autoCompilers as $blade => $location) {
            if(!in_array($blade, config('compileblades.excluded_views'))) {
                $this->callSilent('compile:blades', [
                    'blade-name' => $blade, '--location' => $location
                ]);
            }

            $bar->advance();
        }

        $bar->finish();
    }
}
