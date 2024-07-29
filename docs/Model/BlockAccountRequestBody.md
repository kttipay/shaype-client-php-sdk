# # BlockAccountRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_block_style** | **string** | Deprecation Notice: ACCOUNT_AND_CUSTOMER value to be removed.  Deprecation Notice: ACCOUNT_AND_CUSTOMER default value to be removed.  Controls which entities will have block applied.   Use of ACCOUNT_ONLY is encouraged.  Possible values: * **ACCOUNT_ONLY** (Preferred): Only the account will be blocked. * **ACCOUNT_AND_CUSTOMER** (Default if no value provided): Both the account and customer(s) owning it will be blocked. It returns SUCCESS in case of partial success (Account blocked, but customer not blocked due to permission issues). | [optional]
**note** | **string** | Note or explanation for reason block is applied |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
