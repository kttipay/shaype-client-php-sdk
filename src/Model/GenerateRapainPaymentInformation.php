<?php
/**
 * GenerateRapainPaymentInformation
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
 * GenerateRapainPaymentInformation Class Doc Comment
 *
 * @description Mandate payment initiation information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GenerateRapainPaymentInformation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenerateRapainPaymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'instructed_amount' => 'string',
        'instruction_identification' => 'string',
        'remittance_information_unstructured' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'instructed_amount' => null,
        'instruction_identification' => null,
        'remittance_information_unstructured' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'instructed_amount' => false,
        'instruction_identification' => false,
        'remittance_information_unstructured' => false
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
        'instructed_amount' => 'instructedAmount',
        'instruction_identification' => 'instructionIdentification',
        'remittance_information_unstructured' => 'remittanceInformationUnstructured'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'instructed_amount' => 'setInstructedAmount',
        'instruction_identification' => 'setInstructionIdentification',
        'remittance_information_unstructured' => 'setRemittanceInformationUnstructured'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'instructed_amount' => 'getInstructedAmount',
        'instruction_identification' => 'getInstructionIdentification',
        'remittance_information_unstructured' => 'getRemittanceInformationUnstructured'
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
        $this->setIfExists('instructed_amount', $data ?? [], null);
        $this->setIfExists('instruction_identification', $data ?? [], null);
        $this->setIfExists('remittance_information_unstructured', $data ?? [], null);
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

        if ($this->container['instructed_amount'] === null) {
            $invalidProperties[] = "'instructed_amount' can't be null";
        }
        if (!preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", $this->container['instructed_amount'])) {
            $invalidProperties[] = "invalid value for 'instructed_amount', must be conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.";
        }

        if ($this->container['instruction_identification'] === null) {
            $invalidProperties[] = "'instruction_identification' can't be null";
        }
        if (!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/", $this->container['instruction_identification'])) {
            $invalidProperties[] = "invalid value for 'instruction_identification', must be conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/.";
        }

        if (!is_null($this->container['remittance_information_unstructured']) && (mb_strlen($this->container['remittance_information_unstructured']) > 280)) {
            $invalidProperties[] = "invalid value for 'remittance_information_unstructured', the character length must be smaller than or equal to 280.";
        }

        if (!is_null($this->container['remittance_information_unstructured']) && (mb_strlen($this->container['remittance_information_unstructured']) < 1)) {
            $invalidProperties[] = "invalid value for 'remittance_information_unstructured', the character length must be bigger than or equal to 1.";
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
     * Gets instructed_amount
     *
     * @return string
     */
    public function getInstructedAmount(): string
    {
        return $this->container['instructed_amount'];
    }

    /**
     * Sets instructed_amount
     *
     * @param string $instructed_amount Amount of money to be moved between the debtor and creditor, before deduction of charges, expressed in the currency as ordered by the initiating party.
     *
     * @return $this
     */
    public function setInstructedAmount(string $instructed_amount): static
    {
        if (is_null($instructed_amount)) {
            throw new InvalidArgumentException('non-nullable instructed_amount cannot be null');
        }

        if ((!preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", ObjectSerializer::toString($instructed_amount)))) {
            throw new InvalidArgumentException("invalid value for \$instructed_amount when calling GenerateRapainPaymentInformation., must conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.");
        }

        $this->container['instructed_amount'] = $instructed_amount;

        return $this;
    }

    /**
     * Gets instruction_identification
     *
     * @return string
     */
    public function getInstructionIdentification(): string
    {
        return $this->container['instruction_identification'];
    }

    /**
     * Sets instruction_identification
     *
     * @param string $instruction_identification Instruction identification.
     *
     * @return $this
     */
    public function setInstructionIdentification(string $instruction_identification): static
    {
        if (is_null($instruction_identification)) {
            throw new InvalidArgumentException('non-nullable instruction_identification cannot be null');
        }

        if ((!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/", ObjectSerializer::toString($instruction_identification)))) {
            throw new InvalidArgumentException("invalid value for \$instruction_identification when calling GenerateRapainPaymentInformation., must conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}I[0-9]{8}00[0-9]{12}[01]$/.");
        }

        $this->container['instruction_identification'] = $instruction_identification;

        return $this;
    }

    /**
     * Gets remittance_information_unstructured
     *
     * @return string|null
     */
    public function getRemittanceInformationUnstructured(): ?string
    {
        return $this->container['remittance_information_unstructured'];
    }

    /**
     * Sets remittance_information_unstructured
     *
     * @param string|null $remittance_information_unstructured Information supplied to enable the matching/reconciliation of an entry with the items that the payment is intended to settle, such as commercial invoices in an accounts' receivable system, in an unstructured form.
     *
     * @return $this
     */
    public function setRemittanceInformationUnstructured(?string $remittance_information_unstructured): static
    {
        if (is_null($remittance_information_unstructured)) {
            throw new InvalidArgumentException('non-nullable remittance_information_unstructured cannot be null');
        }
        if ((mb_strlen($remittance_information_unstructured) > 280)) {
            throw new InvalidArgumentException('invalid length for $remittance_information_unstructured when calling GenerateRapainPaymentInformation., must be smaller than or equal to 280.');
        }
        if ((mb_strlen($remittance_information_unstructured) < 1)) {
            throw new InvalidArgumentException('invalid length for $remittance_information_unstructured when calling GenerateRapainPaymentInformation., must be bigger than or equal to 1.');
        }

        $this->container['remittance_information_unstructured'] = $remittance_information_unstructured;

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


