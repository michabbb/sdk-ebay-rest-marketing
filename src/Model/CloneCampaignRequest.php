<?php
/**
 * CloneCampaignRequest
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
 * CloneCampaignRequest Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields needed for a clone-campaign request.
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CloneCampaignRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CloneCampaignRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignName' => 'string',
        'endDate' => 'string',
        'fundingStrategy' => '\macropage\SDKs\ebay\rest\marketing\Model\FundingStrategy',
        'startDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaignName' => null,
        'endDate' => null,
        'fundingStrategy' => null,
        'startDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'campaignName' => false,
        'endDate' => false,
        'fundingStrategy' => false,
        'startDate' => false
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
        'campaignName' => 'campaignName',
        'endDate' => 'endDate',
        'fundingStrategy' => 'fundingStrategy',
        'startDate' => 'startDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignName' => 'setCampaignName',
        'endDate' => 'setEndDate',
        'fundingStrategy' => 'setFundingStrategy',
        'startDate' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignName' => 'getCampaignName',
        'endDate' => 'getEndDate',
        'fundingStrategy' => 'getFundingStrategy',
        'startDate' => 'getStartDate'
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
        $this->setIfExists('campaignName', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('fundingStrategy', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
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
     * Gets campaignName
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string|null $campaignName A seller-defined name for the newly-cloned campaign. This value must be unique for the seller.<br><br>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.<br><br><b>Max length: </b>80 characters
     *
     * @return self
     */
    public function setCampaignName($campaignName)
    {
        if (is_null($campaignName)) {
            throw new \InvalidArgumentException('non-nullable campaignName cannot be null');
        }
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href=\"/api-docs/sell/marketing/resources/campaign/methods/endCampaign\">endCampaign</a> call, or if they update the campaign at a later time with an end date.
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets fundingStrategy
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\FundingStrategy|null
     */
    public function getFundingStrategy()
    {
        return $this->container['fundingStrategy'];
    }

    /**
     * Sets fundingStrategy
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\FundingStrategy|null $fundingStrategy fundingStrategy
     *
     * @return self
     */
    public function setFundingStrategy($fundingStrategy)
    {
        if (is_null($fundingStrategy)) {
            throw new \InvalidArgumentException('non-nullable fundingStrategy cannot be null');
        }
        $this->container['fundingStrategy'] = $fundingStrategy;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string|null $startDate The date and time the cloned campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <b>getCampaign</b> to check the status of the campaign.</p>
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

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


