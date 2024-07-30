# # GetMandateSummaryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debtor_account_id** | **string** | The system identifier of the debtor account, if determined. | [optional]
**description** | **string** | Mandate description. | [optional]
**mandate_id** | **string** | Unique identifier of a mandate. |
**payment_terms** | [**\Shaype\Client\Model\GetPaymentTermsSummaryDto**](GetPaymentTermsSummaryDto.md) |  |
**purpose_code** | **string** | The purpose of this mandate.  * **MORTGAGE**: Mortgage Payments.  * **UTILITY**: Utility Payments.  * **LOAN**: Loan Payments.  * **DEPENDANT**: Dependant Support Payments.  * **GAMBLING**: Gambling Payments.  * **RETAIL**: Retail Payments.  * **SALARY**: Salary Payments.  * **PERSONAL**: Personal Payments.  * **GOVERNMENT**: Government Payments.  * **PENSION**: Pension Payments.  * **TAX**: Tax Payments.  * **OTHER**: Other Service Payments. |
**status** | **string** | The status of this mandate.  * **CREATED**: Created.  * **ACTIVE**: Active.  * **SUSPENDED**: Suspended.  * **CANCELLED**: Cancelled. |
**validity_end_date** | **\DateTime** | The date when the mandate stops being valid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
