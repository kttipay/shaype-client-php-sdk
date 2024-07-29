# # AuthorisationHold

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**card_id** | **string** | Unique identifier (UUID) of the Card | [optional]
**category** | **string** | Category applied to transaction, will be initially populated based on merchant type if known | [optional]
**currency_amount** | [**\OpenAPI\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**customer_id** | **string** | Unique identifier (UUID) of the Customer (cardholder) | [optional]
**description** | **string** | Description on the Transaction | [optional]
**hold_hay_id** | **string** | Unique identifier (UUID) of the Authorisation Hold | [optional]
**merchant_details** | [**\OpenAPI\Client\Model\ExternalMerchantDetails**](ExternalMerchantDetails.md) |  | [optional]
**original_currency_amount** | [**\OpenAPI\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**transaction_channel** | **string** | Transaction channel, domestic if payment same country card is issued in otherwise international. Possible values:  * **APPLE_PAY_CARD_NOT_PRESENT_DOMESTIC**:Payment online via Apple Pay (domestic)  * **APPLE_PAY_CARD_NOT_PRESENT_INTERNATIONAL**:Payment online via Apple Pay (international)  * **APPLE_PAY_CARD_PRESENT_DOMESTIC**:Payment via Apple device at physical terminal (domestic)  * **APPLE_PAY_CARD_PRESENT_INTERNATIONAL**:Payment via Apple device at physical terminal (international)  * **GOOGLE_PAY_CARD_NOT_PRESENT_DOMESTIC**:Payment online via Google Pay (domestic)  * **GOOGLE_PAY_CARD_NOT_PRESENT_INTERNATIONAL**:Payment online via Google Pay (international)  * **GOOGLE_PAY_CARD_PRESENT_DOMESTIC**:Payment via Android device at physical terminal (domestic)  * **GOOGLE_PAY_CARD_PRESENT_INTERNATIONAL**:Payment via Android device at physical terminal (international)  * **VISA_ATM_DOMESTIC**:Cash withdrawal from ATM (domestic)  * **VISA_ATM_INTERNATIONAL**:Cash withdrawal from ATM (international)  * **VISA_CARD_NOT_PRESENT_DOMESTIC**:Payment online using card details (domestic)  * **VISA_CARD_NOT_PRESENT_INTERNATIONAL**:Payment online using card details (international)  * **VISA_CARD_PRESENT_DOMESTIC**:Payment using physical card chip or magstripe (domestic)  * **VISA_CARD_PRESENT_INTERNATIONAL**:Payment using physical card chip or magstripe (international)  * **VISA_CONTACTLESS_DOMESTIC**:Payment using physical card contactless (domestic)  * **VISA_CONTACTLESS_INTERNATIONAL**:Payment using physical card contactless (international)  * **VISA_OCT_DOMESTIC**:Cash transfer to card via Visa OCT payment (domestic)  * **VISA_OCT_INTERNATIONAL**:Cash transfer to card via Visa OCT payment (international)  * **VISA_OTHER**:Exceptional for any other type of transaction  * **VISA_REFUND_DOMESTIC**:Refund for previous card payment (domestic)  * **VISA_REFUND_INTERNATIONAL**:Refund for previous card payment (international) | [optional]
**transaction_time_utc** | **\DateTime** | DateTime in UTC format when Transaction was Authorised on the Account | [optional]
**type** | **string** | Transaction type. Possible values:  * **ATM_WITHDRAWAL**: Cash withdrawal from ATM  * **CARD_NOT_PRESENT_PAYMENT**: Payment online using card details, Apple Pay or Google Pay  * **CARD_PAYMENT_REVERSAL**: Refund for previous card payment  * **CARD_PRESENT_PAYMENT**: Payment using physical card, Apple device or Android device at physical terminal  * **ORIGINAL_CREDIT**: Cash transfer to card via Visa OCT payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
