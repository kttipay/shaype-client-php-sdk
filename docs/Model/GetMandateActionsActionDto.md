# # GetMandateActionsActionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_identification** | **string** | ID of the action performed. |
**bilateral** | **bool** | Boolean flag indicating if the action was created as bilateral or unilateral. This will only be present for mandate creation and amendment actions. | [optional]
**creation_event** | [**\OpenAPI\Client\Model\GetMandateActionsCreationEventDto**](GetMandateActionsCreationEventDto.md) |  |
**cx_event_name_creation** | **string** | Display value as defined for Mandate creation event. Examples - Payment agreement Received or Updated payment terms received or Transfer Initiated. | [optional]
**cx_event_name_resolution** | **string** | Display value as defined for Mandate resolution event. Examples - Payment agreement Declined or Updated payment terms authorised or Transfer Completed | [optional]
**details** | [**\OpenAPI\Client\Model\GetMandateActionsDetailsDto**](GetMandateActionsDetailsDto.md) |  | [optional]
**expiry_time** | **string** | For a bilateral mandate creation or amendment action, or for a porting action, this will contain the timestamp at which the action will expire if no resolution is provided. | [optional]
**mandate_identification** | **string** | ID of the mandate affected by the action. |
**notification_priority** | **string** | Notification priority provided by the initiator of the action. * **NORMAL**: Notification priority indicating that the sending participant requires               a synchronous response to their request. Attended mode of operation. * **UNATTENDED**: Notification priority indicating that the sending participant requires               an asynchronous response to their request. Unattended mode of operation. |
**resolution_event** | [**\OpenAPI\Client\Model\GetMandateActionsResolutionEventDto**](GetMandateActionsResolutionEventDto.md) |  | [optional]
**resolution_requested_by** | **string** | Optional time used to indicate by when resolution of a bilateral action is requested from the other party to the mandate. This time is for informational purposes only and does not affect the expiry time imposed by the MMS. | [optional]
**status** | **string** | Status of the action performed on the mandate. Enumeration of the states that a mandate action can have: * **COMPLETED**: This status represents the following situations:             * A bilateral action that has been confirmed.             * A unilateral action has been performed.             * A port that has been finalised. * **DECLINED**: Action has been declined. * **PENDING**: This status represents the following situations:             * A bilateral action that is waiting to be confirmed.             * A porting action that has been initiated and is waiting to be finalised. * **RECALLED**: Action has been recalled. * **TIMED_OUT**: TimedOut - Action was created bilaterally and has now timed out. |
**type** | **string** | Type of action performed on the mandate. Enumeration of all mandate action types: * **AMEND**: Mandate amendment. * **CREATE**: Mandate creation. * **PORT**: Mandate porting. * **STATUS_CHANGE**: Mandate status change. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
