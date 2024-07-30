<?php
/**
 * GetMandateActionsDetailsAmendmentPaymentInformationDto
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
 * GetMandateActionsDetailsAmendmentPaymentInformationDto Class Doc Comment
 *
 * @description Set of characteristics enabling amendment of mandate payment information.
 * @package  Shaype\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetMandateActionsDetailsAmendmentPaymentInformationDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetMandateActionsDetailsAmendmentPaymentInformationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'amount' => '\Shaype\Client\Model\CurrencyAmountDto',
        'count_per_period' => 'string',
        'first_payment_amount' => '\Shaype\Client\Model\CurrencyAmountDto',
        'first_payment_date' => 'string',
        'last_payment_amount' => '\Shaype\Client\Model\CurrencyAmountDto',
        'last_payment_date' => 'string',
        'maximum_amount' => '\Shaype\Client\Model\CurrencyAmountDto',
        'payment_amount_type' => 'string',
        'payment_execute_not_before_time' => 'string',
        'payment_frequency' => 'string',
        'point_in_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amount' => null,
        'count_per_period' => null,
        'first_payment_amount' => null,
        'first_payment_date' => null,
        'last_payment_amount' => null,
        'last_payment_date' => null,
        'maximum_amount' => null,
        'payment_amount_type' => null,
        'payment_execute_not_before_time' => null,
        'payment_frequency' => null,
        'point_in_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'count_per_period' => false,
        'first_payment_amount' => false,
        'first_payment_date' => false,
        'last_payment_amount' => false,
        'last_payment_date' => false,
        'maximum_amount' => false,
        'payment_amount_type' => false,
        'payment_execute_not_before_time' => false,
        'payment_frequency' => false,
        'point_in_time' => false
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
        'count_per_period' => 'countPerPeriod',
        'first_payment_amount' => 'firstPaymentAmount',
        'first_payment_date' => 'firstPaymentDate',
        'last_payment_amount' => 'lastPaymentAmount',
        'last_payment_date' => 'lastPaymentDate',
        'maximum_amount' => 'maximumAmount',
        'payment_amount_type' => 'paymentAmountType',
        'payment_execute_not_before_time' => 'paymentExecuteNotBeforeTime',
        'payment_frequency' => 'paymentFrequency',
        'point_in_time' => 'pointInTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'count_per_period' => 'setCountPerPeriod',
        'first_payment_amount' => 'setFirstPaymentAmount',
        'first_payment_date' => 'setFirstPaymentDate',
        'last_payment_amount' => 'setLastPaymentAmount',
        'last_payment_date' => 'setLastPaymentDate',
        'maximum_amount' => 'setMaximumAmount',
        'payment_amount_type' => 'setPaymentAmountType',
        'payment_execute_not_before_time' => 'setPaymentExecuteNotBeforeTime',
        'payment_frequency' => 'setPaymentFrequency',
        'point_in_time' => 'setPointInTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'count_per_period' => 'getCountPerPeriod',
        'first_payment_amount' => 'getFirstPaymentAmount',
        'first_payment_date' => 'getFirstPaymentDate',
        'last_payment_amount' => 'getLastPaymentAmount',
        'last_payment_date' => 'getLastPaymentDate',
        'maximum_amount' => 'getMaximumAmount',
        'payment_amount_type' => 'getPaymentAmountType',
        'payment_execute_not_before_time' => 'getPaymentExecuteNotBeforeTime',
        'payment_frequency' => 'getPaymentFrequency',
        'point_in_time' => 'getPointInTime'
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

    public const PAYMENT_AMOUNT_TYPE_BALLOONFIXEDUSAGE_BASEDVARIABLE = 'BALLOON,FIXED,USAGE_BASED,VARIABLE';
    public const PAYMENT_FREQUENCY_ADHOCDAILYFORTNIGHTLYINTRA_DAYSEMI_ANNUALMONTHLYQUARTERLYWEEKLYANNUAL = 'ADHOC,DAILY,FORTNIGHTLY,INTRA_DAY,SEMI_ANNUAL,MONTHLY,QUARTERLY,WEEKLY,ANNUAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentAmountTypeAllowableValues()
    {
        return [
            self::PAYMENT_AMOUNT_TYPE_BALLOONFIXEDUSAGE_BASEDVARIABLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentFrequencyAllowableValues()
    {
        return [
            self::PAYMENT_FREQUENCY_ADHOCDAILYFORTNIGHTLYINTRA_DAYSEMI_ANNUALMONTHLYQUARTERLYWEEKLYANNUAL,
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
        $this->setIfExists('count_per_period', $data ?? [], null);
        $this->setIfExists('first_payment_amount', $data ?? [], null);
        $this->setIfExists('first_payment_date', $data ?? [], null);
        $this->setIfExists('last_payment_amount', $data ?? [], null);
        $this->setIfExists('last_payment_date', $data ?? [], null);
        $this->setIfExists('maximum_amount', $data ?? [], null);
        $this->setIfExists('payment_amount_type', $data ?? [], null);
        $this->setIfExists('payment_execute_not_before_time', $data ?? [], null);
        $this->setIfExists('payment_frequency', $data ?? [], null);
        $this->setIfExists('point_in_time', $data ?? [], null);
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

        if (!is_null($this->container['count_per_period']) && !preg_match("/^(?=.{1,19}$)[0-9]{0,19}(?:\\.[0-9]{0,18})?$/", $this->container['count_per_period'])) {
            $invalidProperties[] = "invalid value for 'count_per_period', must be conform to the pattern /^(?=.{1,19}$)[0-9]{0,19}(?:\\.[0-9]{0,18})?$/.";
        }

        if (!is_null($this->container['first_payment_date']) && !preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/", $this->container['first_payment_date'])) {
            $invalidProperties[] = "invalid value for 'first_payment_date', must be conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/.";
        }

        if (!is_null($this->container['last_payment_date']) && !preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/", $this->container['last_payment_date'])) {
            $invalidProperties[] = "invalid value for 'last_payment_date', must be conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/.";
        }

        $allowedValues = $this->getPaymentAmountTypeAllowableValues();
        if (!is_null($this->container['payment_amount_type']) && !in_array($this->container['payment_amount_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_amount_type', must be one of '%s'",
                $this->container['payment_amount_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payment_execute_not_before_time']) && !preg_match("/^(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)|(-)$/", $this->container['payment_execute_not_before_time'])) {
            $invalidProperties[] = "invalid value for 'payment_execute_not_before_time', must be conform to the pattern /^(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)|(-)$/.";
        }

        $allowedValues = $this->getPaymentFrequencyAllowableValues();
        if (!is_null($this->container['payment_frequency']) && !in_array($this->container['payment_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_frequency', must be one of '%s'",
                $this->container['payment_frequency'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['point_in_time']) && !preg_match("/^[0-9]{2}$/", $this->container['point_in_time'])) {
            $invalidProperties[] = "invalid value for 'point_in_time', must be conform to the pattern /^[0-9]{2}$/.";
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
     * @return \Shaype\Client\Model\CurrencyAmountDto|null
     */
    public function getAmount(): ?\Shaype\Client\Model\CurrencyAmountDto
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Shaype\Client\Model\CurrencyAmountDto|null $amount amount
     *
     * @return $this
     */
    public function setAmount(?\Shaype\Client\Model\CurrencyAmountDto $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets count_per_period
     *
     * @return string|null
     */
    public function getCountPerPeriod(): ?string
    {
        return $this->container['count_per_period'];
    }

    /**
     * Sets count_per_period
     *
     * @param string|null $count_per_period Qualifies the frequency in terms of the number of instructions to be created and processed during the specified period. If this property is set to '0' it means that the count per period has been cleared on the mandate.
     *
     * @return $this
     */
    public function setCountPerPeriod(?string $count_per_period): static
    {
        if (is_null($count_per_period)) {
            throw new InvalidArgumentException('non-nullable count_per_period cannot be null');
        }

        if ((!preg_match("/^(?=.{1,19}$)[0-9]{0,19}(?:\\.[0-9]{0,18})?$/", ObjectSerializer::toString($count_per_period)))) {
            throw new InvalidArgumentException("invalid value for \$count_per_period when calling GetMandateActionsDetailsAmendmentPaymentInformationDto., must conform to the pattern /^(?=.{1,19}$)[0-9]{0,19}(?:\\.[0-9]{0,18})?$/.");
        }

        $this->container['count_per_period'] = $count_per_period;

        return $this;
    }

    /**
     * Gets first_payment_amount
     *
     * @return \Shaype\Client\Model\CurrencyAmountDto|null
     */
    public function getFirstPaymentAmount(): ?\Shaype\Client\Model\CurrencyAmountDto
    {
        return $this->container['first_payment_amount'];
    }

    /**
     * Sets first_payment_amount
     *
     * @param \Shaype\Client\Model\CurrencyAmountDto|null $first_payment_amount first_payment_amount
     *
     * @return $this
     */
    public function setFirstPaymentAmount(?\Shaype\Client\Model\CurrencyAmountDto $first_payment_amount): static
    {
        if (is_null($first_payment_amount)) {
            throw new InvalidArgumentException('non-nullable first_payment_amount cannot be null');
        }
        $this->container['first_payment_amount'] = $first_payment_amount;

        return $this;
    }

    /**
     * Gets first_payment_date
     *
     * @return string|null
     */
    public function getFirstPaymentDate(): ?string
    {
        return $this->container['first_payment_date'];
    }

    /**
     * Sets first_payment_date
     *
     * @param string|null $first_payment_date Date of the first payment predefined in mandate. If this property is set to '1000-01-01' it means that the first payment date has been cleared on the mandate.
     *
     * @return $this
     */
    public function setFirstPaymentDate(?string $first_payment_date): static
    {
        if (is_null($first_payment_date)) {
            throw new InvalidArgumentException('non-nullable first_payment_date cannot be null');
        }

        if ((!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/", ObjectSerializer::toString($first_payment_date)))) {
            throw new InvalidArgumentException("invalid value for \$first_payment_date when calling GetMandateActionsDetailsAmendmentPaymentInformationDto., must conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/.");
        }

        $this->container['first_payment_date'] = $first_payment_date;

        return $this;
    }

    /**
     * Gets last_payment_amount
     *
     * @return \Shaype\Client\Model\CurrencyAmountDto|null
     */
    public function getLastPaymentAmount(): ?\Shaype\Client\Model\CurrencyAmountDto
    {
        return $this->container['last_payment_amount'];
    }

    /**
     * Sets last_payment_amount
     *
     * @param \Shaype\Client\Model\CurrencyAmountDto|null $last_payment_amount last_payment_amount
     *
     * @return $this
     */
    public function setLastPaymentAmount(?\Shaype\Client\Model\CurrencyAmountDto $last_payment_amount): static
    {
        if (is_null($last_payment_amount)) {
            throw new InvalidArgumentException('non-nullable last_payment_amount cannot be null');
        }
        $this->container['last_payment_amount'] = $last_payment_amount;

        return $this;
    }

    /**
     * Gets last_payment_date
     *
     * @return string|null
     */
    public function getLastPaymentDate(): ?string
    {
        return $this->container['last_payment_date'];
    }

    /**
     * Sets last_payment_date
     *
     * @param string|null $last_payment_date Date of the last payment predefined in mandate. If this property is set to '1000-01-01' it means that the last payment date has been cleared on the mandate.
     *
     * @return $this
     */
    public function setLastPaymentDate(?string $last_payment_date): static
    {
        if (is_null($last_payment_date)) {
            throw new InvalidArgumentException('non-nullable last_payment_date cannot be null');
        }

        if ((!preg_match("/^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/", ObjectSerializer::toString($last_payment_date)))) {
            throw new InvalidArgumentException("invalid value for \$last_payment_date when calling GetMandateActionsDetailsAmendmentPaymentInformationDto., must conform to the pattern /^(?:[1-9]\\d{3}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1\\d|2[0-8])|(?:0[13-9]|1[0-2])-(?:29|30)|(?:0[13578]|1[02])-31)|(?:[1-9]\\d(?:0[48]|[2468][048]|[13579][26])|(?:[2468][048]|[13579][26])00)-02-29)$/.");
        }

        $this->container['last_payment_date'] = $last_payment_date;

        return $this;
    }

    /**
     * Gets maximum_amount
     *
     * @return \Shaype\Client\Model\CurrencyAmountDto|null
     */
    public function getMaximumAmount(): ?\Shaype\Client\Model\CurrencyAmountDto
    {
        return $this->container['maximum_amount'];
    }

    /**
     * Sets maximum_amount
     *
     * @param \Shaype\Client\Model\CurrencyAmountDto|null $maximum_amount maximum_amount
     *
     * @return $this
     */
    public function setMaximumAmount(?\Shaype\Client\Model\CurrencyAmountDto $maximum_amount): static
    {
        if (is_null($maximum_amount)) {
            throw new InvalidArgumentException('non-nullable maximum_amount cannot be null');
        }
        $this->container['maximum_amount'] = $maximum_amount;

        return $this;
    }

    /**
     * Gets payment_amount_type
     *
     * @return string|null
     */
    public function getPaymentAmountType(): ?string
    {
        return $this->container['payment_amount_type'];
    }

    /**
     * Sets payment_amount_type
     *
     * @param string|null $payment_amount_type Identifies the mandate payment arrangement. If this property is set to 'ZZZZ' it means that the payment amount type has been cleared on the mandate. * **BALLOON**: Payment amount is fixed with large final payment amount. * **FIXED**: Payment amount is fixed. * **USAGE_BASED**: Payment amount is based on usage. * **VARIABLE**: Payment amount is variable.
     *
     * @return $this
     */
    public function setPaymentAmountType(?string $payment_amount_type): static
    {
        if (is_null($payment_amount_type)) {
            throw new InvalidArgumentException('non-nullable payment_amount_type cannot be null');
        }
        $allowedValues = $this->getPaymentAmountTypeAllowableValues();
        if (!in_array($payment_amount_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_amount_type', must be one of '%s'",
                    $payment_amount_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_amount_type'] = $payment_amount_type;

        return $this;
    }

    /**
     * Gets payment_execute_not_before_time
     *
     * @return string|null
     */
    public function getPaymentExecuteNotBeforeTime(): ?string
    {
        return $this->container['payment_execute_not_before_time'];
    }

    /**
     * Sets payment_execute_not_before_time
     *
     * @param string|null $payment_execute_not_before_time Indicates that each execution of the mandate payment should not occur before a given time of that execution day. If this property is set to '-' it means that the time has been cleared on the mandate.
     *
     * @return $this
     */
    public function setPaymentExecuteNotBeforeTime(?string $payment_execute_not_before_time): static
    {
        if (is_null($payment_execute_not_before_time)) {
            throw new InvalidArgumentException('non-nullable payment_execute_not_before_time cannot be null');
        }

        if ((!preg_match("/^(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)|(-)$/", ObjectSerializer::toString($payment_execute_not_before_time)))) {
            throw new InvalidArgumentException("invalid value for \$payment_execute_not_before_time when calling GetMandateActionsDetailsAmendmentPaymentInformationDto., must conform to the pattern /^(?:[01]\\d|2[0-3]):[0-5]\\d:[0-5]\\d(?:\\.[0-9]{1,3})?(?:Z)|(-)$/.");
        }

        $this->container['payment_execute_not_before_time'] = $payment_execute_not_before_time;

        return $this;
    }

    /**
     * Gets payment_frequency
     *
     * @return string|null
     */
    public function getPaymentFrequency(): ?string
    {
        return $this->container['payment_frequency'];
    }

    /**
     * Sets payment_frequency
     *
     * @param string|null $payment_frequency Regularity with which instructions are to be created and processed. * **ADHOC**: Event takes place on request or as necessary. * **DAILY**: Event takes place every day. * **FORTNIGHTLY**: Event takes place every two weeks. * **INTRA_DAY**: Event takes place several times a day. * **SEMI_ANNUAL**: Event takes place every six months or two times a year. * **MONTHLY**: Event takes place every month or once a month. * **QUARTERLY**: Event takes place every three months or four times a year. * **WEEKLY**: Event takes place once a week. * **ANNUAL**: Event takes place every year or once a year.
     *
     * @return $this
     */
    public function setPaymentFrequency(?string $payment_frequency): static
    {
        if (is_null($payment_frequency)) {
            throw new InvalidArgumentException('non-nullable payment_frequency cannot be null');
        }
        $allowedValues = $this->getPaymentFrequencyAllowableValues();
        if (!in_array($payment_frequency, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_frequency', must be one of '%s'",
                    $payment_frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_frequency'] = $payment_frequency;

        return $this;
    }

    /**
     * Gets point_in_time
     *
     * @return string|null
     */
    public function getPointInTime(): ?string
    {
        return $this->container['point_in_time'];
    }

    /**
     * Sets point_in_time
     *
     * @param string|null $point_in_time Qualifies the frequency in terms of an exact point in time or moment within the specified period. If this property is set to '00' it means that the point in time has been cleared on the mandate.
     *
     * @return $this
     */
    public function setPointInTime(?string $point_in_time): static
    {
        if (is_null($point_in_time)) {
            throw new InvalidArgumentException('non-nullable point_in_time cannot be null');
        }

        if ((!preg_match("/^[0-9]{2}$/", ObjectSerializer::toString($point_in_time)))) {
            throw new InvalidArgumentException("invalid value for \$point_in_time when calling GetMandateActionsDetailsAmendmentPaymentInformationDto., must conform to the pattern /^[0-9]{2}$/.");
        }

        $this->container['point_in_time'] = $point_in_time;

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


