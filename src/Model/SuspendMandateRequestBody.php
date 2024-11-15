<?php
/**
 * SuspendMandateRequestBody
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
 * SuspendMandateRequestBody Class Doc Comment
 *
 * @description Body of a request to suspend mandate
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SuspendMandateRequestBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SuspendMandateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reason_code' => 'string',
        'reason_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reason_code' => null,
        'reason_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reason_code' => false,
        'reason_description' => false
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
        'reason_description' => 'reasonDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'reason_code' => 'setReasonCode',
        'reason_description' => 'setReasonDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'reason_code' => 'getReasonCode',
        'reason_description' => 'getReasonDescription'
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

    public const REASON_CODE_AC02 = 'AC02';
    public const REASON_CODE_AC04 = 'AC04';
    public const REASON_CODE_AC05 = 'AC05';
    public const REASON_CODE_AC06 = 'AC06';
    public const REASON_CODE_AC13 = 'AC13';
    public const REASON_CODE_AG01 = 'AG01';
    public const REASON_CODE_AG03 = 'AG03';
    public const REASON_CODE_AM03 = 'AM03';
    public const REASON_CODE_AM12 = 'AM12';
    public const REASON_CODE_AM14 = 'AM14';
    public const REASON_CODE_CTAM = 'CTAM';
    public const REASON_CODE_CTCA = 'CTCA';
    public const REASON_CODE_CTEX = 'CTEX';
    public const REASON_CODE_MCFC = 'MCFC';
    public const REASON_CODE_MCOC = 'MCOC';
    public const REASON_CODE_MD07 = 'MD07';
    public const REASON_CODE_MD08 = 'MD08';
    public const REASON_CODE_MD09 = 'MD09';
    public const REASON_CODE_MD16 = 'MD16';
    public const REASON_CODE_MD17 = 'MD17';
    public const REASON_CODE_MD20 = 'MD20';
    public const REASON_CODE_MD21 = 'MD21';
    public const REASON_CODE_MS02 = 'MS02';
    public const REASON_CODE_MS03 = 'MS03';
    public const REASON_CODE_MSUC = 'MSUC';
    public const REASON_CODE_NARR = 'NARR';
    public const REASON_CODE_NOAS = 'NOAS';
    public const REASON_CODE_RR04 = 'RR04';
    public const REASON_CODE_SL01 = 'SL01';
    public const REASON_CODE_SL11 = 'SL11';
    public const REASON_CODE_SL12 = 'SL12';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        return [
            self::REASON_CODE_AC02,
            self::REASON_CODE_AC04,
            self::REASON_CODE_AC05,
            self::REASON_CODE_AC06,
            self::REASON_CODE_AC13,
            self::REASON_CODE_AG01,
            self::REASON_CODE_AG03,
            self::REASON_CODE_AM03,
            self::REASON_CODE_AM12,
            self::REASON_CODE_AM14,
            self::REASON_CODE_CTAM,
            self::REASON_CODE_CTCA,
            self::REASON_CODE_CTEX,
            self::REASON_CODE_MCFC,
            self::REASON_CODE_MCOC,
            self::REASON_CODE_MD07,
            self::REASON_CODE_MD08,
            self::REASON_CODE_MD09,
            self::REASON_CODE_MD16,
            self::REASON_CODE_MD17,
            self::REASON_CODE_MD20,
            self::REASON_CODE_MD21,
            self::REASON_CODE_MS02,
            self::REASON_CODE_MS03,
            self::REASON_CODE_MSUC,
            self::REASON_CODE_NARR,
            self::REASON_CODE_NOAS,
            self::REASON_CODE_RR04,
            self::REASON_CODE_SL01,
            self::REASON_CODE_SL11,
            self::REASON_CODE_SL12,
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
     * @param string|null $reason_code Mandate suspension reason code * **AC02**: Invalid Debtor account number. * **AC04**: Closed account number. * **AC05**: Closed Debtor account number. * **AC06**: Blocked account. * **AC13**: Invalid Debtor account type. * **AG01**: Transaction forbidden. * **AG03**: Transaction not supported. * **AM03**: Not allowed currency. * **AM12**: Invalid amount. * **AM14**: Amount exceeds agreed limit. * **CTAM**: Contract amended. * **CTCA**: Contract cancellation initiated by Debtor. * **CTEX**: Contract expired. * **MCFC**: Mandate suspended final collection. * **MCOC**: Mandate suspended once off collection. * **MD07**: End customer deceased. * **MD08**: No Mandate service by Agent. * **MD09**: No Mandate service on Customer. * **MD16**: Requested by Customer. * **MD17**: Requested by initiating party. * **MD20**: Mandate expired. * **MD21**: Mandate cancelled due to fraud. * **MS02**: Not specified reason Customer generated. * **MS03**: Not specified reason Agent generated. * **MSUC**: Mandate suspended after 7 consecutive unsuccessful collections. * **NARR**: Narrative. * **NOAS**: No answer from Customer. * **RR04**: Regulatory reason. * **SL01**: Specific service offered by Debtor Agent. * **SL11**: Creditor not on whitelist of Debtor. * **SL12**: Creditor on blacklist of Debtor.
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
     * @param string|null $reason_description Mandate suspension reason description.
     *
     * @return $this
     */
    public function setReasonDescription(?string $reason_description): static
    {
        if (is_null($reason_description)) {
            throw new InvalidArgumentException('non-nullable reason_description cannot be null');
        }
        $this->container['reason_description'] = $reason_description;

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


