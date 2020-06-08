# Laravel third party. Facebook and Google third party built-in.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binarcode/y.svg?style=flat-square)](https://packagist.org/packages/binarcode/y)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/binarcode/y/run-tests?label=tests)](https://github.com/binarcode/y/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/binarcode/y.svg?style=flat-square)](https://packagist.org/packages/binarcode/y)


An easy way to add any third party to your application. As for example Facebook or Google SSO.

## Installation

You can install the package via composer:

```bash
composer require binarcode/larave-thirdparty
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="BinarCode\LaravelThirdParty\ThirdPartyServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="BinarCode\LaravelThirdParty\ThirdPartyServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
// 
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

If you discover any security related issues, please email eduard.lupacescu@binarcode.com instead of using the issue tracker.

## Credits

- [Eduard Lupacescu](https://github.com/binaryk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
