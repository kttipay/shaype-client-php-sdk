# # HayCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Shaype\Client\Model\Address**](Address.md) |  | [optional]
**approved_date_time_utc** | **\DateTime** | DateTime in UTC format when the customer has been approved | [optional]
**blocked_by** | **string** | The type of entity that is responsible for the blocked customer. Possible values:  * **CLIENT**: The customer was blocked by the Client.  * **PLATFORM**: The customer was blocked by the Platform | [optional]
**client_reference** | **string** | Client reference associated with customer | [optional]
**closed_date_time_utc** | **\DateTime** | DateTime in UTC format when the Customer was closed | [optional]
**creation_date_time_utc** | **\DateTime** | DateTime in UTC format when the Customer was created | [optional]
**custom_data** | **object** | Custom data associated with customer | [optional]
**customer_details** | [**\Shaype\Client\Model\CustomerDetails**](CustomerDetails.md) |  | [optional]
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer | [optional]
**device_id** | **string** | Customer&#39;s device ID, typically UUID though format controlled by mobile OS (if a mobile app is available) | [optional]
**device_os** | **string** | Customer&#39;s device operating system (if a mobile app is available). Possible values:  * **IOS**  * **ANDROID** | [optional]
**email** | **string** | Email address of the Customer | [optional]
**firebase_token** | **string** | Customer&#39;s device firebase token (if a mobile app is available) | [optional]
**identity_document_card_number** | **string** | Optional identity document card number. Between 6 to 10 characters which can be either just numeric or alphanumeric characters based on the state. Should be specified for Driver&#39;s Licenses that provide it. | [optional]
**identity_document_issuing_country** | **string** | Optional three-letter ISO country code of the customer&#39;s identity document issuing country | [optional]
**identity_document_number** | **string** | Number of the Customer&#39;s identity document (if supplied) | [optional]
**identity_document_region** | **string** | Optional identity document region, one of: NSW, QLD, SA, TAS, VIC, WA, ACT, NT. (uppercase only) Should be specified for Driver&#39;s Licenses. | [optional]
**identity_document_type** | **string** | Type of Customer&#39;s identity document (if supplied). Possible values:  * **DRIVING_LICENSE**  * **PASSPORT** | [optional]
**last_updated_date_time_utc** | **\DateTime** | DateTime in UTC format when the Customer was last updated | [optional]
**phone_number** | [**\Shaype\Client\Model\PhoneNumber**](PhoneNumber.md) |  | [optional]
**status** | **string** | Current Customer status. Possible values:  * **ACTIVE**: Customer is active  * **BLOCKED**: Customer is blocked  * **INACTIVE**: Customer is not active (closed)  * **PENDING_APPROVAL**: Customer is awaiting approval  * **REFERRED**: Customer is referred for further KYC checks  * **REJECTED**: Customer has been rejected | [optional]
**status_reason** | **string** | INACTIVE status reason. Possible values:  * **SUSPICIOUS**: The customer was made inactive due to concerns about their account conduct.  * **DECEASED**: The customer was made inactive after confirmation was received that they are deceased.  * **CUSTOMER**: The customer was made inactive due to a customer request.  * **OPERATIONAL**: The customer was made inactive due to an operational request. | [optional]
**tier** | **string** | Customer tier, will be STANDARD unless additional tiers have been agreed as part of the product offering. Possible values:  * **FOUNDER**  * **STANDARD**  * **PREMIUM** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
