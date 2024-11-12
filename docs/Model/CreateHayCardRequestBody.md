# # CreateHayCardRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique identifier (UUID) of the Account |
**card_sub_design** | **string** | Card design, applicable to multiple Card designs for product. Mapping of designs will be provided. Possible values:  * **SUB_DESIGN_1** (default if not provided)  * **SUB_DESIGN_2**  * **SUB_DESIGN_3**  * **SUB_DESIGN_4**  * **SUB_DESIGN_5**  * **SUB_DESIGN_6**  * **SUB_DESIGN_7**  * **SUB_DESIGN_8**  * **SUB_DESIGN_9**  * **SUB_DESIGN_10**  * **SUB_DESIGN_...**  * **SUB_DESIGN_...**  * **SUB_DESIGN_100** | [optional]
**card_type** | **string** | Type of card to create. Can convert virtual to physical card at a later time:  * **PHYSICAL** (default if not provided)  * **VIRTUAL** | [optional]
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer (cardholder) |
**delivery_address** | [**\Shaype\Client\Model\Address**](Address.md) |  |
**email** | **string** | Email address of the Customer |
**first_name** | **string** | First name of the Customer |
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries |
**last_name** | **string** | Last name of the Customer |
**phone_number** | [**\Shaype\Client\Model\PhoneNumber**](PhoneNumber.md) |  |
**pin** | **string** | Card PIN, typically 4 digits but supports 4-12 digits |
**title** | **string** | Title of the Customer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
