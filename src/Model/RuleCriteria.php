<?php
/**
 * RuleCriteria
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
 * The version of the OpenAPI document: v1.22.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
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
 * RuleCriteria Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields for a set of inventory selection rules.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Required:&lt;/b&gt; When &lt;b&gt;inventoryCriterionType&lt;/b&gt; is set to &lt;code&gt;INVENTORY_BY_RULE&lt;/code&gt; or &lt;code&gt;INVENTORY_ANY&lt;/code&gt;.
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RuleCriteria implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RuleCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'excludeInventoryItems' => '\macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]',
        'excludeListingIds' => 'string[]',
        'markupInventoryItems' => '\macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]',
        'markupListingIds' => 'string[]',
        'selectionRules' => '\macropage\SDKs\ebay\rest\marketing\Model\SelectionRule[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'excludeInventoryItems' => null,
        'excludeListingIds' => null,
        'markupInventoryItems' => null,
        'markupListingIds' => null,
        'selectionRules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'excludeInventoryItems' => false,
        'excludeListingIds' => false,
        'markupInventoryItems' => false,
        'markupListingIds' => false,
        'selectionRules' => false
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
        'excludeInventoryItems' => 'excludeInventoryItems',
        'excludeListingIds' => 'excludeListingIds',
        'markupInventoryItems' => 'markupInventoryItems',
        'markupListingIds' => 'markupListingIds',
        'selectionRules' => 'selectionRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'excludeInventoryItems' => 'setExcludeInventoryItems',
        'excludeListingIds' => 'setExcludeListingIds',
        'markupInventoryItems' => 'setMarkupInventoryItems',
        'markupListingIds' => 'setMarkupListingIds',
        'selectionRules' => 'setSelectionRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'excludeInventoryItems' => 'getExcludeInventoryItems',
        'excludeListingIds' => 'getExcludeListingIds',
        'markupInventoryItems' => 'getMarkupInventoryItems',
        'markupListingIds' => 'getMarkupListingIds',
        'selectionRules' => 'getSelectionRules'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('excludeInventoryItems', $data ?? [], null);
        $this->setIfExists('excludeListingIds', $data ?? [], null);
        $this->setIfExists('markupInventoryItems', $data ?? [], null);
        $this->setIfExists('markupListingIds', $data ?? [], null);
        $this->setIfExists('selectionRules', $data ?? [], null);
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
     * Gets excludeInventoryItems
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]|null
     */
    public function getExcludeInventoryItems()
    {
        return $this->container['excludeInventoryItems'];
    }

    /**
     * Sets excludeInventoryItems
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]|null $excludeInventoryItems A list of seller inventory reference IDs to exclude from the discount.<br><p class=\"tablenote\"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items<br><br><b>Maximum SKU or custom label length:</b> 50 characters
     *
     * @return self
     */
    public function setExcludeInventoryItems($excludeInventoryItems)
    {
        if (is_null($excludeInventoryItems)) {
            throw new \InvalidArgumentException('non-nullable excludeInventoryItems cannot be null');
        }
        $this->container['excludeInventoryItems'] = $excludeInventoryItems;

        return $this;
    }

    /**
     * Gets excludeListingIds
     *
     * @return string[]|null
     */
    public function getExcludeListingIds()
    {
        return $this->container['excludeListingIds'];
    }

    /**
     * Sets excludeListingIds
     *
     * @param string[]|null $excludeListingIds A list of eBay listing IDs to exclude from the discount.  <br><br><p class=\"tablenote\"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
     *
     * @return self
     */
    public function setExcludeListingIds($excludeListingIds)
    {
        if (is_null($excludeListingIds)) {
            throw new \InvalidArgumentException('non-nullable excludeListingIds cannot be null');
        }
        $this->container['excludeListingIds'] = $excludeListingIds;

        return $this;
    }

    /**
     * Gets markupInventoryItems
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]|null
     */
    public function getMarkupInventoryItems()
    {
        return $this->container['markupInventoryItems'];
    }

    /**
     * Sets markupInventoryItems
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\InventoryItem[]|null $markupInventoryItems A list of SKUs to remove from a markdown discount. The listed SKUs are 'marked up' to their standard price after being part of the markdown discount.
     *
     * @return self
     */
    public function setMarkupInventoryItems($markupInventoryItems)
    {
        if (is_null($markupInventoryItems)) {
            throw new \InvalidArgumentException('non-nullable markupInventoryItems cannot be null');
        }
        $this->container['markupInventoryItems'] = $markupInventoryItems;

        return $this;
    }

    /**
     * Gets markupListingIds
     *
     * @return string[]|null
     */
    public function getMarkupListingIds()
    {
        return $this->container['markupListingIds'];
    }

    /**
     * Sets markupListingIds
     *
     * @param string[]|null $markupListingIds A list of listing IDs to remove from a markdown discount. The listed items are 'marked up' to their standard price after being part of the markdown discount.
     *
     * @return self
     */
    public function setMarkupListingIds($markupListingIds)
    {
        if (is_null($markupListingIds)) {
            throw new \InvalidArgumentException('non-nullable markupListingIds cannot be null');
        }
        $this->container['markupListingIds'] = $markupListingIds;

        return $this;
    }

    /**
     * Gets selectionRules
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\SelectionRule[]|null
     */
    public function getSelectionRules()
    {
        return $this->container['selectionRules'];
    }

    /**
     * Sets selectionRules
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\SelectionRule[]|null $selectionRules The container for the rules that select the items to be discounted.  <br><br><i>Required if </i> <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>. <br><br>For information on using the contained fields, see <a href= \"/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio \">Item discounts</a>.
     *
     * @return self
     */
    public function setSelectionRules($selectionRules)
    {
        if (is_null($selectionRules)) {
            throw new \InvalidArgumentException('non-nullable selectionRules cannot be null');
        }
        $this->container['selectionRules'] = $selectionRules;

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


