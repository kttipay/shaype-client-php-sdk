# # ReissueHayCardRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_type** | **string** | Type of card. Possible values:  * **PHYSICAL**: Physical card has been issued  * **VIRTUAL**: Card is virtual only. No physical card will be issued If card type is not specified, it is set to PHYSICAL by default. | [optional]
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
