# # PayIdAvailabilityDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | **bool** | Indicates if the PayID is available to be registered:  * **true**: PayID is available to be registered to an Account  * **false**: PayID is not available to be registered to an Account | [optional]
**last_resolution_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was last resolved | [optional]
**last_updated_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was last updated | [optional]
**reason** | **string** | Reason for current PayID status. Possible values:  **CUST**: Customer initiated  **DECD**: Customer deceased  **FROD**: Fraud suspected  **LEGL**: Legal reasons  **PART**: NPP participant initiated | [optional]
**registration_date_time_utc** | **\DateTime** | DateTime in UTC format when the PayID was registered | [optional]
**servicer** | **string** | Where PayID is currently registered contains the Business Identifier Code (BIC11) of the financial institution with which it is registered | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
