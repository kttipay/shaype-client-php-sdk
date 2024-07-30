# # GetMandateActionsDetailsCreationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**automatic_extension_indicator** | **bool** | Automatic renewal of a mandate arrangement at the end of the defined period (period start through period end). |
**besc_user_identification** | **string** | BECS user ID related to migrated DDR mandate. | [optional]
**creditor_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsCreationCreditorInformationDto**](GetMandateActionsDetailsCreationCreditorInformationDto.md) |  | [optional]
**debtor_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsCreationDebtorInformationDto**](GetMandateActionsDetailsCreationDebtorInformationDto.md) |  |
**description** | **string** | Reason for the mandate setup as narrative text. | [optional]
**establishment_scheme** | **string** | Identifies the arrangement (unilateral or bilateral) and party that established the mandate. * **AUTHORISED_PAYMENT_MANDATE**: Established bilaterally as Authorised Payment Mandate. * **MIGRATED_BY_CREDITOR**: Established by migration from legacy service by Creditor. * **UNILATERAL_BY_DEBTOR**: UnilateralByDebtor - Established unilaterally by Debtor. |
**initiation_request_identification** | **string** | Identification for the mandate request, as originally assigned by the initiating party. |
**mandate_purpose_code** | **string** | Specifies the high level purpose of the mandate based on a set of pre-defined categories. * **MORTGAGE**: Mortgage Payments * **UTILITY**: Utility Payments * **LOAN**: Loan Payments * **DEPENDANT**: Dependant Support Payments * **GAMBLING**: Gambling Payments * **RETAIL**: Retail Payments * **SALARY**: Salary Payments * **PERSONAL**: Personal Payment * **GOVERNMENT**: Government Payments * **PENSION**: Pension Payments * **TAX**: Tax Payments * **OTHER**: Other Service Payments | [optional]
**mandate_type** | **string** | Identifies the type of mandate. * **DIRECT_DEBIT**: Mandate type relates to Direct Debit payment instrument. * **STANDING_ORDER**: Mandate type relates to Standing Order payment instrument. |
**npp_backoffice_service** | **string** | Specifies a NPP backoffice service identification under which the mandate resides. | [optional]
**payment_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsCreationPaymentInformationDto**](GetMandateActionsDetailsCreationPaymentInformationDto.md) |  |
**payment_initiator_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsCreationPaymentInitiatorInformationDto**](GetMandateActionsDetailsCreationPaymentInitiatorInformationDto.md) |  |
**resolution_requested_by** | **string** | Optional time used to indicate by when resolution of a bilateral action is requested from the other party to the mandate. It will be ignored if the resulting amendment action is not bilateral. For bilateral amendments, it will be provided in any notification sent to the counterparty. This time is for informational purposes only and does not affect the expiry time imposed by the MMS. | [optional]
**short_description** | **string** | Short description of the reason for mandate setup as narrative text. | [optional]
**transfer_arrangement** | **string** | Indication of future transfer date, conditions of sale and requirement to hold funds. | [optional]
**validity_end_date** | **string** | End date of the validity of the mandate. If specified, the mandate is valid until 23:59:59.999 Australia Sydney time on this date. | [optional]
**validity_start_date** | **string** | Start date of the validity of the mandate. The mandate is valid as of 00:00:00.000 Australia Sydney time on this date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
