<?php
/**
 * FundingStrategy
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, refer to the <a href=\"/api-docs/sell/static/marketing/pl-landing.html\">Promoted Listings playbook</a>.</li><li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p><p><b>Store Email Campaign</b> allows sellers to create and send email campaigns to customers who have signed up to receive their newsletter. For more information on email campaigns, see <a href=\"/api-docs/sell/static/marketing/store-email-campaigns.html#email-campain-types\" target=\"_blank\">Store Email Campaigns</a>.<p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.21.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\marketing\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\marketing\ObjectSerializer;

/**
 * FundingStrategy Class Doc Comment
 *
 * @category Class
 * @description This type defines how the Promoted Listings fee is calculated for a Promoted Listings ad campaign.
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FundingStrategy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FundingStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adRateStrategy' => 'string',
        'biddingStrategy' => 'string',
        'bidPercentage' => 'string',
        'bidPreferences' => '\macropage\SDKs\ebay\rest\marketing\Model\BidPreference[]',
        'dynamicAdRatePreferences' => '\macropage\SDKs\ebay\rest\marketing\Model\DynamicAdRatePreference[]',
        'fundingModel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adRateStrategy' => null,
        'biddingStrategy' => null,
        'bidPercentage' => null,
        'bidPreferences' => null,
        'dynamicAdRatePreferences' => null,
        'fundingModel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adRateStrategy' => false,
        'biddingStrategy' => false,
        'bidPercentage' => false,
        'bidPreferences' => false,
        'dynamicAdRatePreferences' => false,
        'fundingModel' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'adRateStrategy' => 'adRateStrategy',
        'biddingStrategy' => 'biddingStrategy',
        'bidPercentage' => 'bidPercentage',
        'bidPreferences' => 'bidPreferences',
        'dynamicAdRatePreferences' => 'dynamicAdRatePreferences',
        'fundingModel' => 'fundingModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adRateStrategy' => 'setAdRateStrategy',
        'biddingStrategy' => 'setBiddingStrategy',
        'bidPercentage' => 'setBidPercentage',
        'bidPreferences' => 'setBidPreferences',
        'dynamicAdRatePreferences' => 'setDynamicAdRatePreferences',
        'fundingModel' => 'setFundingModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adRateStrategy' => 'getAdRateStrategy',
        'biddingStrategy' => 'getBiddingStrategy',
        'bidPercentage' => 'getBidPercentage',
        'bidPreferences' => 'getBidPreferences',
        'dynamicAdRatePreferences' => 'getDynamicAdRatePreferences',
        'fundingModel' => 'getFundingModel'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('adRateStrategy', $data ?? [], null);
        $this->setIfExists('biddingStrategy', $data ?? [], null);
        $this->setIfExists('bidPercentage', $data ?? [], null);
        $this->setIfExists('bidPreferences', $data ?? [], null);
        $this->setIfExists('dynamicAdRatePreferences', $data ?? [], null);
        $this->setIfExists('fundingModel', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets adRateStrategy
     *
     * @return string|null
     */
    public function getAdRateStrategy()
    {
        return $this->container['adRateStrategy'];
    }

    /**
     * Sets adRateStrategy
     *
     * @param string|null $adRateStrategy This field is used to set the ad rate strategy for a Cost Per Sale (CPS) campaign.<br><br>The default value for this field is <code>FIXED</code>. If this field is omitted, the default value will be used.<br><br><span class=\"tablenote\"><b>Note:</b> This field is not applicable for Cost Per Click (CPC) or Offsite Ads campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdRateStrategyEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAdRateStrategy($adRateStrategy)
    {
        if (is_null($adRateStrategy)) {
            throw new \InvalidArgumentException('non-nullable adRateStrategy cannot be null');
        }
        $this->container['adRateStrategy'] = $adRateStrategy;

        return $this;
    }

    /**
     * Gets biddingStrategy
     *
     * @return string|null
     */
    public function getBiddingStrategy()
    {
        return $this->container['biddingStrategy'];
    }

    /**
     * Sets biddingStrategy
     *
     * @param string|null $biddingStrategy Indicates the bidding strategy for an onsite Cost Per Click (CPC) campaign that uses manual targeting.<br><br><span class=\"tablenote\"><b>Note:</b> This field is not applicable for smart targeting campaigns.</span><br>Valid values are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay manages the campaign's keyword bids and automatically updates them daily to the suggested bid.<br><br><span class=\"tablenote\"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul><br><b>Default value:</b> FIXED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:BiddingStrategyEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setBiddingStrategy($biddingStrategy)
    {
        if (is_null($biddingStrategy)) {
            throw new \InvalidArgumentException('non-nullable biddingStrategy cannot be null');
        }
        $this->container['biddingStrategy'] = $biddingStrategy;

        return $this;
    }

    /**
     * Gets bidPercentage
     *
     * @return string|null
     */
    public function getBidPercentage()
    {
        return $this->container['bidPercentage'];
    }

    /**
     * Sets bidPercentage
     *
     * @param string|null $bidPercentage The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul>This is the default bid percentage for the campaigns using the Cost Per Sale (CPS) funding model, and this value will be overridden by any ads in the campaign that have their own set bid percentages.<br /><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br /><br /><span class=\"tablenote\"><b>Note:</b>This field is only relevant for campaigns that use the CPS funding model and a fixed ad rate. It is not used for campaigns that use the Cost Per Click (CPC) funding model and should not be provided when the selected adRateStrategy for the campaign is dynamic.</span><br><br><span class=\"tablenote\"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     *
     * @return self
     */
    public function setBidPercentage($bidPercentage)
    {
        if (is_null($bidPercentage)) {
            throw new \InvalidArgumentException('non-nullable bidPercentage cannot be null');
        }
        $this->container['bidPercentage'] = $bidPercentage;

        return $this;
    }

    /**
     * Gets bidPreferences
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\BidPreference[]|null
     */
    public function getBidPreferences()
    {
        return $this->container['bidPreferences'];
    }

    /**
     * Sets bidPreferences
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\BidPreference[]|null $bidPreferences This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class=\"tablenote\"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
     *
     * @return self
     */
    public function setBidPreferences($bidPreferences)
    {
        if (is_null($bidPreferences)) {
            throw new \InvalidArgumentException('non-nullable bidPreferences cannot be null');
        }
        $this->container['bidPreferences'] = $bidPreferences;

        return $this;
    }

    /**
     * Gets dynamicAdRatePreferences
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\DynamicAdRatePreference[]|null
     */
    public function getDynamicAdRatePreferences()
    {
        return $this->container['dynamicAdRatePreferences'];
    }

    /**
     * Sets dynamicAdRatePreferences
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\DynamicAdRatePreference[]|null $dynamicAdRatePreferences A field that indicates whether a single, user-defined bid percentage (also known as the <i>ad rate</i>) should be used, or whether eBay should automatically adjust listings to maintain the daily suggested bid percentage.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Dynamic adjustment is only applicable when the <b>adRateStrategy</b> is set to <code>DYNAMIC</code> This field is not applicable for Offsite Ads campaigns.</span><br /><b>Default:</b> <code>FIXED</code>
     *
     * @return self
     */
    public function setDynamicAdRatePreferences($dynamicAdRatePreferences)
    {
        if (is_null($dynamicAdRatePreferences)) {
            throw new \InvalidArgumentException('non-nullable dynamicAdRatePreferences cannot be null');
        }
        $this->container['dynamicAdRatePreferences'] = $dynamicAdRatePreferences;

        return $this;
    }

    /**
     * Gets fundingModel
     *
     * @return string|null
     */
    public function getFundingModel()
    {
        return $this->container['fundingModel'];
    }

    /**
     * Sets fundingModel
     *
     * @param string|null $fundingModel Indicates the model that eBay uses to calculate the Promoted Listings fee. <p>For a description of the funding model types, refer to <b>FundingModelTypeEnum</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:FundingModelEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFundingModel($fundingModel)
    {
        if (is_null($fundingModel)) {
            throw new \InvalidArgumentException('non-nullable fundingModel cannot be null');
        }
        $this->container['fundingModel'] = $fundingModel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


