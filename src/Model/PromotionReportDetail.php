<?php
/**
 * PromotionReportDetail
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
 * PromotionReportDetail Class Doc Comment
 *
 * @category Class
 * @description &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; As of July 8th 2024, &lt;i&gt;promotions&lt;/i&gt; are now being referred to as &lt;i&gt;discounts&lt;/i&gt; on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.&lt;/span&gt;&lt;br&gt;This type defines the fields in a discount-level report.
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionReportDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionReportDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'averageItemDiscount' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'averageItemRevenue' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'averageOrderDiscount' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'averageOrderRevenue' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'averageOrderSize' => 'string',
        'baseSale' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'itemsSoldQuantity' => 'int',
        'numberOfOrdersSold' => 'int',
        'percentageSalesLift' => 'string',
        'promotionHref' => 'string',
        'promotionId' => 'string',
        'promotionReportId' => 'string',
        'promotionSale' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'promotionType' => 'string',
        'totalDiscount' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount',
        'totalSale' => '\macropage\SDKs\ebay\rest\marketing\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'averageItemDiscount' => null,
        'averageItemRevenue' => null,
        'averageOrderDiscount' => null,
        'averageOrderRevenue' => null,
        'averageOrderSize' => null,
        'baseSale' => null,
        'itemsSoldQuantity' => 'int32',
        'numberOfOrdersSold' => 'int32',
        'percentageSalesLift' => null,
        'promotionHref' => null,
        'promotionId' => null,
        'promotionReportId' => null,
        'promotionSale' => null,
        'promotionType' => null,
        'totalDiscount' => null,
        'totalSale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'averageItemDiscount' => false,
        'averageItemRevenue' => false,
        'averageOrderDiscount' => false,
        'averageOrderRevenue' => false,
        'averageOrderSize' => false,
        'baseSale' => false,
        'itemsSoldQuantity' => false,
        'numberOfOrdersSold' => false,
        'percentageSalesLift' => false,
        'promotionHref' => false,
        'promotionId' => false,
        'promotionReportId' => false,
        'promotionSale' => false,
        'promotionType' => false,
        'totalDiscount' => false,
        'totalSale' => false
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
        'averageItemDiscount' => 'averageItemDiscount',
        'averageItemRevenue' => 'averageItemRevenue',
        'averageOrderDiscount' => 'averageOrderDiscount',
        'averageOrderRevenue' => 'averageOrderRevenue',
        'averageOrderSize' => 'averageOrderSize',
        'baseSale' => 'baseSale',
        'itemsSoldQuantity' => 'itemsSoldQuantity',
        'numberOfOrdersSold' => 'numberOfOrdersSold',
        'percentageSalesLift' => 'percentageSalesLift',
        'promotionHref' => 'promotionHref',
        'promotionId' => 'promotionId',
        'promotionReportId' => 'promotionReportId',
        'promotionSale' => 'promotionSale',
        'promotionType' => 'promotionType',
        'totalDiscount' => 'totalDiscount',
        'totalSale' => 'totalSale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'averageItemDiscount' => 'setAverageItemDiscount',
        'averageItemRevenue' => 'setAverageItemRevenue',
        'averageOrderDiscount' => 'setAverageOrderDiscount',
        'averageOrderRevenue' => 'setAverageOrderRevenue',
        'averageOrderSize' => 'setAverageOrderSize',
        'baseSale' => 'setBaseSale',
        'itemsSoldQuantity' => 'setItemsSoldQuantity',
        'numberOfOrdersSold' => 'setNumberOfOrdersSold',
        'percentageSalesLift' => 'setPercentageSalesLift',
        'promotionHref' => 'setPromotionHref',
        'promotionId' => 'setPromotionId',
        'promotionReportId' => 'setPromotionReportId',
        'promotionSale' => 'setPromotionSale',
        'promotionType' => 'setPromotionType',
        'totalDiscount' => 'setTotalDiscount',
        'totalSale' => 'setTotalSale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'averageItemDiscount' => 'getAverageItemDiscount',
        'averageItemRevenue' => 'getAverageItemRevenue',
        'averageOrderDiscount' => 'getAverageOrderDiscount',
        'averageOrderRevenue' => 'getAverageOrderRevenue',
        'averageOrderSize' => 'getAverageOrderSize',
        'baseSale' => 'getBaseSale',
        'itemsSoldQuantity' => 'getItemsSoldQuantity',
        'numberOfOrdersSold' => 'getNumberOfOrdersSold',
        'percentageSalesLift' => 'getPercentageSalesLift',
        'promotionHref' => 'getPromotionHref',
        'promotionId' => 'getPromotionId',
        'promotionReportId' => 'getPromotionReportId',
        'promotionSale' => 'getPromotionSale',
        'promotionType' => 'getPromotionType',
        'totalDiscount' => 'getTotalDiscount',
        'totalSale' => 'getTotalSale'
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
        $this->setIfExists('averageItemDiscount', $data ?? [], null);
        $this->setIfExists('averageItemRevenue', $data ?? [], null);
        $this->setIfExists('averageOrderDiscount', $data ?? [], null);
        $this->setIfExists('averageOrderRevenue', $data ?? [], null);
        $this->setIfExists('averageOrderSize', $data ?? [], null);
        $this->setIfExists('baseSale', $data ?? [], null);
        $this->setIfExists('itemsSoldQuantity', $data ?? [], null);
        $this->setIfExists('numberOfOrdersSold', $data ?? [], null);
        $this->setIfExists('percentageSalesLift', $data ?? [], null);
        $this->setIfExists('promotionHref', $data ?? [], null);
        $this->setIfExists('promotionId', $data ?? [], null);
        $this->setIfExists('promotionReportId', $data ?? [], null);
        $this->setIfExists('promotionSale', $data ?? [], null);
        $this->setIfExists('promotionType', $data ?? [], null);
        $this->setIfExists('totalDiscount', $data ?? [], null);
        $this->setIfExists('totalSale', $data ?? [], null);
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
     * Gets averageItemDiscount
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getAverageItemDiscount()
    {
        return $this->container['averageItemDiscount'];
    }

    /**
     * Sets averageItemDiscount
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $averageItemDiscount averageItemDiscount
     *
     * @return self
     */
    public function setAverageItemDiscount($averageItemDiscount)
    {
        if (is_null($averageItemDiscount)) {
            throw new \InvalidArgumentException('non-nullable averageItemDiscount cannot be null');
        }
        $this->container['averageItemDiscount'] = $averageItemDiscount;

        return $this;
    }

    /**
     * Gets averageItemRevenue
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getAverageItemRevenue()
    {
        return $this->container['averageItemRevenue'];
    }

    /**
     * Sets averageItemRevenue
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $averageItemRevenue averageItemRevenue
     *
     * @return self
     */
    public function setAverageItemRevenue($averageItemRevenue)
    {
        if (is_null($averageItemRevenue)) {
            throw new \InvalidArgumentException('non-nullable averageItemRevenue cannot be null');
        }
        $this->container['averageItemRevenue'] = $averageItemRevenue;

        return $this;
    }

    /**
     * Gets averageOrderDiscount
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getAverageOrderDiscount()
    {
        return $this->container['averageOrderDiscount'];
    }

    /**
     * Sets averageOrderDiscount
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $averageOrderDiscount averageOrderDiscount
     *
     * @return self
     */
    public function setAverageOrderDiscount($averageOrderDiscount)
    {
        if (is_null($averageOrderDiscount)) {
            throw new \InvalidArgumentException('non-nullable averageOrderDiscount cannot be null');
        }
        $this->container['averageOrderDiscount'] = $averageOrderDiscount;

        return $this;
    }

    /**
     * Gets averageOrderRevenue
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getAverageOrderRevenue()
    {
        return $this->container['averageOrderRevenue'];
    }

    /**
     * Sets averageOrderRevenue
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $averageOrderRevenue averageOrderRevenue
     *
     * @return self
     */
    public function setAverageOrderRevenue($averageOrderRevenue)
    {
        if (is_null($averageOrderRevenue)) {
            throw new \InvalidArgumentException('non-nullable averageOrderRevenue cannot be null');
        }
        $this->container['averageOrderRevenue'] = $averageOrderRevenue;

        return $this;
    }

    /**
     * Gets averageOrderSize
     *
     * @return string|null
     */
    public function getAverageOrderSize()
    {
        return $this->container['averageOrderSize'];
    }

    /**
     * Sets averageOrderSize
     *
     * @param string|null $averageOrderSize The <i>average order size</i> is the average number of items that each order contained that have an active discount. This value is calculated as follows:  <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> = <b>averageOrderSize</b>
     *
     * @return self
     */
    public function setAverageOrderSize($averageOrderSize)
    {
        if (is_null($averageOrderSize)) {
            throw new \InvalidArgumentException('non-nullable averageOrderSize cannot be null');
        }
        $this->container['averageOrderSize'] = $averageOrderSize;

        return $this;
    }

    /**
     * Gets baseSale
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getBaseSale()
    {
        return $this->container['baseSale'];
    }

    /**
     * Sets baseSale
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $baseSale baseSale
     *
     * @return self
     */
    public function setBaseSale($baseSale)
    {
        if (is_null($baseSale)) {
            throw new \InvalidArgumentException('non-nullable baseSale cannot be null');
        }
        $this->container['baseSale'] = $baseSale;

        return $this;
    }

    /**
     * Gets itemsSoldQuantity
     *
     * @return int|null
     */
    public function getItemsSoldQuantity()
    {
        return $this->container['itemsSoldQuantity'];
    }

    /**
     * Sets itemsSoldQuantity
     *
     * @param int|null $itemsSoldQuantity This is the quantity of items purchased in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a \"Buy 1, get 1 at 50%\" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
     *
     * @return self
     */
    public function setItemsSoldQuantity($itemsSoldQuantity)
    {
        if (is_null($itemsSoldQuantity)) {
            throw new \InvalidArgumentException('non-nullable itemsSoldQuantity cannot be null');
        }
        $this->container['itemsSoldQuantity'] = $itemsSoldQuantity;

        return $this;
    }

    /**
     * Gets numberOfOrdersSold
     *
     * @return int|null
     */
    public function getNumberOfOrdersSold()
    {
        return $this->container['numberOfOrdersSold'];
    }

    /**
     * Sets numberOfOrdersSold
     *
     * @param int|null $numberOfOrdersSold This is the number of orders sold in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a \"Buy 1, get 1 at 50%\" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your <b>itemsSoldQuantity</b> would be 2.
     *
     * @return self
     */
    public function setNumberOfOrdersSold($numberOfOrdersSold)
    {
        if (is_null($numberOfOrdersSold)) {
            throw new \InvalidArgumentException('non-nullable numberOfOrdersSold cannot be null');
        }
        $this->container['numberOfOrdersSold'] = $numberOfOrdersSold;

        return $this;
    }

    /**
     * Gets percentageSalesLift
     *
     * @return string|null
     */
    public function getPercentageSalesLift()
    {
        return $this->container['percentageSalesLift'];
    }

    /**
     * Sets percentageSalesLift
     *
     * @param string|null $percentageSalesLift The <i>percentage sales lift</i> is the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br> <b>promotionSale</b> / <b>totalSale</b> =  <b>percentageSalesLift</b>
     *
     * @return self
     */
    public function setPercentageSalesLift($percentageSalesLift)
    {
        if (is_null($percentageSalesLift)) {
            throw new \InvalidArgumentException('non-nullable percentageSalesLift cannot be null');
        }
        $this->container['percentageSalesLift'] = $percentageSalesLift;

        return $this;
    }

    /**
     * Gets promotionHref
     *
     * @return string|null
     */
    public function getPromotionHref()
    {
        return $this->container['promotionHref'];
    }

    /**
     * Sets promotionHref
     *
     * @param string|null $promotionHref The URI of the discount report.
     *
     * @return self
     */
    public function setPromotionHref($promotionHref)
    {
        if (is_null($promotionHref)) {
            throw new \InvalidArgumentException('non-nullable promotionHref cannot be null');
        }
        $this->container['promotionHref'] = $promotionHref;

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
     * @param string|null $promotionId A unique eBay-assigned ID for the discount that's generated when the discount is created.
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
     * Gets promotionReportId
     *
     * @return string|null
     */
    public function getPromotionReportId()
    {
        return $this->container['promotionReportId'];
    }

    /**
     * Sets promotionReportId
     *
     * @param string|null $promotionReportId The unique eBay-assigned ID of the discount report that is generated when the report is created.
     *
     * @return self
     */
    public function setPromotionReportId($promotionReportId)
    {
        if (is_null($promotionReportId)) {
            throw new \InvalidArgumentException('non-nullable promotionReportId cannot be null');
        }
        $this->container['promotionReportId'] = $promotionReportId;

        return $this;
    }

    /**
     * Gets promotionSale
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getPromotionSale()
    {
        return $this->container['promotionSale'];
    }

    /**
     * Sets promotionSale
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $promotionSale promotionSale
     *
     * @return self
     */
    public function setPromotionSale($promotionSale)
    {
        if (is_null($promotionSale)) {
            throw new \InvalidArgumentException('non-nullable promotionSale cannot be null');
        }
        $this->container['promotionSale'] = $promotionSale;

        return $this;
    }

    /**
     * Gets promotionType
     *
     * @return string|null
     */
    public function getPromotionType()
    {
        return $this->container['promotionType'];
    }

    /**
     * Sets promotionType
     *
     * @param string|null $promotionType Indicates the type of the discount, either <code>CODED_COUPON</code>, <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPromotionType($promotionType)
    {
        if (is_null($promotionType)) {
            throw new \InvalidArgumentException('non-nullable promotionType cannot be null');
        }
        $this->container['promotionType'] = $promotionType;

        return $this;
    }

    /**
     * Gets totalDiscount
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getTotalDiscount()
    {
        return $this->container['totalDiscount'];
    }

    /**
     * Sets totalDiscount
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $totalDiscount totalDiscount
     *
     * @return self
     */
    public function setTotalDiscount($totalDiscount)
    {
        if (is_null($totalDiscount)) {
            throw new \InvalidArgumentException('non-nullable totalDiscount cannot be null');
        }
        $this->container['totalDiscount'] = $totalDiscount;

        return $this;
    }

    /**
     * Gets totalSale
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Amount|null
     */
    public function getTotalSale()
    {
        return $this->container['totalSale'];
    }

    /**
     * Sets totalSale
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Amount|null $totalSale totalSale
     *
     * @return self
     */
    public function setTotalSale($totalSale)
    {
        if (is_null($totalSale)) {
            throw new \InvalidArgumentException('non-nullable totalSale cannot be null');
        }
        $this->container['totalSale'] = $totalSale;

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


