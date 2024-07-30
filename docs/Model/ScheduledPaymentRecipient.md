# # ScheduledPaymentRecipient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bpay_details** | [**\Shaype\Client\Model\BpayDetails**](BpayDetails.md) |  | [optional]
**recipient_account_number** | [**\Shaype\Client\Model\BasicAccountNumber**](BasicAccountNumber.md) |  | [optional]
**recipient_name** | **string** | Name of Account receiving the transfer | [optional]
**recipient_type** | **string** | Recipient type. Possible values:  * **ACCOUNT**: The recipient of the Scheduled Payment is an another cash Account, payment sent as cash transfer   * **BPAY**: The recipient of the Scheduled Payment is a BPAY Biller, payment sent as BPAY payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
