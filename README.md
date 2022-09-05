# Aliyun Direct Mail Api for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chareice/laravel-aliyun-direct-mail.svg?style=flat-square)](https://packagist.org/packages/chareice/laravel-aliyun-direct-mail)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/chareice/laravel-aliyun-direct-mail/run-tests?label=tests)](https://github.com/chareice/laravel-aliyun-direct-mail/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/chareice/laravel-aliyun-direct-mail/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/chareice/laravel-aliyun-direct-mail/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chareice/laravel-aliyun-direct-mail.svg?style=flat-square)](https://packagist.org/packages/chareice/laravel-aliyun-direct-mail)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require chareice/laravel-aliyun-direct-mail
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-aliyun-direct-mail-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-aliyun-direct-mail-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-aliyun-direct-mail-views"
```

## Usage

```php
$laravelAliyunDirectMail = new Chareice\LaravelAliyunDirectMail();
echo $laravelAliyunDirectMail->echoPhrase('Hello, Chareice!');
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

- [chareice](https://github.com/Chareice)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
