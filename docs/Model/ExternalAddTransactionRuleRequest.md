# # ExternalAddTransactionRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_in** | **int** | Number of seconds until the Rule expires after it is created |
**name** | **string** | Name assigned to the Rule |
**rule_details** | [**\OpenAPI\Client\Model\RuleDetails**](RuleDetails.md) |  |
**rule_type** | **string** | Type of Rule. Possible values: * **MERCHANT_CODE_BLOCK**: Transactions blocked by Merchant Category Code (MCC) * **MERCHANT_ID_BLOCK**: Transactions blocked by merchant ID * **MERCHANT_NAME_BLOCK**: Transactions blocked by merchant name |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
