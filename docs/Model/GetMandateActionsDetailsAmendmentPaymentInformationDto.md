# # GetMandateActionsDetailsAmendmentPaymentInformationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Shaype\Client\Model\CurrencyAmountDto**](CurrencyAmountDto.md) |  | [optional]
**count_per_period** | **string** | Qualifies the frequency in terms of the number of instructions to be created and processed during the specified period. If this property is set to &#39;0&#39; it means that the count per period has been cleared on the mandate. | [optional]
**first_payment_amount** | [**\Shaype\Client\Model\CurrencyAmountDto**](CurrencyAmountDto.md) |  | [optional]
**first_payment_date** | **string** | Date of the first payment predefined in mandate. If this property is set to &#39;1000-01-01&#39; it means that the first payment date has been cleared on the mandate. | [optional]
**last_payment_amount** | [**\Shaype\Client\Model\CurrencyAmountDto**](CurrencyAmountDto.md) |  | [optional]
**last_payment_date** | **string** | Date of the last payment predefined in mandate. If this property is set to &#39;1000-01-01&#39; it means that the last payment date has been cleared on the mandate. | [optional]
**maximum_amount** | [**\Shaype\Client\Model\CurrencyAmountDto**](CurrencyAmountDto.md) |  | [optional]
**payment_amount_type** | **string** | Identifies the mandate payment arrangement. If this property is set to &#39;ZZZZ&#39; it means that the payment amount type has been cleared on the mandate. * **BALLOON**: Payment amount is fixed with large final payment amount. * **FIXED**: Payment amount is fixed. * **USAGE_BASED**: Payment amount is based on usage. * **VARIABLE**: Payment amount is variable. | [optional]
**payment_execute_not_before_time** | **string** | Indicates that each execution of the mandate payment should not occur before a given time of that execution day. If this property is set to &#39;-&#39; it means that the time has been cleared on the mandate. | [optional]
**payment_frequency** | **string** | Regularity with which instructions are to be created and processed. * **ADHOC**: Event takes place on request or as necessary. * **DAILY**: Event takes place every day. * **FORTNIGHTLY**: Event takes place every two weeks. * **INTRA_DAY**: Event takes place several times a day. * **SEMI_ANNUAL**: Event takes place every six months or two times a year. * **MONTHLY**: Event takes place every month or once a month. * **QUARTERLY**: Event takes place every three months or four times a year. * **WEEKLY**: Event takes place once a week. * **ANNUAL**: Event takes place every year or once a year. | [optional]
**point_in_time** | **string** | Qualifies the frequency in terms of an exact point in time or moment within the specified period. If this property is set to &#39;00&#39; it means that the point in time has been cleared on the mandate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
