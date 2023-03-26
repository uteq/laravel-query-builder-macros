# A set of useful macros for the query builder
[![Latest Version on Packagist](https://img.shields.io/packagist/v/uteq/laravel-query-builder-macros.svg?style=flat-square)](https://packagist.org/packages/uteq/laravel-query-builder-macros)
![Run tests](https://github.com/uteq/laravel-query-builder-macros/workflows/run-tests/badge.svg)
![Check & fix styling](https://github.com/uteq/laravel-query-builder-macros/workflows/Check%20&%20fix%20styling/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/uteq/laravel-query-builder-macros.svg?style=flat-square)](https://packagist.org/packages/uteq/laravel-query-builder-macros)

Adds useful functionality to the Laravel Query Builder
`Illuminate\Database\Query\Builder`.

## Installation

```bash
composer require uteq/laravel-query-builder-macros
```

Or add the Uteq Laravel Support package
```bash
composer require uteq/laravel-support
```

### `rawQuery`
```php
$rawQuery = Account::query()
    ->where('email', 'john')
    ->getQuery() // You need to do this to get the rawQuery
    ->rawQuery();
// return `select * from "account" where "email" = 'john'` 
```

### `ddQuery`
```php
Account::query()
    ->where('email', 'john')
    ->ddQuery();
// dd() of `select * from "account" where "email" = 'john'`
```

### `dumpQuery`
```php
Account::query()
    ->where('email', 'john')
    ->dumpQuery();
// dump() of `select * from "account" where "email" = 'john'`
//  the execution of the script will continue
```


### `rayQuery`
```php
Account::query()
    ->where('email', 'john')
    ->rayQuery();
// ray() of `select * from "account" where "email" = 'john'`
//  the execution of the script will continue
```

## Inspiration by
Building this package I got inspired by the following:
- https://stackoverflow.com/a/53337416
- http://github.com/spatie/laravel-collection-macros
- https://github.com/spatie/package-skeleton-laravel

## Credits
- [Nathan Jansen](https://github.com/nathanjansen)
- [Leo Flapper](https://github.com/leoflapper)
- [All Contributors](../../contributors)

## Testing
``` bash
$ composer test
```

## About Uteq
We are a web development agency based in the Netherlands. 
We design and build web applications for our clients. 
We are specialized in Laravel with Livewire.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
