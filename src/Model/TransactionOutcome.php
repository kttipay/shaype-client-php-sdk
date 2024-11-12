<?php
/**
 * TransactionOutcome
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
 * TransactionOutcome Class Doc Comment
 *
 * @description Transaction outcome details
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TransactionOutcome implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TransactionOutcome';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'outcome' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'outcome' => null,
        'transaction_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'outcome' => false,
        'transaction_id' => false
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
        'outcome' => 'outcome',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'outcome' => 'setOutcome',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'outcome' => 'getOutcome',
        'transaction_id' => 'getTransactionId'
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

    public const OUTCOME_ACCEPTED = 'ACCEPTED';
    public const OUTCOME_INTERNAL_ERROR = 'INTERNAL_ERROR';
    public const OUTCOME_REFUSED_LIMIT_BREACH = 'REFUSED_LIMIT_BREACH';
    public const OUTCOME_REFUSED_FRAUD = 'REFUSED_FRAUD';
    public const OUTCOME_REFUSED_CUSTOMER_PREFERENCE = 'REFUSED_CUSTOMER_PREFERENCE';
    public const OUTCOME_REFUSED_INSUFFICIENT_FUNDS = 'REFUSED_INSUFFICIENT_FUNDS';
    public const OUTCOME_REFUSED_ACCOUNT_BLOCKED = 'REFUSED_ACCOUNT_BLOCKED';
    public const OUTCOME_REFUSED_RECIPIENT_ACCOUNT_BLOCKED = 'REFUSED_RECIPIENT_ACCOUNT_BLOCKED';
    public const OUTCOME_REFUSED_ACCOUNT_CLOSED = 'REFUSED_ACCOUNT_CLOSED';
    public const OUTCOME_REFUSED_RECIPIENT_ACCOUNT_CLOSED = 'REFUSED_RECIPIENT_ACCOUNT_CLOSED';
    public const OUTCOME_REFUSED_INVALID_PAY_ID = 'REFUSED_INVALID_PAY_ID';
    public const OUTCOME_UNKNOWN = 'UNKNOWN';
    public const OUTCOME_REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED = 'REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED';
    public const OUTCOME_REFUSED_MAX_BALANCE_EXCEEDED = 'REFUSED_MAX_BALANCE_EXCEEDED';
    public const OUTCOME_REFUSED_TOTAL_INBOUND_DIRECT_DEBIT_DAILY_LIMIT_BREACHED = 'REFUSED_TOTAL_INBOUND_DIRECT_DEBIT_DAILY_LIMIT_BREACHED';
    public const OUTCOME_REFUSED_TOTAL_OUTBOUND_BPAY_DAILY_LIMIT_BREACHED = 'REFUSED_TOTAL_OUTBOUND_BPAY_DAILY_LIMIT_BREACHED';
    public const OUTCOME_REFUSED_TOTAL_NET_VISA_DAILY_LIMIT_BREACHED = 'REFUSED_TOTAL_NET_VISA_DAILY_LIMIT_BREACHED';
    public const OUTCOME_REFUSED_TOTAL_NON_SCHEME_DAILY_LIMIT_BREACHED = 'REFUSED_TOTAL_NON_SCHEME_DAILY_LIMIT_BREACHED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutcomeAllowableValues()
    {
        return [
            self::OUTCOME_ACCEPTED,
            self::OUTCOME_INTERNAL_ERROR,
            self::OUTCOME_REFUSED_LIMIT_BREACH,
            self::OUTCOME_REFUSED_FRAUD,
            self::OUTCOME_REFUSED_CUSTOMER_PREFERENCE,
            self::OUTCOME_REFUSED_INSUFFICIENT_FUNDS,
            self::OUTCOME_REFUSED_ACCOUNT_BLOCKED,
            self::OUTCOME_REFUSED_RECIPIENT_ACCOUNT_BLOCKED,
            self::OUTCOME_REFUSED_ACCOUNT_CLOSED,
            self::OUTCOME_REFUSED_RECIPIENT_ACCOUNT_CLOSED,
            self::OUTCOME_REFUSED_INVALID_PAY_ID,
            self::OUTCOME_UNKNOWN,
            self::OUTCOME_REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED,
            self::OUTCOME_REFUSED_MAX_BALANCE_EXCEEDED,
            self::OUTCOME_REFUSED_TOTAL_INBOUND_DIRECT_DEBIT_DAILY_LIMIT_BREACHED,
            self::OUTCOME_REFUSED_TOTAL_OUTBOUND_BPAY_DAILY_LIMIT_BREACHED,
            self::OUTCOME_REFUSED_TOTAL_NET_VISA_DAILY_LIMIT_BREACHED,
            self::OUTCOME_REFUSED_TOTAL_NON_SCHEME_DAILY_LIMIT_BREACHED,
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
        $this->setIfExists('outcome', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
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

        $allowedValues = $this->getOutcomeAllowableValues();
        if (!is_null($this->container['outcome']) && !in_array($this->container['outcome'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'outcome', must be one of '%s'",
                $this->container['outcome'],
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
     * Gets outcome
     *
     * @return string|null
     */
    public function getOutcome(): ?string
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string|null $outcome Transaction outcome. Possible values:  * **ACCEPTED**  * **INTERNAL_ERROR**  * **REFUSED_ACCOUNT_BLOCKED**  * **REFUSED_CUSTOMER_PREFERENCE**  * **REFUSED_DAILY_TRANSFERS_OUT_LIMIT_BREACHED**  * **REFUSED_FRAUD**  * **REFUSED_INSUFFICIENT_FUNDS**  * **REFUSED_INVALID_PAY_ID**  * **REFUSED_LIMIT_BREACH**  * **REFUSED_MAX_BALANCE_EXCEEDED**  * **REFUSED_RECIPIENT_ACCOUNT_BLOCKED**  * **REFUSED_ACCOUNT_CLOSED**  * **REFUSED_RECIPIENT_ACCOUNT_CLOSED**  * **REFUSED_TOTAL_INBOUND_DIRECT_DEBIT_DAILY_LIMIT_BREACHED**  * **REFUSED_TOTAL_OUTBOUND_BPAY_DAILY_LIMIT_BREACHED**  * **REFUSED_TOTAL_NET_VISA_DAILY_LIMIT_BREACHED**  * **REFUSED_TOTAL_NON_SCHEME_DAILY_LIMIT_BREACHED**  * **UNKNOWN**
     *
     * @return $this
     */
    public function setOutcome(?string $outcome): static
    {
        if (is_null($outcome)) {
            throw new InvalidArgumentException('non-nullable outcome cannot be null');
        }
        $allowedValues = $this->getOutcomeAllowableValues();
        if (!in_array($outcome, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'outcome', must be one of '%s'",
                    $outcome,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Unique identifier (UUID) of the Transaction
     *
     * @return $this
     */
    public function setTransactionId(?string $transaction_id): static
    {
        if (is_null($transaction_id)) {
            throw new InvalidArgumentException('non-nullable transaction_id cannot be null');
        }
        $this->container['transaction_id'] = $transaction_id;

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


