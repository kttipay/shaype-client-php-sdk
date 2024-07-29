# # HayJointAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_identifiers** | [**\OpenAPI\Client\Model\BusinessIdentifiers**](BusinessIdentifiers.md) |  | [optional]
**customer_hay_ids** | **string[]** | Unique identifiers (UUID) of the Customer(s) associated to this Group | [optional]
**group_hay_id** | **string** | Unique identifier (UUID) of the Group | [optional]
**group_type** | **string** | Group type. Possible values:  * **BUSINESS**: Non-individual / joint entity  * **PERSONAL**: Joint account entity (default if no option selected) | [optional]
**hay_account** | [**\OpenAPI\Client\Model\HayAccount**](HayAccount.md) |  | [optional]
**name** | **string** | Name of the Group, if not provided a generic name associated with the client will be generated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
