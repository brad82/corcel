<?php

/**
 * Corcel\Database
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */

namespace Corcel\Providers;

use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class CorcelServiceProvider extends ServiceProvider
{
    public function boot(Dispatcher $dispatcher)
    {
        $this->publishes([
            __DIR__.'/../../config/corcel.php' => config_path('corcel.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/corcel.php', 'corcel'
        );
    }
}