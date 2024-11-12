# # CreateHayCustomerRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Shaype\Client\Model\Address**](Address.md) |  |
**custom_data** | **object** | Custom data associated with customer | [optional]
**customer_details** | [**\Shaype\Client\Model\CustomerDetails**](CustomerDetails.md) |  |
**customer_tier** | **string** | Customer tier, will be STANDARD unless additional tiers have been agreed as part of the product offering. Possible values:  * **FOUNDER**  * **STANDARD**  * **PREMIUM** |
**email** | **string** | Email address of the Customer |
**external_customer_id** | **string** | Only applicable to Clients using their own Auth solution. This value will be included in the subject on the token which in turn will be used by Shaype to represent the customer Id on the external system. Max length is 64 characters. | [optional]
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |
**identity_document_card_number** | **string** | Identity document card number. Between 6 to 10 characters which can be either just numeric or alphanumeric characters based on the state. Should be specified for Driver&#39;s Licenses that provide it. | [optional]
**identity_document_issuing_country** | **string** | Optional three-letter ISO country code of the customer&#39;s identity document issuing country. | [optional]
**identity_document_number** | **string** | Number of the Customer&#39;s identity document (if supplied) | [optional]
**identity_document_region** | **string** | Identity document region, one of: NSW, QLD, SA, TAS, VIC, WA, ACT, NT. (uppercase only) Should be specified for Driver&#39;s Licenses. | [optional]
**identity_document_type** | **string** | Type of Customer&#39;s identity document (if supplied). Possible values:  * **DRIVING_LICENSE**  * **PASSPORT** | [optional]
**identity_verification_case_id** | **string** | Optional Identity Verification ID for the identity check | [optional]
**journey_id** | **string** | Deprecated: Please do not use this field for customer creation, please refer to identityVerificationCaseId | [optional]
**only_sanctions_check** | **bool** | Applicable only to clients using our Sanctions-Check-Only KYC functionality. Used to only perform sanctions check on the Customer as part of KYC checks. This flag cannot be used at the same time as skipKyc. | [optional]
**phone_number** | [**\Shaype\Client\Model\PhoneNumber**](PhoneNumber.md) |  |
**skip_kyc** | **bool** | Only applicable to Clients using Shaype KYC solution. Used to bypass KYC checks for the Customer. Must only set as &#39;true&#39; in agreed scenarios (i.e. permission to generate a dummy / test account has been granted). This flag cannot be used at the same time as onlySanctionsCheck. | [optional]
**tax_obligations** | [**\Shaype\Client\Model\TaxObligation[]**](TaxObligation.md) | Captures any foreign (outside Australia) tax obligations for the Customer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
