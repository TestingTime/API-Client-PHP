<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestingTime Public API
 *
 * Partners API to recruit test users with TestingTime programmatically
 *
 * OpenAPI spec version: 1.1.0
 * Contact: api-support@testingtime.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'method' => 'string',
'venue' => 'string',
'minutes' => 'float',
'title' => 'string',
'state' => 'string',
'location' => '\Swagger\Client\Model\OrderLocation',
'contact' => 'object',
'billing' => 'object',
'quote' => 'string',
'incentive' => 'object',
'locale' => 'string',
'slots' => '\Swagger\Client\Model\OrderSlots[]',
'users' => 'float',
'pool_secret' => 'string',
'countries' => 'string[]',
'nda' => 'object',
'languages' => 'string[]',
'languages_op' => 'string',
'min_age' => 'float',
'max_age' => 'float',
'gender_mix' => 'string',
'platform' => 'string',
'contact_via_type' => 'string',
'contact_via_details' => 'string',
'type' => 'string',
'link' => 'string',
'tags' => 'string[]',
'devices' => 'string[]',
'timezone' => 'string',
'screening' => '\Swagger\Client\Model\Screener[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'method' => null,
'venue' => null,
'minutes' => null,
'title' => null,
'state' => null,
'location' => null,
'contact' => null,
'billing' => null,
'quote' => null,
'incentive' => null,
'locale' => null,
'slots' => null,
'users' => null,
'pool_secret' => null,
'countries' => null,
'nda' => null,
'languages' => null,
'languages_op' => null,
'min_age' => null,
'max_age' => null,
'gender_mix' => null,
'platform' => null,
'contact_via_type' => null,
'contact_via_details' => null,
'type' => null,
'link' => null,
'tags' => null,
'devices' => null,
'timezone' => null,
'screening' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'method' => 'method',
'venue' => 'venue',
'minutes' => 'minutes',
'title' => 'title',
'state' => 'state',
'location' => 'location',
'contact' => 'contact',
'billing' => 'billing',
'quote' => 'quote',
'incentive' => 'incentive',
'locale' => 'locale',
'slots' => 'slots',
'users' => 'users',
'pool_secret' => 'poolSecret',
'countries' => 'countries',
'nda' => 'nda',
'languages' => 'languages',
'languages_op' => 'languagesOp',
'min_age' => 'minAge',
'max_age' => 'maxAge',
'gender_mix' => 'genderMix',
'platform' => 'platform',
'contact_via_type' => 'contactViaType',
'contact_via_details' => 'contactViaDetails',
'type' => 'type',
'link' => 'link',
'tags' => 'tags',
'devices' => 'devices',
'timezone' => 'timezone',
'screening' => 'screening'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
'venue' => 'setVenue',
'minutes' => 'setMinutes',
'title' => 'setTitle',
'state' => 'setState',
'location' => 'setLocation',
'contact' => 'setContact',
'billing' => 'setBilling',
'quote' => 'setQuote',
'incentive' => 'setIncentive',
'locale' => 'setLocale',
'slots' => 'setSlots',
'users' => 'setUsers',
'pool_secret' => 'setPoolSecret',
'countries' => 'setCountries',
'nda' => 'setNda',
'languages' => 'setLanguages',
'languages_op' => 'setLanguagesOp',
'min_age' => 'setMinAge',
'max_age' => 'setMaxAge',
'gender_mix' => 'setGenderMix',
'platform' => 'setPlatform',
'contact_via_type' => 'setContactViaType',
'contact_via_details' => 'setContactViaDetails',
'type' => 'setType',
'link' => 'setLink',
'tags' => 'setTags',
'devices' => 'setDevices',
'timezone' => 'setTimezone',
'screening' => 'setScreening'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
'venue' => 'getVenue',
'minutes' => 'getMinutes',
'title' => 'getTitle',
'state' => 'getState',
'location' => 'getLocation',
'contact' => 'getContact',
'billing' => 'getBilling',
'quote' => 'getQuote',
'incentive' => 'getIncentive',
'locale' => 'getLocale',
'slots' => 'getSlots',
'users' => 'getUsers',
'pool_secret' => 'getPoolSecret',
'countries' => 'getCountries',
'nda' => 'getNda',
'languages' => 'getLanguages',
'languages_op' => 'getLanguagesOp',
'min_age' => 'getMinAge',
'max_age' => 'getMaxAge',
'gender_mix' => 'getGenderMix',
'platform' => 'getPlatform',
'contact_via_type' => 'getContactViaType',
'contact_via_details' => 'getContactViaDetails',
'type' => 'getType',
'link' => 'getLink',
'tags' => 'getTags',
'devices' => 'getDevices',
'timezone' => 'getTimezone',
'screening' => 'getScreening'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const METHOD_USERTEST = 'USERTEST';
const METHOD_FOCUSGROUP = 'FOCUSGROUP';
const METHOD_WORKSHOP = 'WORKSHOP';
const METHOD_INTERVIEW = 'INTERVIEW';
const METHOD_SURVEY = 'SURVEY';
const METHOD_DIARY = 'DIARY';
const VENUE_REMOTE = 'REMOTE';
const VENUE_INHOUSE = 'INHOUSE';
const VENUE_INHOME = 'INHOME';
const STATE_OFFER = 'OFFER';
const STATE_RECRUITING = 'RECRUITING';
const STATE_DELETED = 'DELETED';
const LANGUAGES_OP__AND = 'AND';
const LANGUAGES_OP__OR = 'OR';
const GENDER_MIX_FEMALE = 'FEMALE';
const GENDER_MIX_MALE = 'MALE';
const GENDER_MIX_MIXED = 'MIXED';
const PLATFORM_APPLE = 'APPLE';
const PLATFORM_ANDROID = 'ANDROID';
const PLATFORM_WINDOWS = 'WINDOWS';
const PLATFORM_ANY = 'ANY';
const CONTACT_VIA_TYPE_LOOKBACK = 'LOOKBACK';
const CONTACT_VIA_TYPE_ZOOM = 'ZOOM';
const CONTACT_VIA_TYPE_SKYPE = 'SKYPE';
const CONTACT_VIA_TYPE_WHEREBY = 'WHEREBY';
const CONTACT_VIA_TYPE_OTHER = 'OTHER';
const TYPE_MODERATED = 'MODERATED';
const TYPE_UNMODERATED = 'UNMODERATED';
const DEVICES_COMPUTER = 'COMPUTER';
const DEVICES_TABLET = 'TABLET';
const DEVICES_PHONE = 'PHONE';
const DEVICES_WATCH = 'WATCH';
const DEVICES_ANY = 'ANY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_USERTEST,
self::METHOD_FOCUSGROUP,
self::METHOD_WORKSHOP,
self::METHOD_INTERVIEW,
self::METHOD_SURVEY,
self::METHOD_DIARY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVenueAllowableValues()
    {
        return [
            self::VENUE_REMOTE,
self::VENUE_INHOUSE,
self::VENUE_INHOME,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OFFER,
self::STATE_RECRUITING,
self::STATE_DELETED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguagesOpAllowableValues()
    {
        return [
            self::LANGUAGES_OP__AND,
self::LANGUAGES_OP__OR,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderMixAllowableValues()
    {
        return [
            self::GENDER_MIX_FEMALE,
self::GENDER_MIX_MALE,
self::GENDER_MIX_MIXED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_APPLE,
self::PLATFORM_ANDROID,
self::PLATFORM_WINDOWS,
self::PLATFORM_ANY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactViaTypeAllowableValues()
    {
        return [
            self::CONTACT_VIA_TYPE_LOOKBACK,
self::CONTACT_VIA_TYPE_ZOOM,
self::CONTACT_VIA_TYPE_SKYPE,
self::CONTACT_VIA_TYPE_WHEREBY,
self::CONTACT_VIA_TYPE_OTHER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MODERATED,
self::TYPE_UNMODERATED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDevicesAllowableValues()
    {
        return [
            self::DEVICES_COMPUTER,
self::DEVICES_TABLET,
self::DEVICES_PHONE,
self::DEVICES_WATCH,
self::DEVICES_ANY,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['minutes'] = isset($data['minutes']) ? $data['minutes'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['incentive'] = isset($data['incentive']) ? $data['incentive'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['slots'] = isset($data['slots']) ? $data['slots'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['pool_secret'] = isset($data['pool_secret']) ? $data['pool_secret'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['nda'] = isset($data['nda']) ? $data['nda'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['languages_op'] = isset($data['languages_op']) ? $data['languages_op'] : null;
        $this->container['min_age'] = isset($data['min_age']) ? $data['min_age'] : null;
        $this->container['max_age'] = isset($data['max_age']) ? $data['max_age'] : null;
        $this->container['gender_mix'] = isset($data['gender_mix']) ? $data['gender_mix'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['contact_via_type'] = isset($data['contact_via_type']) ? $data['contact_via_type'] : null;
        $this->container['contact_via_details'] = isset($data['contact_via_details']) ? $data['contact_via_details'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['devices'] = isset($data['devices']) ? $data['devices'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['screening'] = isset($data['screening']) ? $data['screening'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['venue'] === null) {
            $invalidProperties[] = "'venue' can't be null";
        }
        $allowedValues = $this->getVenueAllowableValues();
        if (!is_null($this->container['venue']) && !in_array($this->container['venue'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'venue', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['minutes'] === null) {
            $invalidProperties[] = "'minutes' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['languages'] === null) {
            $invalidProperties[] = "'languages' can't be null";
        }
        $allowedValues = $this->getLanguagesOpAllowableValues();
        if (!is_null($this->container['languages_op']) && !in_array($this->container['languages_op'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'languages_op', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderMixAllowableValues();
        if (!is_null($this->container['gender_mix']) && !in_array($this->container['gender_mix'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender_mix', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContactViaTypeAllowableValues();
        if (!is_null($this->container['contact_via_type']) && !in_array($this->container['contact_via_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contact_via_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets venue
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->container['venue'];
    }

    /**
     * Sets venue
     *
     * @param string $venue venue
     *
     * @return $this
     */
    public function setVenue($venue)
    {
        $allowedValues = $this->getVenueAllowableValues();
        if (!in_array($venue, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'venue', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['venue'] = $venue;

        return $this;
    }

    /**
     * Gets minutes
     *
     * @return float
     */
    public function getMinutes()
    {
        return $this->container['minutes'];
    }

    /**
     * Sets minutes
     *
     * @param float $minutes minutes
     *
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->container['minutes'] = $minutes;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Give the study an optional title. This will be shown in the dashboard. Here you could also add an identifier for your internal orderId or customerId
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\OrderLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\OrderLocation $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return object
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param object $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return object
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param object $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string $quote quote
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets incentive
     *
     * @return object
     */
    public function getIncentive()
    {
        return $this->container['incentive'];
    }

    /**
     * Sets incentive
     *
     * @param object $incentive incentive
     *
     * @return $this
     */
    public function setIncentive($incentive)
    {
        $this->container['incentive'] = $incentive;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The country specified in billing will take precedence over the country specified in this locale field
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets slots
     *
     * @return \Swagger\Client\Model\OrderSlots[]
     */
    public function getSlots()
    {
        return $this->container['slots'];
    }

    /**
     * Sets slots
     *
     * @param \Swagger\Client\Model\OrderSlots[] $slots slots
     *
     * @return $this
     */
    public function setSlots($slots)
    {
        $this->container['slots'] = $slots;

        return $this;
    }

    /**
     * Gets users
     *
     * @return float
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param float $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets pool_secret
     *
     * @return string
     */
    public function getPoolSecret()
    {
        return $this->container['pool_secret'];
    }

    /**
     * Sets pool_secret
     *
     * @param string $pool_secret pool_secret
     *
     * @return $this
     */
    public function setPoolSecret($pool_secret)
    {
        $this->container['pool_secret'] = $pool_secret;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[] $countries 2 digits ISO country code in lowercase. e.g. us, ch, de
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets nda
     *
     * @return object
     */
    public function getNda()
    {
        return $this->container['nda'];
    }

    /**
     * Sets nda
     *
     * @param object $nda nda
     *
     * @return $this
     */
    public function setNda($nda)
    {
        $this->container['nda'] = $nda;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param string[] $languages Languages the test is conducted in or prototype language. 2 digits ISO language code in lowercase. e.g. en, de fr
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets languages_op
     *
     * @return string
     */
    public function getLanguagesOp()
    {
        return $this->container['languages_op'];
    }

    /**
     * Sets languages_op
     *
     * @param string $languages_op languages_op
     *
     * @return $this
     */
    public function setLanguagesOp($languages_op)
    {
        $allowedValues = $this->getLanguagesOpAllowableValues();
        if (!is_null($languages_op) && !in_array($languages_op, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'languages_op', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['languages_op'] = $languages_op;

        return $this;
    }

    /**
     * Gets min_age
     *
     * @return float
     */
    public function getMinAge()
    {
        return $this->container['min_age'];
    }

    /**
     * Sets min_age
     *
     * @param float $min_age min_age
     *
     * @return $this
     */
    public function setMinAge($min_age)
    {
        $this->container['min_age'] = $min_age;

        return $this;
    }

    /**
     * Gets max_age
     *
     * @return float
     */
    public function getMaxAge()
    {
        return $this->container['max_age'];
    }

    /**
     * Sets max_age
     *
     * @param float $max_age max_age
     *
     * @return $this
     */
    public function setMaxAge($max_age)
    {
        $this->container['max_age'] = $max_age;

        return $this;
    }

    /**
     * Gets gender_mix
     *
     * @return string
     */
    public function getGenderMix()
    {
        return $this->container['gender_mix'];
    }

    /**
     * Sets gender_mix
     *
     * @param string $gender_mix If empty a random mix will be generated. Mixed means 50/50. FEMALE means female only.
     *
     * @return $this
     */
    public function setGenderMix($gender_mix)
    {
        $allowedValues = $this->getGenderMixAllowableValues();
        if (!is_null($gender_mix) && !in_array($gender_mix, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender_mix', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender_mix'] = $gender_mix;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform Operating system on the selected devices.
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($platform) && !in_array($platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'platform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets contact_via_type
     *
     * @return string
     */
    public function getContactViaType()
    {
        return $this->container['contact_via_type'];
    }

    /**
     * Sets contact_via_type
     *
     * @param string $contact_via_type contact_via_type
     *
     * @return $this
     */
    public function setContactViaType($contact_via_type)
    {
        $allowedValues = $this->getContactViaTypeAllowableValues();
        if (!is_null($contact_via_type) && !in_array($contact_via_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contact_via_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contact_via_type'] = $contact_via_type;

        return $this;
    }

    /**
     * Gets contact_via_details
     *
     * @return string
     */
    public function getContactViaDetails()
    {
        return $this->container['contact_via_details'];
    }

    /**
     * Sets contact_via_details
     *
     * @param string $contact_via_details contact_via_details
     *
     * @return $this
     */
    public function setContactViaDetails($contact_via_details)
    {
        $this->container['contact_via_details'] = $contact_via_details;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link The url where the participants are being sent to. Use {{PARTICIPANT_ID}} as a placeholder where we put a participants specific id if you need to different urls per user.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets devices
     *
     * @return string[]
     */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
     * Sets devices
     *
     * @param string[] $devices devices
     *
     * @return $this
     */
    public function setDevices($devices)
    {
        $allowedValues = $this->getDevicesAllowableValues();
        if (!is_null($devices) && array_diff($devices, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'devices', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['devices'] = $devices;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Time zone id, list can be found e.g. here: https://garygregory.wordpress.com/2013/06/18/what-are-the-java-timezone-ids/
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets screening
     *
     * @return \Swagger\Client\Model\Screener[]
     */
    public function getScreening()
    {
        return $this->container['screening'];
    }

    /**
     * Sets screening
     *
     * @param \Swagger\Client\Model\Screener[] $screening If you want additional screener questions to be answered. Put in here multiple questions/screener settings to filter the target group further.
     *
     * @return $this
     */
    public function setScreening($screening)
    {
        $this->container['screening'] = $screening;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
