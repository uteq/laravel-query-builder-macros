# A set of useful macros for the query builder
Adds useful functionality to the Laravel Query Builder
`Illuminate\Database\Query\Builder`

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
    ->getQuery()
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
