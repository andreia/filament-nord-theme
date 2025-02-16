<?php

namespace Andreia\FilamentNordTheme\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FilamentNordThemeInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'filament-nord-theme:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Filament Nord theme assets';

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
        $this->info('Publishing Vendor Assets...');

        exec('npm -v', $npmVersion, $npmVersionExistCode);

        if ($npmVersionExistCode !== 0) {
            $this->error('Node.js is not installed. Please install it before continuing.');

            return static::FAILURE;
        }

        $this->info("Using NPM v{$npmVersion[0]} to install the required TailwindCSS plugins: forms, typography, and also postcss, postcss-nesting, and autoprefixer...");

        exec('npm install tailwindcss @tailwindcss/forms @tailwindcss/typography postcss postcss-nesting autoprefixer --save-dev');

        $this->info('Checking if postcss.config.js file exists and creating it if not...');

        $postcssConfigPath = base_path('postcss.config.js');

        if (! File::exists($postcssConfigPath)) {
            File::copy(__DIR__ . '/../../stubs/postcssConfig.stub', base_path('postcss.config.js'));

            $this->info('postcss.config.js file created.');
        }

        $this->info('Executing run npm install && npm run build');
        exec('npm install && npm run build');

        $this->info('Filament Nord Theme installed successfully!');

        return static::SUCCESS;
    }
}
