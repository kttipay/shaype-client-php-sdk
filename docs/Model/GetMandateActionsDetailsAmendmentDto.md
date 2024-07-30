# # GetMandateActionsDetailsAmendmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**automatic_extension_indicator** | **bool** | Automatic renewal of a mandate arrangement at the end of the defined period (period start through period end). | [optional]
**besc_user_identification** | **string** | BECS user ID related to migrated DDR mandate. If this property is set to &#39;-&#39; it means that the BECS_user_identification has been cleared on the mandate. | [optional]
**creditor_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsAmendmentCreditorInformationDto**](GetMandateActionsDetailsAmendmentCreditorInformationDto.md) |  | [optional]
**debtor_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsAmendmentDebtorInformationDto**](GetMandateActionsDetailsAmendmentDebtorInformationDto.md) |  | [optional]
**description** | **string** | Reason for the mandate setup as narrative text. If this property is set to &#39;-&#39; it means that the description has been cleared on the mandate. | [optional]
**mandate_details_cx_extension** | [**\Shaype\Client\Model\GetMandateActionsDetailsAmendmentMandateDetailsCxExtensionDto**](GetMandateActionsDetailsAmendmentMandateDetailsCxExtensionDto.md) |  | [optional]
**npp_backoffice_service** | **string** | Specifies a NPP backoffice service identification under which the mandate resides. If this property is set to &#39;-&#39; it means that the NPP backoffice service identification has been cleared on the mandate. | [optional]
**payment_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsAmendmentPaymentInformationDto**](GetMandateActionsDetailsAmendmentPaymentInformationDto.md) |  | [optional]
**payment_initiator_information** | [**\Shaype\Client\Model\GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto**](GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto.md) |  | [optional]
**resolution_requested_by** | **string** | Optional time used to indicate by when resolution of a bilateral action is requested from the other party to the mandate. It will be ignored if the resulting amendment action is not bilateral. For bilateral amendments, it will be provided in any notification sent to the counterparty. This time is for informational purposes only and does not affect the expiry time imposed by the MMS. | [optional]
**short_description** | **string** | Short description of the reason for mandate setup as narrative text. If this property is set to &#39;-&#39; it means that the short description has been cleared on the mandate. | [optional]
**transfer_arrangement** | **string** | Indication of future transfer date, conditions of sale and requirement to hold funds. | [optional]
**validity_end_date** | **string** | End date of the validity of the mandate. If specified, the mandate is valid until 23:59:59.999 Australia Sydney time on this date. If this property is set to &#39;1000-01-01&#39; it means that the validity end date has been cleared on the mandate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
