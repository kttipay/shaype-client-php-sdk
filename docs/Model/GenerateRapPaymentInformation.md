# # GenerateRapPaymentInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_purpose_code** | **string** | Payment Category code  Download the &#39;External Code Sets&#39; spreadsheet from https://www.iso20022.org/external_code_list.page and navigate to the &#39;4-CategoryPurpose&#39; tab for a full list of payment Category codes. \&quot;EPAY\&quot;, \&quot;SALA\&quot;, \&quot;SUPP\&quot;, \&quot;PENS\&quot;, \&quot;TAXS\&quot; | [optional]
**end_to_end_identification** | **string** | End to End identifier. This is the Debtor&#39;s (customer) reference for the Payment to be provided to Creditor (customer).  End to End is used as guidance text for Payer channels in the use of the Reference (EndToEndId) field. If the payer populates the details in the channel, the the same is passed on to the payee.    If the payer does not populate, the default value will apply. |
**instructed_amount** | **string** | Instructed amount |
**original_message_identification** | **string** | The original messageID of the incoming payment. |
**remittance_information_unstructured** | **string** | Payment Description For category_purpose_code &#x3D; SALA, Comments relating to specific employee information will be provided in this field. | [optional]
**transaction_identification** | **string** | A unique Payment Transaction Identifier generated by the sending client. the payment identifier must follow the following fixed character pattern NPP guidelines:  - 1 to 11     clients BIC11  - 12             fixed value &#39;N&#39;  - 13 to 20   YYYYMMDD  - 21 to 22   fixed value &#39;00&#39;  - 23 to 34   sequence number starting from 000000000001  - 35             retry counter, always set to 0 unless its a retry, retries start at 1. |
**unique_superannuation_code** | **string** | For category_purpose_code &#x3D; PENS, Comments relating to USI code indicating the identifier to whom the superannuation fund will be provided in this field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
