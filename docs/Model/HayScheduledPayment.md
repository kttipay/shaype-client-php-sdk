# # HayScheduledPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique identifier (UUID) of the Account | [optional]
**amount** | [**\OpenAPI\Client\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**creation_date_time_utc** | **\DateTime** | DateTime in UTC format when a scheduled or recurring payment schedule has been created | [optional]
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer (initiator of the transfer) | [optional]
**description** | **string** | Description on the transaction | [optional]
**end_date** | **\DateTime** | Recurring payment processing end date | [optional]
**frequency** | **string** | Payment frequency for recurring payments. Possible values:  * **WEEKLY**: Payment is processed every week, starting on the startDate  * **FORTNIGHTLY**: Payment is processed every two weeks, starting on the startDate  * **MONTHLY**: Payment is processed every month, starting on the startDate (payment triggered on next available date where invalid date is encountered in schedule i.e. 30th February)  * **QUARTERLY**: Payment is processed every quarter, starting on the startDate (payment triggered on next available date where invalid date is encountered in schedule i.e. 30th February) | [optional]
**hay_id** | **string** | Unique identifier (UUID) of the payment schedule | [optional]
**last_processed_date_time_utc** | **\DateTime** | DateTime in UTC format when a scheduled or recurring payment has been last processed | [optional]
**number_of_payments** | **int** | Total number of times a recurring payment will be processed | [optional]
**number_of_processed_payments** | **int** | Total number of times the payment has been processed | [optional]
**previous_versions** | [**\OpenAPI\Client\Model\HayArchivedScheduledPayment[]**](HayArchivedScheduledPayment.md) | Any previous versions of this payment schedule that has subsequently been updated | [optional]
**recipient** | [**\OpenAPI\Client\Model\ScheduledPaymentRecipient**](ScheduledPaymentRecipient.md) |  | [optional]
**reference** | **string** | Reference to be included with the transfer | [optional]
**should_cancel_on_failure** | **bool** | Indicates whether a recurring payment schedule should be cancelled if a payment fails (i.e. insufficient funds in Account or rejected by the receiving party) | [optional]
**start_date** | **\DateTime** | First processing date for a recurring payment, or the processing date for a scheduled single payment | [optional]
**status** | **string** | Status of the recurring or scheduled payment definition:  * **ACTIVE**: Payment schedule is active and has outstanding payments to be processed in the future  * **CANCELLED**: Payment schedule has been cancelled, the schedule is no longer active (triggered via &#39;Cancel Scheduled Payment&#39; method)  * **COMPLETED**: All payments scheduled have been completed, the schedule is no longer active  * **DELETED**: Payment schedule has been deleted, the schedule is no longer active (triggered via UI exposed endpoint)  * **FAILED**: Payment has failed to be processed, any further scheduled payments will not be processed (only used for payments with the shouldCancelOnFailure flag set to true)  * **REJECTED**: Payment has been rejected by recipient, any further scheduled payments will not be processed (only used for payments with the shouldCancelOnFailure flag set to true)  * **REPLACED**: Payment schedule has been replaced with a newer version | [optional]
**type** | **string** | Scheduled payment type. Possible values:  * **RECURRING**: Payment scheduled to be performed multiple times in the future  * **ONE_TIME**: Payment scheduled to be performed once in the future | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
