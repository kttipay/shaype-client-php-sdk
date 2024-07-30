# Shaype\Client\CardsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateCard()**](CardsAPIApi.md#activateCard) | **POST** /v0/cards/{cardId}/activate | Activate Card |
| [**blockCard()**](CardsAPIApi.md#blockCard) | **POST** /v0/cards/{cardId}/block | Block Card |
| [**cancelCard()**](CardsAPIApi.md#cancelCard) | **POST** /v0/cards/{cardId}/cancel | Cancel Card |
| [**changeCardPin()**](CardsAPIApi.md#changeCardPin) | **PUT** /v0/cards/{cardId}/pin | Change Card PIN |
| [**convertCard()**](CardsAPIApi.md#convertCard) | **POST** /v0/cards/{cardId}/convert | Convert Card |
| [**createHayCard()**](CardsAPIApi.md#createHayCard) | **POST** /v0/cards/create | Create Card for Customer |
| [**getCard()**](CardsAPIApi.md#getCard) | **GET** /v0/cards/{cardId} | Get Card by ID |
| [**getCardPinStatus()**](CardsAPIApi.md#getCardPinStatus) | **GET** /v0/cards/{cardId}/pin/status | Get Card PIN status |
| [**getDigitalWalletDetails()**](CardsAPIApi.md#getDigitalWalletDetails) | **GET** /v0/cards/{cardId}/digital-wallets | Get wallets by Card ID |
| [**getOemProvisioningData()**](CardsAPIApi.md#getOemProvisioningData) | **GET** /v0/cards/{cardId}/oem-provisioning-data | Get provisioning data by Card ID |
| [**getPaymentPreferences()**](CardsAPIApi.md#getPaymentPreferences) | **GET** /v0/cards/{cardId}/payment-preferences | Get preferences by Card ID |
| [**reissueHayCard()**](CardsAPIApi.md#reissueHayCard) | **POST** /v0/cards/{cardId}/re-issue | Replace Card |
| [**renewCard()**](CardsAPIApi.md#renewCard) | **POST** /v0/cards/{cardId}/renew | Renew Card |
| [**rewards()**](CardsAPIApi.md#rewards) | **POST** /v0/cards/{cardId}/rewards | Enrol card to rewards |
| [**unblockCard()**](CardsAPIApi.md#unblockCard) | **POST** /v0/cards/{cardId}/unblock | Unblock Card |
| [**unblockCardPin()**](CardsAPIApi.md#unblockCardPin) | **POST** /v0/cards/{cardId}/pin/unblock | Unblock Card PIN |
| [**updatePaymentPreferences()**](CardsAPIApi.md#updatePaymentPreferences) | **PATCH** /v0/cards/{cardId}/payment-preferences | Update Card preferences |


## `activateCard()`

```php
activateCard($card_id): \Shaype\Client\Model\GenericMessage
```

Activate Card

This action is only valid for cards with a status of AWAITING_ACTIVATION.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->activateCard($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->activateCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockCard()`

```php
blockCard($card_id, $block_card_request_body): \Shaype\Client\Model\GenericMessage
```

Block Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$block_card_request_body = new \Shaype\Client\Model\BlockCardRequestBody(); // \Shaype\Client\Model\BlockCardRequestBody

try {
    $result = $apiInstance->blockCard($card_id, $block_card_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->blockCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **block_card_request_body** | [**\Shaype\Client\Model\BlockCardRequestBody**](../Model/BlockCardRequestBody.md)|  | [optional] |

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

## `cancelCard()`

```php
cancelCard($card_id): \Shaype\Client\Model\GenericMessage
```

Cancel Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->cancelCard($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->cancelCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCardPin()`

```php
changeCardPin($card_id, $change_card_pin_request_body): \Shaype\Client\Model\GenericMessage
```

Change Card PIN

Action providing the capability to change a card PIN. To use this endpoint please contact your CSM, this functionality requires agreement to be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$change_card_pin_request_body = new \Shaype\Client\Model\ChangeCardPinRequestBody(); // \Shaype\Client\Model\ChangeCardPinRequestBody

try {
    $result = $apiInstance->changeCardPin($card_id, $change_card_pin_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->changeCardPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **change_card_pin_request_body** | [**\Shaype\Client\Model\ChangeCardPinRequestBody**](../Model/ChangeCardPinRequestBody.md)|  | |

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

## `convertCard()`

```php
convertCard($card_id): \Shaype\Client\Model\HayCard
```

Convert Card

Action providing the capability to convert a card from Virtual to Physical

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->convertCard($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->convertCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\HayCard**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHayCard()`

```php
createHayCard($create_hay_card_request_body): \Shaype\Client\Model\HayCard
```

Create Card for Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_hay_card_request_body = new \Shaype\Client\Model\CreateHayCardRequestBody(); // \Shaype\Client\Model\CreateHayCardRequestBody

try {
    $result = $apiInstance->createHayCard($create_hay_card_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->createHayCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_hay_card_request_body** | [**\Shaype\Client\Model\CreateHayCardRequestBody**](../Model/CreateHayCardRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCard**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCard()`

```php
getCard($card_id): \Shaype\Client\Model\HayCard
```

Get Card by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->getCard($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->getCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\HayCard**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardPinStatus()`

```php
getCardPinStatus($card_id): \Shaype\Client\Model\CardPinStatus
```

Get Card PIN status

Action providing the capability to view Card PIN status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->getCardPinStatus($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->getCardPinStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\CardPinStatus**](../Model/CardPinStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalWalletDetails()`

```php
getDigitalWalletDetails($card_id): \Shaype\Client\Model\DigitalWalletDetails
```

Get wallets by Card ID

This endpoint allows to retrieve digital wallet tokens and primaryAccountIdentifier to determine if a card has been digitally provisioned on a devices wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->getDigitalWalletDetails($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->getDigitalWalletDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\DigitalWalletDetails**](../Model/DigitalWalletDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOemProvisioningData()`

```php
getOemProvisioningData($card_id): \Shaype\Client\Model\OemProvisioningData
```

Get provisioning data by Card ID

This endpoints allows to retrieve encrypted OEM provisioning data used with wallet push provisioning and card details SDKs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->getOemProvisioningData($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->getOemProvisioningData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\OemProvisioningData**](../Model/OemProvisioningData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentPreferences()`

```php
getPaymentPreferences($card_id): \Shaype\Client\Model\CardPaymentPreferences
```

Get preferences by Card ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->getPaymentPreferences($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->getPaymentPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\CardPaymentPreferences**](../Model/CardPaymentPreferences.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reissueHayCard()`

```php
reissueHayCard($card_id, $reissue_hay_card_request_body): \Shaype\Client\Model\HayCard
```

Replace Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$reissue_hay_card_request_body = new \Shaype\Client\Model\ReissueHayCardRequestBody(); // \Shaype\Client\Model\ReissueHayCardRequestBody

try {
    $result = $apiInstance->reissueHayCard($card_id, $reissue_hay_card_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->reissueHayCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **reissue_hay_card_request_body** | [**\Shaype\Client\Model\ReissueHayCardRequestBody**](../Model/ReissueHayCardRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCard**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewCard()`

```php
renewCard($card_id, $renew_card_request_body): \Shaype\Client\Model\HayCard
```

Renew Card

Action providing the capability to renew a card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$renew_card_request_body = new \Shaype\Client\Model\RenewCardRequestBody(); // \Shaype\Client\Model\RenewCardRequestBody

try {
    $result = $apiInstance->renewCard($card_id, $renew_card_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->renewCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **renew_card_request_body** | [**\Shaype\Client\Model\RenewCardRequestBody**](../Model/RenewCardRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayCard**](../Model/HayCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewards()`

```php
rewards($card_id, $card_rewards_status_body): \Shaype\Client\Model\CardRewardsStatusBody
```

Enrol card to rewards

Eligible card transactions will automatically count toward rewards provided by rewards platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$card_rewards_status_body = new \Shaype\Client\Model\CardRewardsStatusBody(); // \Shaype\Client\Model\CardRewardsStatusBody

try {
    $result = $apiInstance->rewards($card_id, $card_rewards_status_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->rewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **card_rewards_status_body** | [**\Shaype\Client\Model\CardRewardsStatusBody**](../Model/CardRewardsStatusBody.md)|  | |

### Return type

[**\Shaype\Client\Model\CardRewardsStatusBody**](../Model/CardRewardsStatusBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockCard()`

```php
unblockCard($card_id, $unblock_card_request_body): \Shaype\Client\Model\GenericMessage
```

Unblock Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$unblock_card_request_body = new \Shaype\Client\Model\UnblockCardRequestBody(); // \Shaype\Client\Model\UnblockCardRequestBody

try {
    $result = $apiInstance->unblockCard($card_id, $unblock_card_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->unblockCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **unblock_card_request_body** | [**\Shaype\Client\Model\UnblockCardRequestBody**](../Model/UnblockCardRequestBody.md)|  | |

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

## `unblockCardPin()`

```php
unblockCardPin($card_id): \Shaype\Client\Model\GenericMessage
```

Unblock Card PIN

Action providing the capability to unblock a card PIN so that the cardholder is able to attempt to enter their PIN  again. Blocking of a card’s PIN occurs after the cardholder has incorrectly entered their card PIN 3 times.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card

try {
    $result = $apiInstance->unblockCardPin($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->unblockCardPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |

### Return type

[**\Shaype\Client\Model\GenericMessage**](../Model/GenericMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentPreferences()`

```php
updatePaymentPreferences($card_id, $update_payment_preferences_request_body): \Shaype\Client\Model\CardPaymentPreferences
```

Update Card preferences

Endpoint providing the capability to update card payment preferences. This will not allow for the blocking/unblocking of Cards or PIN (blocking a card and unblocking a PIN is possible through other endpoints).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\CardsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Unique identifier (UUID) of the Card
$update_payment_preferences_request_body = new \Shaype\Client\Model\UpdatePaymentPreferencesRequestBody(); // \Shaype\Client\Model\UpdatePaymentPreferencesRequestBody

try {
    $result = $apiInstance->updatePaymentPreferences($card_id, $update_payment_preferences_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsAPIApi->updatePaymentPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Unique identifier (UUID) of the Card | |
| **update_payment_preferences_request_body** | [**\Shaype\Client\Model\UpdatePaymentPreferencesRequestBody**](../Model/UpdatePaymentPreferencesRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\CardPaymentPreferences**](../Model/CardPaymentPreferences.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
