# OpenAPI\Client\PayToAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**amendMandateByInitiator()**](PayToAPIApi.md#amendMandateByInitiator) | **PUT** /v1/payto/initiator/mandates/{mandateId} | Amend Mandate by Initiator |
| [**amendMandateByPayer()**](PayToAPIApi.md#amendMandateByPayer) | **PUT** /v1/payto/payer/mandates/{mandateId} | Amend Mandate by Payer |
| [**amendMandatePaymentTerms()**](PayToAPIApi.md#amendMandatePaymentTerms) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/payment_terms | Amend Mandate payment terms |
| [**cancelMandateByInitiator()**](PayToAPIApi.md#cancelMandateByInitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/cancel | Cancel Mandate by Initiator |
| [**cancelMandateByPayer()**](PayToAPIApi.md#cancelMandateByPayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/cancel | Cancel Mandate by Payer |
| [**checkBsbIsSupportedByPayTo()**](PayToAPIApi.md#checkBsbIsSupportedByPayTo) | **GET** /v1/payto/supported-bsbs/{bsbNumber} | Check if BSB supports PayTo |
| [**createMandate()**](PayToAPIApi.md#createMandate) | **POST** /v1/payto/initiator/mandates | Create Mandate |
| [**getMandate()**](PayToAPIApi.md#getMandate) | **GET** /v1/payto/mandates/{mandateId} | Get Mandate by ID |
| [**getMandateActionsByInitiator()**](PayToAPIApi.md#getMandateActionsByInitiator) | **GET** /v1/payto/initiator/mandates/{mandateId}/actions | Get Mandate Actions by Initiator |
| [**getMandateActionsByPayer()**](PayToAPIApi.md#getMandateActionsByPayer) | **GET** /v1/payto/payer/mandates/{mandateId}/actions | Get Mandate Actions by Payer |
| [**getMandateIdsByInitiator()**](PayToAPIApi.md#getMandateIdsByInitiator) | **GET** /v1/payto/initiator/mandates | Returns all Mandate IDs for a Shaype Account ID. |
| [**getMandatePaymentStatus()**](PayToAPIApi.md#getMandatePaymentStatus) | **GET** /v1/payto/initiator/mandates/{mandateId}/instructions/{instructionId}/status | Get Payment instruction status by Mandate ID and Payment instruction ID |
| [**getMandates()**](PayToAPIApi.md#getMandates) | **GET** /v1/payto/mandates | Get Mandates by debtor account numbers |
| [**makeAdhocPayment()**](PayToAPIApi.md#makeAdhocPayment) | **POST** /v1/payto/payments/adhoc | Make Adhoc Payment |
| [**releaseMandateByInitiator()**](PayToAPIApi.md#releaseMandateByInitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/release | Release Mandate by Initiator |
| [**releaseMandateByPayer()**](PayToAPIApi.md#releaseMandateByPayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/release | Release Mandate by Payer |
| [**resolveMandateByInitiator()**](PayToAPIApi.md#resolveMandateByInitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/resolve | Resolve Mandate by Initiator |
| [**resolveMandateByPayer()**](PayToAPIApi.md#resolveMandateByPayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/resolve | Resolve Mandate pending action by Payer |
| [**searchPaymentsInstructions()**](PayToAPIApi.md#searchPaymentsInstructions) | **GET** /v1/payto/initiator/mandates/{mandateId}/search | Search payments instructions by Mandate ID |
| [**setScheduledPaymentInitiationRequestAmount()**](PayToAPIApi.md#setScheduledPaymentInitiationRequestAmount) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/payments/amount | Set amount of Scheduled Payment Initiation Request by Initiator |
| [**suspendMandateByInitiator()**](PayToAPIApi.md#suspendMandateByInitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/suspend | Suspend Mandate by Initiator |
| [**suspendMandateByPayer()**](PayToAPIApi.md#suspendMandateByPayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/suspend | Suspend Mandate by Payer |


## `amendMandateByInitiator()`

```php
amendMandateByInitiator($mandate_id, $amend_mandate_by_initiator_request_body): \OpenAPI\Client\Model\GenericMessage
```

Amend Mandate by Initiator

<p>(For use by Initiator only)</p><br><p>Amend the bank details of a mandate. Must be an account belonging to the same holder. The amend will be processed immediately without Payer authorisation being required.</p><br><p>Allowed fields:&nbsp;</p><ul>    <li>        <p>Creditor Account ID (Shaype platform ID). This will change the target for mandate funds to another account in the Shaype platform.</p>    </li>    <li>        <p>Ultimate party name of the Creditor</p>    </li></ul><p>To change payment details, use Amend Mandate payment terms.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$amend_mandate_by_initiator_request_body = new \OpenAPI\Client\Model\AmendMandateByInitiatorRequestBody(); // \OpenAPI\Client\Model\AmendMandateByInitiatorRequestBody

try {
    $result = $apiInstance->amendMandateByInitiator($mandate_id, $amend_mandate_by_initiator_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->amendMandateByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **amend_mandate_by_initiator_request_body** | [**\OpenAPI\Client\Model\AmendMandateByInitiatorRequestBody**](../Model/AmendMandateByInitiatorRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `amendMandateByPayer()`

```php
amendMandateByPayer($mandate_id, $amend_mandate_by_payer_request_body): \OpenAPI\Client\Model\GenericMessage
```

Amend Mandate by Payer

<p>(For use by Payer only)</p><br><p>Amend the bank details of a mandate. Must be an account belonging to the same holder. The amend will be processed immediately without Initiator authorisation being required.</p><br><p>Allowed fields:&nbsp;</p><ul>    <li>        <p>Debtor Account ID (Shaype platform ID). This will change the source of mandate payments to another account in the Shaype platform.</p>    </li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$amend_mandate_by_payer_request_body = new \OpenAPI\Client\Model\AmendMandateByPayerRequestBody(); // \OpenAPI\Client\Model\AmendMandateByPayerRequestBody

try {
    $result = $apiInstance->amendMandateByPayer($mandate_id, $amend_mandate_by_payer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->amendMandateByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **amend_mandate_by_payer_request_body** | [**\OpenAPI\Client\Model\AmendMandateByPayerRequestBody**](../Model/AmendMandateByPayerRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `amendMandatePaymentTerms()`

```php
amendMandatePaymentTerms($mandate_id, $amend_mandate_payment_terms_request_body): \OpenAPI\Client\Model\GenericMessage
```

Amend Mandate payment terms

(For use by Initiator only)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$amend_mandate_payment_terms_request_body = new \OpenAPI\Client\Model\AmendMandatePaymentTermsRequestBody(); // \OpenAPI\Client\Model\AmendMandatePaymentTermsRequestBody

try {
    $result = $apiInstance->amendMandatePaymentTerms($mandate_id, $amend_mandate_payment_terms_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->amendMandatePaymentTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **amend_mandate_payment_terms_request_body** | [**\OpenAPI\Client\Model\AmendMandatePaymentTermsRequestBody**](../Model/AmendMandatePaymentTermsRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMandateByInitiator()`

```php
cancelMandateByInitiator($mandate_id, $cancel_mandate_request_body): \OpenAPI\Client\Model\GenericMessage
```

Cancel Mandate by Initiator

(For use by Initiator only) &nbsp;  Cancel a mandate. Changes status to CNCD in the central Mandate Management Service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$cancel_mandate_request_body = new \OpenAPI\Client\Model\CancelMandateRequestBody(); // \OpenAPI\Client\Model\CancelMandateRequestBody

try {
    $result = $apiInstance->cancelMandateByInitiator($mandate_id, $cancel_mandate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->cancelMandateByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **cancel_mandate_request_body** | [**\OpenAPI\Client\Model\CancelMandateRequestBody**](../Model/CancelMandateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMandateByPayer()`

```php
cancelMandateByPayer($mandate_id, $cancel_mandate_request_body): \OpenAPI\Client\Model\GenericMessage
```

Cancel Mandate by Payer

(For use by Payer only) &nbsp; Cancel a mandate. Changes status to CNCD in the central Mandate Management Service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$cancel_mandate_request_body = new \OpenAPI\Client\Model\CancelMandateRequestBody(); // \OpenAPI\Client\Model\CancelMandateRequestBody

try {
    $result = $apiInstance->cancelMandateByPayer($mandate_id, $cancel_mandate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->cancelMandateByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **cancel_mandate_request_body** | [**\OpenAPI\Client\Model\CancelMandateRequestBody**](../Model/CancelMandateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkBsbIsSupportedByPayTo()`

```php
checkBsbIsSupportedByPayTo($bsb_number): \OpenAPI\Client\Model\CheckPayToBsbSupportResponseBody
```

Check if BSB supports PayTo

Use to check if a target Payer supports PayTo, before mandate creation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bsb_number = 'bsb_number_example'; // string | BSB Number

try {
    $result = $apiInstance->checkBsbIsSupportedByPayTo($bsb_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->checkBsbIsSupportedByPayTo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bsb_number** | **string**| BSB Number | |

### Return type

[**\OpenAPI\Client\Model\CheckPayToBsbSupportResponseBody**](../Model/CheckPayToBsbSupportResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMandate()`

```php
createMandate($create_mandate_request_body): \OpenAPI\Client\Model\CreateMandateResponseBody
```

Create Mandate

(For use by Initiator only) &nbsp; Create a mandate and send via MMS to Payer for authorisation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_mandate_request_body = new \OpenAPI\Client\Model\CreateMandateRequestBody(); // \OpenAPI\Client\Model\CreateMandateRequestBody

try {
    $result = $apiInstance->createMandate($create_mandate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->createMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_mandate_request_body** | [**\OpenAPI\Client\Model\CreateMandateRequestBody**](../Model/CreateMandateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateMandateResponseBody**](../Model/CreateMandateResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandate()`

```php
getMandate($mandate_id): \OpenAPI\Client\Model\GetMandateResponseBody
```

Get Mandate by ID

Can be used by either Initiator or Payer, as long as they are party to the mandate (either created the mandate or authorised it as debtor)  Direct MMS Get Mandate call. Only supports one Mandate ID per call. NPPA doesn't recommend caching data in applications as it may end up out of date - client should call this endpoint each time the mandate data needs to be displayed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate ID

try {
    $result = $apiInstance->getMandate($mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate ID | |

### Return type

[**\OpenAPI\Client\Model\GetMandateResponseBody**](../Model/GetMandateResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandateActionsByInitiator()`

```php
getMandateActionsByInitiator($mandate_id, $pending_only, $from, $to): \OpenAPI\Client\Model\GetMandateActionsResponseBody
```

Get Mandate Actions by Initiator

Retrieve a selection of the actions performed on a mandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate ID
$pending_only = True; // bool | Whether only pending actions will be included in the result
$from = 'from_example'; // string | Optional timestamp defining the start of the time period of action history to be included in the result. If omitted, then this time defaults to the moment of mandate creation. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC.
$to = 'to_example'; // string | Optional timestamp defining the end of the time period of action history to be included in the result. If omitted, then this time defaults to the current moment in time. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC.

try {
    $result = $apiInstance->getMandateActionsByInitiator($mandate_id, $pending_only, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandateActionsByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate ID | |
| **pending_only** | **bool**| Whether only pending actions will be included in the result | [optional] |
| **from** | **string**| Optional timestamp defining the start of the time period of action history to be included in the result. If omitted, then this time defaults to the moment of mandate creation. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC. | [optional] |
| **to** | **string**| Optional timestamp defining the end of the time period of action history to be included in the result. If omitted, then this time defaults to the current moment in time. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetMandateActionsResponseBody**](../Model/GetMandateActionsResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandateActionsByPayer()`

```php
getMandateActionsByPayer($mandate_id, $pending_only, $from, $to): \OpenAPI\Client\Model\GetMandateActionsResponseBody
```

Get Mandate Actions by Payer

Retrieve a selection of the actions performed on a mandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate ID
$pending_only = True; // bool | Whether only pending actions will be included in the result
$from = 'from_example'; // string | Optional timestamp defining the start of the time period of action history to be included in the result. If omitted, then this time defaults to the moment of mandate creation. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC.
$to = 'to_example'; // string | Optional timestamp defining the end of the time period of action history to be included in the result. If omitted, then this time defaults to the current moment in time. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC.

try {
    $result = $apiInstance->getMandateActionsByPayer($mandate_id, $pending_only, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandateActionsByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate ID | |
| **pending_only** | **bool**| Whether only pending actions will be included in the result | [optional] |
| **from** | **string**| Optional timestamp defining the start of the time period of action history to be included in the result. If omitted, then this time defaults to the moment of mandate creation. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC. | [optional] |
| **to** | **string**| Optional timestamp defining the end of the time period of action history to be included in the result. If omitted, then this time defaults to the current moment in time. If provided, then this must not be a time in the future. An ISODateTime whereby all time zoned values are UTC. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetMandateActionsResponseBody**](../Model/GetMandateActionsResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandateIdsByInitiator()`

```php
getMandateIdsByInitiator($creditor_account_id): string[]
```

Returns all Mandate IDs for a Shaype Account ID.

Caller must be owner of the account and BSB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditor_account_id = 'creditor_account_id_example'; // string | Creditor's Shaype Account ID

try {
    $result = $apiInstance->getMandateIdsByInitiator($creditor_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandateIdsByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditor_account_id** | **string**| Creditor&#39;s Shaype Account ID | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandatePaymentStatus()`

```php
getMandatePaymentStatus($mandate_id, $instruction_id): \OpenAPI\Client\Model\GetMandatePaymentStatusResponseBody
```

Get Payment instruction status by Mandate ID and Payment instruction ID

Get the status of a mandate payment initiation that was performed previously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate ID
$instruction_id = 'instruction_id_example'; // string | Payment instruction ID

try {
    $result = $apiInstance->getMandatePaymentStatus($mandate_id, $instruction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandatePaymentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate ID | |
| **instruction_id** | **string**| Payment instruction ID | |

### Return type

[**\OpenAPI\Client\Model\GetMandatePaymentStatusResponseBody**](../Model/GetMandatePaymentStatusResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandates()`

```php
getMandates($account_ids, $page_number, $page_size, $statuses): \OpenAPI\Client\Model\GetMandatesResponseBody
```

Get Mandates by debtor account numbers

(For use by Payer only) &nbsp;  Uses underlying Cuscal Search Mandates mechanism. This is a mandate cache and doesn't call the MMS directly. Cuscal restricts data to the Payer only - so not possible for Initiator to use this.  Only mandates where the debtor party has one of the provided account numbers will be returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_ids = array('account_ids_example'); // string[] | Account numbers
$page_number = 56; // int | Page number
$page_size = 56; // int | Page size
$statuses = array('statuses_example'); // string[] | Mandate status:   * **CREATED**: Created  * **ACTIVE**: Active  * **SUSPENDED**: Suspended  * **CANCELLED**: Cancelled

try {
    $result = $apiInstance->getMandates($account_ids, $page_number, $page_size, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->getMandates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ids** | [**string[]**](../Model/string.md)| Account numbers | |
| **page_number** | **int**| Page number | |
| **page_size** | **int**| Page size | |
| **statuses** | [**string[]**](../Model/string.md)| Mandate status:   * **CREATED**: Created  * **ACTIVE**: Active  * **SUSPENDED**: Suspended  * **CANCELLED**: Cancelled | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetMandatesResponseBody**](../Model/GetMandatesResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeAdhocPayment()`

```php
makeAdhocPayment($make_adhoc_payment_request_body): \OpenAPI\Client\Model\MakeAdhocPaymentResponseBody
```

Make Adhoc Payment

(For use by Initiator only) &nbsp; Trigger a Payment Initiation Request to the Payer side. &nbsp; Currently in Staging this does not result in a transaction, the client should just check for a 200 response (but will receive a RJCT PSR notification)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$make_adhoc_payment_request_body = new \OpenAPI\Client\Model\MakeAdhocPaymentRequestBody(); // \OpenAPI\Client\Model\MakeAdhocPaymentRequestBody

try {
    $result = $apiInstance->makeAdhocPayment($make_adhoc_payment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->makeAdhocPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **make_adhoc_payment_request_body** | [**\OpenAPI\Client\Model\MakeAdhocPaymentRequestBody**](../Model/MakeAdhocPaymentRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MakeAdhocPaymentResponseBody**](../Model/MakeAdhocPaymentResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseMandateByInitiator()`

```php
releaseMandateByInitiator($mandate_id): \OpenAPI\Client\Model\GenericMessage
```

Release Mandate by Initiator

(For use by Initiator only) &nbsp; Unsuspend a mandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier

try {
    $result = $apiInstance->releaseMandateByInitiator($mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->releaseMandateByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseMandateByPayer()`

```php
releaseMandateByPayer($mandate_id): \OpenAPI\Client\Model\GenericMessage
```

Release Mandate by Payer

(For use by Payer only) &nbsp; Unsuspend a mandate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier

try {
    $result = $apiInstance->releaseMandateByPayer($mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->releaseMandateByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveMandateByInitiator()`

```php
resolveMandateByInitiator($mandate_id): \OpenAPI\Client\Model\GenericMessage
```

Resolve Mandate by Initiator

(For use by Initiator only) &nbsp; Recalls a new mandate or mandate amendment that has not yet been authorised by the Payer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier

try {
    $result = $apiInstance->resolveMandateByInitiator($mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->resolveMandateByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveMandateByPayer()`

```php
resolveMandateByPayer($mandate_id, $resolution): \OpenAPI\Client\Model\GenericMessage
```

Resolve Mandate pending action by Payer

(For use by Payer only) &nbsp; Authorise an amend that has been requested by an Initiator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$resolution = 'resolution_example'; // string | Mandate resolution:   * **ACCEPT**: Mandate accepted  * **REJECT**: Mandate rejected

try {
    $result = $apiInstance->resolveMandateByPayer($mandate_id, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->resolveMandateByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **resolution** | **string**| Mandate resolution:   * **ACCEPT**: Mandate accepted  * **REJECT**: Mandate rejected | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPaymentsInstructions()`

```php
searchPaymentsInstructions($mandate_id): \OpenAPI\Client\Model\PaymentInstructionsSummaryResponseBody
```

Search payments instructions by Mandate ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier

try {
    $result = $apiInstance->searchPaymentsInstructions($mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->searchPaymentsInstructions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |

### Return type

[**\OpenAPI\Client\Model\PaymentInstructionsSummaryResponseBody**](../Model/PaymentInstructionsSummaryResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setScheduledPaymentInitiationRequestAmount()`

```php
setScheduledPaymentInitiationRequestAmount($mandate_id, $set_scheduled_payment_initiation_amount_request_body): \OpenAPI\Client\Model\GenericMessage
```

Set amount of Scheduled Payment Initiation Request by Initiator

Allows to set Scheduled Payment Initiation Request amount for USAGE_BASED and VARIABLE mandates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$set_scheduled_payment_initiation_amount_request_body = new \OpenAPI\Client\Model\SetScheduledPaymentInitiationAmountRequestBody(); // \OpenAPI\Client\Model\SetScheduledPaymentInitiationAmountRequestBody

try {
    $result = $apiInstance->setScheduledPaymentInitiationRequestAmount($mandate_id, $set_scheduled_payment_initiation_amount_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->setScheduledPaymentInitiationRequestAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **set_scheduled_payment_initiation_amount_request_body** | [**\OpenAPI\Client\Model\SetScheduledPaymentInitiationAmountRequestBody**](../Model/SetScheduledPaymentInitiationAmountRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendMandateByInitiator()`

```php
suspendMandateByInitiator($mandate_id, $suspend_mandate_request_body): \OpenAPI\Client\Model\GenericMessage
```

Suspend Mandate by Initiator

(For use by Initiator only) &nbsp; Suspends a mandate - places it on pause so cannot be actioned. Can be unsuspended using Release Mandate by Initiator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$suspend_mandate_request_body = new \OpenAPI\Client\Model\SuspendMandateRequestBody(); // \OpenAPI\Client\Model\SuspendMandateRequestBody

try {
    $result = $apiInstance->suspendMandateByInitiator($mandate_id, $suspend_mandate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->suspendMandateByInitiator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **suspend_mandate_request_body** | [**\OpenAPI\Client\Model\SuspendMandateRequestBody**](../Model/SuspendMandateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendMandateByPayer()`

```php
suspendMandateByPayer($mandate_id, $suspend_mandate_request_body): \OpenAPI\Client\Model\GenericMessage
```

Suspend Mandate by Payer

(For use by Payer only) &nbsp; Suspend (pause) a mandate without cancelling it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayToAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandate_id = 'mandate_id_example'; // string | Mandate identifier
$suspend_mandate_request_body = new \OpenAPI\Client\Model\SuspendMandateRequestBody(); // \OpenAPI\Client\Model\SuspendMandateRequestBody

try {
    $result = $apiInstance->suspendMandateByPayer($mandate_id, $suspend_mandate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayToAPIApi->suspendMandateByPayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mandate_id** | **string**| Mandate identifier | |
| **suspend_mandate_request_body** | [**\OpenAPI\Client\Model\SuspendMandateRequestBody**](../Model/SuspendMandateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
