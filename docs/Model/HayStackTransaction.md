# # HayStackTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**amount** | **float** | Value of the Transaction, to 2 decimal places | [optional]
**counterpart_transaction_id** | **string** | Unique identifier (UUID) of the counterpart transaction (Stack to Stack transactions) | [optional]
**customer_id** | **string** | Unique identifier (UUID) of the Customer (initiator of the transfer) | [optional]
**hay_id** | **string** | Unique identifier (UUID) of the Transaction | [optional]
**notes** | **string** | Transaction description | [optional]
**stack** | [**\Shaype\Client\Model\HayStack**](HayStack.md) |  | [optional]
**stack_hay_id** | **string** | Unique identifier (UUID) of the Stack | [optional]
**transaction_time_utc** | **\DateTime** | DateTime in UTC format when the Transaction was initiated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
