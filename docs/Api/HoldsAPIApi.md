# Shaype\Client\HoldsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthorisationHold()**](HoldsAPIApi.md#getAuthorisationHold) | **GET** /v1/holds/{holdId} | Get Authorisation Hold by ID |


## `getAuthorisationHold()`

```php
getAuthorisationHold($hold_id): \Shaype\Client\Model\AuthorisationHold
```

Get Authorisation Hold by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\HoldsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hold_id = 'hold_id_example'; // string | Unique identifier (UUID) of the Authorisation Hold

try {
    $result = $apiInstance->getAuthorisationHold($hold_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoldsAPIApi->getAuthorisationHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hold_id** | **string**| Unique identifier (UUID) of the Authorisation Hold | |

### Return type

[**\Shaype\Client\Model\AuthorisationHold**](../Model/AuthorisationHold.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
