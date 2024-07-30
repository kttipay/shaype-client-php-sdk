# Shaype\Client\LiquidityAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLiquidityThreshold()**](LiquidityAPIApi.md#createLiquidityThreshold) | **POST** /v1/liquidity/thresholds | Create liquidity alerting Threshold |
| [**getClientLiquidity()**](LiquidityAPIApi.md#getClientLiquidity) | **GET** /v1/liquidity | Get client Liquidity |
| [**getClientLiquidityThresholds()**](LiquidityAPIApi.md#getClientLiquidityThresholds) | **GET** /v1/liquidity/thresholds | Get all liquidity alerting Thresholds |
| [**updateLiquidityThreshold()**](LiquidityAPIApi.md#updateLiquidityThreshold) | **PUT** /v1/liquidity/thresholds/{thresholdId} | Update liquidity alerting Threshold |


## `createLiquidityThreshold()`

```php
createLiquidityThreshold($create_threshold_request_body): \Shaype\Client\Model\LiquidityThreshold
```

Create liquidity alerting Threshold

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\LiquidityAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_threshold_request_body = new \Shaype\Client\Model\CreateThresholdRequestBody(); // \Shaype\Client\Model\CreateThresholdRequestBody

try {
    $result = $apiInstance->createLiquidityThreshold($create_threshold_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidityAPIApi->createLiquidityThreshold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_threshold_request_body** | [**\Shaype\Client\Model\CreateThresholdRequestBody**](../Model/CreateThresholdRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\LiquidityThreshold**](../Model/LiquidityThreshold.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientLiquidity()`

```php
getClientLiquidity($date): \Shaype\Client\Model\ClientLiquidity
```

Get client Liquidity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\LiquidityAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional date to retrieve Liquidity for

try {
    $result = $apiInstance->getClientLiquidity($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidityAPIApi->getClientLiquidity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**| Optional date to retrieve Liquidity for | [optional] |

### Return type

[**\Shaype\Client\Model\ClientLiquidity**](../Model/ClientLiquidity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientLiquidityThresholds()`

```php
getClientLiquidityThresholds($active): \Shaype\Client\Model\LiquidityThreshold[]
```

Get all liquidity alerting Thresholds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\LiquidityAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$active = True; // bool | Determines whether to retrieve only active thresholds

try {
    $result = $apiInstance->getClientLiquidityThresholds($active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidityAPIApi->getClientLiquidityThresholds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**| Determines whether to retrieve only active thresholds | [optional] |

### Return type

[**\Shaype\Client\Model\LiquidityThreshold[]**](../Model/LiquidityThreshold.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLiquidityThreshold()`

```php
updateLiquidityThreshold($threshold_id, $update_threshold_request_body): \Shaype\Client\Model\LiquidityThreshold
```

Update liquidity alerting Threshold

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\LiquidityAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$threshold_id = 'threshold_id_example'; // string | Threshold ID
$update_threshold_request_body = new \Shaype\Client\Model\UpdateThresholdRequestBody(); // \Shaype\Client\Model\UpdateThresholdRequestBody

try {
    $result = $apiInstance->updateLiquidityThreshold($threshold_id, $update_threshold_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidityAPIApi->updateLiquidityThreshold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **threshold_id** | **string**| Threshold ID | |
| **update_threshold_request_body** | [**\Shaype\Client\Model\UpdateThresholdRequestBody**](../Model/UpdateThresholdRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\LiquidityThreshold**](../Model/LiquidityThreshold.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
