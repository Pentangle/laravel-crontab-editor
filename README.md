# registers commands that can enable cron for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pentangle/laravel-crontab-editor.svg?style=flat-square)](https://packagist.org/packages/pentangle/laravel-crontab-editor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pentangle/laravel-crontab-editor/run-tests?label=tests)](https://github.com/pentangle/laravel-crontab-editor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pentangle/laravel-crontab-editor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/pentangle/laravel-crontab-editor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pentangle/laravel-crontab-editor.svg?style=flat-square)](https://packagist.org/packages/pentangle/laravel-crontab-editor)

## Installation

You can install the package via composer:

```bash
composer require pentangle/laravel-crontab-editor
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Pentangle\LaravelCrontabEditor\LaravelCrontabEditorServiceProvider" --tag="laravel-crontab-editor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
php artisan crontab-editor:setup
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Séan Poynter-Smith](https://github.com/Pentangle)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
