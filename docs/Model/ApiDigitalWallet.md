# # ApiDigitalWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | DateTime in UTC format when the wallet was activated | [optional]
**digital_wallet_status** | **string** | Wallet status. Possible values:  * **ACTIVE_TOKEN**: Wallet that has card token linked and is active for use | [optional]
**expires_at** | **\DateTime** | DateTime in UTC format when the wallet will expire (card expiry date) | [optional]
**reference** | **string** | The Digitiser&#39;s (i.e. the created of the token) unique reference to this token | [optional]
**type** | **string** | The wallet provider i.e. APPLE, GOOGLE etc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
