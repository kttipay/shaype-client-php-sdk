# # SearchCustomersRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_of_birth** | **\DateTime** | Date of birth of the Customer in ISO format YYYY-MM-DD | [optional]
**email** | **string** | Email address of the Customer | [optional]
**first_name** | **string** | First name of the Customer | [optional]
**last_name** | **string** | Last name of the Customer | [optional]
**phone_number** | [**\Shaype\Client\Model\PhoneNumber**](PhoneNumber.md) |  | [optional]
**status** | **string** | Current Customer status. Possible values:  * **ACTIVE**: Customer is active  * **BLOCKED**: Customer is blocked  * **INACTIVE**: Customer is not active (closed)  * **PENDING_APPROVAL**: Customer is awaiting approval  * **REFERRED**: Customer is referred for further KYC checks  * **REJECTED**: Customer has been rejected | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
