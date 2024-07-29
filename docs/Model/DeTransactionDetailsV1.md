# # DeTransactionDetailsV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Value of the Direct Debit transfer, to 2 decimal places | [optional]
**description** | **string** | Description on Direct Debit transfer, maximum 18 characters in length | [optional]
**outcome** | **string** | Status of the Direct Debits. Possible values:  * **RECEIVED**: Direct Debit request received for processing  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit request failed validation or authorization and can&#39;t be executed  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit request failed and was returned from the recipient financial institution. This direct debit cannot be executed  * **COMPLETE**: Direct Debit request was successful and customer account credited successfully  * **INCOMPLETE**: Direct Debit request was successful, but customer account crediting failed |
**processing_date** | **\DateTime** | Date that the Direct Debit transfer takes effect | [optional]
**recipient_account_number** | **string** | Account Number of Account receiving Direct Debit instruction (account to be debited), 5-9 digits in length | [optional]
**recipient_bsb** | **string** | BSB (Bank State Branch) of Account receiving Direct Debit instruction (account to be debited), 6 digits in length | [optional]
**recipient_name** | **string** | Name on the Account receiving Direct Debit instruction (account to be debited) | [optional]
**sender_account_number** | **string** | Account Number of Account sending Direct Debit instruction (account to be credited), 5-9 digits in length | [optional]
**sender_bsb** | **string** | BSB (Bank State Branch) of Account sending Direct Debit instruction (account to be credited), 6 digits in length | [optional]
**sender_name** | **string** | Name on the Account sending Direct Debit instruction (account to be credited) | [optional]
**transaction_hay_id** | **string** | Unique identifier (UUID) of the Transaction | [optional]
**type** | **string** | Transaction type. Possible values:  * **DEBIT** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
