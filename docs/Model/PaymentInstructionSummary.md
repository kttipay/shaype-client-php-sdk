# # PaymentInstructionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date_time** | **string** | Date and time at which the message was created, UTC expressed without offset, i.e. YYYY-MM-DDThh:mm:ss.sssZ |
**instructed_amount** | **float** | Instructed amount |
**instruction_identification** | **string** | Payment instruction identification. |
**transaction_status** | **string** | Transaction status: * **RECV**: Received * **UNDV**: Undelivered * **SENT**: Sent * **SAFD**: Store &amp; Forward * **ACCP**: Accepted for clearance by Receiver * **ACSP**: Settlement aborted by NPP BI * **ACSC**: Accepted &amp; Settled * **RJCT**: Rejected |
**transaction_status_reason_code** | **string** | Reject reason code, defining the reason for the transaction status | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
