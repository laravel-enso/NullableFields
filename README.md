# NullableFileds
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/92109b0399964d21b9ea4d950a7cc40b)](https://www.codacy.com/app/laravel-enso/NullableFields?utm_source=github.com&utm_medium=referral&utm_content=laravel-enso/NullableFields&utm_campaign=badger)
[![StyleCI](https://styleci.io/repos/85712610/shield?branch=master)](https://styleci.io/repos/85712610)
[![Total Downloads](https://poser.pugx.org/laravel-enso/nullablefields/downloads)](https://packagist.org/packages/laravel-enso/nullablefields)
[![Latest Stable Version](https://poser.pugx.org/laravel-enso/nullablefields/version)](https://packagist.org/packages/laravel-enso/nullablefields)

Trait for nullable fields heavily inspired from michaeldyrynda/laravel-nullable-fields package.

### Use

1. In the Model where you want empty strings to be set to null add

```
use LaravelEnso\NullableFileds\app\Traits\NullableFileds
```

then set the attribute that shold be transformed:

```
protected $nullableFields = ['attribute', ...]
```

### Note

The laravel-enso/core package comes with this library included.