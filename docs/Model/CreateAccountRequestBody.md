# # CreateAccountRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_id** | **string** | Unique identifier (UUID) of the account holder. |
**account_holder_type** | **string** | The type of object that is the account holder. Possible values:  * **CUSTOMER**: The account holder is a Customer, accountHolderId contains a Customer ID  * **GROUP**: The account holder is a Group, accountHolderId contains a Group ID |
**custom_data** | **object** | Contains custom metadata stored with the Account. Needs to be a valid JSON | [optional]
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |
**product_id** | **string** | Unique value (UUID) of the product used for this account. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
