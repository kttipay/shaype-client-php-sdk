# # GenerateMandateNotificationPaymentInformationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Fixed amount to be debited from the debtor&#39;s account. | [optional]
**count_per_period** | **string** | Qualifies the frequency in terms of the number of instructions to be created and processed during the specified period. | [optional]
**first_payment_amount** | **string** | Amount different from the payment amount, as it includes the costs associated with the first debited amount. | [optional]
**first_payment_date** | **string** | Date of the first payment predefined in mandate expressed in YYYY-MM-DD format. | [optional]
**last_payment_amount** | **string** | Last payment amount different to the payment amount. | [optional]
**last_payment_date** | **string** | Date of the last payment predefined in mandate expressed in YYYY-MM-DD format. | [optional]
**maximum_amount** | **string** | Maximum amount that may be paid from the debtor&#39;s account, per instruction. | [optional]
**payment_amount_type** | **string** | Identifies the mandate payment arrangement. * **BALN**: Balloon - Payment amount is fixed with large final payment amount. * **FIXE**: Fixed - Payment amount is fixed. * **USGB**: Usage Based - Payment amount is based on usage. * **VARI**: Variable - Payment amount is variable. | [optional]
**payment_frequency** | **string** | Regularity with which instructions are to be created and processed. * **ADHO**: Adhoc - Event takes place on request or as necessary. * **DAIL**: Daily - Event takes place every day. * **FRTN**: Fortnightly - Event takes place every two weeks. * **INDA**: IntraDay - Event takes place several times a day. * **MIAN**: SemiAnnual - Event takes place every six months or two times a year. * **MNTH**: Monthly - Event takes place every month or once a month. * **QURT**: Quarterly - Event takes place every three months or four times a year. * **WEEK**: Weekly - Event takes place once a week. * **YEAR**: Annual - Event takes place every year or once a year. |
**point_in_time** | **string** | Qualifies the frequency in terms of an exact point in time or moment within the specified period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
