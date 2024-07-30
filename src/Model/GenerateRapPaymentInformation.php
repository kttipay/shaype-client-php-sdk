<?php
/**
 * GenerateRapPaymentInformation
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
 * GenerateRapPaymentInformation Class Doc Comment
 *
 * @description Mandate payment initiation information.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GenerateRapPaymentInformation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenerateRapPaymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'category_purpose_code' => 'string',
        'end_to_end_identification' => 'string',
        'instructed_amount' => 'string',
        'original_message_identification' => 'string',
        'remittance_information_unstructured' => 'string',
        'transaction_identification' => 'string',
        'unique_superannuation_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'category_purpose_code' => null,
        'end_to_end_identification' => null,
        'instructed_amount' => null,
        'original_message_identification' => null,
        'remittance_information_unstructured' => null,
        'transaction_identification' => null,
        'unique_superannuation_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'category_purpose_code' => false,
        'end_to_end_identification' => false,
        'instructed_amount' => false,
        'original_message_identification' => false,
        'remittance_information_unstructured' => false,
        'transaction_identification' => false,
        'unique_superannuation_code' => false
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
        'category_purpose_code' => 'categoryPurposeCode',
        'end_to_end_identification' => 'endToEndIdentification',
        'instructed_amount' => 'instructedAmount',
        'original_message_identification' => 'originalMessageIdentification',
        'remittance_information_unstructured' => 'remittanceInformationUnstructured',
        'transaction_identification' => 'transactionIdentification',
        'unique_superannuation_code' => 'uniqueSuperannuationCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'category_purpose_code' => 'setCategoryPurposeCode',
        'end_to_end_identification' => 'setEndToEndIdentification',
        'instructed_amount' => 'setInstructedAmount',
        'original_message_identification' => 'setOriginalMessageIdentification',
        'remittance_information_unstructured' => 'setRemittanceInformationUnstructured',
        'transaction_identification' => 'setTransactionIdentification',
        'unique_superannuation_code' => 'setUniqueSuperannuationCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'category_purpose_code' => 'getCategoryPurposeCode',
        'end_to_end_identification' => 'getEndToEndIdentification',
        'instructed_amount' => 'getInstructedAmount',
        'original_message_identification' => 'getOriginalMessageIdentification',
        'remittance_information_unstructured' => 'getRemittanceInformationUnstructured',
        'transaction_identification' => 'getTransactionIdentification',
        'unique_superannuation_code' => 'getUniqueSuperannuationCode'
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
        $this->setIfExists('category_purpose_code', $data ?? [], null);
        $this->setIfExists('end_to_end_identification', $data ?? [], null);
        $this->setIfExists('instructed_amount', $data ?? [], null);
        $this->setIfExists('original_message_identification', $data ?? [], null);
        $this->setIfExists('remittance_information_unstructured', $data ?? [], null);
        $this->setIfExists('transaction_identification', $data ?? [], null);
        $this->setIfExists('unique_superannuation_code', $data ?? [], null);
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

        if (!is_null($this->container['category_purpose_code']) && (mb_strlen($this->container['category_purpose_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'category_purpose_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['category_purpose_code']) && (mb_strlen($this->container['category_purpose_code']) < 4)) {
            $invalidProperties[] = "invalid value for 'category_purpose_code', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['end_to_end_identification'] === null) {
            $invalidProperties[] = "'end_to_end_identification' can't be null";
        }
        if ((mb_strlen($this->container['end_to_end_identification']) > 35)) {
            $invalidProperties[] = "invalid value for 'end_to_end_identification', the character length must be smaller than or equal to 35.";
        }

        if ((mb_strlen($this->container['end_to_end_identification']) < 0)) {
            $invalidProperties[] = "invalid value for 'end_to_end_identification', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['instructed_amount'] === null) {
            $invalidProperties[] = "'instructed_amount' can't be null";
        }
        if (!preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", $this->container['instructed_amount'])) {
            $invalidProperties[] = "invalid value for 'instructed_amount', must be conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.";
        }

        if ($this->container['original_message_identification'] === null) {
            $invalidProperties[] = "'original_message_identification' can't be null";
        }
        if ((mb_strlen($this->container['original_message_identification']) > 34)) {
            $invalidProperties[] = "invalid value for 'original_message_identification', the character length must be smaller than or equal to 34.";
        }

        if ((mb_strlen($this->container['original_message_identification']) < 34)) {
            $invalidProperties[] = "invalid value for 'original_message_identification', the character length must be bigger than or equal to 34.";
        }

        if (!is_null($this->container['remittance_information_unstructured']) && (mb_strlen($this->container['remittance_information_unstructured']) > 280)) {
            $invalidProperties[] = "invalid value for 'remittance_information_unstructured', the character length must be smaller than or equal to 280.";
        }

        if (!is_null($this->container['remittance_information_unstructured']) && (mb_strlen($this->container['remittance_information_unstructured']) < 0)) {
            $invalidProperties[] = "invalid value for 'remittance_information_unstructured', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['transaction_identification'] === null) {
            $invalidProperties[] = "'transaction_identification' can't be null";
        }
        if (!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}N[0-9]{8}00[0-9]{12}[01]$/", $this->container['transaction_identification'])) {
            $invalidProperties[] = "invalid value for 'transaction_identification', must be conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}N[0-9]{8}00[0-9]{12}[01]$/.";
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
     * Gets category_purpose_code
     *
     * @return string|null
     */
    public function getCategoryPurposeCode(): ?string
    {
        return $this->container['category_purpose_code'];
    }

    /**
     * Sets category_purpose_code
     *
     * @param string|null $category_purpose_code Payment Category code  Download the 'External Code Sets' spreadsheet from https://www.iso20022.org/external_code_list.page and navigate to the '4-CategoryPurpose' tab for a full list of payment Category codes. \"EPAY\", \"SALA\", \"SUPP\", \"PENS\", \"TAXS\"
     *
     * @return $this
     */
    public function setCategoryPurposeCode(?string $category_purpose_code): static
    {
        if (is_null($category_purpose_code)) {
            throw new InvalidArgumentException('non-nullable category_purpose_code cannot be null');
        }
        if ((mb_strlen($category_purpose_code) > 4)) {
            throw new InvalidArgumentException('invalid length for $category_purpose_code when calling GenerateRapPaymentInformation., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($category_purpose_code) < 4)) {
            throw new InvalidArgumentException('invalid length for $category_purpose_code when calling GenerateRapPaymentInformation., must be bigger than or equal to 4.');
        }

        $this->container['category_purpose_code'] = $category_purpose_code;

        return $this;
    }

    /**
     * Gets end_to_end_identification
     *
     * @return string
     */
    public function getEndToEndIdentification(): string
    {
        return $this->container['end_to_end_identification'];
    }

    /**
     * Sets end_to_end_identification
     *
     * @param string $end_to_end_identification End to End identifier. This is the Debtor's (customer) reference for the Payment to be provided to Creditor (customer).  End to End is used as guidance text for Payer channels in the use of the Reference (EndToEndId) field. If the payer populates the details in the channel, the the same is passed on to the payee.    If the payer does not populate, the default value will apply.
     *
     * @return $this
     */
    public function setEndToEndIdentification(string $end_to_end_identification): static
    {
        if (is_null($end_to_end_identification)) {
            throw new InvalidArgumentException('non-nullable end_to_end_identification cannot be null');
        }
        if ((mb_strlen($end_to_end_identification) > 35)) {
            throw new InvalidArgumentException('invalid length for $end_to_end_identification when calling GenerateRapPaymentInformation., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($end_to_end_identification) < 0)) {
            throw new InvalidArgumentException('invalid length for $end_to_end_identification when calling GenerateRapPaymentInformation., must be bigger than or equal to 0.');
        }

        $this->container['end_to_end_identification'] = $end_to_end_identification;

        return $this;
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
     * @param string $instructed_amount Instructed amount
     *
     * @return $this
     */
    public function setInstructedAmount(string $instructed_amount): static
    {
        if (is_null($instructed_amount)) {
            throw new InvalidArgumentException('non-nullable instructed_amount cannot be null');
        }

        if ((!preg_match("/^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/", ObjectSerializer::toString($instructed_amount)))) {
            throw new InvalidArgumentException("invalid value for \$instructed_amount when calling GenerateRapPaymentInformation., must conform to the pattern /^(?=.{1,19}$)[0-9]{0,18}(?:\\.[0-9]{0,2})?$/.");
        }

        $this->container['instructed_amount'] = $instructed_amount;

        return $this;
    }

    /**
     * Gets original_message_identification
     *
     * @return string
     */
    public function getOriginalMessageIdentification(): string
    {
        return $this->container['original_message_identification'];
    }

    /**
     * Sets original_message_identification
     *
     * @param string $original_message_identification The original messageID of the incoming payment.
     *
     * @return $this
     */
    public function setOriginalMessageIdentification(string $original_message_identification): static
    {
        if (is_null($original_message_identification)) {
            throw new InvalidArgumentException('non-nullable original_message_identification cannot be null');
        }
        if ((mb_strlen($original_message_identification) > 34)) {
            throw new InvalidArgumentException('invalid length for $original_message_identification when calling GenerateRapPaymentInformation., must be smaller than or equal to 34.');
        }
        if ((mb_strlen($original_message_identification) < 34)) {
            throw new InvalidArgumentException('invalid length for $original_message_identification when calling GenerateRapPaymentInformation., must be bigger than or equal to 34.');
        }

        $this->container['original_message_identification'] = $original_message_identification;

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
     * @param string|null $remittance_information_unstructured Payment Description For category_purpose_code = SALA, Comments relating to specific employee information will be provided in this field.
     *
     * @return $this
     */
    public function setRemittanceInformationUnstructured(?string $remittance_information_unstructured): static
    {
        if (is_null($remittance_information_unstructured)) {
            throw new InvalidArgumentException('non-nullable remittance_information_unstructured cannot be null');
        }
        if ((mb_strlen($remittance_information_unstructured) > 280)) {
            throw new InvalidArgumentException('invalid length for $remittance_information_unstructured when calling GenerateRapPaymentInformation., must be smaller than or equal to 280.');
        }
        if ((mb_strlen($remittance_information_unstructured) < 0)) {
            throw new InvalidArgumentException('invalid length for $remittance_information_unstructured when calling GenerateRapPaymentInformation., must be bigger than or equal to 0.');
        }

        $this->container['remittance_information_unstructured'] = $remittance_information_unstructured;

        return $this;
    }

    /**
     * Gets transaction_identification
     *
     * @return string
     */
    public function getTransactionIdentification(): string
    {
        return $this->container['transaction_identification'];
    }

    /**
     * Sets transaction_identification
     *
     * @param string $transaction_identification A unique Payment Transaction Identifier generated by the sending client. the payment identifier must follow the following fixed character pattern NPP guidelines:  - 1 to 11     clients BIC11  - 12             fixed value 'N'  - 13 to 20   YYYYMMDD  - 21 to 22   fixed value '00'  - 23 to 34   sequence number starting from 000000000001  - 35             retry counter, always set to 0 unless its a retry, retries start at 1.
     *
     * @return $this
     */
    public function setTransactionIdentification(string $transaction_identification): static
    {
        if (is_null($transaction_identification)) {
            throw new InvalidArgumentException('non-nullable transaction_identification cannot be null');
        }

        if ((!preg_match("/^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}N[0-9]{8}00[0-9]{12}[01]$/", ObjectSerializer::toString($transaction_identification)))) {
            throw new InvalidArgumentException("invalid value for \$transaction_identification when calling GenerateRapPaymentInformation., must conform to the pattern /^[A-Z0-9]{4}[A-Z]{2}[A-Z0-9]{2}[A-Z0-9]{3}N[0-9]{8}00[0-9]{12}[01]$/.");
        }

        $this->container['transaction_identification'] = $transaction_identification;

        return $this;
    }

    /**
     * Gets unique_superannuation_code
     *
     * @return string|null
     */
    public function getUniqueSuperannuationCode(): ?string
    {
        return $this->container['unique_superannuation_code'];
    }

    /**
     * Sets unique_superannuation_code
     *
     * @param string|null $unique_superannuation_code For category_purpose_code = PENS, Comments relating to USI code indicating the identifier to whom the superannuation fund will be provided in this field.
     *
     * @return $this
     */
    public function setUniqueSuperannuationCode(?string $unique_superannuation_code): static
    {
        if (is_null($unique_superannuation_code)) {
            throw new InvalidArgumentException('non-nullable unique_superannuation_code cannot be null');
        }
        $this->container['unique_superannuation_code'] = $unique_superannuation_code;

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


