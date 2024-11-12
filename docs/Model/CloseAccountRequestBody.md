# # CloseAccountRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Customer account close reason. Stored in Customer model if customer is closed along with its last open account.  Possible values:  * **SUSPICIOUS**: The customer was made inactive due to concerns about their account conduct.  * **DECEASED**: The customer was made inactive after confirmation was received that they are deceased.  * **CUSTOMER**: The customer was made inactive due to a customer request.  * **OPERATIONAL**: The customer was made inactive due to an operational request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
