# # PayIdDeregisterDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_updated_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was last updated | [optional]
**pay_id_name** | **string** | A value or alias that can be assigned to this particular PayID (can assist where multiple PayIDs registered against the same Account) | [optional]
**reason** | **string** | Reason for current PayID status. Possible values:  **CUST**: Customer initiated  **DECD**: Customer deceased  **FROD**: Fraud suspected  **LEGL**: Legal reasons  **PART**: NPP participant initiated | [optional]
**registration_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was registered | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
