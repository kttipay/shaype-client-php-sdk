<?php
/**
 * GetMandateActionsActionDto
 *
 * PHP version 8.1
 *
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * B2B Operations API
 *
 * This application will be used by HaaS customers as an integration point with HAY Bank
 *
 * The version of the OpenAPI document: 0.0.1
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Shaype\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Shaype\Client\ObjectSerializer;

/**
 * GetMandateActionsActionDto Class Doc Comment
 *
 * @description Details of an action performed on a mandate.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetMandateActionsActionDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetMandateActionsActionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'action_identification' => 'string',
        'bilateral' => 'bool',
        'creation_event' => '\Shaype\Client\Model\GetMandateActionsCreationEventDto',
        'cx_event_name_creation' => 'string',
        'cx_event_name_resolution' => 'string',
        'details' => '\Shaype\Client\Model\GetMandateActionsDetailsDto',
        'expiry_time' => 'string',
        'mandate_identification' => 'string',
        'notification_priority' => 'string',
        'resolution_event' => '\Shaype\Client\Model\GetMandateActionsResolutionEventDto',
        'resolution_requested_by' => 'string',
        'status' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'action_identification' => 'uuid',
        'bilateral' => null,
        'creation_event' => null,
        'cx_event_name_creation' => null,
        'cx_event_name_resolution' => null,
        'details' => null,
        'expiry_time' => null,
        'mandate_identification' => 'uuid',
        'notification_priority' => null,
        'resolution_event' => null,
        'resolution_requested_by' => null,
        'status' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'action_identification' => false,
        'bilateral' => false,
        'creation_event' => false,
        'cx_event_name_creation' => false,
        'cx_event_name_resolution' => false,
        'details' => false,
        'expiry_time' => false,
        'mandate_identification' => false,
        'notification_priority' => false,
        'resolution_event' => false,
        'resolution_requested_by' => false,
        'status' => false,
        'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'action_identification' => 'actionIdentification',
        'bilateral' => 'bilateral',
        'creation_event' => 'creationEvent',
        'cx_event_name_creation' => 'cxEventNameCreation',
        'cx_event_name_resolution' => 'cxEventNameResolution',
        'details' => 'details',
        'expiry_time' => 'expiryTime',
        'mandate_identification' => 'mandateIdentification',
        'notification_priority' => 'notificationPriority',
        'resolution_event' => 'resolutionEvent',
        'resolution_requested_by' => 'resolutionRequestedBy',
        'status' => 'status',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'action_identification' => 'setActionIdentification',
        'bilateral' => 'setBilateral',
        'creation_event' => 'setCreationEvent',
        'cx_event_name_creation' => 'setCxEventNameCreation',
        'cx_event_name_resolution' => 'setCxEventNameResolution',
        'details' => 'setDetails',
        'expiry_time' => 'setExpiryTime',
        'mandate_identification' => 'setMandateIdentification',
        'notification_priority' => 'setNotificationPriority',
        'resolution_event' => 'setResolutionEvent',
        'resolution_requested_by' => 'setResolutionRequestedBy',
        'status' => 'setStatus',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'action_identification' => 'getActionIdentification',
        'bilateral' => 'getBilateral',
        'creation_event' => 'getCreationEvent',
        'cx_event_name_creation' => 'getCxEventNameCreation',
        'cx_event_name_resolution' => 'getCxEventNameResolution',
        'details' => 'getDetails',
        'expiry_time' => 'getExpiryTime',
        'mandate_identification' => 'getMandateIdentification',
        'notification_priority' => 'getNotificationPriority',
        'resolution_event' => 'getResolutionEvent',
        'resolution_requested_by' => 'getResolutionRequestedBy',
        'status' => 'getStatus',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const NOTIFICATION_PRIORITY_NORMALUNATTENDED = 'NORMAL,UNATTENDED';
    public const STATUS_COMPLETEDDECLINEDPENDINGRECALLEDTIMED_OUT = 'COMPLETED,DECLINED,PENDING,RECALLED,TIMED_OUT';
    public const TYPE_AMENDCREATEPORTSTATUS_CHANGE = 'AMEND,CREATE,PORT,STATUS_CHANGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotificationPriorityAllowableValues()
    {
        return [
            self::NOTIFICATION_PRIORITY_NORMALUNATTENDED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_COMPLETEDDECLINEDPENDINGRECALLEDTIMED_OUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AMENDCREATEPORTSTATUS_CHANGE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('action_identification', $data ?? [], null);
        $this->setIfExists('bilateral', $data ?? [], null);
        $this->setIfExists('creation_event', $data ?? [], null);
        $this->setIfExists('cx_event_name_creation', $data ?? [], null);
        $this->setIfExists('cx_event_name_resolution', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('expiry_time', $data ?? [], null);
        $this->setIfExists('mandate_identification', $data ?? [], null);
        $this->setIfExists('notification_priority', $data ?? [], null);
        $this->setIfExists('resolution_event', $data ?? [], null);
        $this->setIfExists('resolution_requested_by', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['action_identification'] === null) {
            $invalidProperties[] = "'action_identification' can't be null";
        }
        if ($this->container['creation_event'] === null) {
            $invalidProperties[] = "'creation_event' can't be null";
        }
        if (!is_null($this->container['cx_event_name_creation']) && (mb_strlen($this->container['cx_event_name_creation']) > 140)) {
            $invalidProperties[] = "invalid value for 'cx_event_name_creation', the character length must be smaller than or equal to 140.";
        }

        if (!is_null($this->container['cx_event_name_creation']) && (mb_strlen($this->container['cx_event_name_creation']) < 1)) {
            $invalidProperties[] = "invalid value for 'cx_event_name_creation', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cx_event_name_resolution']) && (mb_strlen($this->container['cx_event_name_resolution']) > 140)) {
            $invalidProperties[] = "invalid value for 'cx_event_name_resolution', the character length must be smaller than or equal to 140.";
        }

        if (!is_null($this->container['cx_event_name_resolution']) && (mb_strlen($this->container['cx_event_name_resolution']) < 1)) {
            $invalidProperties[] = "invalid value for 'cx_event_name_resolution', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['expiry_time']) && !preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", $this->container['expiry_time'])) {
            $invalidProperties[] = "invalid value for 'expiry_time', must be conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.";
        }

        if ($this->container['mandate_identification'] === null) {
            $invalidProperties[] = "'mandate_identification' can't be null";
        }
        if ($this->container['notification_priority'] === null) {
            $invalidProperties[] = "'notification_priority' can't be null";
        }
        $allowedValues = $this->getNotificationPriorityAllowableValues();
        if (!is_null($this->container['notification_priority']) && !in_array($this->container['notification_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'notification_priority', must be one of '%s'",
                $this->container['notification_priority'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['resolution_requested_by']) && !preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", $this->container['resolution_requested_by'])) {
            $invalidProperties[] = "invalid value for 'resolution_requested_by', must be conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets action_identification
     *
     * @return string
     */
    public function getActionIdentification(): string
    {
        return $this->container['action_identification'];
    }

    /**
     * Sets action_identification
     *
     * @param string $action_identification ID of the action performed.
     *
     * @return $this
     */
    public function setActionIdentification(string $action_identification): static
    {
        if (is_null($action_identification)) {
            throw new InvalidArgumentException('non-nullable action_identification cannot be null');
        }
        $this->container['action_identification'] = $action_identification;

        return $this;
    }

    /**
     * Gets bilateral
     *
     * @return bool|null
     */
    public function getBilateral(): ?bool
    {
        return $this->container['bilateral'];
    }

    /**
     * Sets bilateral
     *
     * @param bool|null $bilateral Boolean flag indicating if the action was created as bilateral or unilateral. This will only be present for mandate creation and amendment actions.
     *
     * @return $this
     */
    public function setBilateral(?bool $bilateral): static
    {
        if (is_null($bilateral)) {
            throw new InvalidArgumentException('non-nullable bilateral cannot be null');
        }
        $this->container['bilateral'] = $bilateral;

        return $this;
    }

    /**
     * Gets creation_event
     *
     * @return \Shaype\Client\Model\GetMandateActionsCreationEventDto
     */
    public function getCreationEvent(): \Shaype\Client\Model\GetMandateActionsCreationEventDto
    {
        return $this->container['creation_event'];
    }

    /**
     * Sets creation_event
     *
     * @param \Shaype\Client\Model\GetMandateActionsCreationEventDto $creation_event creation_event
     *
     * @return $this
     */
    public function setCreationEvent(\Shaype\Client\Model\GetMandateActionsCreationEventDto $creation_event): static
    {
        if (is_null($creation_event)) {
            throw new InvalidArgumentException('non-nullable creation_event cannot be null');
        }
        $this->container['creation_event'] = $creation_event;

        return $this;
    }

    /**
     * Gets cx_event_name_creation
     *
     * @return string|null
     */
    public function getCxEventNameCreation(): ?string
    {
        return $this->container['cx_event_name_creation'];
    }

    /**
     * Sets cx_event_name_creation
     *
     * @param string|null $cx_event_name_creation Display value as defined for Mandate creation event. Examples - Payment agreement Received or Updated payment terms received or Transfer Initiated.
     *
     * @return $this
     */
    public function setCxEventNameCreation(?string $cx_event_name_creation): static
    {
        if (is_null($cx_event_name_creation)) {
            throw new InvalidArgumentException('non-nullable cx_event_name_creation cannot be null');
        }
        if ((mb_strlen($cx_event_name_creation) > 140)) {
            throw new InvalidArgumentException('invalid length for $cx_event_name_creation when calling GetMandateActionsActionDto., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($cx_event_name_creation) < 1)) {
            throw new InvalidArgumentException('invalid length for $cx_event_name_creation when calling GetMandateActionsActionDto., must be bigger than or equal to 1.');
        }

        $this->container['cx_event_name_creation'] = $cx_event_name_creation;

        return $this;
    }

    /**
     * Gets cx_event_name_resolution
     *
     * @return string|null
     */
    public function getCxEventNameResolution(): ?string
    {
        return $this->container['cx_event_name_resolution'];
    }

    /**
     * Sets cx_event_name_resolution
     *
     * @param string|null $cx_event_name_resolution Display value as defined for Mandate resolution event. Examples - Payment agreement Declined or Updated payment terms authorised or Transfer Completed
     *
     * @return $this
     */
    public function setCxEventNameResolution(?string $cx_event_name_resolution): static
    {
        if (is_null($cx_event_name_resolution)) {
            throw new InvalidArgumentException('non-nullable cx_event_name_resolution cannot be null');
        }
        if ((mb_strlen($cx_event_name_resolution) > 140)) {
            throw new InvalidArgumentException('invalid length for $cx_event_name_resolution when calling GetMandateActionsActionDto., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($cx_event_name_resolution) < 1)) {
            throw new InvalidArgumentException('invalid length for $cx_event_name_resolution when calling GetMandateActionsActionDto., must be bigger than or equal to 1.');
        }

        $this->container['cx_event_name_resolution'] = $cx_event_name_resolution;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Shaype\Client\Model\GetMandateActionsDetailsDto|null
     */
    public function getDetails(): ?\Shaype\Client\Model\GetMandateActionsDetailsDto
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Shaype\Client\Model\GetMandateActionsDetailsDto|null $details details
     *
     * @return $this
     */
    public function setDetails(?\Shaype\Client\Model\GetMandateActionsDetailsDto $details): static
    {
        if (is_null($details)) {
            throw new InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets expiry_time
     *
     * @return string|null
     */
    public function getExpiryTime(): ?string
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     *
     * @param string|null $expiry_time For a bilateral mandate creation or amendment action, or for a porting action, this will contain the timestamp at which the action will expire if no resolution is provided.
     *
     * @return $this
     */
    public function setExpiryTime(?string $expiry_time): static
    {
        if (is_null($expiry_time)) {
            throw new InvalidArgumentException('non-nullable expiry_time cannot be null');
        }

        if ((!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", ObjectSerializer::toString($expiry_time)))) {
            throw new InvalidArgumentException("invalid value for \$expiry_time when calling GetMandateActionsActionDto., must conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.");
        }

        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets mandate_identification
     *
     * @return string
     */
    public function getMandateIdentification(): string
    {
        return $this->container['mandate_identification'];
    }

    /**
     * Sets mandate_identification
     *
     * @param string $mandate_identification ID of the mandate affected by the action.
     *
     * @return $this
     */
    public function setMandateIdentification(string $mandate_identification): static
    {
        if (is_null($mandate_identification)) {
            throw new InvalidArgumentException('non-nullable mandate_identification cannot be null');
        }
        $this->container['mandate_identification'] = $mandate_identification;

        return $this;
    }

    /**
     * Gets notification_priority
     *
     * @return string
     */
    public function getNotificationPriority(): string
    {
        return $this->container['notification_priority'];
    }

    /**
     * Sets notification_priority
     *
     * @param string $notification_priority Notification priority provided by the initiator of the action. * **NORMAL**: Notification priority indicating that the sending participant requires               a synchronous response to their request. Attended mode of operation. * **UNATTENDED**: Notification priority indicating that the sending participant requires               an asynchronous response to their request. Unattended mode of operation.
     *
     * @return $this
     */
    public function setNotificationPriority(string $notification_priority): static
    {
        if (is_null($notification_priority)) {
            throw new InvalidArgumentException('non-nullable notification_priority cannot be null');
        }
        $allowedValues = $this->getNotificationPriorityAllowableValues();
        if (!in_array($notification_priority, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'notification_priority', must be one of '%s'",
                    $notification_priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notification_priority'] = $notification_priority;

        return $this;
    }

    /**
     * Gets resolution_event
     *
     * @return \Shaype\Client\Model\GetMandateActionsResolutionEventDto|null
     */
    public function getResolutionEvent(): ?\Shaype\Client\Model\GetMandateActionsResolutionEventDto
    {
        return $this->container['resolution_event'];
    }

    /**
     * Sets resolution_event
     *
     * @param \Shaype\Client\Model\GetMandateActionsResolutionEventDto|null $resolution_event resolution_event
     *
     * @return $this
     */
    public function setResolutionEvent(?\Shaype\Client\Model\GetMandateActionsResolutionEventDto $resolution_event): static
    {
        if (is_null($resolution_event)) {
            throw new InvalidArgumentException('non-nullable resolution_event cannot be null');
        }
        $this->container['resolution_event'] = $resolution_event;

        return $this;
    }

    /**
     * Gets resolution_requested_by
     *
     * @return string|null
     */
    public function getResolutionRequestedBy(): ?string
    {
        return $this->container['resolution_requested_by'];
    }

    /**
     * Sets resolution_requested_by
     *
     * @param string|null $resolution_requested_by Optional time used to indicate by when resolution of a bilateral action is requested from the other party to the mandate. This time is for informational purposes only and does not affect the expiry time imposed by the MMS.
     *
     * @return $this
     */
    public function setResolutionRequestedBy(?string $resolution_requested_by): static
    {
        if (is_null($resolution_requested_by)) {
            throw new InvalidArgumentException('non-nullable resolution_requested_by cannot be null');
        }

        if ((!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", ObjectSerializer::toString($resolution_requested_by)))) {
            throw new InvalidArgumentException("invalid value for \$resolution_requested_by when calling GetMandateActionsActionDto., must conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.");
        }

        $this->container['resolution_requested_by'] = $resolution_requested_by;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the action performed on the mandate. Enumeration of the states that a mandate action can have: * **COMPLETED**: This status represents the following situations:             * A bilateral action that has been confirmed.             * A unilateral action has been performed.             * A port that has been finalised. * **DECLINED**: Action has been declined. * **PENDING**: This status represents the following situations:             * A bilateral action that is waiting to be confirmed.             * A porting action that has been initiated and is waiting to be finalised. * **RECALLED**: Action has been recalled. * **TIMED_OUT**: TimedOut - Action was created bilaterally and has now timed out.
     *
     * @return $this
     */
    public function setStatus(string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of action performed on the mandate. Enumeration of all mandate action types: * **AMEND**: Mandate amendment. * **CREATE**: Mandate creation. * **PORT**: Mandate porting. * **STATUS_CHANGE**: Mandate status change.
     *
     * @return $this
     */
    public function setType(string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


