# Shaype\Client\CustomersAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockCustomer()**](CustomersAPIApi.md#blockCustomer) | **POST** /v0/customers/{customerId}/block | Block Customer |
| [**changeHayCustomerStatus()**](CustomersAPIApi.md#changeHayCustomerStatus) | **PATCH** /v0/customers/{customerId}/status | Update Customer status |
| [**createHayAccount()**](CustomersAPIApi.md#createHayAccount) | **POST** /v0/customers/{customerHayId}/account | Create Account for Customer - (To be DEPRECATED - Use POST /v1/accounts instead) |
| [**createHayCustomer()**](CustomersAPIApi.md#createHayCustomer) | **POST** /v0/customers/create | Create Customer |
| [**getAccountsForCustomerId()**](CustomersAPIApi.md#getAccountsForCustomerId) | **GET** /v0/customers/{customerHayId}/accounts | Get Account by Customer ID |
| [**getAllCustomers()**](CustomersAPIApi.md#getAllCustomers) | **GET** /v0/customers | Get all Customers |
| [**getCardsForCustomerId()**](CustomersAPIApi.md#getCardsForCustomerId) | **GET** /v0/customers/{customerHayId}/cards | Get Cards by Customer ID |
| [**getHayCustomerById()**](CustomersAPIApi.md#getHayCustomerById) | **GET** /v0/customers/{customerId} | Get Customer by ID |
| [**searchCustomers()**](CustomersAPIApi.md#searchCustomers) | **POST** /v0/customers/search | Search Customers |
| [**unblockCustomer()**](CustomersAPIApi.md#unblockCustomer) | **POST** /v0/customers/{customerId}/unblock | Unblock Customer |
| [**updateCustomer()**](CustomersAPIApi.md#updateCustomer) | **PATCH** /v0/customers/{customerId} | Update Customer details |


## `blockCustomer()`

```php
blockCustomer($customer_id, $block_customer_request_body): \Shaype\Client\Model\GenericMessage
```

Block Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the customer
$block_customer_request_body = new \Shaype\Client\Model\BlockCustomerRequestBody(); // \Shaype\Client\Model\BlockCustomerRequestBody

try {
    $result = $apiInstance->blockCustomer($customer_id, $block_customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->blockCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the customer | |
| **block_customer_request_body** | [**\Shaype\Client\Model\BlockCustomerRequestBody**](../Model/BlockCustomerRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeHayCustomerStatus()`

```php
changeHayCustomerStatus($customer_id, $change_hay_customer_status_request_body): \Shaype\Client\Model\HayCustomer
```

Update Customer status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer
$change_hay_customer_status_request_body = new \Shaype\Client\Model\ChangeHayCustomerStatusRequestBody(); // \Shaype\Client\Model\ChangeHayCustomerStatusRequestBody

try {
    $result = $apiInstance->changeHayCustomerStatus($customer_id, $change_hay_customer_status_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->changeHayCustomerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |
| **change_hay_customer_status_request_body** | [**\Shaype\Client\Model\ChangeHayCustomerStatusRequestBody**](../Model/ChangeHayCustomerStatusRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCustomer**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHayAccount()`

```php
createHayAccount($customer_hay_id, $create_hay_account_request): \Shaype\Client\Model\HayAccount
```

Create Account for Customer - (To be DEPRECATED - Use POST /v1/accounts instead)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_hay_id = 'customer_hay_id_example'; // string | Unique identifier (UUID) of the Customer
$create_hay_account_request = new \Shaype\Client\Model\CreateHayAccountRequest(); // \Shaype\Client\Model\CreateHayAccountRequest

try {
    $result = $apiInstance->createHayAccount($customer_hay_id, $create_hay_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->createHayAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_hay_id** | **string**| Unique identifier (UUID) of the Customer | |
| **create_hay_account_request** | [**\Shaype\Client\Model\CreateHayAccountRequest**](../Model/CreateHayAccountRequest.md)|  | |

### Return type

[**\Shaype\Client\Model\HayAccount**](../Model/HayAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHayCustomer()`

```php
createHayCustomer($create_hay_customer_request_body): \Shaype\Client\Model\HayCustomer
```

Create Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_hay_customer_request_body = new \Shaype\Client\Model\CreateHayCustomerRequestBody(); // \Shaype\Client\Model\CreateHayCustomerRequestBody

try {
    $result = $apiInstance->createHayCustomer($create_hay_customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->createHayCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_hay_customer_request_body** | [**\Shaype\Client\Model\CreateHayCustomerRequestBody**](../Model/CreateHayCustomerRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCustomer**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsForCustomerId()`

```php
getAccountsForCustomerId($customer_hay_id): \Shaype\Client\Model\HayAccount[]
```

Get Account by Customer ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_hay_id = 'customer_hay_id_example'; // string | Unique identifier (UUID) of the Customer

try {
    $result = $apiInstance->getAccountsForCustomerId($customer_hay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->getAccountsForCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_hay_id** | **string**| Unique identifier (UUID) of the Customer | |

### Return type

[**\Shaype\Client\Model\HayAccount[]**](../Model/HayAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCustomers()`

```php
getAllCustomers($offset, $limit): \Shaype\Client\Model\HayCustomer[]
```

Get all Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | Offset used for paging results
$limit = 56; // int | List fetch limit

try {
    $result = $apiInstance->getAllCustomers($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->getAllCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset used for paging results | |
| **limit** | **int**| List fetch limit | |

### Return type

[**\Shaype\Client\Model\HayCustomer[]**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardsForCustomerId()`

```php
getCardsForCustomerId($customer_hay_id): \Shaype\Client\Model\HayCard[]
```

Get Cards by Customer ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_hay_id = 'customer_hay_id_example'; // string | Unique identifier (UUID) of the Customer

try {
    $result = $apiInstance->getCardsForCustomerId($customer_hay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->getCardsForCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_hay_id** | **string**| Unique identifier (UUID) of the Customer | |

### Return type

[**\Shaype\Client\Model\HayCard[]**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHayCustomerById()`

```php
getHayCustomerById($customer_id): \Shaype\Client\Model\HayCustomer
```

Get Customer by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer

try {
    $result = $apiInstance->getHayCustomerById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->getHayCustomerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |

### Return type

[**\Shaype\Client\Model\HayCustomer**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomers()`

```php
searchCustomers($limit, $offset, $search_customers_request_body): \Shaype\Client\Model\HayCustomer[]
```

Search Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | List fetch limit, value between 1 and 1000
$offset = 56; // int | Offset used for paging results
$search_customers_request_body = new \Shaype\Client\Model\SearchCustomersRequestBody(); // \Shaype\Client\Model\SearchCustomersRequestBody

try {
    $result = $apiInstance->searchCustomers($limit, $offset, $search_customers_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **offset** | **int**| Offset used for paging results | |
| **search_customers_request_body** | [**\Shaype\Client\Model\SearchCustomersRequestBody**](../Model/SearchCustomersRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCustomer[]**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockCustomer()`

```php
unblockCustomer($customer_id, $unblock_customer_request_body): \Shaype\Client\Model\GenericMessage
```

Unblock Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the customer
$unblock_customer_request_body = new \Shaype\Client\Model\UnblockCustomerRequestBody(); // \Shaype\Client\Model\UnblockCustomerRequestBody

try {
    $result = $apiInstance->unblockCustomer($customer_id, $unblock_customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->unblockCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the customer | |
| **unblock_customer_request_body** | [**\Shaype\Client\Model\UnblockCustomerRequestBody**](../Model/UnblockCustomerRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($customer_id, $update_customer_request_body): \Shaype\Client\Model\HayCustomer
```

Update Customer details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CustomersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer
$update_customer_request_body = new \Shaype\Client\Model\UpdateCustomerRequestBody(); // \Shaype\Client\Model\UpdateCustomerRequestBody

try {
    $result = $apiInstance->updateCustomer($customer_id, $update_customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAPIApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |
| **update_customer_request_body** | [**\Shaype\Client\Model\UpdateCustomerRequestBody**](../Model/UpdateCustomerRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCustomer**](../Model/HayCustomer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
