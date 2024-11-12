# Shaype\Client\StacksAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountToStackTransfer()**](StacksAPIApi.md#accountToStackTransfer) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/transfer-in | Transfer funds from Account to Stack |
| [**closeStack()**](StacksAPIApi.md#closeStack) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/close | Close Stack |
| [**createStack()**](StacksAPIApi.md#createStack) | **POST** /v0/accounts/{accountId}/stacks | Create new stack |
| [**getAllStackTransactions()**](StacksAPIApi.md#getAllStackTransactions) | **GET** /v0/accounts/{accountId}/stacks/transactions | Get all Stack Transactions by Account ID |
| [**getAllStacks()**](StacksAPIApi.md#getAllStacks) | **GET** /v0/accounts/{accountId}/stacks | Get all Stacks by Account ID |
| [**getTransactionsForStack()**](StacksAPIApi.md#getTransactionsForStack) | **GET** /v0/accounts/{accountId}/stacks/{stackId}/transactions | Get all Stack Transactions by Stack ID |
| [**stackToAccountTransfer()**](StacksAPIApi.md#stackToAccountTransfer) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/transfer-out | Transfer funds from Stack to Account |
| [**stackToStackTransfer()**](StacksAPIApi.md#stackToStackTransfer) | **POST** /v0/accounts/{accountId}/stacks/transactions | Transfer funds from Stack to Stack of an Account |
| [**updateStack()**](StacksAPIApi.md#updateStack) | **PUT** /v0/accounts/{accountId}/stacks/{stackId} | Update Stack |


## `accountToStackTransfer()`

```php
accountToStackTransfer($account_id, $stack_id, $account_to_stack_transfer_request_body): string
```

Transfer funds from Account to Stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$stack_id = 'stack_id_example'; // string | Unique identifier (UUID) of the Stack
$account_to_stack_transfer_request_body = new \Shaype\Client\Model\AccountToStackTransferRequestBody(); // \Shaype\Client\Model\AccountToStackTransferRequestBody

try {
    $result = $apiInstance->accountToStackTransfer($account_id, $stack_id, $account_to_stack_transfer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->accountToStackTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **stack_id** | **string**| Unique identifier (UUID) of the Stack | |
| **account_to_stack_transfer_request_body** | [**\Shaype\Client\Model\AccountToStackTransferRequestBody**](../Model/AccountToStackTransferRequestBody.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeStack()`

```php
closeStack($account_id, $stack_id): bool
```

Close Stack

Funds will be transferred into account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$stack_id = 'stack_id_example'; // string | Unique identifier (UUID) of the Stack

try {
    $result = $apiInstance->closeStack($account_id, $stack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->closeStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **stack_id** | **string**| Unique identifier (UUID) of the Stack | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStack()`

```php
createStack($account_id, $create_hay_stack_request_body): bool
```

Create new stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$create_hay_stack_request_body = new \Shaype\Client\Model\CreateHayStackRequestBody(); // \Shaype\Client\Model\CreateHayStackRequestBody

try {
    $result = $apiInstance->createStack($account_id, $create_hay_stack_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->createStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **create_hay_stack_request_body** | [**\Shaype\Client\Model\CreateHayStackRequestBody**](../Model/CreateHayStackRequestBody.md)|  | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStackTransactions()`

```php
getAllStackTransactions($account_id, $offset, $limit, $type): \Shaype\Client\Model\HayStackTransaction[]
```

Get all Stack Transactions by Account ID

Retrieves all transactions across all Stacks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$offset = 56; // int | Offset used for paging results
$limit = 56; // int | List fetch limit, value between 1 and 1000
$type = 'type_example'; // string | Stack transaction type

try {
    $result = $apiInstance->getAllStackTransactions($account_id, $offset, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->getAllStackTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **offset** | **int**| Offset used for paging results | |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **type** | **string**| Stack transaction type | [optional] |

### Return type

[**\Shaype\Client\Model\HayStackTransaction[]**](../Model/HayStackTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStacks()`

```php
getAllStacks($account_id, $include_closed): \Shaype\Client\Model\HayStack[]
```

Get all Stacks by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$include_closed = false; // bool | Includes closed Stacks if set to true (default to false if no option provided)

try {
    $result = $apiInstance->getAllStacks($account_id, $include_closed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->getAllStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **include_closed** | **bool**| Includes closed Stacks if set to true (default to false if no option provided) | [optional] [default to false] |

### Return type

[**\Shaype\Client\Model\HayStack[]**](../Model/HayStack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsForStack()`

```php
getTransactionsForStack($account_id, $stack_id, $offset, $limit, $type): \Shaype\Client\Model\HayStackTransaction[]
```

Get all Stack Transactions by Stack ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$stack_id = 'stack_id_example'; // string | Unique identifier (UUID) of the Stack
$offset = 56; // int | Offset used for paging results
$limit = 56; // int | List fetch limit, value between 1 and 1000
$type = 'type_example'; // string | Stack transaction type

try {
    $result = $apiInstance->getTransactionsForStack($account_id, $stack_id, $offset, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->getTransactionsForStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **stack_id** | **string**| Unique identifier (UUID) of the Stack | |
| **offset** | **int**| Offset used for paging results | |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **type** | **string**| Stack transaction type | [optional] |

### Return type

[**\Shaype\Client\Model\HayStackTransaction[]**](../Model/HayStackTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stackToAccountTransfer()`

```php
stackToAccountTransfer($account_id, $stack_id, $stack_to_account_transfer_request_body): string
```

Transfer funds from Stack to Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Account ID
$stack_id = 'stack_id_example'; // string | Stack ID
$stack_to_account_transfer_request_body = new \Shaype\Client\Model\StackToAccountTransferRequestBody(); // \Shaype\Client\Model\StackToAccountTransferRequestBody

try {
    $result = $apiInstance->stackToAccountTransfer($account_id, $stack_id, $stack_to_account_transfer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->stackToAccountTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | |
| **stack_id** | **string**| Stack ID | |
| **stack_to_account_transfer_request_body** | [**\Shaype\Client\Model\StackToAccountTransferRequestBody**](../Model/StackToAccountTransferRequestBody.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stackToStackTransfer()`

```php
stackToStackTransfer($account_id, $stack_to_stack_transfer_request_body): string
```

Transfer funds from Stack to Stack of an Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$stack_to_stack_transfer_request_body = new \Shaype\Client\Model\StackToStackTransferRequestBody(); // \Shaype\Client\Model\StackToStackTransferRequestBody

try {
    $result = $apiInstance->stackToStackTransfer($account_id, $stack_to_stack_transfer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->stackToStackTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **stack_to_stack_transfer_request_body** | [**\Shaype\Client\Model\StackToStackTransferRequestBody**](../Model/StackToStackTransferRequestBody.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStack()`

```php
updateStack($account_id, $stack_id, $update_stack_request_body): \Shaype\Client\Model\UpdateStackResponse
```

Update Stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\StacksAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$stack_id = 'stack_id_example'; // string | Unique identifier (UUID) of the Stack
$update_stack_request_body = new \Shaype\Client\Model\UpdateStackRequestBody(); // \Shaype\Client\Model\UpdateStackRequestBody

try {
    $result = $apiInstance->updateStack($account_id, $stack_id, $update_stack_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksAPIApi->updateStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **stack_id** | **string**| Unique identifier (UUID) of the Stack | |
| **update_stack_request_body** | [**\Shaype\Client\Model\UpdateStackRequestBody**](../Model/UpdateStackRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\UpdateStackResponse**](../Model/UpdateStackResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
