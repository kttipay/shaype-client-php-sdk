# # DirectDebitResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | **string** | Details of the outbound Direct Debit transfer | [optional]
**outcome** | **string** | Status of the Direct Debits. Possible values:  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit has been rejected and has not been submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit has been Returned from recipient financial institution  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch |
**trace_id** | **string** | Unique identifier (UUID) of the request used by Shaype to troubleshoot | [optional]
**transaction_details** | [**\OpenAPI\Client\Model\DeTransactionDetails**](DeTransactionDetails.md) |  | [optional]
**transaction_id** | **string** | Unique identifier (UUID) of the Transaction |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
