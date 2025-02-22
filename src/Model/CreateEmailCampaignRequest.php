<?php
/**
 * CreateEmailCampaignRequest
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
 * CreateEmailCampaignRequest Class Doc Comment
 *
 * @category Class
 * @description create email campaign request payload
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateEmailCampaignRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateEmailCampaignRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audienceCodes' => 'string[]',
        'categoryId' => 'string',
        'categoryType' => 'string',
        'emailCampaignType' => 'string',
        'itemIds' => 'string[]',
        'itemSelectMode' => 'string',
        'personalizedMessage' => 'string',
        'priceRange' => '\macropage\SDKs\ebay\rest\marketing\Model\PriceRange',
        'promotionId' => 'string',
        'promotionSelectModeEnum' => 'string',
        'scheduleDate' => 'string',
        'sort' => 'string',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audienceCodes' => null,
        'categoryId' => null,
        'categoryType' => null,
        'emailCampaignType' => null,
        'itemIds' => null,
        'itemSelectMode' => null,
        'personalizedMessage' => null,
        'priceRange' => null,
        'promotionId' => null,
        'promotionSelectModeEnum' => null,
        'scheduleDate' => null,
        'sort' => null,
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audienceCodes' => false,
        'categoryId' => false,
        'categoryType' => false,
        'emailCampaignType' => false,
        'itemIds' => false,
        'itemSelectMode' => false,
        'personalizedMessage' => false,
        'priceRange' => false,
        'promotionId' => false,
        'promotionSelectModeEnum' => false,
        'scheduleDate' => false,
        'sort' => false,
        'subject' => false
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
        'audienceCodes' => 'audienceCodes',
        'categoryId' => 'categoryId',
        'categoryType' => 'categoryType',
        'emailCampaignType' => 'emailCampaignType',
        'itemIds' => 'itemIds',
        'itemSelectMode' => 'itemSelectMode',
        'personalizedMessage' => 'personalizedMessage',
        'priceRange' => 'priceRange',
        'promotionId' => 'promotionId',
        'promotionSelectModeEnum' => 'promotionSelectModeEnum',
        'scheduleDate' => 'scheduleDate',
        'sort' => 'sort',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceCodes' => 'setAudienceCodes',
        'categoryId' => 'setCategoryId',
        'categoryType' => 'setCategoryType',
        'emailCampaignType' => 'setEmailCampaignType',
        'itemIds' => 'setItemIds',
        'itemSelectMode' => 'setItemSelectMode',
        'personalizedMessage' => 'setPersonalizedMessage',
        'priceRange' => 'setPriceRange',
        'promotionId' => 'setPromotionId',
        'promotionSelectModeEnum' => 'setPromotionSelectModeEnum',
        'scheduleDate' => 'setScheduleDate',
        'sort' => 'setSort',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceCodes' => 'getAudienceCodes',
        'categoryId' => 'getCategoryId',
        'categoryType' => 'getCategoryType',
        'emailCampaignType' => 'getEmailCampaignType',
        'itemIds' => 'getItemIds',
        'itemSelectMode' => 'getItemSelectMode',
        'personalizedMessage' => 'getPersonalizedMessage',
        'priceRange' => 'getPriceRange',
        'promotionId' => 'getPromotionId',
        'promotionSelectModeEnum' => 'getPromotionSelectModeEnum',
        'scheduleDate' => 'getScheduleDate',
        'sort' => 'getSort',
        'subject' => 'getSubject'
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
        $this->setIfExists('audienceCodes', $data ?? [], null);
        $this->setIfExists('categoryId', $data ?? [], null);
        $this->setIfExists('categoryType', $data ?? [], null);
        $this->setIfExists('emailCampaignType', $data ?? [], null);
        $this->setIfExists('itemIds', $data ?? [], null);
        $this->setIfExists('itemSelectMode', $data ?? [], null);
        $this->setIfExists('personalizedMessage', $data ?? [], null);
        $this->setIfExists('priceRange', $data ?? [], null);
        $this->setIfExists('promotionId', $data ?? [], null);
        $this->setIfExists('promotionSelectModeEnum', $data ?? [], null);
        $this->setIfExists('scheduleDate', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
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
     * Gets audienceCodes
     *
     * @return string[]|null
     */
    public function getAudienceCodes()
    {
        return $this->container['audienceCodes'];
    }

    /**
     * Sets audienceCodes
     *
     * @param string[]|null $audienceCodes An array of audience codes for the audiences of the email campaign. At least one audience code is required. There is no upper limit to the number of audience codes.<br><br>To retrieve seller audiences, call <a href=\"/api-docs/sell/marketing/resources/email_campaign/methods/getAudiences\" target=\"_blank\">getAudiences</a>. Use the <b>code</b> values in the response to populate <b>audienceCodes</b>.
     *
     * @return self
     */
    public function setAudienceCodes($audienceCodes)
    {
        if (is_null($audienceCodes)) {
            throw new \InvalidArgumentException('non-nullable audienceCodes cannot be null');
        }
        $this->container['audienceCodes'] = $audienceCodes;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId The unique identifier of either an eBay category or a store category.<br><br>This field is used if a seller wants to apply an email campaign to a specific eBay category or store category. The <b>categoryType</b> determines whether the <b>categoryId</b> value is an eBay category or store category.<br><br>To retrieve eBay categories, use the <a href=\"https://developer.ebay.com/devzone/xml/docs/reference/ebay/GetCategories.html\" target=\"_blank\">getCategories</a> or Taxonomy API. To retrieve seller store categories, use the <a href=\"https://developer.ebay.com/devzone/xml/docs/reference/ebay/GetStore.html\" target=\"_blank\">getStore</a> call. Use the <b>categoryId</b> value of the desired category from the results as the value in the request.<br><br><b>itemSelectMode</b> must be set to <code>AUTO</code> in order to use a category ID.
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            throw new \InvalidArgumentException('non-nullable categoryId cannot be null');
        }
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets categoryType
     *
     * @return string|null
     */
    public function getCategoryType()
    {
        return $this->container['categoryType'];
    }

    /**
     * Sets categoryType
     *
     * @param string|null $categoryType This field must be set when applying an email campaign to a specific eBay category or store category. The enumeration value used indicates which type of category the <b>categoryId</b> belongs to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCategoryType($categoryType)
    {
        if (is_null($categoryType)) {
            throw new \InvalidArgumentException('non-nullable categoryType cannot be null');
        }
        $this->container['categoryType'] = $categoryType;

        return $this;
    }

    /**
     * Gets emailCampaignType
     *
     * @return string|null
     */
    public function getEmailCampaignType()
    {
        return $this->container['emailCampaignType'];
    }

    /**
     * Sets emailCampaignType
     *
     * @param string|null $emailCampaignType The email campaign type of the email campaign being created. There are six <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\">email campaigns</a> that a user can create:<ul><li><code>WELCOME</code> - an email sent automatically to new subscribers.</li><li><code>ITEM_SHOWCASE</code> - an email featuring new products & collections that the seller wants to highlight.</li><li><code>COUPON</code> - an email containing a coupon code and up to 4 items that this coupon can be applied to.</li><li><code>ORDER_DISCOUNT</code> - an email containing an order discount and up to 10 items that this discount can be applied to.</li><li><code>SALE_EVENT</code> - an email about a sale event and up to 10 items that the sale can be applied to.</li><li><code>VOLUME_PRICING</code> - an email containing up to 10 items that are eligible for volume pricing.</li></ul><br><span class=\"tablenote\"><b>Note:</b> <b>emailCampaignType</b> cannot be updated once the email campaign is created.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setEmailCampaignType($emailCampaignType)
    {
        if (is_null($emailCampaignType)) {
            throw new \InvalidArgumentException('non-nullable emailCampaignType cannot be null');
        }
        $this->container['emailCampaignType'] = $emailCampaignType;

        return $this;
    }

    /**
     * Gets itemIds
     *
     * @return string[]|null
     */
    public function getItemIds()
    {
        return $this->container['itemIds'];
    }

    /**
     * Sets itemIds
     *
     * @param string[]|null $itemIds An array of unique identifiers for the listings displayed in an email campaign. Used if the seller wishes to select the eBay listings in the email campaign rather than have eBay automatically select them. <br><br>Call <a href=\"/DevZone/XML/docs/Reference/eBay/GetSellerList.html#GetSellerList\">getSellerList</a> to retrieve all seller listings. Each <b>Item</b> result contains an <b>ItemID</b> value. Use this value in <b>itemIds</b> to feature that listing.<br><br>The maximum number of <b>itemIds</b> for the <code>COUPON</code> campaign type is 4, and for every other campaign type is 10<br><br><b>itemSelectMode</b> must be set to <code>MANUAL</code> in order to use this field.
     *
     * @return self
     */
    public function setItemIds($itemIds)
    {
        if (is_null($itemIds)) {
            throw new \InvalidArgumentException('non-nullable itemIds cannot be null');
        }
        $this->container['itemIds'] = $itemIds;

        return $this;
    }

    /**
     * Gets itemSelectMode
     *
     * @return string|null
     */
    public function getItemSelectMode()
    {
        return $this->container['itemSelectMode'];
    }

    /**
     * Sets itemSelectMode
     *
     * @param string|null $itemSelectMode Determines whether listings featured in an email campaign are selected by the seller or by eBay.<br><br>If <b>itemSelectMode</b> is set to <code>AUTO</code>, eBay automatically choses listings based on values set for <b>sort</b>, <b>categoryType</b>, <b>categoryId</b>, and <b>priceRange</b>.<br><br>If <b>itemSelectMode</b> is set to <code>MANUAL</code>, listings are set by the seller by populating the <b>itemIds</b> array.<br><br><span class=\"tablenote\"><b>Note: </b><b>itemSelectMode</b> is always set to <code>AUTO</code> for <code>WELCOME</code> email campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setItemSelectMode($itemSelectMode)
    {
        if (is_null($itemSelectMode)) {
            throw new \InvalidArgumentException('non-nullable itemSelectMode cannot be null');
        }
        $this->container['itemSelectMode'] = $itemSelectMode;

        return $this;
    }

    /**
     * Gets personalizedMessage
     *
     * @return string|null
     */
    public function getPersonalizedMessage()
    {
        return $this->container['personalizedMessage'];
    }

    /**
     * Sets personalizedMessage
     *
     * @param string|null $personalizedMessage The body of the email campaign. Accepts HTML and CSS.<br><br><b>Max length:</b> 1000
     *
     * @return self
     */
    public function setPersonalizedMessage($personalizedMessage)
    {
        if (is_null($personalizedMessage)) {
            throw new \InvalidArgumentException('non-nullable personalizedMessage cannot be null');
        }
        $this->container['personalizedMessage'] = $personalizedMessage;

        return $this;
    }

    /**
     * Gets priceRange
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\PriceRange|null
     */
    public function getPriceRange()
    {
        return $this->container['priceRange'];
    }

    /**
     * Sets priceRange
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\PriceRange|null $priceRange priceRange
     *
     * @return self
     */
    public function setPriceRange($priceRange)
    {
        if (is_null($priceRange)) {
            throw new \InvalidArgumentException('non-nullable priceRange cannot be null');
        }
        $this->container['priceRange'] = $priceRange;

        return $this;
    }

    /**
     * Gets promotionId
     *
     * @return string|null
     */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
     * Sets promotionId
     *
     * @param string|null $promotionId The unique identifier of the discount used for an email campaign if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>. <b>promotionSelectModeEnum</b> must set to <code>MANUAL</code> if a discount is selected.<br><br>Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\" target=\"_blank\">getPromotions</a> to retrieve a list of the seller's discounts. Use the <b>promotionId</b> from an individual <b>PromotionDetail</b> in the result to populate the request.
     *
     * @return self
     */
    public function setPromotionId($promotionId)
    {
        if (is_null($promotionId)) {
            throw new \InvalidArgumentException('non-nullable promotionId cannot be null');
        }
        $this->container['promotionId'] = $promotionId;

        return $this;
    }

    /**
     * Gets promotionSelectModeEnum
     *
     * @return string|null
     */
    public function getPromotionSelectModeEnum()
    {
        return $this->container['promotionSelectModeEnum'];
    }

    /**
     * Sets promotionSelectModeEnum
     *
     * @param string|null $promotionSelectModeEnum The selection mode for the discount used if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>.<br><br>If <b>promotionSelectModeEnum</b> is set to <code>AUTO</code>, eBay will choose the discount to include in the email campaign. If set to <code>MANUAL</code>, the seller must specify the discount in the <b>promotionId</b> field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPromotionSelectModeEnum($promotionSelectModeEnum)
    {
        if (is_null($promotionSelectModeEnum)) {
            throw new \InvalidArgumentException('non-nullable promotionSelectModeEnum cannot be null');
        }
        $this->container['promotionSelectModeEnum'] = $promotionSelectModeEnum;

        return $this;
    }

    /**
     * Gets scheduleDate
     *
     * @return string|null
     */
    public function getScheduleDate()
    {
        return $this->container['scheduleDate'];
    }

    /**
     * Sets scheduleDate
     *
     * @param string|null $scheduleDate The date and time that the email campaign newsletter will be sent, given in UTC format. Example: 2023-05-20T03:13:35Z<br><br>This field should be used if the seller wishes to send the email campaign on a future date. If no <b>scheduleDate</b> is set, the email campaign will send once it is created or updated.
     *
     * @return self
     */
    public function setScheduleDate($scheduleDate)
    {
        if (is_null($scheduleDate)) {
            throw new \InvalidArgumentException('non-nullable scheduleDate cannot be null');
        }
        $this->container['scheduleDate'] = $scheduleDate;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort The sort rule is used to display the listings featured in the email campaign.<br><br>Sort rules are only used if <b>itemSelectMode</b> is set to <code>AUTO</code>. If <b>itemSelectMode</b> is <code>MANUAL</code>, listings are displayed in the order in which they are listed in the <b>itemIds</b> array. The following sort rules are available:<ul><li><code>ENDING_FIRST</code> displays listings by ending date, from soonest to latest.</li><li><code>LOWEST_PRICED</code> displays listings by price, from lowest to highest.</li><li><code>HIGHEST_PRICED</code> displays listings by price, from highest to lowest.</li><li><code>NEWLY_LISTED</code> displays listings by date listed, with the newest first.</li></ul><br><br>The default sort rule is <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            throw new \InvalidArgumentException('non-nullable sort cannot be null');
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject line of the email campaign.<br><br><b>Max length:</b> 70
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

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


