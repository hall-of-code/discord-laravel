<?php

namespace hallofcode\discordLaravel;

use Illuminate\Support\ServiceProvider;

class DiscordLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        echo ('Hello');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        return ('Hello');
    }
}
