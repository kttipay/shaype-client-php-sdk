# # SearchTransactionsRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**from_date_time_utc** | **\DateTime** | DateTime in UTC format for the start date range of the Transaction search |
**origin_channel** | **string** | Origin source of the Transaction (only applicable if specifically used by Client). Possible values:  * **ATM_CASH**  * **POS_DEBIT**  * **VENUE** | [optional]
**origin_id** | **string** | Additional identifier applied to Transaction related to origin of the request | [optional]
**origin_type** | **string** | Initiator origin of the Transaction. Possible values:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by Client Operations team  * **OPERATIONS**: Transaction initiated by Shaype Operations team  * **DIRECT_DEBIT**: Transaction initiated by Direct Debit | [optional]
**to_date_time_utc** | **\DateTime** | DateTime in UTC format for the end date range of the Transaction search |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
