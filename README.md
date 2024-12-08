# Filament Nord Theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/andreia/filament-nord-theme.svg?style=flat-square)](https://packagist.org/packages/andreia/filament-nord-theme)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/andreia/filament-nord-theme/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/andreia/filament-nord-theme/actions?query=workflow%3Arun-tests+branch%3Amain)
![GitHub Code Style Action Status](https://github.com/andreia/filament-nord-theme/actions/workflows/fix-php-code-style-issues.yml/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/andreia/filament-nord-theme.svg?style=flat-square)](https://packagist.org/packages/andreia/filament-nord-theme)

A light and dark arctic Nord theme for Filament PHP.

![Dashboard Light and Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/dashboard.jpg)

## Installation

```bash
composer require andreia/filament-nord-theme
```

To install the theme's required JS libraries (install TailwindCSS plugins: forms, typography, and also postcss, and autoprefixer. Create postcss.config.js if it not exists yet), run:

```bash
php artisan filament-nord-theme:install
```

Add a new item to the `input` array of your `vite.config.js` file:

```js
'vendor/andreia/filament-nord-theme/resources/css/theme.css'
```

Run:

```bash
npm run build
```

Register the plugin on your panel (e.g. `/app/Providers/Filament/AdminPanelProvider.php`):

```php
use Andreia\FilamentNordTheme\FilamentNordThemePlugin;

$panel
  ->plugin(FilamentNordThemePlugin::make())
```

## Appearance

### Dashboard

![Dashboard Light](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/dashboard_light.png)
![Dashboard Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/dashboard_dark.png)

### User Menu

![User Menu Light](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/user_menu_light.png)
![User Menu Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/user_menu_dark.png)

### Product

![Create Product Light](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/product_create_light.png)
![Create Product Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/product_create_dark.png)

### Order

![Order List Light](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/orders_light.png)
![Order List Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/orders_dark.png)

![Create Order Light](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/order_create_light.png)
![Create Order Dark](https://raw.githubusercontent.com/andreia/filament-nord-theme/main/docs/order_create_dark.png)
