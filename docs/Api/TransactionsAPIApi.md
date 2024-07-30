# Shaype\Client\TransactionsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCreditTransactionV0()**](TransactionsAPIApi.md#createCreditTransactionV0) | **POST** /v0/transactions/credit/create | Create Credit Transaction for Account (DEPRECATED) |
| [**createCreditTransactionV1()**](TransactionsAPIApi.md#createCreditTransactionV1) | **POST** /v1/transactions/credit | Create Credit Transaction for Account |
| [**createDebitTransactionV0()**](TransactionsAPIApi.md#createDebitTransactionV0) | **POST** /v0/transactions/debit/create | Create Debit Transaction for Account (DEPRECATED) |
| [**createDebitTransactionV1()**](TransactionsAPIApi.md#createDebitTransactionV1) | **POST** /v1/transactions/debit | Create Debit Transaction for Account |
| [**getTransactionById()**](TransactionsAPIApi.md#getTransactionById) | **GET** /v1/transactions/{transactionHayId} | Get Transaction by ID |
| [**searchTransactions()**](TransactionsAPIApi.md#searchTransactions) | **POST** /v0/transactions/search | Search Transactions |


## `createCreditTransactionV0()`

```php
createCreditTransactionV0($create_transaction_request_body): \Shaype\Client\Model\TransactionOutcome
```

Create Credit Transaction for Account (DEPRECATED)

If a limit is breached, REFUSED_LIMIT_BREACH outcome will be returned. To get the detailed limit that has been breached please use V1 of this endpoint. That will return one of the below outcomes instead of REFUSED_LIMIT_BREACH: REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED, REFUSED_MAX_BALANCE_EXCEEDED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_transaction_request_body = new \Shaype\Client\Model\CreateTransactionRequestBody(); // \Shaype\Client\Model\CreateTransactionRequestBody

try {
    $result = $apiInstance->createCreditTransactionV0($create_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->createCreditTransactionV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transaction_request_body** | [**\Shaype\Client\Model\CreateTransactionRequestBody**](../Model/CreateTransactionRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreditTransactionV1()`

```php
createCreditTransactionV1($create_transaction_request_body): \Shaype\Client\Model\TransactionOutcome
```

Create Credit Transaction for Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_transaction_request_body = new \Shaype\Client\Model\CreateTransactionRequestBody(); // \Shaype\Client\Model\CreateTransactionRequestBody

try {
    $result = $apiInstance->createCreditTransactionV1($create_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->createCreditTransactionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transaction_request_body** | [**\Shaype\Client\Model\CreateTransactionRequestBody**](../Model/CreateTransactionRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDebitTransactionV0()`

```php
createDebitTransactionV0($create_transaction_request_body): \Shaype\Client\Model\TransactionOutcome
```

Create Debit Transaction for Account (DEPRECATED)

If a limit is breached, REFUSED_LIMIT_BREACH outcome will be returned. To get the detailed limit that has been breached please use V1 of this endpoint. That will return one of the below outcomes instead of REFUSED_LIMIT_BREACH: REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED, REFUSED_MAX_BALANCE_EXCEEDED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_transaction_request_body = new \Shaype\Client\Model\CreateTransactionRequestBody(); // \Shaype\Client\Model\CreateTransactionRequestBody

try {
    $result = $apiInstance->createDebitTransactionV0($create_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->createDebitTransactionV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transaction_request_body** | [**\Shaype\Client\Model\CreateTransactionRequestBody**](../Model/CreateTransactionRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDebitTransactionV1()`

```php
createDebitTransactionV1($create_transaction_request_body): \Shaype\Client\Model\TransactionOutcome
```

Create Debit Transaction for Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_transaction_request_body = new \Shaype\Client\Model\CreateTransactionRequestBody(); // \Shaype\Client\Model\CreateTransactionRequestBody

try {
    $result = $apiInstance->createDebitTransactionV1($create_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->createDebitTransactionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transaction_request_body** | [**\Shaype\Client\Model\CreateTransactionRequestBody**](../Model/CreateTransactionRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionById()`

```php
getTransactionById($transaction_hay_id): \Shaype\Client\Model\FinancialTransaction
```

Get Transaction by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_hay_id = 'transaction_hay_id_example'; // string | Unique identifier (UUID) of the Transaction

try {
    $result = $apiInstance->getTransactionById($transaction_hay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_hay_id** | **string**| Unique identifier (UUID) of the Transaction | |

### Return type

[**\Shaype\Client\Model\FinancialTransaction**](../Model/FinancialTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchTransactions()`

```php
searchTransactions($limit, $offset, $search_transactions_request_body, $sort_by): \Shaype\Client\Model\FinancialTransaction[]
```

Search Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TransactionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | List fetch limit, value between 1 and 1000
$offset = 56; // int | Offset used for paging results
$search_transactions_request_body = new \Shaype\Client\Model\SearchTransactionsRequestBody(); // \Shaype\Client\Model\SearchTransactionsRequestBody
$sort_by = 'sort_by_example'; // string | SortBy used for sorting transactions. Possible values:  * **CLEARING_TIME** (default if not provided): Transactions sorted by clearing time  * **TRANSACTION_TIME**: Transactions sorted by transaction time

try {
    $result = $apiInstance->searchTransactions($limit, $offset, $search_transactions_request_body, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsAPIApi->searchTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **offset** | **int**| Offset used for paging results | |
| **search_transactions_request_body** | [**\Shaype\Client\Model\SearchTransactionsRequestBody**](../Model/SearchTransactionsRequestBody.md)|  | |
| **sort_by** | **string**| SortBy used for sorting transactions. Possible values:  * **CLEARING_TIME** (default if not provided): Transactions sorted by clearing time  * **TRANSACTION_TIME**: Transactions sorted by transaction time | [optional] |

### Return type

[**\Shaype\Client\Model\FinancialTransaction[]**](../Model/FinancialTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
