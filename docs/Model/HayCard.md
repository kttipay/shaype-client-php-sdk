# # HayCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**blocked_by** | **string** | The type of entity that is responsible for the blocked card. Possible values:  * **CLIENT**: The card was blocked by the Client.  * **PLATFORM**: The card was blocked by the Platform | [optional]
**card_hay_id** | **string** | Unique identifier (UUID) of the Card | [optional]
**card_status** | **string** | Current Card status. Possible values:  * **ACTIVE**: Card is active and available for use  * **AWAITING_ACTIVATION**: Card is yet to be activated and unable to be used  * **BLOCKED**: Card has been blocked  * **EXPIRED**: Card has expired  * **INACTIVE**: Card has been cancelled / voided and can no longer be used | [optional]
**card_token** | **string** | Public token of the Card, maximum 9 digits in length | [optional]
**card_type** | **string** | Type of card. Possible values:  * **PHYSICAL**: Physical card has been issued  * **VIRTUAL**: Card is virtual only. No physical card has been issued | [optional]
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer (cardholder) | [optional]
**expiry_date** | **\DateTime** | Expiry date of the Card (date of the last day of the expiry month and year) | [optional]
**issued_date_time_utc** | **\DateTime** | DateTime in UTC format when the Card was issued | [optional]
**last_four_digits** | **string** | Last four digits of the Card number, also known as primary account number (PAN) | [optional]
**name_on_card** | **string** | Cardholder name as printed on the Card | [optional]
**renewed_into_card_id** | **string** | Unique ID of the new card, if this card has been renewed | [optional]
**void_date_time_utc** | **\DateTime** | DateTime in UTC format when the Card was cancelled / voided | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
