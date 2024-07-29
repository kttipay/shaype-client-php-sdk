# # HayAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_hay_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**account_holder_id** | **string** | Unique identifier (UUID) of the account holder | [optional]
**account_holder_type** | **string** | The type of object that is the account holder. Possible values:  * **CUSTOMER**: The account holder is a Customer, accountHolderId contains a Customer ID  * **GROUP**: The account holder is a Group, accountHolderId contains a Group ID | [optional]
**account_number** | **string** | Account number, 5-9 digits in length | [optional]
**available_balance** | **float** | Total balance available for use on Account. Funds that are held, locked and allocated to a Stack will not be available. Value to 2 decimal places. | [optional]
**blocked_by** | **string** | The type of entity that is responsible for the blocked account. Possible values:  * **CLIENT**: The account was blocked by the Client.  * **PLATFORM**: The account was blocked by the Platform | [optional]
**bsb** | **string** | BSB (Bank State Branch) of Account, 6 digits in length | [optional]
**closed_date_time_utc** | **\DateTime** | DateTime in UTC format when the Account was closed | [optional]
**creation_date_time_utc** | **\DateTime** | DateTime in UTC format when the Account was created | [optional]
**currency** | **string** | Account currency as three letter code as per &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_4217\&quot;&gt;ISO 4217&lt;/a&gt;. | [optional]
**custom_data** | **object** | Contains custom metadata stored with the Account |
**held_balance** | **float** | Total value of all authorised but not yet cleared transactions for all Cards on Account. Positive value to 2 decimal places. | [optional]
**locked_balance** | **float** | The value that has been locked and unavailable for use, typically as a result of an operations team action. Positive value to 2 decimal places. | [optional]
**overdraft_balance** | **float** | Total value of overdraft used where an overdraft limit exists on the Account. Positive value to 2 decimal places. | [optional]
**overdraft_limit** | **float** | Total value of the overdraft limit applied to Account. Positive value to 2 decimal places. | [optional]
**product_id** | **string** | Unique identifier (UUID) of the Product | [optional]
**stacks_balance** | **float** | Total value current held against any Stack(s) on the Account. Positive value to 2 decimal places. | [optional]
**status** | **string** | Current Account status. Possible values:  * **ACTIVE**: Account is approved and has had a transactional action performed on it  * **ACTIVE_IN_ARREARS**: Account balance is in a negative position beyond the total deposits / overdraft limit on the Account  * **APPROVED**: Account is approved and ready for use  * **CLOSED**: Account is closed  * **DORMANT**: Account is dormant due to inactivity on Account for a specific period of time  * **LOCKED**: Account is blocked  * **PENDING_APPROVAL**: Account is created but not yet approved (Note: Accounts created through this API are automatically set as APPROVED) | [optional]
**technical_overdraft_balance** | **float** | Total value that is in a negative position beyond the total deposits / overdraft limit on the Account. Value to 2 decimal places. | [optional]
**total_balance** | **float** | Total value of all funds on the Account (this amount will also include unused overdraft limit and Stacks, held and locked value). Value to 2 decimal places. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
