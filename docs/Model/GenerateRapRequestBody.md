# # GenerateRapRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditor_information** | [**\Shaype\Client\Model\GenerateRapCreditorInformation**](GenerateRapCreditorInformation.md) |  |
**debtor_information** | [**\Shaype\Client\Model\GenerateRapDebtorInformation**](GenerateRapDebtorInformation.md) |  |
**initg_pty_id_org_id** | **string** | InitgPtyIdOrgId is the BIC11 of the client sending the payment instruction to Cuscal. Please note this value will be provided to you by Cuscal as part of on-boarding |
**mandate_information** | [**\Shaype\Client\Model\GenerateRapMandateInformation**](GenerateRapMandateInformation.md) |  | [optional]
**payment_id** | **string** | paymentId is the unique Payment Transaction ID of a payment that has been previously submitted to Cuscal. |
**payment_information** | [**\Shaype\Client\Model\GenerateRapPaymentInformation**](GenerateRapPaymentInformation.md) |  |
**payment_return_information** | [**\Shaype\Client\Model\GenerateRapPaymentReturnInformation**](GenerateRapPaymentReturnInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
