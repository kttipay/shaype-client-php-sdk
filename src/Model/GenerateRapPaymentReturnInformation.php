<?php
/**
 * GenerateRapPaymentReturnInformation
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
 * GenerateRapPaymentReturnInformation Class Doc Comment
 *
 * @description Encapsulates payment data for payment initiated by the payer directly into payee&#39;s account.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GenerateRapPaymentReturnInformation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenerateRapPaymentReturnInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'original_transaction_identification' => 'string',
        'return_amount' => 'string',
        'return_reason_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'original_transaction_identification' => null,
        'return_amount' => null,
        'return_reason_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'original_transaction_identification' => false,
        'return_amount' => false,
        'return_reason_code' => false
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
        'original_transaction_identification' => 'originalTransactionIdentification',
        'return_amount' => 'returnAmount',
        'return_reason_code' => 'returnReasonCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'original_transaction_identification' => 'setOriginalTransactionIdentification',
        'return_amount' => 'setReturnAmount',
        'return_reason_code' => 'setReturnReasonCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'original_transaction_identification' => 'getOriginalTransactionIdentification',
        'return_amount' => 'getReturnAmount',
        'return_reason_code' => 'getReturnReasonCode'
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
        $this->setIfExists('original_transaction_identification', $data ?? [], null);
        $this->setIfExists('return_amount', $data ?? [], null);
        $this->setIfExists('return_reason_code', $data ?? [], null);
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

        if (!is_null($this->container['original_transaction_identification']) && (mb_strlen($this->container['original_transaction_identification']) > 35)) {
            $invalidProperties[] = "invalid value for 'original_transaction_identification', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['original_transaction_identification']) && (mb_strlen($this->container['original_transaction_identification']) < 35)) {
            $invalidProperties[] = "invalid value for 'original_transaction_identification', the character length must be bigger than or equal to 35.";
        }

        if (!is_null($this->container['return_amount']) && !preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", $this->container['return_amount'])) {
            $invalidProperties[] = "invalid value for 'return_amount', must be conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.";
        }

        if (!is_null($this->container['return_reason_code']) && (mb_strlen($this->container['return_reason_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'return_reason_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['return_reason_code']) && (mb_strlen($this->container['return_reason_code']) < 4)) {
            $invalidProperties[] = "invalid value for 'return_reason_code', the character length must be bigger than or equal to 4.";
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
     * Gets original_transaction_identification
     *
     * @return string|null
     */
    public function getOriginalTransactionIdentification(): ?string
    {
        return $this->container['original_transaction_identification'];
    }

    /**
     * Sets original_transaction_identification
     *
     * @param string|null $original_transaction_identification Original payment transaction ID.  It will be present if a genuine response is received from BI.
     *
     * @return $this
     */
    public function setOriginalTransactionIdentification(?string $original_transaction_identification): static
    {
        if (is_null($original_transaction_identification)) {
            throw new InvalidArgumentException('non-nullable original_transaction_identification cannot be null');
        }
        if ((mb_strlen($original_transaction_identification) > 35)) {
            throw new InvalidArgumentException('invalid length for $original_transaction_identification when calling GenerateRapPaymentReturnInformation., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($original_transaction_identification) < 35)) {
            throw new InvalidArgumentException('invalid length for $original_transaction_identification when calling GenerateRapPaymentReturnInformation., must be bigger than or equal to 35.');
        }

        $this->container['original_transaction_identification'] = $original_transaction_identification;

        return $this;
    }

    /**
     * Gets return_amount
     *
     * @return string|null
     */
    public function getReturnAmount(): ?string
    {
        return $this->container['return_amount'];
    }

    /**
     * Sets return_amount
     *
     * @param string|null $return_amount Interbank settlement amount.  It will be present if a genuine response is received from BI.
     *
     * @return $this
     */
    public function setReturnAmount(?string $return_amount): static
    {
        if (is_null($return_amount)) {
            throw new InvalidArgumentException('non-nullable return_amount cannot be null');
        }

        if ((!preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", ObjectSerializer::toString($return_amount)))) {
            throw new InvalidArgumentException("invalid value for \$return_amount when calling GenerateRapPaymentReturnInformation., must conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.");
        }

        $this->container['return_amount'] = $return_amount;

        return $this;
    }

    /**
     * Gets return_reason_code
     *
     * @return string|null
     */
    public function getReturnReasonCode(): ?string
    {
        return $this->container['return_reason_code'];
    }

    /**
     * Sets return_reason_code
     *
     * @param string|null $return_reason_code Payment return reason code. If this field is populated, then this is a inbound payment return
     *
     * @return $this
     */
    public function setReturnReasonCode(?string $return_reason_code): static
    {
        if (is_null($return_reason_code)) {
            throw new InvalidArgumentException('non-nullable return_reason_code cannot be null');
        }
        if ((mb_strlen($return_reason_code) > 4)) {
            throw new InvalidArgumentException('invalid length for $return_reason_code when calling GenerateRapPaymentReturnInformation., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($return_reason_code) < 4)) {
            throw new InvalidArgumentException('invalid length for $return_reason_code when calling GenerateRapPaymentReturnInformation., must be bigger than or equal to 4.');
        }

        $this->container['return_reason_code'] = $return_reason_code;

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


