# # GetMandateActionsResolutionEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason_code** | **string** | Bilateral action resolution reason code. This will only be present for a bilateral action. Specifies in coded form the chosen resolution of the action, as published in an external mandate status reason code set. Below are the possible values: * **AC02**: InvalidDebtorAccountNumber * **AC05**: ClosedDebtorAccountNumber * **AC06**: BlockedAccount * **AC13**: InvalidDebtorAccountType * **AG01**: TransactionForbidden * **AG03**: TransactionNotSupported * **AM03**: NotAllowedCurrency * **AM12**: InvalidAmount * **AM14**: AmountExceedsAgreedLimit * **BE06**: UnknownEndCustomer * **MD09**: NoMandateServiceOnCustomer * **MD16**: RequestedByCustomer * **MD21**: MandateCancelledDueToFraud * **NOAS**: NoAnswerFromCustomer * **RR04**: Regulatory Reason * **SL11**: Creditor not on Whitelist of Debtor * **SL12**: Creditor on Blacklist of Debtor | [optional]
**reason_description** | **string** | Description of the reason for the chosen resolution of the action. This will only be present for a bilateral action. | [optional]
**servicer_bic** | **string** | Identification of the party who triggered the event on the action. | [optional]
**sponsor_bic** | **string** | Identification of the agent that sponsors the servicer at the moment the event was triggered. | [optional]
**time** | **string** | Timestamp of when the event occurred on the mandate action. UTC expressed without offset, i.e. YYYY-MM-DDThh:mm:ss.sssZ |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
