<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @description Address of the Customer
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'administrative_region' => 'string',
        'country_code_iso' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string',
        'line4' => 'string',
        'line5' => 'string',
        'postcode' => 'string',
        'town_or_city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'administrative_region' => null,
        'country_code_iso' => null,
        'line1' => null,
        'line2' => null,
        'line3' => null,
        'line4' => null,
        'line5' => null,
        'postcode' => null,
        'town_or_city' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'administrative_region' => false,
        'country_code_iso' => false,
        'line1' => false,
        'line2' => false,
        'line3' => false,
        'line4' => false,
        'line5' => false,
        'postcode' => false,
        'town_or_city' => false
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
        'administrative_region' => 'administrativeRegion',
        'country_code_iso' => 'countryCodeIso',
        'line1' => 'line1',
        'line2' => 'line2',
        'line3' => 'line3',
        'line4' => 'line4',
        'line5' => 'line5',
        'postcode' => 'postcode',
        'town_or_city' => 'townOrCity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'administrative_region' => 'setAdministrativeRegion',
        'country_code_iso' => 'setCountryCodeIso',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'line4' => 'setLine4',
        'line5' => 'setLine5',
        'postcode' => 'setPostcode',
        'town_or_city' => 'setTownOrCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'administrative_region' => 'getAdministrativeRegion',
        'country_code_iso' => 'getCountryCodeIso',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'line4' => 'getLine4',
        'line5' => 'getLine5',
        'postcode' => 'getPostcode',
        'town_or_city' => 'getTownOrCity'
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
        $this->setIfExists('administrative_region', $data ?? [], null);
        $this->setIfExists('country_code_iso', $data ?? [], null);
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('line3', $data ?? [], null);
        $this->setIfExists('line4', $data ?? [], null);
        $this->setIfExists('line5', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('town_or_city', $data ?? [], null);
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

        if ($this->container['administrative_region'] === null) {
            $invalidProperties[] = "'administrative_region' can't be null";
        }
        if (!preg_match("/NSW|QLD|SA|TAS|VIC|WA|ACT|NT/", $this->container['administrative_region'])) {
            $invalidProperties[] = "invalid value for 'administrative_region', must be conform to the pattern /NSW|QLD|SA|TAS|VIC|WA|ACT|NT/.";
        }

        if ($this->container['country_code_iso'] === null) {
            $invalidProperties[] = "'country_code_iso' can't be null";
        }
        if ($this->container['line1'] === null) {
            $invalidProperties[] = "'line1' can't be null";
        }
        if ((mb_strlen($this->container['line1']) > 120)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be smaller than or equal to 120.";
        }

        if ((mb_strlen($this->container['line1']) < 0)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) > 120)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) < 0)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line3']) && (mb_strlen($this->container['line3']) > 120)) {
            $invalidProperties[] = "invalid value for 'line3', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['line3']) && (mb_strlen($this->container['line3']) < 0)) {
            $invalidProperties[] = "invalid value for 'line3', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line4']) && (mb_strlen($this->container['line4']) > 120)) {
            $invalidProperties[] = "invalid value for 'line4', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['line4']) && (mb_strlen($this->container['line4']) < 0)) {
            $invalidProperties[] = "invalid value for 'line4', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line5']) && (mb_strlen($this->container['line5']) > 120)) {
            $invalidProperties[] = "invalid value for 'line5', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['line5']) && (mb_strlen($this->container['line5']) < 0)) {
            $invalidProperties[] = "invalid value for 'line5', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ((mb_strlen($this->container['postcode']) > 10)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['postcode']) < 0)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['town_or_city'] === null) {
            $invalidProperties[] = "'town_or_city' can't be null";
        }
        if ((mb_strlen($this->container['town_or_city']) > 120)) {
            $invalidProperties[] = "invalid value for 'town_or_city', the character length must be smaller than or equal to 120.";
        }

        if ((mb_strlen($this->container['town_or_city']) < 0)) {
            $invalidProperties[] = "invalid value for 'town_or_city', the character length must be bigger than or equal to 0.";
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
     * Gets administrative_region
     *
     * @return string
     */
    public function getAdministrativeRegion(): string
    {
        return $this->container['administrative_region'];
    }

    /**
     * Sets administrative_region
     *
     * @param string $administrative_region Australian State or Territory. Possible values: (uppercase only)  * NSW  * QLD  * SA  * TAS  * VIC  * WA  * ACT  * NT
     *
     * @return $this
     */
    public function setAdministrativeRegion(string $administrative_region): static
    {
        if (is_null($administrative_region)) {
            throw new InvalidArgumentException('non-nullable administrative_region cannot be null');
        }

        if ((!preg_match("/NSW|QLD|SA|TAS|VIC|WA|ACT|NT/", ObjectSerializer::toString($administrative_region)))) {
            throw new InvalidArgumentException("invalid value for \$administrative_region when calling Address., must conform to the pattern /NSW|QLD|SA|TAS|VIC|WA|ACT|NT/.");
        }

        $this->container['administrative_region'] = $administrative_region;

        return $this;
    }

    /**
     * Gets country_code_iso
     *
     * @return string
     */
    public function getCountryCodeIso(): string
    {
        return $this->container['country_code_iso'];
    }

    /**
     * Sets country_code_iso
     *
     * @param string $country_code_iso Country as three letter code as per ISO 3166
     *
     * @return $this
     */
    public function setCountryCodeIso(string $country_code_iso): static
    {
        if (is_null($country_code_iso)) {
            throw new InvalidArgumentException('non-nullable country_code_iso cannot be null');
        }
        $this->container['country_code_iso'] = $country_code_iso;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string
     */
    public function getLine1(): string
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 Address line 1
     *
     * @return $this
     */
    public function setLine1(string $line1): static
    {
        if (is_null($line1)) {
            throw new InvalidArgumentException('non-nullable line1 cannot be null');
        }
        if ((mb_strlen($line1) > 120)) {
            throw new InvalidArgumentException('invalid length for $line1 when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($line1) < 0)) {
            throw new InvalidArgumentException('invalid length for $line1 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2(): ?string
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Address line 2
     *
     * @return $this
     */
    public function setLine2(?string $line2): static
    {
        if (is_null($line2)) {
            throw new InvalidArgumentException('non-nullable line2 cannot be null');
        }
        if ((mb_strlen($line2) > 120)) {
            throw new InvalidArgumentException('invalid length for $line2 when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($line2) < 0)) {
            throw new InvalidArgumentException('invalid length for $line2 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string|null
     */
    public function getLine3(): ?string
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string|null $line3 Address line 3
     *
     * @return $this
     */
    public function setLine3(?string $line3): static
    {
        if (is_null($line3)) {
            throw new InvalidArgumentException('non-nullable line3 cannot be null');
        }
        if ((mb_strlen($line3) > 120)) {
            throw new InvalidArgumentException('invalid length for $line3 when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($line3) < 0)) {
            throw new InvalidArgumentException('invalid length for $line3 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['line3'] = $line3;

        return $this;
    }

    /**
     * Gets line4
     *
     * @return string|null
     */
    public function getLine4(): ?string
    {
        return $this->container['line4'];
    }

    /**
     * Sets line4
     *
     * @param string|null $line4 Address line 4
     *
     * @return $this
     */
    public function setLine4(?string $line4): static
    {
        if (is_null($line4)) {
            throw new InvalidArgumentException('non-nullable line4 cannot be null');
        }
        if ((mb_strlen($line4) > 120)) {
            throw new InvalidArgumentException('invalid length for $line4 when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($line4) < 0)) {
            throw new InvalidArgumentException('invalid length for $line4 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['line4'] = $line4;

        return $this;
    }

    /**
     * Gets line5
     *
     * @return string|null
     */
    public function getLine5(): ?string
    {
        return $this->container['line5'];
    }

    /**
     * Sets line5
     *
     * @param string|null $line5 Address line 5
     *
     * @return $this
     */
    public function setLine5(?string $line5): static
    {
        if (is_null($line5)) {
            throw new InvalidArgumentException('non-nullable line5 cannot be null');
        }
        if ((mb_strlen($line5) > 120)) {
            throw new InvalidArgumentException('invalid length for $line5 when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($line5) < 0)) {
            throw new InvalidArgumentException('invalid length for $line5 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['line5'] = $line5;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode
     *
     * @return $this
     */
    public function setPostcode(string $postcode): static
    {
        if (is_null($postcode)) {
            throw new InvalidArgumentException('non-nullable postcode cannot be null');
        }
        if ((mb_strlen($postcode) > 10)) {
            throw new InvalidArgumentException('invalid length for $postcode when calling Address., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postcode) < 0)) {
            throw new InvalidArgumentException('invalid length for $postcode when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets town_or_city
     *
     * @return string
     */
    public function getTownOrCity(): string
    {
        return $this->container['town_or_city'];
    }

    /**
     * Sets town_or_city
     *
     * @param string $town_or_city Town or city
     *
     * @return $this
     */
    public function setTownOrCity(string $town_or_city): static
    {
        if (is_null($town_or_city)) {
            throw new InvalidArgumentException('non-nullable town_or_city cannot be null');
        }
        if ((mb_strlen($town_or_city) > 120)) {
            throw new InvalidArgumentException('invalid length for $town_or_city when calling Address., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($town_or_city) < 0)) {
            throw new InvalidArgumentException('invalid length for $town_or_city when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['town_or_city'] = $town_or_city;

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


