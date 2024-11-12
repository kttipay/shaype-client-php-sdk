<?php
/**
 * InternalTransfer
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
 * InternalTransfer Class Doc Comment
 *
 * @description Details of a transfer to Account using AccountID
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InternalTransfer implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InternalTransfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'recipient_account_hay_id' => 'string',
        'recipient_name' => 'string',
        'sender_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'recipient_account_hay_id' => 'uuid',
        'recipient_name' => null,
        'sender_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'recipient_account_hay_id' => false,
        'recipient_name' => false,
        'sender_name' => false
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
        'recipient_account_hay_id' => 'recipientAccountHayId',
        'recipient_name' => 'recipientName',
        'sender_name' => 'senderName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'recipient_account_hay_id' => 'setRecipientAccountHayId',
        'recipient_name' => 'setRecipientName',
        'sender_name' => 'setSenderName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'recipient_account_hay_id' => 'getRecipientAccountHayId',
        'recipient_name' => 'getRecipientName',
        'sender_name' => 'getSenderName'
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
        $this->setIfExists('recipient_account_hay_id', $data ?? [], null);
        $this->setIfExists('recipient_name', $data ?? [], null);
        $this->setIfExists('sender_name', $data ?? [], null);
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

        if ($this->container['recipient_account_hay_id'] === null) {
            $invalidProperties[] = "'recipient_account_hay_id' can't be null";
        }
        if ($this->container['recipient_name'] === null) {
            $invalidProperties[] = "'recipient_name' can't be null";
        }
        if ((mb_strlen($this->container['recipient_name']) > 140)) {
            $invalidProperties[] = "invalid value for 'recipient_name', the character length must be smaller than or equal to 140.";
        }

        if ((mb_strlen($this->container['recipient_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sender_name'] === null) {
            $invalidProperties[] = "'sender_name' can't be null";
        }
        if ((mb_strlen($this->container['sender_name']) > 140)) {
            $invalidProperties[] = "invalid value for 'sender_name', the character length must be smaller than or equal to 140.";
        }

        if ((mb_strlen($this->container['sender_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'sender_name', the character length must be bigger than or equal to 1.";
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
     * Gets recipient_account_hay_id
     *
     * @return string
     */
    public function getRecipientAccountHayId(): string
    {
        return $this->container['recipient_account_hay_id'];
    }

    /**
     * Sets recipient_account_hay_id
     *
     * @param string $recipient_account_hay_id Unique identifier (UUID) of the Account (recipient of the transfer)
     *
     * @return $this
     */
    public function setRecipientAccountHayId(string $recipient_account_hay_id): static
    {
        if (is_null($recipient_account_hay_id)) {
            throw new InvalidArgumentException('non-nullable recipient_account_hay_id cannot be null');
        }
        $this->container['recipient_account_hay_id'] = $recipient_account_hay_id;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string
     */
    public function getRecipientName(): string
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string $recipient_name Name of Account receiving the transfer
     *
     * @return $this
     */
    public function setRecipientName(string $recipient_name): static
    {
        if (is_null($recipient_name)) {
            throw new InvalidArgumentException('non-nullable recipient_name cannot be null');
        }
        if ((mb_strlen($recipient_name) > 140)) {
            throw new InvalidArgumentException('invalid length for $recipient_name when calling InternalTransfer., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($recipient_name) < 1)) {
            throw new InvalidArgumentException('invalid length for $recipient_name when calling InternalTransfer., must be bigger than or equal to 1.');
        }

        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name Name of Account sending the transfer
     *
     * @return $this
     */
    public function setSenderName(string $sender_name): static
    {
        if (is_null($sender_name)) {
            throw new InvalidArgumentException('non-nullable sender_name cannot be null');
        }
        if ((mb_strlen($sender_name) > 140)) {
            throw new InvalidArgumentException('invalid length for $sender_name when calling InternalTransfer., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($sender_name) < 1)) {
            throw new InvalidArgumentException('invalid length for $sender_name when calling InternalTransfer., must be bigger than or equal to 1.');
        }

        $this->container['sender_name'] = $sender_name;

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


