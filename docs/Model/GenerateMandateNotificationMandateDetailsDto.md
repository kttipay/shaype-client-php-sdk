# # GenerateMandateNotificationMandateDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditor_information** | [**\OpenAPI\Client\Model\GenerateMandateNotificationCreditorInformationDto**](GenerateMandateNotificationCreditorInformationDto.md) |  | [optional]
**debtor_information** | [**\OpenAPI\Client\Model\GenerateMandateNotificationDebtorInformationDto**](GenerateMandateNotificationDebtorInformationDto.md) |  |
**description** | **string** | Reason for the mandate setup as narrative text. | [optional]
**mandate_id** | **string** | Identifier of the mandate affected by action expressed as Unique identifier (UUID) version 1 format without the 4 hyphen separators. |
**payment_information** | [**\OpenAPI\Client\Model\GenerateMandateNotificationPaymentInformationDto**](GenerateMandateNotificationPaymentInformationDto.md) |  |
**short_description** | **string** | Short description of the reason for mandate setup as narrative text. | [optional]
**validity_end_date** | **string** | End date of the validity of the mandate expressed in YYYY-MM-DD format.. If specified, the mandate is valid until 23:59:59.999 Australia Sydney time on this date. | [optional]
**validity_start_date** | **string** | Start date of the validity of the mandate expressed in YYYY-MM-DD format.. The mandate is valid as of 00:00:00.000 Australia Sydney time on this date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
