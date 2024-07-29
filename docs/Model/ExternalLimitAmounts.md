# # ExternalLimitAmounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_limit** | **float** | Custom limit applied to the Account | [optional]
**effective_limit** | **float** | Effective limit applied to the Account | [optional]
**product_limit** | **float** | Default limit applied to the Account based on the product | [optional]
**type** | **string** | Account limit type. Possible values:  * **ATM_WITHDRAWAL_PER_DAY**: Maximum value of ATM cash withdrawals  * **BANK_TRANSFER_TOP_UP_PER_DAY**: Maximum value of inbound cash transfers  * **BPAY_DAILY_LIMIT**: Maximum value of outgoing BPAY payments  * **BPAY_TOP_UP_PER_DAY**: Not currently used  * **CARD_PAYMENTS_DAILY**: Maximum value of Card payments  * **CARD_TOP_UP_PER_DAY**: Not currently used  * **DIRECT_DEBIT_PER_DAY**: Maximum value of outgoing direct debit transfers  * **MAX_BALANCE**: Maximum balance that can be held in Account  * **MIN_BALANCE**: Minimum balance that can be held in Account (Shaype use only)  * **MIN_STACK_BALANCE**: Minimum balance that can be held in Stack (Shaype use only)  * **OVERDRAFT_PRODUCT_LIMIT**: Maximum overdraft value that can be applied on Account  * **PAYMENT_TO_ACCOUNT_NUMBER**: Maximum value of individual outgoing cash transfer  * **PAYMENT_TO_PAY_ID**: Not currently used  * **SINGLE_CARD_TRANSACTION**: Maximum value of individual Card payment  * **TOTAL_SPEND_PER_YEAR**: Maximum value of outgoing transfers / payments on Account in a year  * **TOP_UP_PER_DAY**: Maximum value of inbound cash transfers | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
