# # CreateCreditorDetailsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_alias_identification** | **string** | The identifier of account alias. | [optional]
**account_alias_type** | **string** | Creditor alias type.  * **AUSTRALIAN_BUSINESS_NUMBER**: Australian business number.  * **EMAIL_ADDRESS**: E-mail address.  * **ORGANISATION_ID**: Organisation identifier.  * **PHONE_NUMBER**: Phone number. | [optional]
**account_id** | **string** | The identifier of the creditor account. |
**party_reference** | **string** | Reference associated with the mandate as provided by party. Specifies a character string with a maximum length of 35 ASCII printable characters. | [optional]
**party_type** | **string** | Creditor party type.  * **ORGANISATION**: Party is an organisation.  * **PERSON**: Party is a private individual. | [optional]
**ultimate_party_name** | **string** | Creditor&#39;s ultimate party name. Optional, overrides platform creditor&#39;s name | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
