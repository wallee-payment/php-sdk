[![Build Status](https://travis-ci.org/wallee-payment/php-sdk.svg?branch=master)](https://travis-ci.org/wallee-payment/php-sdk)

# wallee SDK for PHP

This repository contains the open source PHP SDK that allows you to access wallee from your PHP app.

## Requirements

* [PHP 5.6.0 and later](http://www.php.net/)

## Documentation

https://app-wallee.com/doc/api/web-service

## Installation

You can use **Composer** or **install manually**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require wallee/sdk
```

### Manual Installation

Alternatively you can download the package in its entirety. The [Releases](../../releases) page lists all stable versions.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/php-sdk/autoload.php';
```

## Usage

### Basic Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Setup API client
$client = new \Wallee\Sdk\ApiClient('YOUR_USER_ID', 'YOUR_API_KEY');

// Create API service instance
$service = new \Wallee\Sdk\Service\SpaceService($client);

// The query restricts the spaces which are returned by the search.
$filter = new \Wallee\Sdk\Model\EntityQueryFilter();
$filter->setType(\Wallee\Sdk\Model\EntityQueryFilterType::LEAF);
$filter->setOperator(\Wallee\Sdk\Model\CriteriaOperator::EQUALS);
$filter->setFieldName('state');
$filter->setValue(\Wallee\Sdk\Model\CreationEntityState::ACTIVE);

$query = new \Wallee\Sdk\Model\EntityQuery();
$query->setFilter($filter);

try {
    $result = $service->search($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceService->search: ', $e->getMessage(), PHP_EOL;
}
```

## License

Please see the [license file](LICENSE) for more information.