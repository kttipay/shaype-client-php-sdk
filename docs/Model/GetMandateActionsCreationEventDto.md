# # GetMandateActionsCreationEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**party_role** | **string** | Party role of the mandate that triggered the event. Enumeration of the party roles that can initiate an action on a mandate: * **DEBTOR**: Debtor party role. * **PAYMENT_INITIATOR**: Payment Initiator party role. |
**servicer_bic** | **string** | Identification of the party who triggered the event on the action. |
**sponsor_bic** | **string** | Identification of the agent that sponsors the servicer at the moment the event was triggered. |
**time** | **string** | Timestamp of when the event occurred on the mandate action. UTC expressed without offset, i.e. YYYY-MM-DDThh:mm:ss.sssZ |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
