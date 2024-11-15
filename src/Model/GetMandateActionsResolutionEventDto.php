<?php
/**
 * GetMandateActionsResolutionEventDto
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
 * GetMandateActionsResolutionEventDto Class Doc Comment
 *
 * @description Specification of the resolution event for a mandate action.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetMandateActionsResolutionEventDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetMandateActionsResolutionEventDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reason_code' => 'string',
        'reason_description' => 'string',
        'servicer_bic' => 'string',
        'sponsor_bic' => 'string',
        'time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reason_code' => null,
        'reason_description' => null,
        'servicer_bic' => null,
        'sponsor_bic' => null,
        'time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reason_code' => false,
        'reason_description' => false,
        'servicer_bic' => false,
        'sponsor_bic' => false,
        'time' => false
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
        'reason_code' => 'reasonCode',
        'reason_description' => 'reasonDescription',
        'servicer_bic' => 'servicerBic',
        'sponsor_bic' => 'sponsorBic',
        'time' => 'time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'reason_code' => 'setReasonCode',
        'reason_description' => 'setReasonDescription',
        'servicer_bic' => 'setServicerBic',
        'sponsor_bic' => 'setSponsorBic',
        'time' => 'setTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'reason_code' => 'getReasonCode',
        'reason_description' => 'getReasonDescription',
        'servicer_bic' => 'getServicerBic',
        'sponsor_bic' => 'getSponsorBic',
        'time' => 'getTime'
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

    public const REASON_CODE_AC02AC05AC06AC13AG01AG03AM03AM12AM14BE06MD09MD16MD21NOASRR04SL11SL12 = 'AC02,AC05,AC06,AC13,AG01,AG03,AM03,AM12,AM14,BE06,MD09,MD16,MD21,NOAS,RR04,SL11,SL12';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        return [
            self::REASON_CODE_AC02AC05AC06AC13AG01AG03AM03AM12AM14BE06MD09MD16MD21NOASRR04SL11SL12,
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
        $this->setIfExists('reason_code', $data ?? [], null);
        $this->setIfExists('reason_description', $data ?? [], null);
        $this->setIfExists('servicer_bic', $data ?? [], null);
        $this->setIfExists('sponsor_bic', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
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

        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($this->container['reason_code']) && !in_array($this->container['reason_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason_code', must be one of '%s'",
                $this->container['reason_code'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['reason_description']) && (mb_strlen($this->container['reason_description']) > 256)) {
            $invalidProperties[] = "invalid value for 'reason_description', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['reason_description']) && (mb_strlen($this->container['reason_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'reason_description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['servicer_bic']) && !preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/", $this->container['servicer_bic'])) {
            $invalidProperties[] = "invalid value for 'servicer_bic', must be conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/.";
        }

        if (!is_null($this->container['sponsor_bic']) && !preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/", $this->container['sponsor_bic'])) {
            $invalidProperties[] = "invalid value for 'sponsor_bic', must be conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/.";
        }

        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if (!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", $this->container['time'])) {
            $invalidProperties[] = "invalid value for 'time', must be conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.";
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
     * Gets reason_code
     *
     * @return string|null
     */
    public function getReasonCode(): ?string
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string|null $reason_code Bilateral action resolution reason code. This will only be present for a bilateral action. Specifies in coded form the chosen resolution of the action, as published in an external mandate status reason code set. Below are the possible values: * **AC02**: InvalidDebtorAccountNumber * **AC05**: ClosedDebtorAccountNumber * **AC06**: BlockedAccount * **AC13**: InvalidDebtorAccountType * **AG01**: TransactionForbidden * **AG03**: TransactionNotSupported * **AM03**: NotAllowedCurrency * **AM12**: InvalidAmount * **AM14**: AmountExceedsAgreedLimit * **BE06**: UnknownEndCustomer * **MD09**: NoMandateServiceOnCustomer * **MD16**: RequestedByCustomer * **MD21**: MandateCancelledDueToFraud * **NOAS**: NoAnswerFromCustomer * **RR04**: Regulatory Reason * **SL11**: Creditor not on Whitelist of Debtor * **SL12**: Creditor on Blacklist of Debtor
     *
     * @return $this
     */
    public function setReasonCode(?string $reason_code): static
    {
        if (is_null($reason_code)) {
            throw new InvalidArgumentException('non-nullable reason_code cannot be null');
        }
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!in_array($reason_code, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason_code', must be one of '%s'",
                    $reason_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets reason_description
     *
     * @return string|null
     */
    public function getReasonDescription(): ?string
    {
        return $this->container['reason_description'];
    }

    /**
     * Sets reason_description
     *
     * @param string|null $reason_description Description of the reason for the chosen resolution of the action. This will only be present for a bilateral action.
     *
     * @return $this
     */
    public function setReasonDescription(?string $reason_description): static
    {
        if (is_null($reason_description)) {
            throw new InvalidArgumentException('non-nullable reason_description cannot be null');
        }
        if ((mb_strlen($reason_description) > 256)) {
            throw new InvalidArgumentException('invalid length for $reason_description when calling GetMandateActionsResolutionEventDto., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($reason_description) < 1)) {
            throw new InvalidArgumentException('invalid length for $reason_description when calling GetMandateActionsResolutionEventDto., must be bigger than or equal to 1.');
        }

        $this->container['reason_description'] = $reason_description;

        return $this;
    }

    /**
     * Gets servicer_bic
     *
     * @return string|null
     */
    public function getServicerBic(): ?string
    {
        return $this->container['servicer_bic'];
    }

    /**
     * Sets servicer_bic
     *
     * @param string|null $servicer_bic Identification of the party who triggered the event on the action.
     *
     * @return $this
     */
    public function setServicerBic(?string $servicer_bic): static
    {
        if (is_null($servicer_bic)) {
            throw new InvalidArgumentException('non-nullable servicer_bic cannot be null');
        }

        if ((!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/", ObjectSerializer::toString($servicer_bic)))) {
            throw new InvalidArgumentException("invalid value for \$servicer_bic when calling GetMandateActionsResolutionEventDto., must conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/.");
        }

        $this->container['servicer_bic'] = $servicer_bic;

        return $this;
    }

    /**
     * Gets sponsor_bic
     *
     * @return string|null
     */
    public function getSponsorBic(): ?string
    {
        return $this->container['sponsor_bic'];
    }

    /**
     * Sets sponsor_bic
     *
     * @param string|null $sponsor_bic Identification of the agent that sponsors the servicer at the moment the event was triggered.
     *
     * @return $this
     */
    public function setSponsorBic(?string $sponsor_bic): static
    {
        if (is_null($sponsor_bic)) {
            throw new InvalidArgumentException('non-nullable sponsor_bic cannot be null');
        }

        if ((!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/", ObjectSerializer::toString($sponsor_bic)))) {
            throw new InvalidArgumentException("invalid value for \$sponsor_bic when calling GetMandateActionsResolutionEventDto., must conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}$/.");
        }

        $this->container['sponsor_bic'] = $sponsor_bic;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time Timestamp of when the event occurred on the mandate action. UTC expressed without offset, i.e. YYYY-MM-DDThh:mm:ss.sssZ
     *
     * @return $this
     */
    public function setTime(string $time): static
    {
        if (is_null($time)) {
            throw new InvalidArgumentException('non-nullable time cannot be null');
        }

        if ((!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/", ObjectSerializer::toString($time)))) {
            throw new InvalidArgumentException("invalid value for \$time when calling GetMandateActionsResolutionEventDto., must conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)T(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)$/.");
        }

        $this->container['time'] = $time;

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


