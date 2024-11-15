<?php
/**
 * CreateCreditorDetailsDto
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
 * CreateCreditorDetailsDto Class Doc Comment
 *
 * @description Describes creditor account details.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateCreditorDetailsDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateCreditorDetailsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'account_alias_identification' => 'string',
        'account_alias_type' => 'string',
        'account_id' => 'string',
        'party_reference' => 'string',
        'party_type' => 'string',
        'ultimate_party_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'account_alias_identification' => null,
        'account_alias_type' => null,
        'account_id' => 'uuid',
        'party_reference' => null,
        'party_type' => null,
        'ultimate_party_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'account_alias_identification' => false,
        'account_alias_type' => false,
        'account_id' => false,
        'party_reference' => false,
        'party_type' => false,
        'ultimate_party_name' => false
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
        'account_alias_identification' => 'accountAliasIdentification',
        'account_alias_type' => 'accountAliasType',
        'account_id' => 'accountId',
        'party_reference' => 'partyReference',
        'party_type' => 'partyType',
        'ultimate_party_name' => 'ultimatePartyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'account_alias_identification' => 'setAccountAliasIdentification',
        'account_alias_type' => 'setAccountAliasType',
        'account_id' => 'setAccountId',
        'party_reference' => 'setPartyReference',
        'party_type' => 'setPartyType',
        'ultimate_party_name' => 'setUltimatePartyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'account_alias_identification' => 'getAccountAliasIdentification',
        'account_alias_type' => 'getAccountAliasType',
        'account_id' => 'getAccountId',
        'party_reference' => 'getPartyReference',
        'party_type' => 'getPartyType',
        'ultimate_party_name' => 'getUltimatePartyName'
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

    public const ACCOUNT_ALIAS_TYPE_AUSTRALIAN_BUSINESS_NUMBER = 'AUSTRALIAN_BUSINESS_NUMBER';
    public const ACCOUNT_ALIAS_TYPE_EMAIL_ADDRESS = 'EMAIL_ADDRESS';
    public const ACCOUNT_ALIAS_TYPE_ORGANISATION_ID = 'ORGANISATION_ID';
    public const ACCOUNT_ALIAS_TYPE_PHONE_NUMBER = 'PHONE_NUMBER';
    public const PARTY_TYPE_ORGANISATION = 'ORGANISATION';
    public const PARTY_TYPE_PERSON = 'PERSON';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountAliasTypeAllowableValues()
    {
        return [
            self::ACCOUNT_ALIAS_TYPE_AUSTRALIAN_BUSINESS_NUMBER,
            self::ACCOUNT_ALIAS_TYPE_EMAIL_ADDRESS,
            self::ACCOUNT_ALIAS_TYPE_ORGANISATION_ID,
            self::ACCOUNT_ALIAS_TYPE_PHONE_NUMBER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartyTypeAllowableValues()
    {
        return [
            self::PARTY_TYPE_ORGANISATION,
            self::PARTY_TYPE_PERSON,
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
        $this->setIfExists('account_alias_identification', $data ?? [], null);
        $this->setIfExists('account_alias_type', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('party_reference', $data ?? [], null);
        $this->setIfExists('party_type', $data ?? [], null);
        $this->setIfExists('ultimate_party_name', $data ?? [], null);
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

        $allowedValues = $this->getAccountAliasTypeAllowableValues();
        if (!is_null($this->container['account_alias_type']) && !in_array($this->container['account_alias_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_alias_type', must be one of '%s'",
                $this->container['account_alias_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['party_reference']) && !preg_match("/^[ -~]{1,35}$/", $this->container['party_reference'])) {
            $invalidProperties[] = "invalid value for 'party_reference', must be conform to the pattern /^[ -~]{1,35}$/.";
        }

        $allowedValues = $this->getPartyTypeAllowableValues();
        if (!is_null($this->container['party_type']) && !in_array($this->container['party_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'party_type', must be one of '%s'",
                $this->container['party_type'],
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
     * Gets account_alias_identification
     *
     * @return string|null
     */
    public function getAccountAliasIdentification(): ?string
    {
        return $this->container['account_alias_identification'];
    }

    /**
     * Sets account_alias_identification
     *
     * @param string|null $account_alias_identification The identifier of account alias.
     *
     * @return $this
     */
    public function setAccountAliasIdentification(?string $account_alias_identification): static
    {
        if (is_null($account_alias_identification)) {
            throw new InvalidArgumentException('non-nullable account_alias_identification cannot be null');
        }
        $this->container['account_alias_identification'] = $account_alias_identification;

        return $this;
    }

    /**
     * Gets account_alias_type
     *
     * @return string|null
     */
    public function getAccountAliasType(): ?string
    {
        return $this->container['account_alias_type'];
    }

    /**
     * Sets account_alias_type
     *
     * @param string|null $account_alias_type Creditor alias type.  * **AUSTRALIAN_BUSINESS_NUMBER**: Australian business number.  * **EMAIL_ADDRESS**: E-mail address.  * **ORGANISATION_ID**: Organisation identifier.  * **PHONE_NUMBER**: Phone number.
     *
     * @return $this
     */
    public function setAccountAliasType(?string $account_alias_type): static
    {
        if (is_null($account_alias_type)) {
            throw new InvalidArgumentException('non-nullable account_alias_type cannot be null');
        }
        $allowedValues = $this->getAccountAliasTypeAllowableValues();
        if (!in_array($account_alias_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_alias_type', must be one of '%s'",
                    $account_alias_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_alias_type'] = $account_alias_type;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id The identifier of the creditor account.
     *
     * @return $this
     */
    public function setAccountId(string $account_id): static
    {
        if (is_null($account_id)) {
            throw new InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets party_reference
     *
     * @return string|null
     */
    public function getPartyReference(): ?string
    {
        return $this->container['party_reference'];
    }

    /**
     * Sets party_reference
     *
     * @param string|null $party_reference Reference associated with the mandate as provided by party. Specifies a character string with a maximum length of 35 ASCII printable characters.
     *
     * @return $this
     */
    public function setPartyReference(?string $party_reference): static
    {
        if (is_null($party_reference)) {
            throw new InvalidArgumentException('non-nullable party_reference cannot be null');
        }

        if ((!preg_match("/^[ -~]{1,35}$/", ObjectSerializer::toString($party_reference)))) {
            throw new InvalidArgumentException("invalid value for \$party_reference when calling CreateCreditorDetailsDto., must conform to the pattern /^[ -~]{1,35}$/.");
        }

        $this->container['party_reference'] = $party_reference;

        return $this;
    }

    /**
     * Gets party_type
     *
     * @return string|null
     */
    public function getPartyType(): ?string
    {
        return $this->container['party_type'];
    }

    /**
     * Sets party_type
     *
     * @param string|null $party_type Creditor party type.  * **ORGANISATION**: Party is an organisation.  * **PERSON**: Party is a private individual.
     *
     * @return $this
     */
    public function setPartyType(?string $party_type): static
    {
        if (is_null($party_type)) {
            throw new InvalidArgumentException('non-nullable party_type cannot be null');
        }
        $allowedValues = $this->getPartyTypeAllowableValues();
        if (!in_array($party_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'party_type', must be one of '%s'",
                    $party_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['party_type'] = $party_type;

        return $this;
    }

    /**
     * Gets ultimate_party_name
     *
     * @return string|null
     */
    public function getUltimatePartyName(): ?string
    {
        return $this->container['ultimate_party_name'];
    }

    /**
     * Sets ultimate_party_name
     *
     * @param string|null $ultimate_party_name Creditor's ultimate party name. Optional, overrides platform creditor's name
     *
     * @return $this
     */
    public function setUltimatePartyName(?string $ultimate_party_name): static
    {
        if (is_null($ultimate_party_name)) {
            throw new InvalidArgumentException('non-nullable ultimate_party_name cannot be null');
        }
        $this->container['ultimate_party_name'] = $ultimate_party_name;

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


