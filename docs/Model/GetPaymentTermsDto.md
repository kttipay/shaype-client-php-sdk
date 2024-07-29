# # GetPaymentTermsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\OpenAPI\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**count_per_period** | **string** | Qualifies the frequency in terms of the number of instructions to be created and processed during the specified period. | [optional]
**first_payment** | [**\OpenAPI\Client\Model\PaymentDto**](PaymentDto.md) |  | [optional]
**frequency** | **string** | Payment frequency.  * **ADHOC**: Event takes place on request or as necessary.  * **DAILY**: Event takes place every day.  * **FORTNIGHTLY**: Event takes place every two weeks.  * **INTRA_DAY**: Event takes place several times a day.  * **SEMI_ANNUAL**: Event takes place every six months or two times a year.  * **MONTHLY**: Event takes place every month or once a month.  * **QUARTERLY**: Event takes place every three months or four times a year.  * **WEEKLY**: Event takes place once a week.  * **ANNUAL**: Event takes place every year or once a year. |
**last_payment** | [**\OpenAPI\Client\Model\PaymentDto**](PaymentDto.md) |  | [optional]
**maximum_amount** | [**\OpenAPI\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**point_in_time** | **string** | Qualifies payment frequency | [optional]
**type** | **string** | Payment type.  * **BALLOON**: Payment amount is fixed with large final payment amount.  * **FIXED**: Payment amount is fixed.  * **USAGE_BASED**: Payment amount is based on usage.  * **VARIABLE**: Payment amount is variable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
