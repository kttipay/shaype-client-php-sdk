# # UpdatePaymentPreferencesRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_enabled** | **bool** | Physical card enablement status:  * **true**: enabled (unfrozen), allows physical card usage (default)  * **false**: disabled (frozen), prevents all physical card usage | [optional]
**card_not_present_enabled** | **bool** | Online card not present payment enablement status:  * **true**: enabled  * **false**: disabled (default) | [optional]
**cash_withdrawal_enabled** | **bool** | ATM cash withdrawal enablement status:  * **true**: enabled  * **false**: disabled (default) | [optional]
**contactless_enabled** | **bool** | Physical card contactless payment enablement status:  * **true**: enabled  * **false**: disabled (default) | [optional]
**magnetic_stripe_enabled** | **bool** | Physical card magnetic stripe payment enablement status:  * **true**: enabled  * **false**: disabled (default) | [optional]
**mobile_wallet_payments_enabled** | **bool** | Mobile wallet card payment enablement status:  * **true**: enabled (default)  * **false**: disabled | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
