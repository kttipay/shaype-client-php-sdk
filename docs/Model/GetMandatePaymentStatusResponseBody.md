# # GetMandatePaymentStatusResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_status** | **string** | Transaction Status * **RECEIVED**: Message has been received, no further update on status yet. Please continue to check for updates. * **UNDELIVERED**: Message could not be delivered to the PayTo rails (PAG). Client should retry initiation. * **SENT**: Message has been sent, no acknowledgement yet received. Please continue to check for updates. * **STORE_AND_FORWARD**: Target institution is not available, but message will be relayed when they are back online. Please continue to check for updates. * **ACCEPTED_FOR_CLEARANCE**: Payment is accepted but settlement not initiated. Please continue to check for updates. * **SETTLEMENT_ABORTED**: Settlement could not be completed. A retry attempt will be made on behalf of the client. Please continue to check for updates. * **ACCEPTED_AND_SETTLED**: Settlement completed. * **REJECTED**: Payment could not be completed. Request could be modified and resubmitted - or if unexpected problem then please contact Shaype team for support. * **PENDING**: Settlement queued for handling but not complete. Please continue to check for updates |
**transaction_status_reason_code** | **string** | Reject reason code, defining the reason for the transaction status. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
