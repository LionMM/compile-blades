<?php

namespace Techo\CompileBlades;

use Illuminate\Support\ServiceProvider;
use Techo\CompileBlades\Console\CompileBlades;

/**
 * Class CompileBladesServiceProvider
 * @package Techo\CompileBlades
 */
class CompileBladesServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    CompileBlades::class,
                    CompileAllBlades::class,
                ]
            );
        }

        $this->publishes([
            __DIR__.'/config/compileblades.php' => config_path('compileblades.php'),
        ], 'config');
    }
}
