<?php
/**
 * Stack
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
 * Stack Class Doc Comment
 *
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Stack implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Stack';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'account_hay_id' => 'string',
        'balance' => 'float',
        'closed_at_utc' => '\DateTime',
        'created_at_utc' => '\DateTime',
        'hay_id' => 'string',
        'image_url' => 'string',
        'name' => 'string',
        'status' => 'string',
        'target_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'account_hay_id' => 'uuid',
        'balance' => null,
        'closed_at_utc' => 'date-time',
        'created_at_utc' => 'date-time',
        'hay_id' => 'uuid',
        'image_url' => null,
        'name' => null,
        'status' => null,
        'target_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'account_hay_id' => false,
        'balance' => false,
        'closed_at_utc' => false,
        'created_at_utc' => false,
        'hay_id' => false,
        'image_url' => false,
        'name' => false,
        'status' => false,
        'target_amount' => false
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
        'account_hay_id' => 'accountHayId',
        'balance' => 'balance',
        'closed_at_utc' => 'closedAtUtc',
        'created_at_utc' => 'createdAtUtc',
        'hay_id' => 'hayId',
        'image_url' => 'imageUrl',
        'name' => 'name',
        'status' => 'status',
        'target_amount' => 'targetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'account_hay_id' => 'setAccountHayId',
        'balance' => 'setBalance',
        'closed_at_utc' => 'setClosedAtUtc',
        'created_at_utc' => 'setCreatedAtUtc',
        'hay_id' => 'setHayId',
        'image_url' => 'setImageUrl',
        'name' => 'setName',
        'status' => 'setStatus',
        'target_amount' => 'setTargetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'account_hay_id' => 'getAccountHayId',
        'balance' => 'getBalance',
        'closed_at_utc' => 'getClosedAtUtc',
        'created_at_utc' => 'getCreatedAtUtc',
        'hay_id' => 'getHayId',
        'image_url' => 'getImageUrl',
        'name' => 'getName',
        'status' => 'getStatus',
        'target_amount' => 'getTargetAmount'
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

    public const STATUS_OPEN = 'OPEN';
    public const STATUS_CLOSED = 'CLOSED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
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
        $this->setIfExists('account_hay_id', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('closed_at_utc', $data ?? [], null);
        $this->setIfExists('created_at_utc', $data ?? [], null);
        $this->setIfExists('hay_id', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('target_amount', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets account_hay_id
     *
     * @return string|null
     */
    public function getAccountHayId(): ?string
    {
        return $this->container['account_hay_id'];
    }

    /**
     * Sets account_hay_id
     *
     * @param string|null $account_hay_id account_hay_id
     *
     * @return $this
     */
    public function setAccountHayId(?string $account_hay_id): static
    {
        if (is_null($account_hay_id)) {
            throw new InvalidArgumentException('non-nullable account_hay_id cannot be null');
        }
        $this->container['account_hay_id'] = $account_hay_id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return $this
     */
    public function setBalance(?float $balance): static
    {
        if (is_null($balance)) {
            throw new InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets closed_at_utc
     *
     * @return \DateTime|null
     */
    public function getClosedAtUtc(): ?\DateTime
    {
        return $this->container['closed_at_utc'];
    }

    /**
     * Sets closed_at_utc
     *
     * @param \DateTime|null $closed_at_utc closed_at_utc
     *
     * @return $this
     */
    public function setClosedAtUtc(?\DateTime $closed_at_utc): static
    {
        if (is_null($closed_at_utc)) {
            throw new InvalidArgumentException('non-nullable closed_at_utc cannot be null');
        }
        $this->container['closed_at_utc'] = $closed_at_utc;

        return $this;
    }

    /**
     * Gets created_at_utc
     *
     * @return \DateTime|null
     */
    public function getCreatedAtUtc(): ?\DateTime
    {
        return $this->container['created_at_utc'];
    }

    /**
     * Sets created_at_utc
     *
     * @param \DateTime|null $created_at_utc created_at_utc
     *
     * @return $this
     */
    public function setCreatedAtUtc(?\DateTime $created_at_utc): static
    {
        if (is_null($created_at_utc)) {
            throw new InvalidArgumentException('non-nullable created_at_utc cannot be null');
        }
        $this->container['created_at_utc'] = $created_at_utc;

        return $this;
    }

    /**
     * Gets hay_id
     *
     * @return string|null
     */
    public function getHayId(): ?string
    {
        return $this->container['hay_id'];
    }

    /**
     * Sets hay_id
     *
     * @param string|null $hay_id hay_id
     *
     * @return $this
     */
    public function setHayId(?string $hay_id): static
    {
        if (is_null($hay_id)) {
            throw new InvalidArgumentException('non-nullable hay_id cannot be null');
        }
        $this->container['hay_id'] = $hay_id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl(?string $image_url): static
    {
        if (is_null($image_url)) {
            throw new InvalidArgumentException('non-nullable image_url cannot be null');
        }
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus(?string $status): static
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
     * Gets target_amount
     *
     * @return float|null
     */
    public function getTargetAmount(): ?float
    {
        return $this->container['target_amount'];
    }

    /**
     * Sets target_amount
     *
     * @param float|null $target_amount target_amount
     *
     * @return $this
     */
    public function setTargetAmount(?float $target_amount): static
    {
        if (is_null($target_amount)) {
            throw new InvalidArgumentException('non-nullable target_amount cannot be null');
        }
        $this->container['target_amount'] = $target_amount;

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


