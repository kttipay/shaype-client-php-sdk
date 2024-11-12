# Shaype\Client\GroupsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCustomersToGroup()**](GroupsAPIApi.md#addCustomersToGroup) | **POST** /v0/groups/{groupHayId}/addCustomers | Add Customers to Group |
| [**createHayAccountForGroup()**](GroupsAPIApi.md#createHayAccountForGroup) | **POST** /v0/groups/{groupHayId}/account | Create Account for Group - (To be DEPRECATED - Use POST /v1/accounts instead) |
| [**createHayGroup()**](GroupsAPIApi.md#createHayGroup) | **POST** /v0/groups/create | Create Group |
| [**getHayJointAccountByGroupHayId()**](GroupsAPIApi.md#getHayJointAccountByGroupHayId) | **GET** /v0/groups/{groupHayId} | Get Account by Group ID |
| [**removeCustomerFromGroup()**](GroupsAPIApi.md#removeCustomerFromGroup) | **POST** /v0/groups/{groupHayId}/removeCustomer | Remove a Customer from a Group |
| [**updateGroup()**](GroupsAPIApi.md#updateGroup) | **PATCH** /v0/groups/{groupHayId} | Update Group details |


## `addCustomersToGroup()`

```php
addCustomersToGroup($group_hay_id, $add_customers_to_group_request_body): \Shaype\Client\Model\HayJointAccount
```

Add Customers to Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_hay_id = 'group_hay_id_example'; // string | Unique identifier (UUID) of the Group
$add_customers_to_group_request_body = new \Shaype\Client\Model\AddCustomersToGroupRequestBody(); // \Shaype\Client\Model\AddCustomersToGroupRequestBody

try {
    $result = $apiInstance->addCustomersToGroup($group_hay_id, $add_customers_to_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->addCustomersToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_hay_id** | **string**| Unique identifier (UUID) of the Group | |
| **add_customers_to_group_request_body** | [**\Shaype\Client\Model\AddCustomersToGroupRequestBody**](../Model/AddCustomersToGroupRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayJointAccount**](../Model/HayJointAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHayAccountForGroup()`

```php
createHayAccountForGroup($group_hay_id, $create_hay_account_for_group_request_body): \Shaype\Client\Model\HayJointAccount
```

Create Account for Group - (To be DEPRECATED - Use POST /v1/accounts instead)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_hay_id = 'group_hay_id_example'; // string | Unique identifier (UUID) of the Group
$create_hay_account_for_group_request_body = new \Shaype\Client\Model\CreateHayAccountForGroupRequestBody(); // \Shaype\Client\Model\CreateHayAccountForGroupRequestBody

try {
    $result = $apiInstance->createHayAccountForGroup($group_hay_id, $create_hay_account_for_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->createHayAccountForGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_hay_id** | **string**| Unique identifier (UUID) of the Group | |
| **create_hay_account_for_group_request_body** | [**\Shaype\Client\Model\CreateHayAccountForGroupRequestBody**](../Model/CreateHayAccountForGroupRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayJointAccount**](../Model/HayJointAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHayGroup()`

```php
createHayGroup($create_hay_group_request_body): \Shaype\Client\Model\HayGroup
```

Create Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_hay_group_request_body = new \Shaype\Client\Model\CreateHayGroupRequestBody(); // \Shaype\Client\Model\CreateHayGroupRequestBody

try {
    $result = $apiInstance->createHayGroup($create_hay_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->createHayGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_hay_group_request_body** | [**\Shaype\Client\Model\CreateHayGroupRequestBody**](../Model/CreateHayGroupRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayGroup**](../Model/HayGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHayJointAccountByGroupHayId()`

```php
getHayJointAccountByGroupHayId($group_hay_id): \Shaype\Client\Model\HayJointAccount
```

Get Account by Group ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_hay_id = 'group_hay_id_example'; // string | Unique identifier (UUID) of the Group

try {
    $result = $apiInstance->getHayJointAccountByGroupHayId($group_hay_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->getHayJointAccountByGroupHayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_hay_id** | **string**| Unique identifier (UUID) of the Group | |

### Return type

[**\Shaype\Client\Model\HayJointAccount**](../Model/HayJointAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCustomerFromGroup()`

```php
removeCustomerFromGroup($group_hay_id, $remove_customer_from_group_request_body): \Shaype\Client\Model\HayJointAccount
```

Remove a Customer from a Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_hay_id = 'group_hay_id_example'; // string | Unique identifier (UUID) of the Group
$remove_customer_from_group_request_body = new \Shaype\Client\Model\RemoveCustomerFromGroupRequestBody(); // \Shaype\Client\Model\RemoveCustomerFromGroupRequestBody

try {
    $result = $apiInstance->removeCustomerFromGroup($group_hay_id, $remove_customer_from_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->removeCustomerFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_hay_id** | **string**| Unique identifier (UUID) of the Group | |
| **remove_customer_from_group_request_body** | [**\Shaype\Client\Model\RemoveCustomerFromGroupRequestBody**](../Model/RemoveCustomerFromGroupRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayJointAccount**](../Model/HayJointAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($group_hay_id, $update_group_request_body): \Shaype\Client\Model\HayGroup
```

Update Group details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shaype\Client\Api\GroupsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_hay_id = 'group_hay_id_example'; // string | Unique identifier (UUID) of the Group
$update_group_request_body = new \Shaype\Client\Model\UpdateGroupRequestBody(); // \Shaype\Client\Model\UpdateGroupRequestBody

try {
    $result = $apiInstance->updateGroup($group_hay_id, $update_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsAPIApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_hay_id** | **string**| Unique identifier (UUID) of the Group | |
| **update_group_request_body** | [**\Shaype\Client\Model\UpdateGroupRequestBody**](../Model/UpdateGroupRequestBody.md)|  | |

### Return type

[**\Shaype\Client\Model\HayGroup**](../Model/HayGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
