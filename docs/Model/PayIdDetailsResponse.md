# # PayIdDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_resolution_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was last resolved | [optional]
**last_updated_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was last updated | [optional]
**pay_id_name** | **string** | A value or alias that can be assigned to this particular PayID (can assist where multiple PayIDs registered against the same Account) | [optional]
**pay_id_type** | **string** | PayID type:   * **EMAIL**: Email Address  * **INDIVIDUAL_AUSTRALIAN_BUSINESS**: Australian business identifier  * **ORGANISATION**: Organisation identifier  * **TELEPHONE**: Telephone number | [optional]
**pay_id_value** | **string** | PayID | [optional]
**reason** | **string** | Reason for current PayID status. Possible values:  **CUST**: Customer initiated  **DECD**: Customer deceased  **FROD**: Fraud suspected  **LEGL**: Legal reasons  **PART**: NPP participant initiated | [optional]
**registration_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was registered | [optional]
**status** | **string** | PayID status. Possible values:  * **ACTIVE**: Activate PayID to allow it to be used  * **DISABLED**: Disable PayID and prevent it from being used or transferred  * **DEREGISTERED**: De-register PayID from current Account  * **PORTABLE**: Place PayID in transferable state allowing it to be registered to a different Account while still being used | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
