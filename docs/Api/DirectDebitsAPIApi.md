# OpenAPI\Client\DirectDebitsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDirectDebitV0()**](DirectDebitsAPIApi.md#createDirectDebitV0) | **POST** /v0/direct-debits | Create outbound Direct Debit |
| [**createDirectDebitV1()**](DirectDebitsAPIApi.md#createDirectDebitV1) | **POST** /v1/direct-debits | Create outbound Direct Debit |
| [**getDirectDebitV0()**](DirectDebitsAPIApi.md#getDirectDebitV0) | **GET** /v0/direct-debits/{transactionId} | Get outbound Direct Debit by ID |
| [**getDirectDebitV1()**](DirectDebitsAPIApi.md#getDirectDebitV1) | **GET** /v1/direct-debits/{transactionId} | Get outbound Direct Debit by ID |
| [**getDirectDebitsV0()**](DirectDebitsAPIApi.md#getDirectDebitsV0) | **GET** /v0/direct-debits | Get outbound Direct Debits by date |
| [**getDirectDebitsV1()**](DirectDebitsAPIApi.md#getDirectDebitsV1) | **GET** /v1/direct-debits | Get outbound Direct Debits by date |


## `createDirectDebitV0()`

```php
createDirectDebitV0($create_direct_debit_request_body): \OpenAPI\Client\Model\DirectDebitResponse
```

Create outbound Direct Debit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_direct_debit_request_body = new \OpenAPI\Client\Model\CreateDirectDebitRequestBody(); // \OpenAPI\Client\Model\CreateDirectDebitRequestBody

try {
    $result = $apiInstance->createDirectDebitV0($create_direct_debit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->createDirectDebitV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_direct_debit_request_body** | [**\OpenAPI\Client\Model\CreateDirectDebitRequestBody**](../Model/CreateDirectDebitRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectDebitResponse**](../Model/DirectDebitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDirectDebitV1()`

```php
createDirectDebitV1($create_direct_debit_request_body): \OpenAPI\Client\Model\DirectDebitResponseV1
```

Create outbound Direct Debit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_direct_debit_request_body = new \OpenAPI\Client\Model\CreateDirectDebitRequestBody(); // \OpenAPI\Client\Model\CreateDirectDebitRequestBody

try {
    $result = $apiInstance->createDirectDebitV1($create_direct_debit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->createDirectDebitV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_direct_debit_request_body** | [**\OpenAPI\Client\Model\CreateDirectDebitRequestBody**](../Model/CreateDirectDebitRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectDebitResponseV1**](../Model/DirectDebitResponseV1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDebitV0()`

```php
getDirectDebitV0($transaction_id): \OpenAPI\Client\Model\DirectDebitResponse
```

Get outbound Direct Debit by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | Unique identifier (UUID) of the Transaction

try {
    $result = $apiInstance->getDirectDebitV0($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->getDirectDebitV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| Unique identifier (UUID) of the Transaction | |

### Return type

[**\OpenAPI\Client\Model\DirectDebitResponse**](../Model/DirectDebitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDebitV1()`

```php
getDirectDebitV1($transaction_id): \OpenAPI\Client\Model\DirectDebitResponseV1
```

Get outbound Direct Debit by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | Unique identifier (UUID) of the Transaction

try {
    $result = $apiInstance->getDirectDebitV1($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->getDirectDebitV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| Unique identifier (UUID) of the Transaction | |

### Return type

[**\OpenAPI\Client\Model\DirectDebitResponseV1**](../Model/DirectDebitResponseV1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDebitsV0()`

```php
getDirectDebitsV0($from_utc, $to_utc, $offset, $limit, $status): \OpenAPI\Client\Model\DeTransactionDetails[]
```

Get outbound Direct Debits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | DateTime in UTC format for the start date range of the Transaction search
$to_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | DateTime in UTC format for the end date range of the Transaction search
$offset = 56; // int | Offset used for paging results
$limit = 56; // int | List fetch limit, value between 1 and 1000
$status = 'status_example'; // string | Status of the Direct Debits. Possible values:  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **RETURNED**: Direct Debit has been Returned from recipient financial institution  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch

try {
    $result = $apiInstance->getDirectDebitsV0($from_utc, $to_utc, $offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->getDirectDebitsV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_utc** | **\DateTime**| DateTime in UTC format for the start date range of the Transaction search | |
| **to_utc** | **\DateTime**| DateTime in UTC format for the end date range of the Transaction search | |
| **offset** | **int**| Offset used for paging results | |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **status** | **string**| Status of the Direct Debits. Possible values:  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **RETURNED**: Direct Debit has been Returned from recipient financial institution  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeTransactionDetails[]**](../Model/DeTransactionDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDebitsV1()`

```php
getDirectDebitsV1($from_utc, $to_utc, $offset, $limit, $status, $sender_account_number): \OpenAPI\Client\Model\DeTransactionDetailsV1[]
```

Get outbound Direct Debits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DirectDebitsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | DateTime in UTC format for the start date range of the Transaction search
$to_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | DateTime in UTC format for the end date range of the Transaction search
$offset = 56; // int | Offset used for paging results
$limit = 56; // int | List fetch limit, value between 1 and 1000
$status = 'status_example'; // string | Status of the Direct Debits. Possible values:  * **RECEIVED**: Direct Debit request received for processing  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit request failed validation or authorization and can't be executed  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit request failed and was returned from the recipient financial institution. This direct debit cannot be executed  * **COMPLETE**: Direct Debit request was successful and customer account credited successfully  * **INCOMPLETE**: Direct Debit request was successful, but customer account crediting failed
$sender_account_number = 'sender_account_number_example'; // string | Sender Account Number

try {
    $result = $apiInstance->getDirectDebitsV1($from_utc, $to_utc, $offset, $limit, $status, $sender_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitsAPIApi->getDirectDebitsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_utc** | **\DateTime**| DateTime in UTC format for the start date range of the Transaction search | |
| **to_utc** | **\DateTime**| DateTime in UTC format for the end date range of the Transaction search | |
| **offset** | **int**| Offset used for paging results | |
| **limit** | **int**| List fetch limit, value between 1 and 1000 | |
| **status** | **string**| Status of the Direct Debits. Possible values:  * **RECEIVED**: Direct Debit request received for processing  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit request failed validation or authorization and can&#39;t be executed  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit request failed and was returned from the recipient financial institution. This direct debit cannot be executed  * **COMPLETE**: Direct Debit request was successful and customer account credited successfully  * **INCOMPLETE**: Direct Debit request was successful, but customer account crediting failed | [optional] |
| **sender_account_number** | **string**| Sender Account Number | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeTransactionDetailsV1[]**](../Model/DeTransactionDetailsV1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
