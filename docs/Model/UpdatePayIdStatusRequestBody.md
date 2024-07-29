# # UpdatePayIdStatusRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_id_status** | **string** | Updated PayID status. Possible values:  * **ACTIVE**: Activate PayID to allow it to be used  * **DISABLED**: Disable PayID and prevent it from being used or transferred  * **DEREGISTERED**: De-register PayID from current Account  * **PORTABLE**: Place PayID in transferable state allowing it to be registered to a different Account while still being used |
**pay_id_type** | **string** | PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number |
**reason** | **string** | Reason for current PayID status. Possible values:  **CUST**: Customer initiated  **DECD**: Customer deceased  **FROD**: Fraud suspected  **LEGL**: Legal reasons  **PART**: NPP participant initiated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
