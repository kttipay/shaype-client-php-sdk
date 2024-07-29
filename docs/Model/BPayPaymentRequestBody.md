# # BPayPaymentRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The amount to be transferred |
**biller_code** | **string** | The Biller Code for the biller that will receivethe payment. It must be of length 3 to 10 digits. |
**category** | **string** | Used to assign a category of the transfer |
**description** | **string** | Transfer description, will be seen by both sender and recipient | [optional]
**idempotency_key** | **string** | Unique value (UUID) used to identify this request and used to recognise any subsequent retries | [optional]
**name** | **string** | Nick name of the BPAY biller | [optional]
**reference** | **string** | Biller Reference to be included with the transfer |
**sender_customer_hay_id** | **string** | Unique identifier (UUID) of the Customer (initiator of the transfer) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
