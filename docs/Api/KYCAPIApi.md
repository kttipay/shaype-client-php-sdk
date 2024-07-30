# Shaype\Client\KYCAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveAmlKycCheck()**](KYCAPIApi.md#approveAmlKycCheck) | **POST** /v1/kyc/{customerId}/onboarding/amlKycCheck/approval | Approve AML Check |
| [**approveDocumentCheck()**](KYCAPIApi.md#approveDocumentCheck) | **POST** /v1/kyc/{customerId}/onboarding/documentCheck/approval | Approve Document Check |
| [**approveSanctionCheck()**](KYCAPIApi.md#approveSanctionCheck) | **POST** /v1/kyc/{customerId}/onboarding/sanctionCheck/approval | Approve Sanctions Check |
| [**createCase()**](KYCAPIApi.md#createCase) | **POST** /v1/kyc/identity-verification/cases | Create new identity verification case and first submission |


## `approveAmlKycCheck()`

```php
approveAmlKycCheck($customer_id, $onboarding_stage_approval_body): \Shaype\Client\Model\ConfirmationResponse
```

Approve AML Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\KYCAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer
$onboarding_stage_approval_body = new \Shaype\Client\Model\OnboardingStageApprovalBody(); // \Shaype\Client\Model\OnboardingStageApprovalBody

try {
    $result = $apiInstance->approveAmlKycCheck($customer_id, $onboarding_stage_approval_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCAPIApi->approveAmlKycCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |
| **onboarding_stage_approval_body** | [**\Shaype\Client\Model\OnboardingStageApprovalBody**](../Model/OnboardingStageApprovalBody.md)|  | |

### Return type

[**\Shaype\Client\Model\ConfirmationResponse**](../Model/ConfirmationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveDocumentCheck()`

```php
approveDocumentCheck($customer_id, $onboarding_stage_approval_body): \Shaype\Client\Model\ConfirmationResponse
```

Approve Document Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\KYCAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer
$onboarding_stage_approval_body = new \Shaype\Client\Model\OnboardingStageApprovalBody(); // \Shaype\Client\Model\OnboardingStageApprovalBody

try {
    $result = $apiInstance->approveDocumentCheck($customer_id, $onboarding_stage_approval_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCAPIApi->approveDocumentCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |
| **onboarding_stage_approval_body** | [**\Shaype\Client\Model\OnboardingStageApprovalBody**](../Model/OnboardingStageApprovalBody.md)|  | |

### Return type

[**\Shaype\Client\Model\ConfirmationResponse**](../Model/ConfirmationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveSanctionCheck()`

```php
approveSanctionCheck($customer_id, $onboarding_stage_approval_body): \Shaype\Client\Model\ConfirmationResponse
```

Approve Sanctions Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\KYCAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | Unique identifier (UUID) of the Customer
$onboarding_stage_approval_body = new \Shaype\Client\Model\OnboardingStageApprovalBody(); // \Shaype\Client\Model\OnboardingStageApprovalBody

try {
    $result = $apiInstance->approveSanctionCheck($customer_id, $onboarding_stage_approval_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCAPIApi->approveSanctionCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier (UUID) of the Customer | |
| **onboarding_stage_approval_body** | [**\Shaype\Client\Model\OnboardingStageApprovalBody**](../Model/OnboardingStageApprovalBody.md)|  | |

### Return type

[**\Shaype\Client\Model\ConfirmationResponse**](../Model/ConfirmationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCase()`

```php
createCase(): \Shaype\Client\Model\CreateCaseExternalResponse
```

Create new identity verification case and first submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\KYCAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createCase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCAPIApi->createCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shaype\Client\Model\CreateCaseExternalResponse**](../Model/CreateCaseExternalResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
