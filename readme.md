# iso-3166
[![Build Status](https://travis-ci.org/jinas123/iso-3166.svg?branch=master)](https://travis-ci.org/jinas123/iso-3166)
[![StyleCI](https://github.styleci.io/repos/266107255/shield?branch=master)](https://github.styleci.io/repos/266107255?branch=master)

> Library to lookup information with ISO 3166-1 alpha-2, ISO 3166-1 alpha-3 and ISO 3166-1 numeric



### Installation
```bash
composer require jinas/iso-3166
```

### Usage
Get country by ISO 3166-1 Alpha-2
```php
use Jinas\ISO\ISO3166;

$iso = new ISO3166;
var_dump($iso->whereAlpha2('no'));

/* Returns:
  {
    country: 'Norway',
    alpha2: 'NO',
    alpha3: 'NOR',
    numeric: '578'
  }
*/
```

Get country by ISO 3166-1 Alpha-3
```php
use Jinas\ISO\ISO3166;

$iso = new ISO3166;
var_dump($iso->whereAlpha3('nor'));
/* Returns:
  {
    country: 'Norway',
    alpha2: 'NO',
    alpha3: 'NOR',
    numeric: '578'
  }
*/
```

Get country by ISO 3166-1 Numeric
```php
use Jinas\ISO\ISO3166;

$iso = new ISO3166;
var_dump($iso->whereNumeric(578));
/* Returns:
  {
    country: 'Norway',
    alpha2: 'NO',
    alpha3: 'NOR',
    numeric: '578'
  }
*/
```

Get values  by country name
```php
use Jinas\ISO\ISO3166;

$iso = new ISO3166;
var_dump($iso->whereCountry("norway"));

/* Returns:
  {
    country: 'Norway',
    alpha2: 'NO',
    alpha3: 'NOR',
    numeric: '578'
  }
*/
```

### License
MIT © [Mohamed Jinas](https://jinas.me)
