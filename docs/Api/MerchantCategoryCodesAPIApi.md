# Shaype\Client\MerchantCategoryCodesAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllMerchantCategoryCodes()**](MerchantCategoryCodesAPIApi.md#getAllMerchantCategoryCodes) | **GET** /v0/mccs | Get all Merchant Category Codes |


## `getAllMerchantCategoryCodes()`

```php
getAllMerchantCategoryCodes(): \Shaype\Client\Model\HayMerchantCategoryCode[]
```

Get all Merchant Category Codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\MerchantCategoryCodesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllMerchantCategoryCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCategoryCodesAPIApi->getAllMerchantCategoryCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shaype\Client\Model\HayMerchantCategoryCode[]**](../Model/HayMerchantCategoryCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
