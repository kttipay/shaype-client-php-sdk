# Shaype\Client\TokensAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**elevateExternalToken()**](TokensAPIApi.md#elevateExternalToken) | **POST** /v0/tokens/elevate | Retrieve an elevation header to be used for GraphQL APIs that require step up access |
| [**exchangeExternalToken()**](TokensAPIApi.md#exchangeExternalToken) | **POST** /v0/tokens/exchange | Exchange External Token for a Shaype token to be used when calling our GraphQL APIs |


## `elevateExternalToken()`

```php
elevateExternalToken($elevate_external_token_request_body): \Shaype\Client\Model\ElevateExternalTokenResponse
```

Retrieve an elevation header to be used for GraphQL APIs that require step up access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TokensAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$elevate_external_token_request_body = new \Shaype\Client\Model\ElevateExternalTokenRequestBody(); // \Shaype\Client\Model\ElevateExternalTokenRequestBody

try {
    $result = $apiInstance->elevateExternalToken($elevate_external_token_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensAPIApi->elevateExternalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elevate_external_token_request_body** | [**\Shaype\Client\Model\ElevateExternalTokenRequestBody**](../Model/ElevateExternalTokenRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\ElevateExternalTokenResponse**](../Model/ElevateExternalTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeExternalToken()`

```php
exchangeExternalToken($exchange_external_token_request_body): \Shaype\Client\Model\ExchangeExternalTokenResponse
```

Exchange External Token for a Shaype token to be used when calling our GraphQL APIs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\TokensAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_external_token_request_body = new \Shaype\Client\Model\ExchangeExternalTokenRequestBody(); // \Shaype\Client\Model\ExchangeExternalTokenRequestBody

try {
    $result = $apiInstance->exchangeExternalToken($exchange_external_token_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensAPIApi->exchangeExternalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_external_token_request_body** | [**\Shaype\Client\Model\ExchangeExternalTokenRequestBody**](../Model/ExchangeExternalTokenRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\ExchangeExternalTokenResponse**](../Model/ExchangeExternalTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
