<?php
/**
 * GetMandateSummaryDto
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
 * GetMandateSummaryDto Class Doc Comment
 *
 * @description Details of a mandate.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetMandateSummaryDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetMandateSummaryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'debtor_account_id' => 'string',
        'description' => 'string',
        'mandate_id' => 'string',
        'payment_terms' => '\Shaype\Client\Model\GetPaymentTermsSummaryDto',
        'purpose_code' => 'string',
        'status' => 'string',
        'validity_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'debtor_account_id' => 'uuid',
        'description' => null,
        'mandate_id' => 'uuid',
        'payment_terms' => null,
        'purpose_code' => null,
        'status' => null,
        'validity_end_date' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'debtor_account_id' => false,
        'description' => false,
        'mandate_id' => false,
        'payment_terms' => false,
        'purpose_code' => false,
        'status' => false,
        'validity_end_date' => false
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
        'debtor_account_id' => 'debtorAccountId',
        'description' => 'description',
        'mandate_id' => 'mandateId',
        'payment_terms' => 'paymentTerms',
        'purpose_code' => 'purposeCode',
        'status' => 'status',
        'validity_end_date' => 'validityEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'debtor_account_id' => 'setDebtorAccountId',
        'description' => 'setDescription',
        'mandate_id' => 'setMandateId',
        'payment_terms' => 'setPaymentTerms',
        'purpose_code' => 'setPurposeCode',
        'status' => 'setStatus',
        'validity_end_date' => 'setValidityEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'debtor_account_id' => 'getDebtorAccountId',
        'description' => 'getDescription',
        'mandate_id' => 'getMandateId',
        'payment_terms' => 'getPaymentTerms',
        'purpose_code' => 'getPurposeCode',
        'status' => 'getStatus',
        'validity_end_date' => 'getValidityEndDate'
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

    public const PURPOSE_CODE_MORTGAGE = 'MORTGAGE';
    public const PURPOSE_CODE_UTILITY = 'UTILITY';
    public const PURPOSE_CODE_LOAN = 'LOAN';
    public const PURPOSE_CODE_DEPENDANT = 'DEPENDANT';
    public const PURPOSE_CODE_GAMBLING = 'GAMBLING';
    public const PURPOSE_CODE_RETAIL = 'RETAIL';
    public const PURPOSE_CODE_SALARY = 'SALARY';
    public const PURPOSE_CODE_PERSONAL = 'PERSONAL';
    public const PURPOSE_CODE_GOVERNMENT = 'GOVERNMENT';
    public const PURPOSE_CODE_PENSION = 'PENSION';
    public const PURPOSE_CODE_TAX = 'TAX';
    public const PURPOSE_CODE_OTHER = 'OTHER';
    public const STATUS_CREATED = 'CREATED';
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_SUSPENDED = 'SUSPENDED';
    public const STATUS_CANCELLED = 'CANCELLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurposeCodeAllowableValues()
    {
        return [
            self::PURPOSE_CODE_MORTGAGE,
            self::PURPOSE_CODE_UTILITY,
            self::PURPOSE_CODE_LOAN,
            self::PURPOSE_CODE_DEPENDANT,
            self::PURPOSE_CODE_GAMBLING,
            self::PURPOSE_CODE_RETAIL,
            self::PURPOSE_CODE_SALARY,
            self::PURPOSE_CODE_PERSONAL,
            self::PURPOSE_CODE_GOVERNMENT,
            self::PURPOSE_CODE_PENSION,
            self::PURPOSE_CODE_TAX,
            self::PURPOSE_CODE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ACTIVE,
            self::STATUS_SUSPENDED,
            self::STATUS_CANCELLED,
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
        $this->setIfExists('debtor_account_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('mandate_id', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('purpose_code', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('validity_end_date', $data ?? [], null);
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

        if ($this->container['mandate_id'] === null) {
            $invalidProperties[] = "'mandate_id' can't be null";
        }
        if ($this->container['payment_terms'] === null) {
            $invalidProperties[] = "'payment_terms' can't be null";
        }
        if ($this->container['purpose_code'] === null) {
            $invalidProperties[] = "'purpose_code' can't be null";
        }
        $allowedValues = $this->getPurposeCodeAllowableValues();
        if (!is_null($this->container['purpose_code']) && !in_array($this->container['purpose_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'purpose_code', must be one of '%s'",
                $this->container['purpose_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
     * Gets debtor_account_id
     *
     * @return string|null
     */
    public function getDebtorAccountId(): ?string
    {
        return $this->container['debtor_account_id'];
    }

    /**
     * Sets debtor_account_id
     *
     * @param string|null $debtor_account_id The system identifier of the debtor account, if determined.
     *
     * @return $this
     */
    public function setDebtorAccountId(?string $debtor_account_id): static
    {
        if (is_null($debtor_account_id)) {
            throw new InvalidArgumentException('non-nullable debtor_account_id cannot be null');
        }
        $this->container['debtor_account_id'] = $debtor_account_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Mandate description.
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mandate_id
     *
     * @return string
     */
    public function getMandateId(): string
    {
        return $this->container['mandate_id'];
    }

    /**
     * Sets mandate_id
     *
     * @param string $mandate_id Unique identifier of a mandate.
     *
     * @return $this
     */
    public function setMandateId(string $mandate_id): static
    {
        if (is_null($mandate_id)) {
            throw new InvalidArgumentException('non-nullable mandate_id cannot be null');
        }
        $this->container['mandate_id'] = $mandate_id;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \Shaype\Client\Model\GetPaymentTermsSummaryDto
     */
    public function getPaymentTerms(): \Shaype\Client\Model\GetPaymentTermsSummaryDto
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \Shaype\Client\Model\GetPaymentTermsSummaryDto $payment_terms payment_terms
     *
     * @return $this
     */
    public function setPaymentTerms(\Shaype\Client\Model\GetPaymentTermsSummaryDto $payment_terms): static
    {
        if (is_null($payment_terms)) {
            throw new InvalidArgumentException('non-nullable payment_terms cannot be null');
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets purpose_code
     *
     * @return string
     */
    public function getPurposeCode(): string
    {
        return $this->container['purpose_code'];
    }

    /**
     * Sets purpose_code
     *
     * @param string $purpose_code The purpose of this mandate.  * **MORTGAGE**: Mortgage Payments.  * **UTILITY**: Utility Payments.  * **LOAN**: Loan Payments.  * **DEPENDANT**: Dependant Support Payments.  * **GAMBLING**: Gambling Payments.  * **RETAIL**: Retail Payments.  * **SALARY**: Salary Payments.  * **PERSONAL**: Personal Payments.  * **GOVERNMENT**: Government Payments.  * **PENSION**: Pension Payments.  * **TAX**: Tax Payments.  * **OTHER**: Other Service Payments.
     *
     * @return $this
     */
    public function setPurposeCode(string $purpose_code): static
    {
        if (is_null($purpose_code)) {
            throw new InvalidArgumentException('non-nullable purpose_code cannot be null');
        }
        $allowedValues = $this->getPurposeCodeAllowableValues();
        if (!in_array($purpose_code, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'purpose_code', must be one of '%s'",
                    $purpose_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purpose_code'] = $purpose_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of this mandate.  * **CREATED**: Created.  * **ACTIVE**: Active.  * **SUSPENDED**: Suspended.  * **CANCELLED**: Cancelled.
     *
     * @return $this
     */
    public function setStatus(string $status): static
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
     * Gets validity_end_date
     *
     * @return \DateTime|null
     */
    public function getValidityEndDate(): ?\DateTime
    {
        return $this->container['validity_end_date'];
    }

    /**
     * Sets validity_end_date
     *
     * @param \DateTime|null $validity_end_date The date when the mandate stops being valid.
     *
     * @return $this
     */
    public function setValidityEndDate(?\DateTime $validity_end_date): static
    {
        if (is_null($validity_end_date)) {
            throw new InvalidArgumentException('non-nullable validity_end_date cannot be null');
        }
        $this->container['validity_end_date'] = $validity_end_date;

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


