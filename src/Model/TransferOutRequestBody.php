<?php
/**
 * TransferOutRequestBody
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
 * Generator version: 7.6.0
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
 * TransferOutRequestBody Class Doc Comment
 *
 * @description Body of a request to execute a transfer
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TransferOutRequestBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TransferOutRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'account_transfer' => '\Shaype\Client\Model\AccountTransfer',
        'amount' => 'float',
        'category' => 'string',
        'description' => 'string',
        'idempotency_key' => 'string',
        'internal_transfer' => '\Shaype\Client\Model\InternalTransfer',
        'pay_id_transfer' => '\Shaype\Client\Model\PayIdTransfer',
        'reference' => 'string',
        'sender_customer_hay_id' => 'string',
        'transfer_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'account_transfer' => null,
        'amount' => null,
        'category' => null,
        'description' => null,
        'idempotency_key' => 'uuid',
        'internal_transfer' => null,
        'pay_id_transfer' => null,
        'reference' => null,
        'sender_customer_hay_id' => 'uuid',
        'transfer_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'account_transfer' => false,
        'amount' => false,
        'category' => false,
        'description' => false,
        'idempotency_key' => false,
        'internal_transfer' => false,
        'pay_id_transfer' => false,
        'reference' => false,
        'sender_customer_hay_id' => false,
        'transfer_type' => false
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
        'account_transfer' => 'accountTransfer',
        'amount' => 'amount',
        'category' => 'category',
        'description' => 'description',
        'idempotency_key' => 'idempotencyKey',
        'internal_transfer' => 'internalTransfer',
        'pay_id_transfer' => 'payIdTransfer',
        'reference' => 'reference',
        'sender_customer_hay_id' => 'senderCustomerHayId',
        'transfer_type' => 'transferType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'account_transfer' => 'setAccountTransfer',
        'amount' => 'setAmount',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'idempotency_key' => 'setIdempotencyKey',
        'internal_transfer' => 'setInternalTransfer',
        'pay_id_transfer' => 'setPayIdTransfer',
        'reference' => 'setReference',
        'sender_customer_hay_id' => 'setSenderCustomerHayId',
        'transfer_type' => 'setTransferType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'account_transfer' => 'getAccountTransfer',
        'amount' => 'getAmount',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'idempotency_key' => 'getIdempotencyKey',
        'internal_transfer' => 'getInternalTransfer',
        'pay_id_transfer' => 'getPayIdTransfer',
        'reference' => 'getReference',
        'sender_customer_hay_id' => 'getSenderCustomerHayId',
        'transfer_type' => 'getTransferType'
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

    public const TRANSFER_TYPE_ACCOUNT = 'ACCOUNT';
    public const TRANSFER_TYPE_INTERNAL = 'INTERNAL';
    public const TRANSFER_TYPE_PAY_ID = 'PAY_ID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransferTypeAllowableValues()
    {
        return [
            self::TRANSFER_TYPE_ACCOUNT,
            self::TRANSFER_TYPE_INTERNAL,
            self::TRANSFER_TYPE_PAY_ID,
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
        $this->setIfExists('account_transfer', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('idempotency_key', $data ?? [], null);
        $this->setIfExists('internal_transfer', $data ?? [], null);
        $this->setIfExists('pay_id_transfer', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('sender_customer_hay_id', $data ?? [], null);
        $this->setIfExists('transfer_type', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 35)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['sender_customer_hay_id'] === null) {
            $invalidProperties[] = "'sender_customer_hay_id' can't be null";
        }
        if ($this->container['transfer_type'] === null) {
            $invalidProperties[] = "'transfer_type' can't be null";
        }
        $allowedValues = $this->getTransferTypeAllowableValues();
        if (!is_null($this->container['transfer_type']) && !in_array($this->container['transfer_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transfer_type', must be one of '%s'",
                $this->container['transfer_type'],
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
     * Gets account_transfer
     *
     * @return \Shaype\Client\Model\AccountTransfer|null
     */
    public function getAccountTransfer(): ?\Shaype\Client\Model\AccountTransfer
    {
        return $this->container['account_transfer'];
    }

    /**
     * Sets account_transfer
     *
     * @param \Shaype\Client\Model\AccountTransfer|null $account_transfer account_transfer
     *
     * @return $this
     */
    public function setAccountTransfer(?\Shaype\Client\Model\AccountTransfer $account_transfer): static
    {
        if (is_null($account_transfer)) {
            throw new InvalidArgumentException('non-nullable account_transfer cannot be null');
        }
        $this->container['account_transfer'] = $account_transfer;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount to be transferred
     *
     * @return $this
     */
    public function setAmount(float $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 0)) {
            throw new InvalidArgumentException('invalid value for $amount when calling TransferOutRequestBody., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Used to assign a category of the transfer
     *
     * @return $this
     */
    public function setCategory(?string $category): static
    {
        if (is_null($category)) {
            throw new InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Transfer description, will be seen by both sender and recipient
     *
     * @return $this
     */
    public function setDescription(string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 255)) {
            throw new InvalidArgumentException('invalid length for $description when calling TransferOutRequestBody., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new InvalidArgumentException('invalid length for $description when calling TransferOutRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string|null
     */
    public function getIdempotencyKey(): ?string
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string|null $idempotency_key Unique value (UUID) used to identify this request and used to recognise any subsequent retries
     *
     * @return $this
     */
    public function setIdempotencyKey(?string $idempotency_key): static
    {
        if (is_null($idempotency_key)) {
            throw new InvalidArgumentException('non-nullable idempotency_key cannot be null');
        }
        $this->container['idempotency_key'] = $idempotency_key;

        return $this;
    }

    /**
     * Gets internal_transfer
     *
     * @return \Shaype\Client\Model\InternalTransfer|null
     */
    public function getInternalTransfer(): ?\Shaype\Client\Model\InternalTransfer
    {
        return $this->container['internal_transfer'];
    }

    /**
     * Sets internal_transfer
     *
     * @param \Shaype\Client\Model\InternalTransfer|null $internal_transfer internal_transfer
     *
     * @return $this
     */
    public function setInternalTransfer(?\Shaype\Client\Model\InternalTransfer $internal_transfer): static
    {
        if (is_null($internal_transfer)) {
            throw new InvalidArgumentException('non-nullable internal_transfer cannot be null');
        }
        $this->container['internal_transfer'] = $internal_transfer;

        return $this;
    }

    /**
     * Gets pay_id_transfer
     *
     * @return \Shaype\Client\Model\PayIdTransfer|null
     */
    public function getPayIdTransfer(): ?\Shaype\Client\Model\PayIdTransfer
    {
        return $this->container['pay_id_transfer'];
    }

    /**
     * Sets pay_id_transfer
     *
     * @param \Shaype\Client\Model\PayIdTransfer|null $pay_id_transfer pay_id_transfer
     *
     * @return $this
     */
    public function setPayIdTransfer(?\Shaype\Client\Model\PayIdTransfer $pay_id_transfer): static
    {
        if (is_null($pay_id_transfer)) {
            throw new InvalidArgumentException('non-nullable pay_id_transfer cannot be null');
        }
        $this->container['pay_id_transfer'] = $pay_id_transfer;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Reference to be included with the transfer
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 35)) {
            throw new InvalidArgumentException('invalid length for $reference when calling TransferOutRequestBody., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($reference) < 0)) {
            throw new InvalidArgumentException('invalid length for $reference when calling TransferOutRequestBody., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets sender_customer_hay_id
     *
     * @return string
     */
    public function getSenderCustomerHayId(): string
    {
        return $this->container['sender_customer_hay_id'];
    }

    /**
     * Sets sender_customer_hay_id
     *
     * @param string $sender_customer_hay_id Unique identifier (UUID) of the Customer (initiator of the transfer)
     *
     * @return $this
     */
    public function setSenderCustomerHayId(string $sender_customer_hay_id): static
    {
        if (is_null($sender_customer_hay_id)) {
            throw new InvalidArgumentException('non-nullable sender_customer_hay_id cannot be null');
        }
        $this->container['sender_customer_hay_id'] = $sender_customer_hay_id;

        return $this;
    }

    /**
     * Gets transfer_type
     *
     * @return string
     */
    public function getTransferType(): string
    {
        return $this->container['transfer_type'];
    }

    /**
     * Sets transfer_type
     *
     * @param string $transfer_type Transfer type. Possible values:  * **ACCOUNT**: Transfer to Account using bank account details (requires accountTransfer object to be provided)  * **INTERNAL**: Transfer to Account using AccountID, where recipient also Client's Customer with Shaype (requires internalTransfer object to be provided)  * **PAY_ID**: Transfer to Account using PayID (requires payIdTransfer object to be provided)
     *
     * @return $this
     */
    public function setTransferType(string $transfer_type): static
    {
        if (is_null($transfer_type)) {
            throw new InvalidArgumentException('non-nullable transfer_type cannot be null');
        }
        $allowedValues = $this->getTransferTypeAllowableValues();
        if (!in_array($transfer_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transfer_type', must be one of '%s'",
                    $transfer_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transfer_type'] = $transfer_type;

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


