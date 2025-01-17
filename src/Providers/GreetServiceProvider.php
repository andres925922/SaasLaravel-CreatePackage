<?php

namespace aconvertini\Greetr\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Log;

class GreetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load migrations
        $this->publishRequiredMigrations();
        
        // Publish config file
        $this->setupConfig();

        // Register routes
        // $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
        
        // Register middleware
        $this->app['router']->aliasMiddleware('greetMiddleware', \aconvertini\Greetr\Http\Middleware\GreetMiddleware::class);
    }

    public function register()
    {
        // Merge greet config
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/greet.php', 'greet'
        );
    }

    private function setupConfig(): void
    {
        $source = realpath($raw = __DIR__.'/../../config/greet.php') ?: $raw;
        Log::info('source: ' . $source);

        $this->publishes([
            $source => config_path('greet.php'),
        ], 'config');  // Ensure 'config' tag is correctly defined

    }

    private function publishRequiredMigrations()
    {
        if ($this->app->runningInConsole()) {
            $publishesMigrationsMethod = method_exists($this, 'publishesMigrations')
                ? 'publishesMigrations'
                : 'publishes';

            $this->{$publishesMigrationsMethod}([
                __DIR__.'/../../migrations' => database_path('migrations'),
            ], 'migrations');
        }
    }
}
