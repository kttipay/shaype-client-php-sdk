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
**origin_id** | **string** | Additional identifier applied to Transaction related to origin of the request | [optional]
**origin_type** | **string** | Initiator origin of the Transaction. Possible values:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by Client Operations team  * **OPERATIONS**: Transaction initiated by Shaype Operations team * **MANDATE_PAYMENT**: Transaction initiated by mandate  * **DIRECT_DEBIT**: Transaction initiated by direct debit  * **TRANSACTION**: Transaction initiated by transaction | [optional]
**stack** | [**\Shaype\Client\Model\HayStack**](HayStack.md) |  | [optional]
**stack_hay_id** | **string** | Unique identifier (UUID) of the Stack | [optional]
**transaction_time_utc** | **\DateTime** | DateTime in UTC format when the Transaction was initiated | [optional]
**type** | **string** | Transaction type. Possible values:  * **STANDARD**: Movement of fund to, from or between stacks triggered by customer or ops  * **ROUND_UP**: Account to Stack transfer triggered by RoundUp functionality | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
