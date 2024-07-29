# # GetMandateActionsDetailsStatusChangeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change** | **string** | Status change to be applied to the mandate. * **CANCEL**: Cancel a mandate. * **RELEASE**: Unsuspend a suspended mandate. * **SUSPEND**: Suspend an active mandate. |
**reason_code** | **string** | Code defining the reason for the status change to the mandate. * **AC02**: InvalidDebtorAccountNumber * **AC04**: ClosedAccountNumber * **AC05**: ClosedDebtorAccountNumber * **AC06**: BlockedAccount * **AC13**: InvalidDebtorAccountType * **AG01**: TransactionForbidden * **AG03**: TransactionNotSupported * **AM03**: NotAllowedCurrency * **AM12**: InvalidAmount * **AM14**: AmountExceedsAgreedLimit * **CTAM**: ContractAmended * **CTCA**: ContractCancellationInitiatedByDebtor * **CTEX**: ContractExpired * **MCFC**: MandateSuspendedFinalCollection * **MCOC**: MandateSuspendedOnceOffCollection * **MD07**: EndCustomerDeceased * **MD08**: NoMandateServiceByAgent * **MD09**: NoMandateServiceOnCustomer * **MD16**: RequestedByCustomer * **MD17**: RequestedByInitiatingParty * **MD20**: MandateExpired * **MD21**: MandateCancelledDueToFraud * **MS02**: NotSpecifiedReasonCustomer Generated * **MS03**: NotSpecifiedReasonAgentGenerated * **MSUC**: MandateSuspended7ConsecutiveUnsuccessfulCollections * **NARR**: Narrative * **NOAS**: NoAnswerFromCustomer * **RR04**: Regulatory Reason * **SL01**: Specific Service offered by Debtor Agent * **SL11**: Creditor not on Whitelist of Debtor * **SL12**: Creditor on Blacklist of Debtor | [optional]
**reason_description** | **string** | Description of the change reason. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
