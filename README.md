php-google-maps-place

Installation
------------

```bash
composer require misteraladin/php-google-maps-place:dev-master
```

Usage
-----

```php
<?php

use Redzjovi\GoogleMapsPlace\Requests\FindPlaceRequest;
use Redzjovi\GoogleMapsPlace\Client;

$client = new Client(
    getenv('GOOGLE_MAPS_PLACE_KEY')
);

$response = $client->findPlace(new FindPlaceRequest(
    'Jakarta',
    FindPlaceRequest::INPUTTYPE_TEXTQUERY
));
```

How to test with PHPUnit
-----

```bash
phpunit --filter /test_find_place$/
phpunit
```
