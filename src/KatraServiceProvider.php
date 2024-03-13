<?php

namespace Katra\UI;

use Illuminate\Support\ServiceProvider;

class KatraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
