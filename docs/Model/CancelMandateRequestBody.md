# # CancelMandateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason_code** | **string** | Mandate cancellation reason code * **AC02**: Invalid Debtor account number. * **AC04**: Closed account number. * **AC05**: Closed Debtor account number. * **AC06**: Blocked account. * **AC13**: Invalid Debtor account type. * **AG01**: Transaction forbidden. * **AG03**: Transaction not supported. * **AM03**: Not allowed currency. * **AM12**: Invalid amount. * **AM14**: Amount exceeds agreed limit. * **CTAM**: Contract amended. * **CTCA**: Contract cancellation initiated by Debtor. * **CTEX**: Contract expired. * **MCFC**: Mandate suspended final collection. * **MCOC**: Mandate suspended once off collection. * **MD07**: End customer deceased. * **MD08**: No Mandate service by Agent. * **MD09**: No Mandate service on Customer. * **MD16**: Requested by Customer. * **MD17**: Requested by initiating party. * **MD20**: Mandate expired. * **MD21**: Mandate cancelled due to fraud. * **MS02**: Not specified reason Customer generated. * **MS03**: Not specified reason Agent generated. * **MSUC**: Mandate suspended after 7 consecutive unsuccessful collections. * **NARR**: Narrative. * **NOAS**: No answer from Customer. * **RR04**: Regulatory reason. * **SL01**: Specific service offered by Debtor Agent. * **SL11**: Creditor not on whitelist of Debtor. * **SL12**: Creditor on blacklist of Debtor. | [optional]
**reason_description** | **string** | Mandate cancellation reason description. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
