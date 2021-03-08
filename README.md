# Laravel Buttmonkey

Rails-style scaffolding for Laravel Jetstreams.

## Installation

You can install the package via composer:

```bash
composer require iblue/laravel-buttmonkey --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan buttmonkey:install"
    ]
}
-```


## Usage

You can publish the stubs using this command:

```bash
php artisan buttmonkey:install
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email iblue@gmx.net instead of using the issue tracker.

## Credits

- [Markus Fenske](https://github.com/iblue)
- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
