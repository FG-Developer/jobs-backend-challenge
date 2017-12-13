<?php

namespace Fg\Developer\JobsBackEndChallenge;

use Illuminate\Support\ServiceProvider;

class JobsBackEndChallengeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish migrations
        $this->publishes([
            __DIR__ . '/../src/database/migrations' => database_path('migrations')
        ], 'migrations');


        // Publish models
        $this->publishes([
            __DIR__ . '/../src/database/models' => app_path()
        ], 'models');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
