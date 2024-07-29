# # GetMandateActionsDetailsAmendmentCreditorInformationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_alias_identification** | **string** | Identification used to indicate the account identification under another specified name. If this property is set to &#39;-&#39; it means that the account alias identification has been cleared. | [optional]
**account_alias_type_code** | **string** | Name of the Alias Type, in a coded form as published in an external list. * **PHONE_NUMBER**: Telephone Number * **EMAIL_ADDRESS**: Email Address * **AUSTRALIAN_BUSINESS_NUMBER**: Australian Business Number * **ORGANISATION_ID**: Organisation Identifier | [optional]
**account_id** | **string** | Platform identifier of the creditor account | [optional]
**account_identification_issuer** | **string** | Entity or classification under which the identification is assigned. If this property is set to &#39;-&#39; it means that the account identification issuer has been cleared. | [optional]
**account_identification_type_code** | **string** | Type of account identification, in a coded form. * **BASIC_BANK_ACCOUNT_NUMBER**: Basic Bank Account Number * **ALIAS**: Alias Identification | [optional]
**account_number** | **string** | BSB (Bank State Branch) of Account, 6 digits in length combined with account number, 5-9 digits in length. If this property is set to &#39;-&#39; it means that the account identification has been cleared. | [optional]
**account_servicer_bic** | **string** | Party that manages the account on behalf of the account owner, includes managing the registration and booking of entries on the account, calculating balances on the account and providing information about the account. If this property is set to &#39;ZZZZZZZZZZZ&#39; it means that the servicer BIC has been cleared. | [optional]
**full_legal_account_name** | **string** | Full Legal Account Name recorded by the Account Server in their records. If this property is set to &#39;-&#39; it means that the full legal account name has been cleared. | [optional]
**party_identification** | **string** | Unique and unambiguous identification of the party. If this property is set to &#39;-&#39; it means that the party identification has been cleared. | [optional]
**party_identification_type_code** | **string** | Code indicating the identification type of the party, for example in the case of a private individual; passport, driver licence, or 100 point check, or in the case of an organisation; LEI, ACN, ABN. If this property is set to &#39;ZZZZ&#39; it means that the party identification type code has been cleared. * **ALIEN_REGISTRATION_NUMBER**: Alien Registration Number * **PASSPORT_NUMBER**: Passport Number * **CUSTOMER_ID**: Customer Identification Number * **DRIVER_LICENSE_NUMBER**: Drivers License Number * **EMPLOYEE_ID**: Employee Identification Number * **NATIONAL_IDENTITY_NUMBER**: National Identity Number * **SOCIAL_SECURITY_NUMBER**: Social Security Number * **TAX_ID**: Tax Identification Number * **BANK_PARTY_ID**: Bank Party Identification * **CENTRAL_BANK_ID**: Central Bank Identification Number * **CLEARING_ID**: Clearing Identification Number * **CERTIFICATE_OF_INCORPORATION_NUMBER**: Certificate Of Incorporation Number * **COUNTRY_ID_CODE**: Country Identification Code * **DATA_UNIVERSAL_NUMBERING_SYSTEM**: Data Universal Numbering System * **GS1GLN_ID**: GS1GLN Identifier * **SIREN**: SIREN * **SIRET**: SIRET * **AUSTRALIAN_BUSINESS_NUMBER**: Australian Business Number (ABN) * **AUSTRALIAN_COMPANY_NUMBER**: Australian Company Number (ACN) * **LEGAL_ENTITY_ID**: Legal Entity Identification (LEI) | [optional]
**party_name** | **string** | Name by which the party is known and which is usually used to identify that party. | [optional]
**party_reference** | **string** | Specifies underlying reference associated with the mandate as provided by party, for example Customer Reference, Customer Number, Membership Number, Subscription Number, or Name. If this property is set to &#39;-&#39; it means that the party reference has been cleared. | [optional]
**party_type** | **string** | Identifies the type of a party. Once the party type has been set it is not possible to clear it through a mandate amendment. * **ORGANISATION**: Party is an organisation. * **PERSON**: Party is an private individual. | [optional]
**ultimate_party_name** | **string** | Name by which the ultimate party is known and which is usually used to identify that party. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)