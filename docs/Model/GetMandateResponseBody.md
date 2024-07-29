# # GetMandateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditor_details** | [**\OpenAPI\Client\Model\GetMandateCreditorDetailsDto**](GetMandateCreditorDetailsDto.md) |  | [optional]
**debtor_details** | [**\OpenAPI\Client\Model\GetMandateDebtorDetailsDto**](GetMandateDebtorDetailsDto.md) |  |
**description** | **string** | Mandate description. | [optional]
**mandate_id** | **string** | Unique identifier of a mandate. |
**payment_terms** | [**\OpenAPI\Client\Model\GetPaymentTermsDto**](GetPaymentTermsDto.md) |  |
**purpose_code** | **string** | The purpose of this mandate.  * **MORTGAGE**: Mortgage Payments.  * **UTILITY**: Utility Payments.  * **LOAN**: Loan Payments.  * **DEPENDANT**: Dependant Support Payments.  * **GAMBLING**: Gambling Payments.  * **RETAIL**: Retail Payments.  * **SALARY**: Salary Payments.  * **PERSONAL**: Personal Payments.  * **GOVERNMENT**: Government Payments.  * **PENSION**: Pension Payments.  * **TAX**: Tax Payments.  * **OTHER**: Other Service Payments. | [optional]
**registration_date_time** | **\DateTime** | When the mandate was registered. |
**status** | **string** | The status of this mandate.  * **CREATED**: Created.  * **ACTIVE**: Active.  * **SUSPENDED**: Suspended.  * **CANCELLED**: Cancelled. |
**transfer_arrangement** | **string** | Indication of future transfer date, conditions of sale and requirement to hold funds. | [optional]
**validity_end_date** | **\DateTime** | The date when the mandate stops being valid. | [optional]
**validity_start_date** | **\DateTime** | The date when the mandate becomes valid. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
