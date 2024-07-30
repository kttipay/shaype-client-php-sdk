<?php
/**
 * DeTransactionDetails
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
 * DeTransactionDetails Class Doc Comment
 *
 * @description Details of the outbound Direct Debit transfer
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DeTransactionDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DeTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'amount' => 'float',
        'description' => 'string',
        'outcome' => 'string',
        'processing_date' => '\DateTime',
        'recipient_account_number' => 'string',
        'recipient_bsb' => 'string',
        'recipient_name' => 'string',
        'sender_account_number' => 'string',
        'sender_bsb' => 'string',
        'sender_name' => 'string',
        'transaction_hay_id' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amount' => null,
        'description' => null,
        'outcome' => null,
        'processing_date' => 'date',
        'recipient_account_number' => null,
        'recipient_bsb' => null,
        'recipient_name' => null,
        'sender_account_number' => null,
        'sender_bsb' => null,
        'sender_name' => null,
        'transaction_hay_id' => 'uuid',
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'description' => false,
        'outcome' => false,
        'processing_date' => false,
        'recipient_account_number' => false,
        'recipient_bsb' => false,
        'recipient_name' => false,
        'sender_account_number' => false,
        'sender_bsb' => false,
        'sender_name' => false,
        'transaction_hay_id' => false,
        'type' => false
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
        'amount' => 'amount',
        'description' => 'description',
        'outcome' => 'outcome',
        'processing_date' => 'processingDate',
        'recipient_account_number' => 'recipientAccountNumber',
        'recipient_bsb' => 'recipientBsb',
        'recipient_name' => 'recipientName',
        'sender_account_number' => 'senderAccountNumber',
        'sender_bsb' => 'senderBsb',
        'sender_name' => 'senderName',
        'transaction_hay_id' => 'transactionHayId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'outcome' => 'setOutcome',
        'processing_date' => 'setProcessingDate',
        'recipient_account_number' => 'setRecipientAccountNumber',
        'recipient_bsb' => 'setRecipientBsb',
        'recipient_name' => 'setRecipientName',
        'sender_account_number' => 'setSenderAccountNumber',
        'sender_bsb' => 'setSenderBsb',
        'sender_name' => 'setSenderName',
        'transaction_hay_id' => 'setTransactionHayId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'outcome' => 'getOutcome',
        'processing_date' => 'getProcessingDate',
        'recipient_account_number' => 'getRecipientAccountNumber',
        'recipient_bsb' => 'getRecipientBsb',
        'recipient_name' => 'getRecipientName',
        'sender_account_number' => 'getSenderAccountNumber',
        'sender_bsb' => 'getSenderBsb',
        'sender_name' => 'getSenderName',
        'transaction_hay_id' => 'getTransactionHayId',
        'type' => 'getType'
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
    public const OUTCOME_REJECTED = 'REJECTED';
    public const OUTCOME_SUBMITTED = 'SUBMITTED';
    public const OUTCOME_RETURNED = 'RETURNED';
    public const TYPE_CREDIT = 'CREDIT';
    public const TYPE_DEBIT = 'DEBIT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutcomeAllowableValues()
    {
        return [
            self::OUTCOME_ACCEPTED,
            self::OUTCOME_REJECTED,
            self::OUTCOME_SUBMITTED,
            self::OUTCOME_RETURNED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREDIT,
            self::TYPE_DEBIT,
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('outcome', $data ?? [], null);
        $this->setIfExists('processing_date', $data ?? [], null);
        $this->setIfExists('recipient_account_number', $data ?? [], null);
        $this->setIfExists('recipient_bsb', $data ?? [], null);
        $this->setIfExists('recipient_name', $data ?? [], null);
        $this->setIfExists('sender_account_number', $data ?? [], null);
        $this->setIfExists('sender_bsb', $data ?? [], null);
        $this->setIfExists('sender_name', $data ?? [], null);
        $this->setIfExists('transaction_hay_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Value of the Direct Debit transfer, to 2 decimal places
     *
     * @return $this
     */
    public function setAmount(?float $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

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
     * @param string|null $description Description on Direct Debit transfer, maximum 18 characters in length
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
     * @param string|null $outcome Status of the Direct Debits. Possible values:  * **ACCEPTED**: Direct Debit has been accepted and awaiting submission to next Direct Entry payment batch  * **REJECTED**: Direct Debit has been rejected and has not been submitted in Direct Entry payment batch  * **RETURNED**: Direct Debit has been Returned from recipient financial institution  * **SUBMITTED**: Direct Debit has been accepted and submitted in Direct Entry payment batch
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
     * Gets processing_date
     *
     * @return \DateTime|null
     */
    public function getProcessingDate(): ?\DateTime
    {
        return $this->container['processing_date'];
    }

    /**
     * Sets processing_date
     *
     * @param \DateTime|null $processing_date Date that the Direct Debit transfer takes effect
     *
     * @return $this
     */
    public function setProcessingDate(?\DateTime $processing_date): static
    {
        if (is_null($processing_date)) {
            throw new InvalidArgumentException('non-nullable processing_date cannot be null');
        }
        $this->container['processing_date'] = $processing_date;

        return $this;
    }

    /**
     * Gets recipient_account_number
     *
     * @return string|null
     */
    public function getRecipientAccountNumber(): ?string
    {
        return $this->container['recipient_account_number'];
    }

    /**
     * Sets recipient_account_number
     *
     * @param string|null $recipient_account_number Account Number of Account receiving Direct Debit instruction (account to be debited), 5-9 digits in length
     *
     * @return $this
     */
    public function setRecipientAccountNumber(?string $recipient_account_number): static
    {
        if (is_null($recipient_account_number)) {
            throw new InvalidArgumentException('non-nullable recipient_account_number cannot be null');
        }
        $this->container['recipient_account_number'] = $recipient_account_number;

        return $this;
    }

    /**
     * Gets recipient_bsb
     *
     * @return string|null
     */
    public function getRecipientBsb(): ?string
    {
        return $this->container['recipient_bsb'];
    }

    /**
     * Sets recipient_bsb
     *
     * @param string|null $recipient_bsb BSB (Bank State Branch) of Account receiving Direct Debit instruction (account to be debited), 6 digits in length
     *
     * @return $this
     */
    public function setRecipientBsb(?string $recipient_bsb): static
    {
        if (is_null($recipient_bsb)) {
            throw new InvalidArgumentException('non-nullable recipient_bsb cannot be null');
        }
        $this->container['recipient_bsb'] = $recipient_bsb;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string|null $recipient_name Name on the Account receiving Direct Debit instruction (account to be debited)
     *
     * @return $this
     */
    public function setRecipientName(?string $recipient_name): static
    {
        if (is_null($recipient_name)) {
            throw new InvalidArgumentException('non-nullable recipient_name cannot be null');
        }
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets sender_account_number
     *
     * @return string|null
     */
    public function getSenderAccountNumber(): ?string
    {
        return $this->container['sender_account_number'];
    }

    /**
     * Sets sender_account_number
     *
     * @param string|null $sender_account_number Account Number of Account sending Direct Debit instruction (account to be credited), 5-9 digits in length
     *
     * @return $this
     */
    public function setSenderAccountNumber(?string $sender_account_number): static
    {
        if (is_null($sender_account_number)) {
            throw new InvalidArgumentException('non-nullable sender_account_number cannot be null');
        }
        $this->container['sender_account_number'] = $sender_account_number;

        return $this;
    }

    /**
     * Gets sender_bsb
     *
     * @return string|null
     */
    public function getSenderBsb(): ?string
    {
        return $this->container['sender_bsb'];
    }

    /**
     * Sets sender_bsb
     *
     * @param string|null $sender_bsb BSB (Bank State Branch) of Account sending Direct Debit instruction (account to be credited), 6 digits in length
     *
     * @return $this
     */
    public function setSenderBsb(?string $sender_bsb): static
    {
        if (is_null($sender_bsb)) {
            throw new InvalidArgumentException('non-nullable sender_bsb cannot be null');
        }
        $this->container['sender_bsb'] = $sender_bsb;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string|null $sender_name Name on the Account sending Direct Debit instruction (account to be credited)
     *
     * @return $this
     */
    public function setSenderName(?string $sender_name): static
    {
        if (is_null($sender_name)) {
            throw new InvalidArgumentException('non-nullable sender_name cannot be null');
        }
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets transaction_hay_id
     *
     * @return string|null
     */
    public function getTransactionHayId(): ?string
    {
        return $this->container['transaction_hay_id'];
    }

    /**
     * Sets transaction_hay_id
     *
     * @param string|null $transaction_hay_id Unique identifier (UUID) of the Transaction
     *
     * @return $this
     */
    public function setTransactionHayId(?string $transaction_hay_id): static
    {
        if (is_null($transaction_hay_id)) {
            throw new InvalidArgumentException('non-nullable transaction_hay_id cannot be null');
        }
        $this->container['transaction_hay_id'] = $transaction_hay_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Transaction type. Possible values:  * **DEBIT**
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


