# OpenAPI\Client\AccountsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountRule()**](AccountsAPIApi.md#addAccountRule) | **POST** /v1/accounts/{accountId}/rules | Create Rule for Account |
| [**blockAccount()**](AccountsAPIApi.md#blockAccount) | **POST** /v0/accounts/{accountId}/block | Block Account and Customer |
| [**changeAccountRiskLevel()**](AccountsAPIApi.md#changeAccountRiskLevel) | **PATCH** /v0/accounts/{accountId}/riskLevel | Update Account Risk Level |
| [**closeAccount()**](AccountsAPIApi.md#closeAccount) | **POST** /v0/accounts/{accountId}/close | Closes an account |
| [**createAccount()**](AccountsAPIApi.md#createAccount) | **POST** /v1/accounts | Creates an Account |
| [**createAccountCustomData()**](AccountsAPIApi.md#createAccountCustomData) | **POST** /v1/accounts/{accountId}/custom-data | Create Custom Data for Account |
| [**deleteAccountCustomData()**](AccountsAPIApi.md#deleteAccountCustomData) | **DELETE** /v1/accounts/{accountId}/custom-data | Delete Custom Data from Account |
| [**deleteAccountLimit()**](AccountsAPIApi.md#deleteAccountLimit) | **DELETE** /v1/accounts/{accountId}/limits/{limitType} | Delete limit from Account |
| [**disableRule()**](AccountsAPIApi.md#disableRule) | **DELETE** /v1/accounts/{accountId}/rules/{ruleId} | Delete Rule from Account |
| [**getAccountLimits()**](AccountsAPIApi.md#getAccountLimits) | **GET** /v1/accounts/{accountId}/limits | Get all limits by Account ID |
| [**getAccountRiskLevel()**](AccountsAPIApi.md#getAccountRiskLevel) | **GET** /v0/accounts/{accountId}/riskLevel | Get Risk Level by Account ID |
| [**getAccountRuleById()**](AccountsAPIApi.md#getAccountRuleById) | **GET** /v1/accounts/{accountId}/rules/{ruleId} | Get Rule for Account by Rule ID |
| [**getAccountRules()**](AccountsAPIApi.md#getAccountRules) | **GET** /v1/accounts/{accountId}/rules | Get all Rules by Account ID |
| [**getCardsForAccountId()**](AccountsAPIApi.md#getCardsForAccountId) | **GET** /v0/accounts/{accountId}/cards | Get all Cards by Account ID |
| [**getHayAccount()**](AccountsAPIApi.md#getHayAccount) | **GET** /v0/accounts/{accountId} | Get Account by ID |
| [**getPendingHolds()**](AccountsAPIApi.md#getPendingHolds) | **GET** /v0/accounts/{accountId}/holds | Get all Authorisation Holds by Account ID |
| [**makeTransferV0()**](AccountsAPIApi.md#makeTransferV0) | **POST** /v0/accounts/{accountId}/transfer | Initiate Cash Transfer (DEPRECATED) |
| [**makeTransferV1()**](AccountsAPIApi.md#makeTransferV1) | **POST** /v1/accounts/{accountId}/transfer | Initiate Cash Transfer |
| [**searchAccounts()**](AccountsAPIApi.md#searchAccounts) | **POST** /v1/accounts/search | Search accounts |
| [**setAccountLimit()**](AccountsAPIApi.md#setAccountLimit) | **PUT** /v1/accounts/{accountId}/limits/{limitType} | Set limit for Account |
| [**unblockAccount()**](AccountsAPIApi.md#unblockAccount) | **POST** /v0/accounts/{accountId}/unblock | Unblock Account |
| [**updateMaxBalanceLimit()**](AccountsAPIApi.md#updateMaxBalanceLimit) | **PATCH** /v0/accounts/{accountId}/max-balance | Update Account max balance |
| [**updateOverdraftLimit()**](AccountsAPIApi.md#updateOverdraftLimit) | **PATCH** /v0/accounts/{accountId}/overdraft | Update Account overdraft limit |


## `addAccountRule()`

```php
addAccountRule($account_id, $external_add_transaction_rule_request): \OpenAPI\Client\Model\ExternalTransactionRuleResponse
```

Create Rule for Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$external_add_transaction_rule_request = new \OpenAPI\Client\Model\ExternalAddTransactionRuleRequest(); // \OpenAPI\Client\Model\ExternalAddTransactionRuleRequest

try {
    $result = $apiInstance->addAccountRule($account_id, $external_add_transaction_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->addAccountRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **external_add_transaction_rule_request** | [**\OpenAPI\Client\Model\ExternalAddTransactionRuleRequest**](../Model/ExternalAddTransactionRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExternalTransactionRuleResponse**](../Model/ExternalTransactionRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockAccount()`

```php
blockAccount($account_id, $block_account_request_body): \OpenAPI\Client\Model\GenericMessage
```

Block Account and Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$block_account_request_body = new \OpenAPI\Client\Model\BlockAccountRequestBody(); // \OpenAPI\Client\Model\BlockAccountRequestBody

try {
    $result = $apiInstance->blockAccount($account_id, $block_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->blockAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **block_account_request_body** | [**\OpenAPI\Client\Model\BlockAccountRequestBody**](../Model/BlockAccountRequestBody.md)|  | |

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

## `changeAccountRiskLevel()`

```php
changeAccountRiskLevel($account_id, $change_hay_account_risk_level_request_body): \OpenAPI\Client\Model\GenericMessage
```

Update Account Risk Level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$change_hay_account_risk_level_request_body = new \OpenAPI\Client\Model\ChangeHayAccountRiskLevelRequestBody(); // \OpenAPI\Client\Model\ChangeHayAccountRiskLevelRequestBody

try {
    $result = $apiInstance->changeAccountRiskLevel($account_id, $change_hay_account_risk_level_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->changeAccountRiskLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **change_hay_account_risk_level_request_body** | [**\OpenAPI\Client\Model\ChangeHayAccountRiskLevelRequestBody**](../Model/ChangeHayAccountRiskLevelRequestBody.md)|  | |

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

## `closeAccount()`

```php
closeAccount($account_id): \OpenAPI\Client\Model\CloseAccountResponse
```

Closes an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->closeAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->closeAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\CloseAccountResponse**](../Model/CloseAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccount()`

```php
createAccount($create_account_request_body): \OpenAPI\Client\Model\HayAccount
```

Creates an Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_account_request_body = new \OpenAPI\Client\Model\CreateAccountRequestBody(); // \OpenAPI\Client\Model\CreateAccountRequestBody

try {
    $result = $apiInstance->createAccount($create_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_account_request_body** | [**\OpenAPI\Client\Model\CreateAccountRequestBody**](../Model/CreateAccountRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HayAccount**](../Model/HayAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountCustomData()`

```php
createAccountCustomData($account_id, $create_account_custom_data_request_body): \OpenAPI\Client\Model\GenericMessage
```

Create Custom Data for Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$create_account_custom_data_request_body = new \OpenAPI\Client\Model\CreateAccountCustomDataRequestBody(); // \OpenAPI\Client\Model\CreateAccountCustomDataRequestBody

try {
    $result = $apiInstance->createAccountCustomData($account_id, $create_account_custom_data_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->createAccountCustomData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **create_account_custom_data_request_body** | [**\OpenAPI\Client\Model\CreateAccountCustomDataRequestBody**](../Model/CreateAccountCustomDataRequestBody.md)|  | |

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

## `deleteAccountCustomData()`

```php
deleteAccountCustomData($account_id): \OpenAPI\Client\Model\GenericMessage
```

Delete Custom Data from Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->deleteAccountCustomData($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->deleteAccountCustomData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

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

## `deleteAccountLimit()`

```php
deleteAccountLimit($account_id, $limit_type): \OpenAPI\Client\Model\DeleteAccountLimitResponse
```

Delete limit from Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$limit_type = 'limit_type_example'; // string | Account limit. Possible values:  * **ATM_WITHDRAWAL_PER_DAY**: Maximum value of ATM cash withdrawals  * **BANK_TRANSFER_TOP_UP_PER_DAY**: Maximum value of inbound cash transfers  * **BPAY_DAILY_LIMIT**: Maximum value of outgoing BPAY payments  * **BPAY_TOP_UP_PER_DAY**: Not currently used  * **CARD_PAYMENTS_DAILY**: Maximum value of Card payments  * **CARD_TOP_UP_PER_DAY**: Not currently used  * **DIRECT_DEBIT_PER_DAY**: Maximum value of outgoing direct debit transfers  * **MAX_BALANCE**: Maximum balance that can be held in Account  * **MIN_BALANCE**: Minimum balance that can be held in Account (Shaype use only)  * **MIN_STACK_BALANCE**: Minimum balance that can be held in Stack (Shaype use only)  * **OVERDRAFT_PRODUCT_LIMIT**: Maximum overdraft value that can be applied on Account  * **PAYMENT_TO_ACCOUNT_NUMBER**: Maximum value of individual outgoing cash transfer  * **PAYMENT_TO_PAY_ID**: Not currently used  * **SINGLE_CARD_TRANSACTION**: Maximum value of individual Card payment  * **TOTAL_SPEND_PER_YEAR**: Maximum value of outgoing transfers / payments on Account in a year  * **TOP_UP_PER_DAY**: Maximum value of inbound cash transfers

try {
    $result = $apiInstance->deleteAccountLimit($account_id, $limit_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->deleteAccountLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **limit_type** | **string**| Account limit. Possible values:  * **ATM_WITHDRAWAL_PER_DAY**: Maximum value of ATM cash withdrawals  * **BANK_TRANSFER_TOP_UP_PER_DAY**: Maximum value of inbound cash transfers  * **BPAY_DAILY_LIMIT**: Maximum value of outgoing BPAY payments  * **BPAY_TOP_UP_PER_DAY**: Not currently used  * **CARD_PAYMENTS_DAILY**: Maximum value of Card payments  * **CARD_TOP_UP_PER_DAY**: Not currently used  * **DIRECT_DEBIT_PER_DAY**: Maximum value of outgoing direct debit transfers  * **MAX_BALANCE**: Maximum balance that can be held in Account  * **MIN_BALANCE**: Minimum balance that can be held in Account (Shaype use only)  * **MIN_STACK_BALANCE**: Minimum balance that can be held in Stack (Shaype use only)  * **OVERDRAFT_PRODUCT_LIMIT**: Maximum overdraft value that can be applied on Account  * **PAYMENT_TO_ACCOUNT_NUMBER**: Maximum value of individual outgoing cash transfer  * **PAYMENT_TO_PAY_ID**: Not currently used  * **SINGLE_CARD_TRANSACTION**: Maximum value of individual Card payment  * **TOTAL_SPEND_PER_YEAR**: Maximum value of outgoing transfers / payments on Account in a year  * **TOP_UP_PER_DAY**: Maximum value of inbound cash transfers | |

### Return type

[**\OpenAPI\Client\Model\DeleteAccountLimitResponse**](../Model/DeleteAccountLimitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableRule()`

```php
disableRule($account_id, $rule_id): \OpenAPI\Client\Model\DisableRuleResponse
```

Delete Rule from Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$rule_id = 'rule_id_example'; // string | Unique identifier (UUID) of the Rule

try {
    $result = $apiInstance->disableRule($account_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->disableRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **rule_id** | **string**| Unique identifier (UUID) of the Rule | |

### Return type

[**\OpenAPI\Client\Model\DisableRuleResponse**](../Model/DisableRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountLimits()`

```php
getAccountLimits($account_id): \OpenAPI\Client\Model\ExternalLimitAmounts[]
```

Get all limits by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getAccountLimits($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getAccountLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\ExternalLimitAmounts[]**](../Model/ExternalLimitAmounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountRiskLevel()`

```php
getAccountRiskLevel($account_id): \OpenAPI\Client\Model\RiskLevelResponse
```

Get Risk Level by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getAccountRiskLevel($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getAccountRiskLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\RiskLevelResponse**](../Model/RiskLevelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountRuleById()`

```php
getAccountRuleById($account_id, $rule_id): \OpenAPI\Client\Model\ExternalTransactionRuleResponse
```

Get Rule for Account by Rule ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$rule_id = 'rule_id_example'; // string | Unique identifier (UUID) of the Rule

try {
    $result = $apiInstance->getAccountRuleById($account_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getAccountRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **rule_id** | **string**| Unique identifier (UUID) of the Rule | |

### Return type

[**\OpenAPI\Client\Model\ExternalTransactionRuleResponse**](../Model/ExternalTransactionRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountRules()`

```php
getAccountRules($account_id): \OpenAPI\Client\Model\ExternalTransactionRuleResponse[]
```

Get all Rules by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getAccountRules($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getAccountRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\ExternalTransactionRuleResponse[]**](../Model/ExternalTransactionRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardsForAccountId()`

```php
getCardsForAccountId($account_id): \OpenAPI\Client\Model\HayCard[]
```

Get all Cards by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getCardsForAccountId($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getCardsForAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\HayCard[]**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHayAccount()`

```php
getHayAccount($account_id, $expand): \OpenAPI\Client\Model\HayAccount
```

Get Account by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$expand = `customData`; // string | Includes Custom Data with returned Account object

try {
    $result = $apiInstance->getHayAccount($account_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getHayAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **expand** | **string**| Includes Custom Data with returned Account object | [optional] |

### Return type

[**\OpenAPI\Client\Model\HayAccount**](../Model/HayAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingHolds()`

```php
getPendingHolds($account_id): \OpenAPI\Client\Model\AuthorisationHold[]
```

Get all Authorisation Holds by Account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account

try {
    $result = $apiInstance->getPendingHolds($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->getPendingHolds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |

### Return type

[**\OpenAPI\Client\Model\AuthorisationHold[]**](../Model/AuthorisationHold.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeTransferV0()`

```php
makeTransferV0($account_id, $transfer_out_request_body): \OpenAPI\Client\Model\TransactionOutcome
```

Initiate Cash Transfer (DEPRECATED)

Please use `v1/accounts/{accountId}/transfer` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Account ID
$transfer_out_request_body = new \OpenAPI\Client\Model\TransferOutRequestBody(); // \OpenAPI\Client\Model\TransferOutRequestBody

try {
    $result = $apiInstance->makeTransferV0($account_id, $transfer_out_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->makeTransferV0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | |
| **transfer_out_request_body** | [**\OpenAPI\Client\Model\TransferOutRequestBody**](../Model/TransferOutRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeTransferV1()`

```php
makeTransferV1($account_id, $transfer_out_request_body): \OpenAPI\Client\Model\TransactionOutcome
```

Initiate Cash Transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$transfer_out_request_body = new \OpenAPI\Client\Model\TransferOutRequestBody(); // \OpenAPI\Client\Model\TransferOutRequestBody

try {
    $result = $apiInstance->makeTransferV1($account_id, $transfer_out_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->makeTransferV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **transfer_out_request_body** | [**\OpenAPI\Client\Model\TransferOutRequestBody**](../Model/TransferOutRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransactionOutcome**](../Model/TransactionOutcome.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAccounts()`

```php
searchAccounts($search_accounts_request_body): \OpenAPI\Client\Model\HayAccount[]
```

Search accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_accounts_request_body = new \OpenAPI\Client\Model\SearchAccountsRequestBody(); // \OpenAPI\Client\Model\SearchAccountsRequestBody

try {
    $result = $apiInstance->searchAccounts($search_accounts_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->searchAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_accounts_request_body** | [**\OpenAPI\Client\Model\SearchAccountsRequestBody**](../Model/SearchAccountsRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HayAccount[]**](../Model/HayAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAccountLimit()`

```php
setAccountLimit($account_id, $limit_type, $external_set_account_limit_request_body): \OpenAPI\Client\Model\ExternalSetAccountLimitResponse
```

Set limit for Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$limit_type = 'limit_type_example'; // string | Account limit. Possible values:  * **ATM_WITHDRAWAL_PER_DAY**: Maximum value of ATM cash withdrawals  * **BANK_TRANSFER_TOP_UP_PER_DAY**: Maximum value of inbound cash transfers  * **BPAY_DAILY_LIMIT**: Maximum value of outgoing BPAY payments  * **BPAY_TOP_UP_PER_DAY**: Not currently used  * **CARD_PAYMENTS_DAILY**: Maximum value of Card payments  * **CARD_TOP_UP_PER_DAY**: Not currently used  * **DIRECT_DEBIT_PER_DAY**: Maximum value of outgoing direct debit transfers  * **MAX_BALANCE**: Maximum balance that can be held in Account  * **MIN_BALANCE**: Minimum balance that can be held in Account (Shaype use only)  * **MIN_STACK_BALANCE**: Minimum balance that can be held in Stack (Shaype use only)  * **OVERDRAFT_PRODUCT_LIMIT**: Maximum overdraft value that can be applied on Account  * **PAYMENT_TO_ACCOUNT_NUMBER**: Maximum value of individual outgoing cash transfer  * **PAYMENT_TO_PAY_ID**: Not currently used  * **SINGLE_CARD_TRANSACTION**: Maximum value of individual Card payment  * **TOTAL_SPEND_PER_YEAR**: Maximum value of outgoing transfers / payments on Account in a year  * **TOP_UP_PER_DAY**: Maximum value of inbound cash transfers
$external_set_account_limit_request_body = new \OpenAPI\Client\Model\ExternalSetAccountLimitRequestBody(); // \OpenAPI\Client\Model\ExternalSetAccountLimitRequestBody

try {
    $result = $apiInstance->setAccountLimit($account_id, $limit_type, $external_set_account_limit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->setAccountLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **limit_type** | **string**| Account limit. Possible values:  * **ATM_WITHDRAWAL_PER_DAY**: Maximum value of ATM cash withdrawals  * **BANK_TRANSFER_TOP_UP_PER_DAY**: Maximum value of inbound cash transfers  * **BPAY_DAILY_LIMIT**: Maximum value of outgoing BPAY payments  * **BPAY_TOP_UP_PER_DAY**: Not currently used  * **CARD_PAYMENTS_DAILY**: Maximum value of Card payments  * **CARD_TOP_UP_PER_DAY**: Not currently used  * **DIRECT_DEBIT_PER_DAY**: Maximum value of outgoing direct debit transfers  * **MAX_BALANCE**: Maximum balance that can be held in Account  * **MIN_BALANCE**: Minimum balance that can be held in Account (Shaype use only)  * **MIN_STACK_BALANCE**: Minimum balance that can be held in Stack (Shaype use only)  * **OVERDRAFT_PRODUCT_LIMIT**: Maximum overdraft value that can be applied on Account  * **PAYMENT_TO_ACCOUNT_NUMBER**: Maximum value of individual outgoing cash transfer  * **PAYMENT_TO_PAY_ID**: Not currently used  * **SINGLE_CARD_TRANSACTION**: Maximum value of individual Card payment  * **TOTAL_SPEND_PER_YEAR**: Maximum value of outgoing transfers / payments on Account in a year  * **TOP_UP_PER_DAY**: Maximum value of inbound cash transfers | |
| **external_set_account_limit_request_body** | [**\OpenAPI\Client\Model\ExternalSetAccountLimitRequestBody**](../Model/ExternalSetAccountLimitRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExternalSetAccountLimitResponse**](../Model/ExternalSetAccountLimitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockAccount()`

```php
unblockAccount($account_id, $unblock_account_request_body): \OpenAPI\Client\Model\GenericMessage
```

Unblock Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$unblock_account_request_body = new \OpenAPI\Client\Model\UnblockAccountRequestBody(); // \OpenAPI\Client\Model\UnblockAccountRequestBody

try {
    $result = $apiInstance->unblockAccount($account_id, $unblock_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->unblockAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **unblock_account_request_body** | [**\OpenAPI\Client\Model\UnblockAccountRequestBody**](../Model/UnblockAccountRequestBody.md)|  | |

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

## `updateMaxBalanceLimit()`

```php
updateMaxBalanceLimit($account_id, $update_max_balance_limit_request_body): \OpenAPI\Client\Model\GenericMessage
```

Update Account max balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$update_max_balance_limit_request_body = new \OpenAPI\Client\Model\UpdateMaxBalanceLimitRequestBody(); // \OpenAPI\Client\Model\UpdateMaxBalanceLimitRequestBody

try {
    $result = $apiInstance->updateMaxBalanceLimit($account_id, $update_max_balance_limit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->updateMaxBalanceLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **update_max_balance_limit_request_body** | [**\OpenAPI\Client\Model\UpdateMaxBalanceLimitRequestBody**](../Model/UpdateMaxBalanceLimitRequestBody.md)|  | |

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

## `updateOverdraftLimit()`

```php
updateOverdraftLimit($account_id, $update_overdraft_limit_request_body): \OpenAPI\Client\Model\GenericMessage
```

Update Account overdraft limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$update_overdraft_limit_request_body = new \OpenAPI\Client\Model\UpdateOverdraftLimitRequestBody(); // \OpenAPI\Client\Model\UpdateOverdraftLimitRequestBody

try {
    $result = $apiInstance->updateOverdraftLimit($account_id, $update_overdraft_limit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->updateOverdraftLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Unique identifier (UUID) of the Account | |
| **update_overdraft_limit_request_body** | [**\OpenAPI\Client\Model\UpdateOverdraftLimitRequestBody**](../Model/UpdateOverdraftLimitRequestBody.md)|  | |

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
