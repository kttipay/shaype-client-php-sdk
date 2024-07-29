# # RuleDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blocked_merchant_category_codes** | **int[]** | Blocked Merchant Category Code (MCC) as four digit code as per ISO 18245 (required for Rule type: MERCHANT_CODE_BLOCK). | [optional]
**blocked_merchant_ids** | **string[]** | List of blocked merchant identifiers, each up to 15 alphanumeric characters (required for rule type of &#x60;MERCHANT_ID_BLOCK&#x60;). | [optional]
**blocked_merchant_name** | **string** | Blocked merchant name (required for Rule type: MERCHANT_NAME_BLOCK). | [optional]
**merchant_name_matching_operator** | **string** | Merchant name matching (required for Rule type: MERCHANT_NAME_BLOCK). Possible values:  * **CONTAINS**: Merchant name contains the Rule value  * **ENDS_WITH**: Merchant name ends with the Rule value  * **EXACT**: Merchant name is an actual match of the Rule value  * **STARTS_WITH**: Merchant name begins with the Rule value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
