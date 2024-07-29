# OpenAPI\Client\BPAYAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBPayBiller()**](BPAYAPIApi.md#createBPayBiller) | **POST** /v1/accounts/{accountId}/bpay-billers | Create BPAY Biller for Account ID |
| [**makeBpayPayment()**](BPAYAPIApi.md#makeBpayPayment) | **POST** /v1/accounts/{accountId}/payments/bpay | Initiate BPAY payment |
| [**retrieveBillers()**](BPAYAPIApi.md#retrieveBillers) | **GET** /v1/accounts/{accountId}/bpay-billers | BPAY billers for account |
| [**retrieveBpayBiller()**](BPAYAPIApi.md#retrieveBpayBiller) | **GET** /v1/bpay-billers/{billerId} | Retrieve BPAY Biller |
| [**updateBpayBiller()**](BPAYAPIApi.md#updateBpayBiller) | **PATCH** /v1/bpay-billers/{billerId} | Update BPAY Biller |
| [**validateBpay()**](BPAYAPIApi.md#validateBpay) | **POST** /v1/bpay-billers/validate | Validate BPAY |


## `createBPayBiller()`

```php
createBPayBiller($account_id, $b_pay_biller_add_request_body): \OpenAPI\Client\Model\BPayBillerResponse
```

Create BPAY Biller for Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$b_pay_biller_add_request_body = new \OpenAPI\Client\Model\BPayBillerAddRequestBody(); // \OpenAPI\Client\Model\BPayBillerAddRequestBody

try {
    $result = $apiInstance->createBPayBiller($account_id, $b_pay_biller_add_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->createBPayBiller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **b_pay_biller_add_request_body** | [**\OpenAPI\Client\Model\BPayBillerAddRequestBody**](../Model/BPayBillerAddRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BPayBillerResponse**](../Model/BPayBillerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeBpayPayment()`

```php
makeBpayPayment($account_id, $b_pay_payment_request_body): \OpenAPI\Client\Model\BpayPaymentResponseBody
```

Initiate BPAY payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$b_pay_payment_request_body = new \OpenAPI\Client\Model\BPayPaymentRequestBody(); // \OpenAPI\Client\Model\BPayPaymentRequestBody

try {
    $result = $apiInstance->makeBpayPayment($account_id, $b_pay_payment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->makeBpayPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **b_pay_payment_request_body** | [**\OpenAPI\Client\Model\BPayPaymentRequestBody**](../Model/BPayPaymentRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BpayPaymentResponseBody**](../Model/BpayPaymentResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBillers()`

```php
retrieveBillers($account_id, $limit, $offset): \OpenAPI\Client\Model\BPayBillerResponse
```

BPAY billers for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->retrieveBillers($account_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->retrieveBillers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **limit** | **int**|  | |
| **offset** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\BPayBillerResponse**](../Model/BPayBillerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBpayBiller()`

```php
retrieveBpayBiller($biller_id): \OpenAPI\Client\Model\BPayBillerResponse
```

Retrieve BPAY Biller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$biller_id = 'biller_id_example'; // string | Unique identifier (UUID) of the Biller.

try {
    $result = $apiInstance->retrieveBpayBiller($biller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->retrieveBpayBiller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **biller_id** | **string**| Unique identifier (UUID) of the Biller. | |

### Return type

[**\OpenAPI\Client\Model\BPayBillerResponse**](../Model/BPayBillerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBpayBiller()`

```php
updateBpayBiller($biller_id, $b_pay_biller_update_request_body): object
```

Update BPAY Biller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$biller_id = 'biller_id_example'; // string | Unique identifier (UUID) of the Biller.
$b_pay_biller_update_request_body = new \OpenAPI\Client\Model\BPayBillerUpdateRequestBody(); // \OpenAPI\Client\Model\BPayBillerUpdateRequestBody

try {
    $result = $apiInstance->updateBpayBiller($biller_id, $b_pay_biller_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->updateBpayBiller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **biller_id** | **string**| Unique identifier (UUID) of the Biller. | |
| **b_pay_biller_update_request_body** | [**\OpenAPI\Client\Model\BPayBillerUpdateRequestBody**](../Model/BPayBillerUpdateRequestBody.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateBpay()`

```php
validateBpay($b_pay_biller_request_body): \OpenAPI\Client\Model\BPayBillerDetails
```

Validate BPAY

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BPAYAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$b_pay_biller_request_body = new \OpenAPI\Client\Model\BPayBillerRequestBody(); // \OpenAPI\Client\Model\BPayBillerRequestBody

try {
    $result = $apiInstance->validateBpay($b_pay_biller_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPAYAPIApi->validateBpay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **b_pay_biller_request_body** | [**\OpenAPI\Client\Model\BPayBillerRequestBody**](../Model/BPayBillerRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BPayBillerDetails**](../Model/BPayBillerDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
