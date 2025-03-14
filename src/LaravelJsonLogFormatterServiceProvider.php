<?php

namespace VMorozov\LaravelJsonLogFormatter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelJsonLogFormatterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-json-log-formatter')
            ->hasConfigFile('json_log_formatter');
    }
}
