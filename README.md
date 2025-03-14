# Package to quickly set up log formatter in json format that is supported by elk stack

[//]: # ([![Latest Version on Packagist]&#40;https://img.shields.io/packagist/v/vmorozov/laravel-json-log-formatter.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/vmorozov/laravel-json-log-formatter&#41;)

[//]: # ([![GitHub Tests Action Status]&#40;https://img.shields.io/github/actions/workflow/status/vmorozov/laravel-json-log-formatter/run-tests.yml?branch=main&label=tests&style=flat-square&#41;]&#40;https://github.com/vmorozov/laravel-json-log-formatter/actions?query=workflow%3Arun-tests+branch%3Amain&#41;)

[//]: # ([![GitHub Code Style Action Status]&#40;https://img.shields.io/github/actions/workflow/status/vmorozov/laravel-json-log-formatter/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square&#41;]&#40;https://github.com/vmorozov/laravel-json-log-formatter/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain&#41;)

[//]: # ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/vmorozov/laravel-json-log-formatter.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/vmorozov/laravel-json-log-formatter&#41;)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel_json_log_formatter.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel_json_log_formatter)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require vmorozov/laravel-json-log-formatter
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="json-log-formatter-config"
```

 Add the following to your `config/logging.php` file to the channel that you want in json format:

```php
'formatter' => \VMorozov\LaravelJsonLogFormatter\JsonLogsFormatter::class,
```

for example for 'daily' channel it should look like this:
```php
'daily' => [
    'driver' => 'daily',
    'path' => storage_path('logs/laravel.log'),
    'level' => env('LOG_LEVEL', 'debug'),
    'days' => env('LOG_DAILY_DAYS', 15),
    'replace_placeholders' => true,
    'formatter' => \VMorozov\LaravelJsonLogFormatter\JsonLogsFormatter::class,
],
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Volodymyr Morozov](https://github.com/freezer278)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
