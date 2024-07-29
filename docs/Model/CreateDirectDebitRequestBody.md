# # CreateDirectDebitRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Value of the Direct Debit transfer, to 2 decimal places |
**description** | **string** | Description on Direct Debit transfer, maximum 18 characters in length |
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |
**recipient_account_number** | **string** | Account Number of Account receiving Direct Debit instruction (account to be debited), 5-9 digits in length |
**recipient_bsb** | **string** | BSB (Bank State Branch) of Account receiving Direct Debit instruction (account to be debited), 6 digits in length |
**recipient_name** | **string** | Name on the Account receiving Direct Debit instruction (account to be debited) |
**sender_account_number** | **string** | Account Number of Account sending Direct Debit instruction (account to be credited), 5-9 digits in length |
**sender_bsb** | **string** | BSB (Bank State Branch) of Account sending Direct Debit instruction (account to be credited), 6 digits in length |
**sender_name** | **string** | Name on the Account sending Direct Debit instruction (account to be credited) |
**transaction_id** | **string** | Unique identifier (UUID) of the Transaction |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
