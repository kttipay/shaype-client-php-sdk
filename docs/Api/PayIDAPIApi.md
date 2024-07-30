# Shaype\Client\PayIDAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayId()**](PayIDAPIApi.md#getPayId) | **GET** /v0/payids/{payId} | Get PayID details |
| [**getPayIdAvailability()**](PayIDAPIApi.md#getPayIdAvailability) | **GET** /v0/payids/{payId}/availability | Check PayID availability |
| [**getPayIdDeregisterHistory()**](PayIDAPIApi.md#getPayIdDeregisterHistory) | **GET** /v0/payids/{payId}/deregister-history | Get PayID de-register history |
| [**getPayIdsForAccount()**](PayIDAPIApi.md#getPayIdsForAccount) | **GET** /v1/accounts/{accountId}/payids | Get PayIDs by Account ID |
| [**postPayIdRegister()**](PayIDAPIApi.md#postPayIdRegister) | **POST** /v1/accounts/{accountId}/payids/{payId}/register | Register PayID |
| [**resolvePayId()**](PayIDAPIApi.md#resolvePayId) | **GET** /v0/payids/{payId}/resolve | Resolve PayID to bank account |
| [**updatePayIdDetails()**](PayIDAPIApi.md#updatePayIdDetails) | **POST** /v0/payids/{payId}/details | Update PayID details |
| [**updatePayIdStatus()**](PayIDAPIApi.md#updatePayIdStatus) | **PATCH** /v0/payids/{payId}/status | Update PayID status |


## `getPayId()`

```php
getPayId($pay_id_type, $pay_id): \Shaype\Client\Model\PayIdResponse
```

Get PayID details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id_type = 'pay_id_type_example'; // string | PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number
$pay_id = 'pay_id_example'; // string | PayID

try {
    $result = $apiInstance->getPayId($pay_id_type, $pay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->getPayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id_type** | **string**| PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number | |
| **pay_id** | **string**| PayID | |

### Return type

[**\Shaype\Client\Model\PayIdResponse**](../Model/PayIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayIdAvailability()`

```php
getPayIdAvailability($pay_id, $pay_id_type): \Shaype\Client\Model\PayIdAvailabilityDetailsResponse
```

Check PayID availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id = 'pay_id_example'; // string | PayID
$pay_id_type = 'pay_id_type_example'; // string | PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number

try {
    $result = $apiInstance->getPayIdAvailability($pay_id, $pay_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->getPayIdAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id** | **string**| PayID | |
| **pay_id_type** | **string**| PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number | [optional] |

### Return type

[**\Shaype\Client\Model\PayIdAvailabilityDetailsResponse**](../Model/PayIdAvailabilityDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayIdDeregisterHistory()`

```php
getPayIdDeregisterHistory($pay_id): \Shaype\Client\Model\PayIdDeregisterDetailsResponse[]
```

Get PayID de-register history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id = 'pay_id_example'; // string | PayID

try {
    $result = $apiInstance->getPayIdDeregisterHistory($pay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->getPayIdDeregisterHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id** | **string**| PayID | |

### Return type

[**\Shaype\Client\Model\PayIdDeregisterDetailsResponse[]**](../Model/PayIdDeregisterDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayIdsForAccount()`

```php
getPayIdsForAccount($account_id): \Shaype\Client\Model\PayIdDetailsResponse[]
```

Get PayIDs by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getPayIdsForAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->getPayIdsForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\Shaype\Client\Model\PayIdDetailsResponse[]**](../Model/PayIdDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayIdRegister()`

```php
postPayIdRegister($account_id, $pay_id, $pay_id_register_request_body): \Shaype\Client\Model\GenericMessage
```

Register PayID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$pay_id = 'pay_id_example'; // string | PayID
$pay_id_register_request_body = new \Shaype\Client\Model\PayIdRegisterRequestBody(); // \Shaype\Client\Model\PayIdRegisterRequestBody

try {
    $result = $apiInstance->postPayIdRegister($account_id, $pay_id, $pay_id_register_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->postPayIdRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **pay_id** | **string**| PayID | |
| **pay_id_register_request_body** | [**\Shaype\Client\Model\PayIdRegisterRequestBody**](../Model/PayIdRegisterRequestBody.md)|  | |

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

## `resolvePayId()`

```php
resolvePayId($pay_id, $pay_id_type): \Shaype\Client\Model\PayIdAvailabilityDetailsResponse
```

Resolve PayID to bank account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id = 'pay_id_example'; // string | PayID
$pay_id_type = 'pay_id_type_example'; // string | PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number

try {
    $result = $apiInstance->resolvePayId($pay_id, $pay_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->resolvePayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id** | **string**| PayID | |
| **pay_id_type** | **string**| PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number | [optional] |

### Return type

[**\Shaype\Client\Model\PayIdAvailabilityDetailsResponse**](../Model/PayIdAvailabilityDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayIdDetails()`

```php
updatePayIdDetails($pay_id, $update_pay_id_details_request_body): \Shaype\Client\Model\GenericMessage
```

Update PayID details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id = 'pay_id_example'; // string | PayID
$update_pay_id_details_request_body = new \Shaype\Client\Model\UpdatePayIdDetailsRequestBody(); // \Shaype\Client\Model\UpdatePayIdDetailsRequestBody

try {
    $result = $apiInstance->updatePayIdDetails($pay_id, $update_pay_id_details_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->updatePayIdDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id** | **string**| PayID | |
| **update_pay_id_details_request_body** | [**\Shaype\Client\Model\UpdatePayIdDetailsRequestBody**](../Model/UpdatePayIdDetailsRequestBody.md)|  | |

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

## `updatePayIdStatus()`

```php
updatePayIdStatus($pay_id, $update_pay_id_status_request_body): \Shaype\Client\Model\GenericMessage
```

Update PayID status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\PayIDAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_id = 'pay_id_example'; // string | PayID
$update_pay_id_status_request_body = new \Shaype\Client\Model\UpdatePayIdStatusRequestBody(); // \Shaype\Client\Model\UpdatePayIdStatusRequestBody

try {
    $result = $apiInstance->updatePayIdStatus($pay_id, $update_pay_id_status_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayIDAPIApi->updatePayIdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_id** | **string**| PayID | |
| **update_pay_id_status_request_body** | [**\Shaype\Client\Model\UpdatePayIdStatusRequestBody**](../Model/UpdatePayIdStatusRequestBody.md)|  | |

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
