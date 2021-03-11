<?php

namespace Lionmm\CompileBlades;

use Illuminate\Support\ServiceProvider;
use Lionmm\CompileBlades\Console\CompileAutoBlades;
use Lionmm\CompileBlades\Console\CompileBlades;

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
                    CompileAutoBlades::class,
                ]
            );
        }

        $this->publishes(
            [
                __DIR__ . '/config/compileblades.php' => config_path('compileblades.php'),
            ],
            'config'
        );
    }
}
