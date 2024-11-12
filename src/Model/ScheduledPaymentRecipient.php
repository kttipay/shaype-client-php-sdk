<?php
/**
 * ScheduledPaymentRecipient
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
 * ScheduledPaymentRecipient Class Doc Comment
 *
 * @description Details of the scheduled payment recipient
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ScheduledPaymentRecipient implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ScheduledPaymentRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'bpay_details' => '\Shaype\Client\Model\BpayDetails',
        'recipient_account_number' => '\Shaype\Client\Model\BasicAccountNumber',
        'recipient_name' => 'string',
        'recipient_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'bpay_details' => null,
        'recipient_account_number' => null,
        'recipient_name' => null,
        'recipient_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'bpay_details' => false,
        'recipient_account_number' => false,
        'recipient_name' => false,
        'recipient_type' => false
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
        'bpay_details' => 'bpayDetails',
        'recipient_account_number' => 'recipientAccountNumber',
        'recipient_name' => 'recipientName',
        'recipient_type' => 'recipientType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'bpay_details' => 'setBpayDetails',
        'recipient_account_number' => 'setRecipientAccountNumber',
        'recipient_name' => 'setRecipientName',
        'recipient_type' => 'setRecipientType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'bpay_details' => 'getBpayDetails',
        'recipient_account_number' => 'getRecipientAccountNumber',
        'recipient_name' => 'getRecipientName',
        'recipient_type' => 'getRecipientType'
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

    public const RECIPIENT_TYPE_ACCOUNT = 'ACCOUNT';
    public const RECIPIENT_TYPE_BPAY = 'BPAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_ACCOUNT,
            self::RECIPIENT_TYPE_BPAY,
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
        $this->setIfExists('bpay_details', $data ?? [], null);
        $this->setIfExists('recipient_account_number', $data ?? [], null);
        $this->setIfExists('recipient_name', $data ?? [], null);
        $this->setIfExists('recipient_type', $data ?? [], null);
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

        $allowedValues = $this->getRecipientTypeAllowableValues();
        if (!is_null($this->container['recipient_type']) && !in_array($this->container['recipient_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recipient_type', must be one of '%s'",
                $this->container['recipient_type'],
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
     * Gets bpay_details
     *
     * @return \Shaype\Client\Model\BpayDetails|null
     */
    public function getBpayDetails(): ?\Shaype\Client\Model\BpayDetails
    {
        return $this->container['bpay_details'];
    }

    /**
     * Sets bpay_details
     *
     * @param \Shaype\Client\Model\BpayDetails|null $bpay_details bpay_details
     *
     * @return $this
     */
    public function setBpayDetails(?\Shaype\Client\Model\BpayDetails $bpay_details): static
    {
        if (is_null($bpay_details)) {
            throw new InvalidArgumentException('non-nullable bpay_details cannot be null');
        }
        $this->container['bpay_details'] = $bpay_details;

        return $this;
    }

    /**
     * Gets recipient_account_number
     *
     * @return \Shaype\Client\Model\BasicAccountNumber|null
     */
    public function getRecipientAccountNumber(): ?\Shaype\Client\Model\BasicAccountNumber
    {
        return $this->container['recipient_account_number'];
    }

    /**
     * Sets recipient_account_number
     *
     * @param \Shaype\Client\Model\BasicAccountNumber|null $recipient_account_number recipient_account_number
     *
     * @return $this
     */
    public function setRecipientAccountNumber(?\Shaype\Client\Model\BasicAccountNumber $recipient_account_number): static
    {
        if (is_null($recipient_account_number)) {
            throw new InvalidArgumentException('non-nullable recipient_account_number cannot be null');
        }
        $this->container['recipient_account_number'] = $recipient_account_number;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string|null $recipient_name Name of Account receiving the transfer
     *
     * @return $this
     */
    public function setRecipientName(?string $recipient_name): static
    {
        if (is_null($recipient_name)) {
            throw new InvalidArgumentException('non-nullable recipient_name cannot be null');
        }
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets recipient_type
     *
     * @return string|null
     */
    public function getRecipientType(): ?string
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     *
     * @param string|null $recipient_type Recipient type. Possible values:  * **ACCOUNT**: The recipient of the Scheduled Payment is an another cash Account, payment sent as cash transfer   * **BPAY**: The recipient of the Scheduled Payment is a BPAY Biller, payment sent as BPAY payment
     *
     * @return $this
     */
    public function setRecipientType(?string $recipient_type): static
    {
        if (is_null($recipient_type)) {
            throw new InvalidArgumentException('non-nullable recipient_type cannot be null');
        }
        $allowedValues = $this->getRecipientTypeAllowableValues();
        if (!in_array($recipient_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recipient_type', must be one of '%s'",
                    $recipient_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recipient_type'] = $recipient_type;

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


