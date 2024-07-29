# # ExternalTransactionRuleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disabled** | **bool** | Indicates if Rule is currently disabled | [optional]
**expires_at_utc** | **\DateTime** | DateTime in UTC format when the Rule expires | [optional]
**id** | **string** | Unique identifier (UUID) of the Rule | [optional]
**name** | **string** | Name assigned to the Rule | [optional]
**owner_id** | **string** | Unique identifier (UUID) of the owner of Rule (either the Customer ID or Client Reference if a rule applied across the product) | [optional]
**rule** | **object** | Contains detail of the Rule | [optional]
**rule_type** | **string** | Type of Rule. Possible values: * **MERCHANT_CODE_BLOCK**: Transactions blocked by Merchant Category Code (MCC) * **MERCHANT_ID_BLOCK**: Transactions blocked by merchant ID * **MERCHANT_NAME_BLOCK**: Transactions blocked by merchant name | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
