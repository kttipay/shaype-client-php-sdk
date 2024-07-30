# Shaype\Client\ScheduledPaymentsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelScheduledPayment()**](ScheduledPaymentsAPIApi.md#cancelScheduledPayment) | **POST** /v0/accounts/{accountId}/scheduledPayments/{paymentId}/cancel | Cancel Scheduled Payment |
| [**getScheduledPaymentById()**](ScheduledPaymentsAPIApi.md#getScheduledPaymentById) | **GET** /v0/accounts/{accountId}/scheduledPayments/{paymentId} | Get Scheduled Payment by Payment ID for an Account |
| [**getScheduledPayments()**](ScheduledPaymentsAPIApi.md#getScheduledPayments) | **GET** /v0/accounts/{accountId}/scheduledPayments | Get Scheduled Payments by Account ID |


## `cancelScheduledPayment()`

```php
cancelScheduledPayment($account_id, $payment_id): \Shaype\Client\Model\GenericMessage
```

Cancel Scheduled Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\ScheduledPaymentsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Scheduled Payment
$payment_id = 'payment_id_example'; // string | Unique identifier (UUID) of the Scheduled Payment

try {
    $result = $apiInstance->cancelScheduledPayment($account_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPaymentsAPIApi->cancelScheduledPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Scheduled Payment | |
| **payment_id** | **string**| Unique identifier (UUID) of the Scheduled Payment | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduledPaymentById()`

```php
getScheduledPaymentById($account_id, $payment_id): \Shaype\Client\Model\HayScheduledPayment
```

Get Scheduled Payment by Payment ID for an Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\ScheduledPaymentsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$payment_id = 'payment_id_example'; // string | Unique identifier (UUID) of the Scheduled Payment

try {
    $result = $apiInstance->getScheduledPaymentById($account_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPaymentsAPIApi->getScheduledPaymentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **payment_id** | **string**| Unique identifier (UUID) of the Scheduled Payment | |

### Return type

[**\Shaype\Client\Model\HayScheduledPayment**](../Model/HayScheduledPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduledPayments()`

```php
getScheduledPayments($account_id): \Shaype\Client\Model\HayScheduledPayment[]
```

Get Scheduled Payments by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\ScheduledPaymentsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getScheduledPayments($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPaymentsAPIApi->getScheduledPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\Shaype\Client\Model\HayScheduledPayment[]**](../Model/HayScheduledPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
