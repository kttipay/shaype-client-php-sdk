<?php
/**
 * DirectDebitResponseV1
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * DirectDebitResponseV1 Class Doc Comment
 *
 * @description Response of a request to create outbound Direct Debit instruction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DirectDebitResponseV1 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DirectDebitResponseV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'details' => 'string',
        'outcome' => 'string',
        'trace_id' => 'string',
        'transaction_details' => '\OpenAPI\Client\Model\DeTransactionDetailsV1',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'details' => null,
        'outcome' => null,
        'trace_id' => null,
        'transaction_details' => null,
        'transaction_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'details' => false,
        'outcome' => false,
        'trace_id' => false,
        'transaction_details' => false,
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
        'details' => 'details',
        'outcome' => 'outcome',
        'trace_id' => 'traceId',
        'transaction_details' => 'transactionDetails',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'details' => 'setDetails',
        'outcome' => 'setOutcome',
        'trace_id' => 'setTraceId',
        'transaction_details' => 'setTransactionDetails',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'details' => 'getDetails',
        'outcome' => 'getOutcome',
        'trace_id' => 'getTraceId',
        'transaction_details' => 'getTransactionDetails',
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

    public const OUTCOME_RECEIVED = 'RECEIVED';
    public const OUTCOME_ACCEPTED = 'ACCEPTED';
    public const OUTCOME_REJECTED = 'REJECTED';
    public const OUTCOME_SUBMITTED = 'SUBMITTED';
    public const OUTCOME_RETURNED = 'RETURNED';
    public const OUTCOME_COMPLETE = 'COMPLETE';
    public const OUTCOME_INCOMPLETE = 'INCOMPLETE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutcomeAllowableValues()
    {
        return [
            self::OUTCOME_RECEIVED,
            self::OUTCOME_ACCEPTED,
            self::OUTCOME_REJECTED,
            self::OUTCOME_SUBMITTED,
            self::OUTCOME_RETURNED,
            self::OUTCOME_COMPLETE,
            self::OUTCOME_INCOMPLETE,
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
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('outcome', $data ?? [], null);
        $this->setIfExists('trace_id', $data ?? [], null);
        $this->setIfExists('transaction_details', $data ?? [], null);
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

        if ($this->container['outcome'] === null) {
            $invalidProperties[] = "'outcome' can't be null";
        }
        $allowedValues = $this->getOutcomeAllowableValues();
        if (!is_null($this->container['outcome']) && !in_array($this->container['outcome'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'outcome', must be one of '%s'",
                $this->container['outcome'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
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
     * Gets details
     *
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details Details of the outbound Direct Debit transfer
     *
     * @return $this
     */
    public function setDetails(?string $details): static
    {
        if (is_null($details)) {
            throw new InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string $outcome Status of the Direct Debits. Possible values:  * **RECEIVED**: Direct Debit request received for processing  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit request failed validation or authorization and can't be executed  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit request failed and was returned from the recipient financial institution. This direct debit cannot be executed  * **COMPLETE**: Direct Debit request was successful and customer account credited successfully  * **INCOMPLETE**: Direct Debit request was successful, but customer account crediting failed
     *
     * @return $this
     */
    public function setOutcome(string $outcome): static
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
     * Gets trace_id
     *
     * @return string|null
     */
    public function getTraceId(): ?string
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string|null $trace_id Unique identifier (UUID) of the request used by Shaype to troubleshoot
     *
     * @return $this
     */
    public function setTraceId(?string $trace_id): static
    {
        if (is_null($trace_id)) {
            throw new InvalidArgumentException('non-nullable trace_id cannot be null');
        }
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets transaction_details
     *
     * @return \OpenAPI\Client\Model\DeTransactionDetailsV1|null
     */
    public function getTransactionDetails(): ?\OpenAPI\Client\Model\DeTransactionDetailsV1
    {
        return $this->container['transaction_details'];
    }

    /**
     * Sets transaction_details
     *
     * @param \OpenAPI\Client\Model\DeTransactionDetailsV1|null $transaction_details transaction_details
     *
     * @return $this
     */
    public function setTransactionDetails(?\OpenAPI\Client\Model\DeTransactionDetailsV1 $transaction_details): static
    {
        if (is_null($transaction_details)) {
            throw new InvalidArgumentException('non-nullable transaction_details cannot be null');
        }
        $this->container['transaction_details'] = $transaction_details;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Unique identifier (UUID) of the Transaction
     *
     * @return $this
     */
    public function setTransactionId(string $transaction_id): static
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


