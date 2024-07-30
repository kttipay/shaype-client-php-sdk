# Shaype\Client\UtilitiesAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStubForMandateSearchPaymentInstructions()**](UtilitiesAPIApi.md#createStubForMandateSearchPaymentInstructions) | **POST** /v0/utils/create-stub-search-payment-instructions | Create stub for search payment instructions for a mandate. |
| [**generateAtmTransaction()**](UtilitiesAPIApi.md#generateAtmTransaction) | **POST** /v0/utils/generate-atm-transaction | Trigger mock ATM card transaction |
| [**generateAuthHold()**](UtilitiesAPIApi.md#generateAuthHold) | **POST** /v0/utils/generate-auth-hold | Trigger mock card Hold |
| [**generateCardTransaction()**](UtilitiesAPIApi.md#generateCardTransaction) | **POST** /v0/utils/generate-card-transaction | Trigger mock card Hold and Settlement |
| [**generateInboundNppTransaction()**](UtilitiesAPIApi.md#generateInboundNppTransaction) | **POST** /v0/utils/generate-npp-inbound | Generate mock NPP inbound transaction. |
| [**generateInboundNppTransactionV2()**](UtilitiesAPIApi.md#generateInboundNppTransactionV2) | **POST** /v0/utils/generate-inbound-npp-transaction-v2 | Generate mock NPP inbound transaction v2. |
| [**generateMandateNotificationForInitiator()**](UtilitiesAPIApi.md#generateMandateNotificationForInitiator) | **POST** /v0/utils/generate-mandate-notification-initiator | Generate mock Mandate notification for Initiator. |
| [**generateMandateNotificationForPayer()**](UtilitiesAPIApi.md#generateMandateNotificationForPayer) | **POST** /v0/utils/generate-mandate-notification-payer | Generate mock Mandate notification for Payer. |
| [**generateReceiveAPaymentInstruction()**](UtilitiesAPIApi.md#generateReceiveAPaymentInstruction) | **POST** /v0/utils/generate-receive-a-payment-instruction | Generate mock Receive A Payment Instruction (RAPAIN). |


## `createStubForMandateSearchPaymentInstructions()`

```php
createStubForMandateSearchPaymentInstructions($create_stub_for_mandate_search_payment_instructions_request_body)
```

Create stub for search payment instructions for a mandate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_stub_for_mandate_search_payment_instructions_request_body = new \Shaype\Client\Model\CreateStubForMandateSearchPaymentInstructionsRequestBody(); // \Shaype\Client\Model\CreateStubForMandateSearchPaymentInstructionsRequestBody

try {
    $apiInstance->createStubForMandateSearchPaymentInstructions($create_stub_for_mandate_search_payment_instructions_request_body);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->createStubForMandateSearchPaymentInstructions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_stub_for_mandate_search_payment_instructions_request_body** | [**\Shaype\Client\Model\CreateStubForMandateSearchPaymentInstructionsRequestBody**](../Model/CreateStubForMandateSearchPaymentInstructionsRequestBody.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAtmTransaction()`

```php
generateAtmTransaction($generate_card_transaction_request_body): \Shaype\Client\Model\GenericMessage
```

Trigger mock ATM card transaction

Triggers a mock transaction request for a ATM card transaction without authorisation hold (i.e. a visa stand in).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_card_transaction_request_body = new \Shaype\Client\Model\GenerateCardTransactionRequestBody(); // \Shaype\Client\Model\GenerateCardTransactionRequestBody

try {
    $result = $apiInstance->generateAtmTransaction($generate_card_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateAtmTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_card_transaction_request_body** | [**\Shaype\Client\Model\GenerateCardTransactionRequestBody**](../Model/GenerateCardTransactionRequestBody.md)|  | |

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

## `generateAuthHold()`

```php
generateAuthHold($generate_card_transaction_request_body): \Shaype\Client\Model\GenericMessage
```

Trigger mock card Hold

Endpoint that triggers a mock authorisation hold transaction request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_card_transaction_request_body = new \Shaype\Client\Model\GenerateCardTransactionRequestBody(); // \Shaype\Client\Model\GenerateCardTransactionRequestBody

try {
    $result = $apiInstance->generateAuthHold($generate_card_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateAuthHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_card_transaction_request_body** | [**\Shaype\Client\Model\GenerateCardTransactionRequestBody**](../Model/GenerateCardTransactionRequestBody.md)|  | |

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

## `generateCardTransaction()`

```php
generateCardTransaction($generate_hold_and_card_transaction_request_body): \Shaype\Client\Model\GenericMessage
```

Trigger mock card Hold and Settlement

Triggers a mock authorisation hold followed by an auth hold settling transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_hold_and_card_transaction_request_body = new \Shaype\Client\Model\GenerateHoldAndCardTransactionRequestBody(); // \Shaype\Client\Model\GenerateHoldAndCardTransactionRequestBody

try {
    $result = $apiInstance->generateCardTransaction($generate_hold_and_card_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateCardTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_hold_and_card_transaction_request_body** | [**\Shaype\Client\Model\GenerateHoldAndCardTransactionRequestBody**](../Model/GenerateHoldAndCardTransactionRequestBody.md)|  | |

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

## `generateInboundNppTransaction()`

```php
generateInboundNppTransaction($generate_inbound_npp_transaction_request_body): \Shaype\Client\Model\GenericMessage
```

Generate mock NPP inbound transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_inbound_npp_transaction_request_body = new \Shaype\Client\Model\GenerateInboundNppTransactionRequestBody(); // \Shaype\Client\Model\GenerateInboundNppTransactionRequestBody

try {
    $result = $apiInstance->generateInboundNppTransaction($generate_inbound_npp_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateInboundNppTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_inbound_npp_transaction_request_body** | [**\Shaype\Client\Model\GenerateInboundNppTransactionRequestBody**](../Model/GenerateInboundNppTransactionRequestBody.md)|  | |

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

## `generateInboundNppTransactionV2()`

```php
generateInboundNppTransactionV2($generate_rap_request_body): \Shaype\Client\Model\GenericMessage
```

Generate mock NPP inbound transaction v2.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_rap_request_body = new \Shaype\Client\Model\GenerateRapRequestBody(); // \Shaype\Client\Model\GenerateRapRequestBody

try {
    $result = $apiInstance->generateInboundNppTransactionV2($generate_rap_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateInboundNppTransactionV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_rap_request_body** | [**\Shaype\Client\Model\GenerateRapRequestBody**](../Model/GenerateRapRequestBody.md)|  | |

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

## `generateMandateNotificationForInitiator()`

```php
generateMandateNotificationForInitiator($generate_initiator_mandate_notification_request_body): \Shaype\Client\Model\GenericMessage
```

Generate mock Mandate notification for Initiator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_initiator_mandate_notification_request_body = new \Shaype\Client\Model\GenerateInitiatorMandateNotificationRequestBody(); // \Shaype\Client\Model\GenerateInitiatorMandateNotificationRequestBody

try {
    $result = $apiInstance->generateMandateNotificationForInitiator($generate_initiator_mandate_notification_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateMandateNotificationForInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_initiator_mandate_notification_request_body** | [**\Shaype\Client\Model\GenerateInitiatorMandateNotificationRequestBody**](../Model/GenerateInitiatorMandateNotificationRequestBody.md)|  | |

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

## `generateMandateNotificationForPayer()`

```php
generateMandateNotificationForPayer($generate_payer_mandate_notification_request_body): \Shaype\Client\Model\GenericMessage
```

Generate mock Mandate notification for Payer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_payer_mandate_notification_request_body = new \Shaype\Client\Model\GeneratePayerMandateNotificationRequestBody(); // \Shaype\Client\Model\GeneratePayerMandateNotificationRequestBody

try {
    $result = $apiInstance->generateMandateNotificationForPayer($generate_payer_mandate_notification_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateMandateNotificationForPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_payer_mandate_notification_request_body** | [**\Shaype\Client\Model\GeneratePayerMandateNotificationRequestBody**](../Model/GeneratePayerMandateNotificationRequestBody.md)|  | |

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

## `generateReceiveAPaymentInstruction()`

```php
generateReceiveAPaymentInstruction($generate_rapain_request_body): \Shaype\Client\Model\GenericMessage
```

Generate mock Receive A Payment Instruction (RAPAIN).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\UtilitiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_rapain_request_body = new \Shaype\Client\Model\GenerateRapainRequestBody(); // \Shaype\Client\Model\GenerateRapainRequestBody

try {
    $result = $apiInstance->generateReceiveAPaymentInstruction($generate_rapain_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesAPIApi->generateReceiveAPaymentInstruction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_rapain_request_body** | [**\Shaype\Client\Model\GenerateRapainRequestBody**](../Model/GenerateRapainRequestBody.md)|  | |

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
