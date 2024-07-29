# # CreateTransactionRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account |
**amount** | **float** | Value of the Transaction, to 2 decimal places |
**category** | **string** | Category assigned to the Transaction | [optional]
**counterpart_name** | **string** | Counterpart name |
**description** | **string** | Description on the Transaction |
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |
**origin_channel** | **string** | Origin source of the Transaction (only applicable if specifically used by Client). Possible values:   * **ATM_CASH**  * **POS_DEBIT**  * **VENUE** | [optional]
**origin_id** | **string** | Additional identifier applied to Transaction related to origin of the request | [optional]
**origin_type** | **string** | Initiator origin of the Transaction. Possible values:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by Client Operations team  * **OPERATIONS**: Transaction initiated by Shaype Operations team  * **DIRECT_DEBIT**: Transaction initiated by Direct Debit | [optional]
**reference** | **string** | Reference on the transaction (only applicable to NPP transactions), maximum 35 alphanumeric characters in length | [optional]
**transaction_channel** | **string** | Transaction channels available for use by Shaype Clients. Possible values:  * **ACCOUNT_ADJUSTMENT**  * **APPLE_REWARD**  * **INTEREST_ADJUSTMENT**  * **LOAN_ADJUSTMENT**  * **LOAN_REPAYMENT**  * **MANUAL_ADJUSTMENT**  * **SERVICE_FEE** |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
