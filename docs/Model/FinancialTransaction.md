# # FinancialTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**card_id** | **string** | Unique identifier (UUID) of the Card | [optional]
**category** | **string** | Category assigned to the Transaction | [optional]
**clearing_time_utc** | **\DateTime** | DateTime in UTC format when Transaction was posted to Account | [optional]
**counterpart_details** | [**\Shaype\Client\Model\ExternalCounterpartDetails**](ExternalCounterpartDetails.md) |  | [optional]
**counterpart_name** | **string** | Counterpart name | [optional]
**country_of_expenditure** | **string** | Country of the expenditure (applicable for card transactions) | [optional]
**currency_amount** | [**\Shaype\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**customer_id** | **string** | Unique identifier (UUID) of the Customer | [optional]
**description** | **string** | Description on the Transaction | [optional]
**mandate_payment_details** | [**\Shaype\Client\Model\ExternalMandatePaymentDetails**](ExternalMandatePaymentDetails.md) |  | [optional]
**origin_channel** | **string** | Origin source of the Transaction (only applicable if specifically used by Client). Possible values:  * **ATM_CASH**  * **POS_DEBIT**  * **VENUE** | [optional]
**origin_id** | **string** | Additional identifier applied to Transaction related to origin of the request | [optional]
**origin_type** | **string** | Initiator origin of the Transaction. Possible values:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by Client Operations team  * **OPERATIONS**: Transaction initiated by Shaype Operations team | [optional]
**original_currency_amount** | [**\Shaype\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**product_id** | **string** | Unique identifier (UUID) of the Product of the account associated with the event | [optional]
**reference** | **string** | Reference on the transaction (only applicable to NPP transactions), maximum 35 alphanumeric characters in length | [optional]
**related_hold_hay_id** | **string** | Unique identifier (UUID) of the Hold settled for the Transaction (only applicable to card transactions) | [optional]
**reported_fraudulent** | **bool** | (NOT CURRENTLY IN USE) Indicates the Transaction has been reported as fraudulent | [optional]
**rolling_account_balance** | **float** | Total Account balance after the transaction posted to Account | [optional]
**transaction_channel** | **string** | Transaction channels applicable to Shaype operated functions:  * **APPLEPAY_CARD_NOT_PRESENT**  * **APPLE_PAY_CARD_NOT_PRESENT_INTERNATIONAL**  * **APPLE_PAY_CARD_PRESENT**  * **APPLE_PAY_CARD_PRESENT_INTERNATIONAL**  * **BPAY_IN_REJECT**  * **CUSCAL_BPAY_TRANSFER_OUT**  * **CUSCAL_DE_CREDIT_IN**  * **CUSCAL_DE_CREDIT_OUT**  * **CUSCAL_DE_DEBIT_IN**  * **CUSCAL_DE_DEBIT_OUT**  * **CUSCAL_NPP_TRANSFER_IN**  * **CUSCAL_NPP_TRANSFER_OUT**  * **DE_DEBIT_RETURN_IN**  * **GOOGLE_PAY_CARD_NOT_PRESENT**  * **GOOGLE_PAY_CARD_NOT_PRESENT_INTERNATIONAL**  * **GOOGLE_PAY_CARD_PRESENT**  * **GOOGLE_PAY_CARD_PRESENT_INTERNATIONAL**  * **HAAS_TRANSFER_EXTERNAL_IN**  * **HAAS_TRANSFER_EXTERNAL_OUT**  * **HAAS_TRANSFER_INTERNAL_IN**  * **HAAS_TRANSFER_INTERNAL_OUT**  * **NPP_RETURN_IN**  * **VISA_ATM DOMESTIC**  * **VISA_ATM_INTERNATIONAL**  * **VISA_CARD_NOT_PRESENT**  * **VISA_CARD_NOT_PRESENT_INTERNATIONAL**  * **VISA_CARD_PRESENT**  * **VISA_CARD_PRESENT_INTERNATIONAL**  * **VISA_CONTACTLESS**  * **VISA_CONTACTLESS_INTERNATIONAL**  * **VISA_OCT_DOMESTIC**  * **VISA_OCT_INTERNATIONAL**  * **VISA_OTHER**  * **VISA_REFUND_DOMESTIC**  * **VISA_REFUND_INTERNATIONAL**  Transaction channels available for use by Shaype Clients:  * **ACCOUNT_ADJUSTMENT**  * **APPLE_REWARD**  * **INTEREST_ADJUSTMENT**  * **LOAN_ADJUSTMENT**  * **LOAN_REPAYMENT**  * **MANUAL_ADJUSTMENT**  * **SERVICE_FEE**  Transaction channels for Shaype internal use only:  * **HAY_CREDIT**  * **HAY_TO_HAY_TRANSFER_IN**  * **HAY_TO_HAY_TRANSFER_OUT**  * **VALUE_TRANSFER**  Transaction channels not in use:  * **CUSCAL_BPAY_TRANSFER_IN**  * **CUSCAL_DE_TRANSFER_IN**  * **CUSCAL_DE_TRANSFER_OUT**  * **CUSCAL_DE_TRANSFER_OUT_RETURN**  * **CARD_REFUNDS**  * **CUSCAL_LEGACY**  * **CUSCAL_NPP_SOLICITED_RETURN**  * **FAT_ZEBRA_TRANSFER_IN**  * **NPP_RETURN_OUT**  * **VISA_ATM**  * **VISA_LEGACY**  * **VISA_REFUNDS_LEGACY** | [optional]
**transaction_hay_id** | **string** | Unique identifier (UUID) of the Transaction | [optional]
**transaction_time_utc** | **\DateTime** | DateTime in UTC format when Transaction was initiated / received on the Account | [optional]
**type** | **string** | Transaction type. Possible values:  * **ATM_WITHDRAWAL **: Cash withdrawal from ATM  * **BPAY_TRANSFER_IN **: (not currently in use)  * **BPAY_TRANSFER_OUT **: BPAY payment made out of Account  * **CARD_NOT_PRESENT_PAYMENT **: Payment online using card details, Apple Pay or Google Pay  * **CARD_PAYMENT_REVERSAL **: Refund for previous card payment  * **CARD_PRESENT_PAYMENT **: Payment using physical card, Apple device or Android device at physical terminal  * **DIRECT_DEBIT_TRANSFER **: Cash transfer out of Account via Direct Debit  * **INTERBANK_TRANSFER_IN **: Cash transfer into Account via Direct Credit or NPP  * **INTERBANK_TRANSFER_OUT **: Cash transfer out of Account via Direct Credit or NPP  * **INTRABANK_TRANSFER_IN **: Cash transfer into Account via ShaypePay  * **INTRABANK_TRANSFER_OUT **: Cash transfer out of Account via ShaypePay  * **INTERBANK_TRANSFER_OUT_REVERSAL **: (not currently in use)  * **GENERAL_CREDIT **: General purpose credit on Account  * **GENERAL_DEBIT **: General purpose debit on Account  * **ORIGINAL_CREDIT **: Cash transfer to card via Visa OCT payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
