<?php

namespace Andreia\FilamentNordTheme;

use Andreia\FilamentNordTheme\Console\FilamentNordThemeInstall;
use Illuminate\Support\ServiceProvider;

class FilamentNordThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/filament-nord-theme.php', 'filament-nord-theme');

        $this->publishes([
            __DIR__ . '/../config/filament-nord-theme.php' => config_path('filament-nord-theme.php'),
        ], 'filament-nord-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-nord-theme'),
        ], 'filament-nord-theme-views');
    }

    public function boot(): void
    {
        //
    }
}
