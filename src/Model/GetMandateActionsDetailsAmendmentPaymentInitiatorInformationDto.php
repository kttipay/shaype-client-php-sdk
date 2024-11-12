<?php
/**
 * GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto
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
 * GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto Class Doc Comment
 *
 * @description Information concerning a payment initiator party identified in the mandate.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'party_identification' => 'string',
        'party_identification_type_code' => 'string',
        'party_legal_name' => 'string',
        'party_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'party_identification' => null,
        'party_identification_type_code' => null,
        'party_legal_name' => null,
        'party_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'party_identification' => false,
        'party_identification_type_code' => false,
        'party_legal_name' => false,
        'party_name' => false
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
        'party_identification' => 'partyIdentification',
        'party_identification_type_code' => 'partyIdentificationTypeCode',
        'party_legal_name' => 'partyLegalName',
        'party_name' => 'partyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'party_identification' => 'setPartyIdentification',
        'party_identification_type_code' => 'setPartyIdentificationTypeCode',
        'party_legal_name' => 'setPartyLegalName',
        'party_name' => 'setPartyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'party_identification' => 'getPartyIdentification',
        'party_identification_type_code' => 'getPartyIdentificationTypeCode',
        'party_legal_name' => 'getPartyLegalName',
        'party_name' => 'getPartyName'
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

    public const PARTY_IDENTIFICATION_TYPE_CODE_ALIEN_REGISTRATION_NUMBERPASSPORT_NUMBERCUSTOMER_IDDRIVER_LICENSE_NUMBEREMPLOYEE_IDNATIONAL_IDENTITY_NUMBERSOCIAL_SECURITY_NUMBERTAX_IDBANK_PARTY_IDCENTRAL_BANK_IDCLEARING_IDCERTIFICATE_OF_INCORPORATION_NUMBERCOUNTRY_ID_CODEDATA_UNIVERSAL_NUMBERING_SYSTEMGS1_GLN_IDSIRENSIRETAUSTRALIAN_BUSINESS_NUMBERAUSTRALIAN_COMPANY_NUMBERLEGAL_ENTITY_ID = 'ALIEN_REGISTRATION_NUMBER,PASSPORT_NUMBER,CUSTOMER_ID,DRIVER_LICENSE_NUMBER,EMPLOYEE_ID,NATIONAL_IDENTITY_NUMBER,SOCIAL_SECURITY_NUMBER,TAX_ID,BANK_PARTY_ID,CENTRAL_BANK_ID,CLEARING_ID,CERTIFICATE_OF_INCORPORATION_NUMBER,COUNTRY_ID_CODE,DATA_UNIVERSAL_NUMBERING_SYSTEM,GS1GLN_ID,SIREN,SIRET,AUSTRALIAN_BUSINESS_NUMBER,AUSTRALIAN_COMPANY_NUMBER,LEGAL_ENTITY_ID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartyIdentificationTypeCodeAllowableValues()
    {
        return [
            self::PARTY_IDENTIFICATION_TYPE_CODE_ALIEN_REGISTRATION_NUMBERPASSPORT_NUMBERCUSTOMER_IDDRIVER_LICENSE_NUMBEREMPLOYEE_IDNATIONAL_IDENTITY_NUMBERSOCIAL_SECURITY_NUMBERTAX_IDBANK_PARTY_IDCENTRAL_BANK_IDCLEARING_IDCERTIFICATE_OF_INCORPORATION_NUMBERCOUNTRY_ID_CODEDATA_UNIVERSAL_NUMBERING_SYSTEMGS1_GLN_IDSIRENSIRETAUSTRALIAN_BUSINESS_NUMBERAUSTRALIAN_COMPANY_NUMBERLEGAL_ENTITY_ID,
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
        $this->setIfExists('party_identification', $data ?? [], null);
        $this->setIfExists('party_identification_type_code', $data ?? [], null);
        $this->setIfExists('party_legal_name', $data ?? [], null);
        $this->setIfExists('party_name', $data ?? [], null);
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

        if (!is_null($this->container['party_identification']) && !preg_match("/^[ -~]{1,35}$/", $this->container['party_identification'])) {
            $invalidProperties[] = "invalid value for 'party_identification', must be conform to the pattern /^[ -~]{1,35}$/.";
        }

        $allowedValues = $this->getPartyIdentificationTypeCodeAllowableValues();
        if (!is_null($this->container['party_identification_type_code']) && !in_array($this->container['party_identification_type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'party_identification_type_code', must be one of '%s'",
                $this->container['party_identification_type_code'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['party_legal_name']) && !preg_match("/^[ -~]{1,140}$/", $this->container['party_legal_name'])) {
            $invalidProperties[] = "invalid value for 'party_legal_name', must be conform to the pattern /^[ -~]{1,140}$/.";
        }

        if (!is_null($this->container['party_name']) && !preg_match("/^[ -~]{1,140}$/", $this->container['party_name'])) {
            $invalidProperties[] = "invalid value for 'party_name', must be conform to the pattern /^[ -~]{1,140}$/.";
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
     * Gets party_identification
     *
     * @return string|null
     */
    public function getPartyIdentification(): ?string
    {
        return $this->container['party_identification'];
    }

    /**
     * Sets party_identification
     *
     * @param string|null $party_identification Unique and unambiguous identification of the party.
     *
     * @return $this
     */
    public function setPartyIdentification(?string $party_identification): static
    {
        if (is_null($party_identification)) {
            throw new InvalidArgumentException('non-nullable party_identification cannot be null');
        }

        if ((!preg_match("/^[ -~]{1,35}$/", ObjectSerializer::toString($party_identification)))) {
            throw new InvalidArgumentException("invalid value for \$party_identification when calling GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto., must conform to the pattern /^[ -~]{1,35}$/.");
        }

        $this->container['party_identification'] = $party_identification;

        return $this;
    }

    /**
     * Gets party_identification_type_code
     *
     * @return string|null
     */
    public function getPartyIdentificationTypeCode(): ?string
    {
        return $this->container['party_identification_type_code'];
    }

    /**
     * Sets party_identification_type_code
     *
     * @param string|null $party_identification_type_code Code indicating the identification type of the party. * **ALIEN_REGISTRATION_NUMBER**: Alien Registration Number * **PASSPORT_NUMBER**: Passport Number * **CUSTOMER_ID**: Customer Identification Number * **DRIVER_LICENSE_NUMBER**: Drivers License Number * **EMPLOYEE_ID**: Employee Identification Number * **NATIONAL_IDENTITY_NUMBER**: National Identity Number * **SOCIAL_SECURITY_NUMBER**: Social Security Number * **TAX_ID**: Tax Identification Number * **BANK_PARTY_ID**: Bank Party Identification * **CENTRAL_BANK_ID**: Central Bank Identification Number * **CLEARING_ID**: Clearing Identification Number * **CERTIFICATE_OF_INCORPORATION_NUMBER**: Certificate Of Incorporation Number * **COUNTRY_ID_CODE**: Country Identification Code * **DATA_UNIVERSAL_NUMBERING_SYSTEM**: Data Universal Numbering System * **GS1GLN_ID**: GS1GLN Identifier * **SIREN**: SIREN * **SIRET**: SIRET * **AUSTRALIAN_BUSINESS_NUMBER**: Australian Business Number (ABN) * **AUSTRALIAN_COMPANY_NUMBER**: Australian Company Number (ACN) * **LEGAL_ENTITY_ID**: Legal Entity Identification (LEI)
     *
     * @return $this
     */
    public function setPartyIdentificationTypeCode(?string $party_identification_type_code): static
    {
        if (is_null($party_identification_type_code)) {
            throw new InvalidArgumentException('non-nullable party_identification_type_code cannot be null');
        }
        $allowedValues = $this->getPartyIdentificationTypeCodeAllowableValues();
        if (!in_array($party_identification_type_code, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'party_identification_type_code', must be one of '%s'",
                    $party_identification_type_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['party_identification_type_code'] = $party_identification_type_code;

        return $this;
    }

    /**
     * Gets party_legal_name
     *
     * @return string|null
     */
    public function getPartyLegalName(): ?string
    {
        return $this->container['party_legal_name'];
    }

    /**
     * Sets party_legal_name
     *
     * @param string|null $party_legal_name Name by which the party is legally known.
     *
     * @return $this
     */
    public function setPartyLegalName(?string $party_legal_name): static
    {
        if (is_null($party_legal_name)) {
            throw new InvalidArgumentException('non-nullable party_legal_name cannot be null');
        }

        if ((!preg_match("/^[ -~]{1,140}$/", ObjectSerializer::toString($party_legal_name)))) {
            throw new InvalidArgumentException("invalid value for \$party_legal_name when calling GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto., must conform to the pattern /^[ -~]{1,140}$/.");
        }

        $this->container['party_legal_name'] = $party_legal_name;

        return $this;
    }

    /**
     * Gets party_name
     *
     * @return string|null
     */
    public function getPartyName(): ?string
    {
        return $this->container['party_name'];
    }

    /**
     * Sets party_name
     *
     * @param string|null $party_name Name by which the party is known and which is usually used to identify that party.
     *
     * @return $this
     */
    public function setPartyName(?string $party_name): static
    {
        if (is_null($party_name)) {
            throw new InvalidArgumentException('non-nullable party_name cannot be null');
        }

        if ((!preg_match("/^[ -~]{1,140}$/", ObjectSerializer::toString($party_name)))) {
            throw new InvalidArgumentException("invalid value for \$party_name when calling GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto., must conform to the pattern /^[ -~]{1,140}$/.");
        }

        $this->container['party_name'] = $party_name;

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


