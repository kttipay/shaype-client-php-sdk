<?php
/**
 * CreateHayCustomerRequestBody
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
 * CreateHayCustomerRequestBody Class Doc Comment
 *
 * @description Body of a request to create a customer
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateHayCustomerRequestBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateHayCustomerRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'address' => '\OpenAPI\Client\Model\Address',
        'customer_details' => '\OpenAPI\Client\Model\CustomerDetails',
        'customer_tier' => 'string',
        'email' => 'string',
        'external_customer_id' => 'string',
        'idempotency_key' => 'string',
        'identity_document_card_number' => 'string',
        'identity_document_issuing_country' => 'string',
        'identity_document_number' => 'string',
        'identity_document_region' => 'string',
        'identity_document_type' => 'string',
        'identity_verification_case_id' => 'string',
        'journey_id' => 'string',
        'phone_number' => '\OpenAPI\Client\Model\PhoneNumber',
        'skip_kyc' => 'bool',
        'tax_obligations' => '\OpenAPI\Client\Model\TaxObligation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'address' => null,
        'customer_details' => null,
        'customer_tier' => null,
        'email' => null,
        'external_customer_id' => null,
        'idempotency_key' => 'uuid',
        'identity_document_card_number' => null,
        'identity_document_issuing_country' => null,
        'identity_document_number' => null,
        'identity_document_region' => null,
        'identity_document_type' => null,
        'identity_verification_case_id' => 'uuid',
        'journey_id' => 'uuid',
        'phone_number' => null,
        'skip_kyc' => null,
        'tax_obligations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'address' => false,
        'customer_details' => false,
        'customer_tier' => false,
        'email' => false,
        'external_customer_id' => false,
        'idempotency_key' => false,
        'identity_document_card_number' => false,
        'identity_document_issuing_country' => false,
        'identity_document_number' => false,
        'identity_document_region' => false,
        'identity_document_type' => false,
        'identity_verification_case_id' => false,
        'journey_id' => false,
        'phone_number' => false,
        'skip_kyc' => false,
        'tax_obligations' => false
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
        'address' => 'address',
        'customer_details' => 'customerDetails',
        'customer_tier' => 'customerTier',
        'email' => 'email',
        'external_customer_id' => 'externalCustomerId',
        'idempotency_key' => 'idempotencyKey',
        'identity_document_card_number' => 'identityDocumentCardNumber',
        'identity_document_issuing_country' => 'identityDocumentIssuingCountry',
        'identity_document_number' => 'identityDocumentNumber',
        'identity_document_region' => 'identityDocumentRegion',
        'identity_document_type' => 'identityDocumentType',
        'identity_verification_case_id' => 'identityVerificationCaseId',
        'journey_id' => 'journeyId',
        'phone_number' => 'phoneNumber',
        'skip_kyc' => 'skipKyc',
        'tax_obligations' => 'taxObligations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'address' => 'setAddress',
        'customer_details' => 'setCustomerDetails',
        'customer_tier' => 'setCustomerTier',
        'email' => 'setEmail',
        'external_customer_id' => 'setExternalCustomerId',
        'idempotency_key' => 'setIdempotencyKey',
        'identity_document_card_number' => 'setIdentityDocumentCardNumber',
        'identity_document_issuing_country' => 'setIdentityDocumentIssuingCountry',
        'identity_document_number' => 'setIdentityDocumentNumber',
        'identity_document_region' => 'setIdentityDocumentRegion',
        'identity_document_type' => 'setIdentityDocumentType',
        'identity_verification_case_id' => 'setIdentityVerificationCaseId',
        'journey_id' => 'setJourneyId',
        'phone_number' => 'setPhoneNumber',
        'skip_kyc' => 'setSkipKyc',
        'tax_obligations' => 'setTaxObligations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'address' => 'getAddress',
        'customer_details' => 'getCustomerDetails',
        'customer_tier' => 'getCustomerTier',
        'email' => 'getEmail',
        'external_customer_id' => 'getExternalCustomerId',
        'idempotency_key' => 'getIdempotencyKey',
        'identity_document_card_number' => 'getIdentityDocumentCardNumber',
        'identity_document_issuing_country' => 'getIdentityDocumentIssuingCountry',
        'identity_document_number' => 'getIdentityDocumentNumber',
        'identity_document_region' => 'getIdentityDocumentRegion',
        'identity_document_type' => 'getIdentityDocumentType',
        'identity_verification_case_id' => 'getIdentityVerificationCaseId',
        'journey_id' => 'getJourneyId',
        'phone_number' => 'getPhoneNumber',
        'skip_kyc' => 'getSkipKyc',
        'tax_obligations' => 'getTaxObligations'
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

    public const CUSTOMER_TIER_FOUNDER = 'FOUNDER';
    public const CUSTOMER_TIER_STANDARD = 'STANDARD';
    public const CUSTOMER_TIER_PREMIUM = 'PREMIUM';
    public const IDENTITY_DOCUMENT_TYPE_DRIVING_LICENSE = 'DRIVING_LICENSE';
    public const IDENTITY_DOCUMENT_TYPE_PASSPORT = 'PASSPORT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerTierAllowableValues()
    {
        return [
            self::CUSTOMER_TIER_FOUNDER,
            self::CUSTOMER_TIER_STANDARD,
            self::CUSTOMER_TIER_PREMIUM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentityDocumentTypeAllowableValues()
    {
        return [
            self::IDENTITY_DOCUMENT_TYPE_DRIVING_LICENSE,
            self::IDENTITY_DOCUMENT_TYPE_PASSPORT,
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
        $this->setIfExists('customer_tier', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('external_customer_id', $data ?? [], null);
        $this->setIfExists('idempotency_key', $data ?? [], null);
        $this->setIfExists('identity_document_card_number', $data ?? [], null);
        $this->setIfExists('identity_document_issuing_country', $data ?? [], null);
        $this->setIfExists('identity_document_number', $data ?? [], null);
        $this->setIfExists('identity_document_region', $data ?? [], null);
        $this->setIfExists('identity_document_type', $data ?? [], null);
        $this->setIfExists('identity_verification_case_id', $data ?? [], null);
        $this->setIfExists('journey_id', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('skip_kyc', $data ?? [], null);
        $this->setIfExists('tax_obligations', $data ?? [], null);
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['customer_details'] === null) {
            $invalidProperties[] = "'customer_details' can't be null";
        }
        if ($this->container['customer_tier'] === null) {
            $invalidProperties[] = "'customer_tier' can't be null";
        }
        $allowedValues = $this->getCustomerTierAllowableValues();
        if (!is_null($this->container['customer_tier']) && !in_array($this->container['customer_tier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customer_tier', must be one of '%s'",
                $this->container['customer_tier'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (!is_null($this->container['external_customer_id']) && (mb_strlen($this->container['external_customer_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'external_customer_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['external_customer_id']) && (mb_strlen($this->container['external_customer_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'external_customer_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['idempotency_key'] === null) {
            $invalidProperties[] = "'idempotency_key' can't be null";
        }
        if (!is_null($this->container['identity_document_card_number']) && !preg_match("/^[a-zA-Z0-9]{6,10}$/", $this->container['identity_document_card_number'])) {
            $invalidProperties[] = "invalid value for 'identity_document_card_number', must be conform to the pattern /^[a-zA-Z0-9]{6,10}$/.";
        }

        if (!is_null($this->container['identity_document_region']) && !preg_match("/NSW|QLD|SA|TAS|VIC|WA|ACT|NT/", $this->container['identity_document_region'])) {
            $invalidProperties[] = "invalid value for 'identity_document_region', must be conform to the pattern /NSW|QLD|SA|TAS|VIC|WA|ACT|NT/.";
        }

        $allowedValues = $this->getIdentityDocumentTypeAllowableValues();
        if (!is_null($this->container['identity_document_type']) && !in_array($this->container['identity_document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'identity_document_type', must be one of '%s'",
                $this->container['identity_document_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
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
     * Gets address
     *
     * @return \OpenAPI\Client\Model\Address
     */
    public function getAddress(): \OpenAPI\Client\Model\Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress(\OpenAPI\Client\Model\Address $address): static
    {
        if (is_null($address)) {
            throw new InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \OpenAPI\Client\Model\CustomerDetails
     */
    public function getCustomerDetails(): \OpenAPI\Client\Model\CustomerDetails
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \OpenAPI\Client\Model\CustomerDetails $customer_details customer_details
     *
     * @return $this
     */
    public function setCustomerDetails(\OpenAPI\Client\Model\CustomerDetails $customer_details): static
    {
        if (is_null($customer_details)) {
            throw new InvalidArgumentException('non-nullable customer_details cannot be null');
        }
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets customer_tier
     *
     * @return string
     */
    public function getCustomerTier(): string
    {
        return $this->container['customer_tier'];
    }

    /**
     * Sets customer_tier
     *
     * @param string $customer_tier Customer tier, will be STANDARD unless additional tiers have been agreed as part of the product offering. Possible values:  * **FOUNDER**  * **STANDARD**  * **PREMIUM**
     *
     * @return $this
     */
    public function setCustomerTier(string $customer_tier): static
    {
        if (is_null($customer_tier)) {
            throw new InvalidArgumentException('non-nullable customer_tier cannot be null');
        }
        $allowedValues = $this->getCustomerTierAllowableValues();
        if (!in_array($customer_tier, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customer_tier', must be one of '%s'",
                    $customer_tier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_tier'] = $customer_tier;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of the Customer
     *
     * @return $this
     */
    public function setEmail(string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets external_customer_id
     *
     * @return string|null
     */
    public function getExternalCustomerId(): ?string
    {
        return $this->container['external_customer_id'];
    }

    /**
     * Sets external_customer_id
     *
     * @param string|null $external_customer_id Only applicable to Clients using their own Auth solution. This value will be included in the subject on the token which in turn will be used by Shaype to represent the customer Id on the external system. Max length is 64 characters.
     *
     * @return $this
     */
    public function setExternalCustomerId(?string $external_customer_id): static
    {
        if (is_null($external_customer_id)) {
            throw new InvalidArgumentException('non-nullable external_customer_id cannot be null');
        }
        if ((mb_strlen($external_customer_id) > 64)) {
            throw new InvalidArgumentException('invalid length for $external_customer_id when calling CreateHayCustomerRequestBody., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($external_customer_id) < 0)) {
            throw new InvalidArgumentException('invalid length for $external_customer_id when calling CreateHayCustomerRequestBody., must be bigger than or equal to 0.');
        }

        $this->container['external_customer_id'] = $external_customer_id;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string
     */
    public function getIdempotencyKey(): string
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string $idempotency_key Unique value (UUID) used to identify this request and used to recognise any subsequent retries
     *
     * @return $this
     */
    public function setIdempotencyKey(string $idempotency_key): static
    {
        if (is_null($idempotency_key)) {
            throw new InvalidArgumentException('non-nullable idempotency_key cannot be null');
        }
        $this->container['idempotency_key'] = $idempotency_key;

        return $this;
    }

    /**
     * Gets identity_document_card_number
     *
     * @return string|null
     */
    public function getIdentityDocumentCardNumber(): ?string
    {
        return $this->container['identity_document_card_number'];
    }

    /**
     * Sets identity_document_card_number
     *
     * @param string|null $identity_document_card_number Identity document card number. Between 6 to 10 characters which can be either just numeric or alphanumeric characters based on the state. Should be specified for Driver's Licenses that provide it.
     *
     * @return $this
     */
    public function setIdentityDocumentCardNumber(?string $identity_document_card_number): static
    {
        if (is_null($identity_document_card_number)) {
            throw new InvalidArgumentException('non-nullable identity_document_card_number cannot be null');
        }

        if ((!preg_match("/^[a-zA-Z0-9]{6,10}$/", ObjectSerializer::toString($identity_document_card_number)))) {
            throw new InvalidArgumentException("invalid value for \$identity_document_card_number when calling CreateHayCustomerRequestBody., must conform to the pattern /^[a-zA-Z0-9]{6,10}$/.");
        }

        $this->container['identity_document_card_number'] = $identity_document_card_number;

        return $this;
    }

    /**
     * Gets identity_document_issuing_country
     *
     * @return string|null
     */
    public function getIdentityDocumentIssuingCountry(): ?string
    {
        return $this->container['identity_document_issuing_country'];
    }

    /**
     * Sets identity_document_issuing_country
     *
     * @param string|null $identity_document_issuing_country Optional three-letter ISO country code of the customer's identity document issuing country.
     *
     * @return $this
     */
    public function setIdentityDocumentIssuingCountry(?string $identity_document_issuing_country): static
    {
        if (is_null($identity_document_issuing_country)) {
            throw new InvalidArgumentException('non-nullable identity_document_issuing_country cannot be null');
        }
        $this->container['identity_document_issuing_country'] = $identity_document_issuing_country;

        return $this;
    }

    /**
     * Gets identity_document_number
     *
     * @return string|null
     */
    public function getIdentityDocumentNumber(): ?string
    {
        return $this->container['identity_document_number'];
    }

    /**
     * Sets identity_document_number
     *
     * @param string|null $identity_document_number Number of the Customer's identity document (if supplied)
     *
     * @return $this
     */
    public function setIdentityDocumentNumber(?string $identity_document_number): static
    {
        if (is_null($identity_document_number)) {
            throw new InvalidArgumentException('non-nullable identity_document_number cannot be null');
        }
        $this->container['identity_document_number'] = $identity_document_number;

        return $this;
    }

    /**
     * Gets identity_document_region
     *
     * @return string|null
     */
    public function getIdentityDocumentRegion(): ?string
    {
        return $this->container['identity_document_region'];
    }

    /**
     * Sets identity_document_region
     *
     * @param string|null $identity_document_region Identity document region, one of: NSW, QLD, SA, TAS, VIC, WA, ACT, NT. (uppercase only) Should be specified for Driver's Licenses.
     *
     * @return $this
     */
    public function setIdentityDocumentRegion(?string $identity_document_region): static
    {
        if (is_null($identity_document_region)) {
            throw new InvalidArgumentException('non-nullable identity_document_region cannot be null');
        }

        if ((!preg_match("/NSW|QLD|SA|TAS|VIC|WA|ACT|NT/", ObjectSerializer::toString($identity_document_region)))) {
            throw new InvalidArgumentException("invalid value for \$identity_document_region when calling CreateHayCustomerRequestBody., must conform to the pattern /NSW|QLD|SA|TAS|VIC|WA|ACT|NT/.");
        }

        $this->container['identity_document_region'] = $identity_document_region;

        return $this;
    }

    /**
     * Gets identity_document_type
     *
     * @return string|null
     */
    public function getIdentityDocumentType(): ?string
    {
        return $this->container['identity_document_type'];
    }

    /**
     * Sets identity_document_type
     *
     * @param string|null $identity_document_type Type of Customer's identity document (if supplied). Possible values:  * **DRIVING_LICENSE**  * **PASSPORT**
     *
     * @return $this
     */
    public function setIdentityDocumentType(?string $identity_document_type): static
    {
        if (is_null($identity_document_type)) {
            throw new InvalidArgumentException('non-nullable identity_document_type cannot be null');
        }
        $allowedValues = $this->getIdentityDocumentTypeAllowableValues();
        if (!in_array($identity_document_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'identity_document_type', must be one of '%s'",
                    $identity_document_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identity_document_type'] = $identity_document_type;

        return $this;
    }

    /**
     * Gets identity_verification_case_id
     *
     * @return string|null
     */
    public function getIdentityVerificationCaseId(): ?string
    {
        return $this->container['identity_verification_case_id'];
    }

    /**
     * Sets identity_verification_case_id
     *
     * @param string|null $identity_verification_case_id Optional Identity Verification ID for the identity check
     *
     * @return $this
     */
    public function setIdentityVerificationCaseId(?string $identity_verification_case_id): static
    {
        if (is_null($identity_verification_case_id)) {
            throw new InvalidArgumentException('non-nullable identity_verification_case_id cannot be null');
        }
        $this->container['identity_verification_case_id'] = $identity_verification_case_id;

        return $this;
    }

    /**
     * Gets journey_id
     *
     * @return string|null
     * @deprecated
     */
    public function getJourneyId(): ?string
    {
        return $this->container['journey_id'];
    }

    /**
     * Sets journey_id
     *
     * @param string|null $journey_id Deprecated: Please do not use this field for customer creation, please refer to identityVerificationCaseId
     *
     * @return $this
     * @deprecated
     */
    public function setJourneyId(?string $journey_id): static
    {
        if (is_null($journey_id)) {
            throw new InvalidArgumentException('non-nullable journey_id cannot be null');
        }
        $this->container['journey_id'] = $journey_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return \OpenAPI\Client\Model\PhoneNumber
     */
    public function getPhoneNumber(): \OpenAPI\Client\Model\PhoneNumber
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param \OpenAPI\Client\Model\PhoneNumber $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber(\OpenAPI\Client\Model\PhoneNumber $phone_number): static
    {
        if (is_null($phone_number)) {
            throw new InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets skip_kyc
     *
     * @return bool|null
     */
    public function getSkipKyc(): ?bool
    {
        return $this->container['skip_kyc'];
    }

    /**
     * Sets skip_kyc
     *
     * @param bool|null $skip_kyc Only applicable to Clients using Shaype KYC solution. Used to bypass KYC checks for the Customer. Must only set as 'true' in agreed scenarios (i.e. permission to generate a dummy / test account has been granted).
     *
     * @return $this
     */
    public function setSkipKyc(?bool $skip_kyc): static
    {
        if (is_null($skip_kyc)) {
            throw new InvalidArgumentException('non-nullable skip_kyc cannot be null');
        }
        $this->container['skip_kyc'] = $skip_kyc;

        return $this;
    }

    /**
     * Gets tax_obligations
     *
     * @return \OpenAPI\Client\Model\TaxObligation[]|null
     */
    public function getTaxObligations(): ?array
    {
        return $this->container['tax_obligations'];
    }

    /**
     * Sets tax_obligations
     *
     * @param \OpenAPI\Client\Model\TaxObligation[]|null $tax_obligations Captures any foreign (outside Australia) tax obligations for the Customer
     *
     * @return $this
     */
    public function setTaxObligations(?array $tax_obligations): static
    {
        if (is_null($tax_obligations)) {
            throw new InvalidArgumentException('non-nullable tax_obligations cannot be null');
        }
        $this->container['tax_obligations'] = $tax_obligations;

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

