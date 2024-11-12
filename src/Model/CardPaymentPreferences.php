<?php
/**
 * CardPaymentPreferences
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
 * CardPaymentPreferences Class Doc Comment
 *
 * @description Card payment preferences.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CardPaymentPreferences implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CardPaymentPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'card_enabled' => 'bool',
        'card_not_present_enabled' => 'bool',
        'cash_withdrawal_enabled' => 'bool',
        'contactless_enabled' => 'bool',
        'magnetic_stripe_enabled' => 'bool',
        'mobile_wallet_payments_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'card_enabled' => null,
        'card_not_present_enabled' => null,
        'cash_withdrawal_enabled' => null,
        'contactless_enabled' => null,
        'magnetic_stripe_enabled' => null,
        'mobile_wallet_payments_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'card_enabled' => false,
        'card_not_present_enabled' => false,
        'cash_withdrawal_enabled' => false,
        'contactless_enabled' => false,
        'magnetic_stripe_enabled' => false,
        'mobile_wallet_payments_enabled' => false
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
        'card_enabled' => 'cardEnabled',
        'card_not_present_enabled' => 'cardNotPresentEnabled',
        'cash_withdrawal_enabled' => 'cashWithdrawalEnabled',
        'contactless_enabled' => 'contactlessEnabled',
        'magnetic_stripe_enabled' => 'magneticStripeEnabled',
        'mobile_wallet_payments_enabled' => 'mobileWalletPaymentsEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'card_enabled' => 'setCardEnabled',
        'card_not_present_enabled' => 'setCardNotPresentEnabled',
        'cash_withdrawal_enabled' => 'setCashWithdrawalEnabled',
        'contactless_enabled' => 'setContactlessEnabled',
        'magnetic_stripe_enabled' => 'setMagneticStripeEnabled',
        'mobile_wallet_payments_enabled' => 'setMobileWalletPaymentsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'card_enabled' => 'getCardEnabled',
        'card_not_present_enabled' => 'getCardNotPresentEnabled',
        'cash_withdrawal_enabled' => 'getCashWithdrawalEnabled',
        'contactless_enabled' => 'getContactlessEnabled',
        'magnetic_stripe_enabled' => 'getMagneticStripeEnabled',
        'mobile_wallet_payments_enabled' => 'getMobileWalletPaymentsEnabled'
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
        $this->setIfExists('card_enabled', $data ?? [], null);
        $this->setIfExists('card_not_present_enabled', $data ?? [], null);
        $this->setIfExists('cash_withdrawal_enabled', $data ?? [], null);
        $this->setIfExists('contactless_enabled', $data ?? [], null);
        $this->setIfExists('magnetic_stripe_enabled', $data ?? [], null);
        $this->setIfExists('mobile_wallet_payments_enabled', $data ?? [], null);
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
     * Gets card_enabled
     *
     * @return bool|null
     */
    public function getCardEnabled(): ?bool
    {
        return $this->container['card_enabled'];
    }

    /**
     * Sets card_enabled
     *
     * @param bool|null $card_enabled Physical card enablement status:  * **true**: enabled (unfrozen), allows physical card usage (default)  * **false**: disabled (frozen), prevents all physical card usage
     *
     * @return $this
     */
    public function setCardEnabled(?bool $card_enabled): static
    {
        if (is_null($card_enabled)) {
            throw new InvalidArgumentException('non-nullable card_enabled cannot be null');
        }
        $this->container['card_enabled'] = $card_enabled;

        return $this;
    }

    /**
     * Gets card_not_present_enabled
     *
     * @return bool|null
     */
    public function getCardNotPresentEnabled(): ?bool
    {
        return $this->container['card_not_present_enabled'];
    }

    /**
     * Sets card_not_present_enabled
     *
     * @param bool|null $card_not_present_enabled Online card not present payment enablement status:  * **true**: enabled  * **false**: disabled (default)
     *
     * @return $this
     */
    public function setCardNotPresentEnabled(?bool $card_not_present_enabled): static
    {
        if (is_null($card_not_present_enabled)) {
            throw new InvalidArgumentException('non-nullable card_not_present_enabled cannot be null');
        }
        $this->container['card_not_present_enabled'] = $card_not_present_enabled;

        return $this;
    }

    /**
     * Gets cash_withdrawal_enabled
     *
     * @return bool|null
     */
    public function getCashWithdrawalEnabled(): ?bool
    {
        return $this->container['cash_withdrawal_enabled'];
    }

    /**
     * Sets cash_withdrawal_enabled
     *
     * @param bool|null $cash_withdrawal_enabled ATM cash withdrawal enablement status:  * **true**: enabled  * **false**: disabled (default)
     *
     * @return $this
     */
    public function setCashWithdrawalEnabled(?bool $cash_withdrawal_enabled): static
    {
        if (is_null($cash_withdrawal_enabled)) {
            throw new InvalidArgumentException('non-nullable cash_withdrawal_enabled cannot be null');
        }
        $this->container['cash_withdrawal_enabled'] = $cash_withdrawal_enabled;

        return $this;
    }

    /**
     * Gets contactless_enabled
     *
     * @return bool|null
     */
    public function getContactlessEnabled(): ?bool
    {
        return $this->container['contactless_enabled'];
    }

    /**
     * Sets contactless_enabled
     *
     * @param bool|null $contactless_enabled Physical card contactless payment enablement status:  * **true**: enabled  * **false**: disabled (default)
     *
     * @return $this
     */
    public function setContactlessEnabled(?bool $contactless_enabled): static
    {
        if (is_null($contactless_enabled)) {
            throw new InvalidArgumentException('non-nullable contactless_enabled cannot be null');
        }
        $this->container['contactless_enabled'] = $contactless_enabled;

        return $this;
    }

    /**
     * Gets magnetic_stripe_enabled
     *
     * @return bool|null
     */
    public function getMagneticStripeEnabled(): ?bool
    {
        return $this->container['magnetic_stripe_enabled'];
    }

    /**
     * Sets magnetic_stripe_enabled
     *
     * @param bool|null $magnetic_stripe_enabled Physical card magnetic stripe payment enablement status:  * **true**: enabled  * **false**: disabled (default)
     *
     * @return $this
     */
    public function setMagneticStripeEnabled(?bool $magnetic_stripe_enabled): static
    {
        if (is_null($magnetic_stripe_enabled)) {
            throw new InvalidArgumentException('non-nullable magnetic_stripe_enabled cannot be null');
        }
        $this->container['magnetic_stripe_enabled'] = $magnetic_stripe_enabled;

        return $this;
    }

    /**
     * Gets mobile_wallet_payments_enabled
     *
     * @return bool|null
     */
    public function getMobileWalletPaymentsEnabled(): ?bool
    {
        return $this->container['mobile_wallet_payments_enabled'];
    }

    /**
     * Sets mobile_wallet_payments_enabled
     *
     * @param bool|null $mobile_wallet_payments_enabled Mobile wallet card payment enablement status:  * **true**: enabled (default)  * **false**: disabled
     *
     * @return $this
     */
    public function setMobileWalletPaymentsEnabled(?bool $mobile_wallet_payments_enabled): static
    {
        if (is_null($mobile_wallet_payments_enabled)) {
            throw new InvalidArgumentException('non-nullable mobile_wallet_payments_enabled cannot be null');
        }
        $this->container['mobile_wallet_payments_enabled'] = $mobile_wallet_payments_enabled;

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


