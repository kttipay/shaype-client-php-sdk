# # TransferOutRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_transfer** | [**\OpenAPI\Client\Model\AccountTransfer**](AccountTransfer.md) |  | [optional]
**amount** | **float** | The amount to be transferred |
**category** | **string** | Used to assign a category of the transfer | [optional]
**description** | **string** | Transfer description, will be seen by both sender and recipient |
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries | [optional]
**internal_transfer** | [**\OpenAPI\Client\Model\InternalTransfer**](InternalTransfer.md) |  | [optional]
**pay_id_transfer** | [**\OpenAPI\Client\Model\PayIdTransfer**](PayIdTransfer.md) |  | [optional]
**reference** | **string** | Reference to be included with the transfer | [optional]
**sender_customer_hay_id** | **string** | Unique identifier (UUID) of the Customer (initiator of the transfer) |
**transfer_type** | **string** | Transfer type. Possible values:  * **ACCOUNT**: Transfer to Account using bank account details (requires accountTransfer object to be provided)  * **INTERNAL**: Transfer to Account using AccountID, where recipient also Client&#39;s Customer with Shaype (requires internalTransfer object to be provided)  * **PAY_ID**: Transfer to Account using PayID (requires payIdTransfer object to be provided) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
