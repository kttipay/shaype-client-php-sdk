# # CreateThresholdRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Determines whether the threshold is active. If set to **false**,the threshold will not be checked and won&#39;t raise an alert in case of a breach. | [optional]
**amount** | **float** | Absolute monetary value for the threshold. Required if &#x60;percental&#x60; is set to **false**. | [optional]
**id** | **string** | Unique identifier (UUID) for the threshold. |
**percent** | **int** | Relative percentage value for the threshold. Required if &#x60;percental&#x60; is set to **true**. | [optional]
**percental** | **bool** | Calculation method for the threshold:  * **true**: Threshold is set as a percentage of corresponding limit. When set to **true**, the &#x60;percent&#x60; field needs to be set.  * **false**: Threshold is set as an absolute value. When set to **false**, the &#x60;amount&#x60; field needs to be set. |
**type** | **string** | Liquidity threshold type:  * **TOTAL_DAILY_INBOUND_DIRECT_DEBIT**: Total daily inbound Direct Debits threshold  * **TOTAL_DAILY_NET_NON_SCHEME**: Total daily non-scheme payments threshold  * **TOTAL_DAILY_NET_VISA**: Total daily Visa card payments threshold  * **TOTAL_DAILY_OUTBOUND_BPAY**: Total daily outbound BPAY payments threshold |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
