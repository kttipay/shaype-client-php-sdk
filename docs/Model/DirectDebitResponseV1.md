# # DirectDebitResponseV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | **string** | Details of the outbound Direct Debit transfer | [optional]
**outcome** | **string** | Status of the Direct Debits. Possible values:  * **RECEIVED**: Direct Debit request received for processing  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit request failed validation or authorization and can&#39;t be executed  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit request failed and was returned from the recipient financial institution. This direct debit cannot be executed  * **COMPLETE**: Direct Debit request was successful and customer account credited successfully  * **INCOMPLETE**: Direct Debit request was successful, but customer account crediting failed |
**trace_id** | **string** | Unique identifier (UUID) of the request used by Shaype to troubleshoot | [optional]
**transaction_details** | [**\Shaype\Client\Model\DeTransactionDetailsV1**](DeTransactionDetailsV1.md) |  | [optional]
**transaction_id** | **string** | Unique identifier (UUID) of the Transaction |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
