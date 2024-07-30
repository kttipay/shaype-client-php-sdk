# # CreateHayGroupRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_identifiers** | [**\Shaype\Client\Model\BusinessIdentifiers**](BusinessIdentifiers.md) |  | [optional]
**customer_hay_ids** | **string[]** | Unique identifiers (UUID) of the Customer(s) associated to this Group |
**group_name** | **string** | Name of the Group, if not provided a generic name associated with the client will be generated | [optional]
**group_type** | **string** | Group type. Possible values:  * **BUSINESS**: Non-individual / joint entity  * **PERSONAL**: Joint account entity (default if no option selected) | [optional]
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
