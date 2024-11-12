<?php
/**
 * GenerateRapMandateInformation
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
 * GenerateRapMandateInformation Class Doc Comment
 *
 * @description Information on the mandate associated with the payment request.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GenerateRapMandateInformation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenerateRapMandateInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'initiating_party_name' => 'string',
        'instruction_identification' => 'string',
        'mandate_identification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'initiating_party_name' => null,
        'instruction_identification' => null,
        'mandate_identification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'initiating_party_name' => false,
        'instruction_identification' => false,
        'mandate_identification' => false
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
        'initiating_party_name' => 'initiatingPartyName',
        'instruction_identification' => 'instructionIdentification',
        'mandate_identification' => 'mandateIdentification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'initiating_party_name' => 'setInitiatingPartyName',
        'instruction_identification' => 'setInstructionIdentification',
        'mandate_identification' => 'setMandateIdentification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'initiating_party_name' => 'getInitiatingPartyName',
        'instruction_identification' => 'getInstructionIdentification',
        'mandate_identification' => 'getMandateIdentification'
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
        $this->setIfExists('initiating_party_name', $data ?? [], null);
        $this->setIfExists('instruction_identification', $data ?? [], null);
        $this->setIfExists('mandate_identification', $data ?? [], null);
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

        if (!is_null($this->container['initiating_party_name']) && !preg_match("/^[ -~]{1,140}$/", $this->container['initiating_party_name'])) {
            $invalidProperties[] = "invalid value for 'initiating_party_name', must be conform to the pattern /^[ -~]{1,140}$/.";
        }

        if (!is_null($this->container['instruction_identification']) && !preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/", $this->container['instruction_identification'])) {
            $invalidProperties[] = "invalid value for 'instruction_identification', must be conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/.";
        }

        if ($this->container['mandate_identification'] === null) {
            $invalidProperties[] = "'mandate_identification' can't be null";
        }
        if (!preg_match("/^[a-f0-9]{12}1[a-f0-9]{3}[89ab][a-f0-9]{15}$/", $this->container['mandate_identification'])) {
            $invalidProperties[] = "invalid value for 'mandate_identification', must be conform to the pattern /^[a-f0-9]{12}1[a-f0-9]{3}[89ab][a-f0-9]{15}$/.";
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
     * Gets initiating_party_name
     *
     * @return string|null
     */
    public function getInitiatingPartyName(): ?string
    {
        return $this->container['initiating_party_name'];
    }

    /**
     * Sets initiating_party_name
     *
     * @param string|null $initiating_party_name Initiating Party Name. Must be populated for mandate payments
     *
     * @return $this
     */
    public function setInitiatingPartyName(?string $initiating_party_name): static
    {
        if (is_null($initiating_party_name)) {
            throw new InvalidArgumentException('non-nullable initiating_party_name cannot be null');
        }

        if ((!preg_match("/^[ -~]{1,140}$/", ObjectSerializer::toString($initiating_party_name)))) {
            throw new InvalidArgumentException("invalid value for \$initiating_party_name when calling GenerateRapMandateInformation., must conform to the pattern /^[ -~]{1,140}$/.");
        }

        $this->container['initiating_party_name'] = $initiating_party_name;

        return $this;
    }

    /**
     * Gets instruction_identification
     *
     * @return string|null
     */
    public function getInstructionIdentification(): ?string
    {
        return $this->container['instruction_identification'];
    }

    /**
     * Sets instruction_identification
     *
     * @param string|null $instruction_identification Unique mandate payment instruction identification assigned by the instructing party. Must be populated for mandate payments
     *
     * @return $this
     */
    public function setInstructionIdentification(?string $instruction_identification): static
    {
        if (is_null($instruction_identification)) {
            throw new InvalidArgumentException('non-nullable instruction_identification cannot be null');
        }

        if ((!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/", ObjectSerializer::toString($instruction_identification)))) {
            throw new InvalidArgumentException("invalid value for \$instruction_identification when calling GenerateRapMandateInformation., must conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/.");
        }

        $this->container['instruction_identification'] = $instruction_identification;

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
     * @param string $mandate_identification Mandate ID associated to the transaction. Must be populated for mandate payments. ID of mandate related to payment instruction. Universally Unique IDentifier (UUID) version 1, as described in IETC RFC 4122 \"Universally Unique IDentifier (UUID) URN Namespace\" without the 4 hyphen separators. For example: '00000000000010008000000000000000' instead of '00000000-0000-1000-8000-000000000000' (without quotes)
     *
     * @return $this
     */
    public function setMandateIdentification(string $mandate_identification): static
    {
        if (is_null($mandate_identification)) {
            throw new InvalidArgumentException('non-nullable mandate_identification cannot be null');
        }

        if ((!preg_match("/^[a-f0-9]{12}1[a-f0-9]{3}[89ab][a-f0-9]{15}$/", ObjectSerializer::toString($mandate_identification)))) {
            throw new InvalidArgumentException("invalid value for \$mandate_identification when calling GenerateRapMandateInformation., must conform to the pattern /^[a-f0-9]{12}1[a-f0-9]{3}[89ab][a-f0-9]{15}$/.");
        }

        $this->container['mandate_identification'] = $mandate_identification;

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


