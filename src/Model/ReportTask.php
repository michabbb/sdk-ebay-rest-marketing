<?php
/**
 * ReportTask
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
 * ReportTask Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields in a report task.
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignIds' => 'string[]',
        'channels' => 'string[]',
        'dateFrom' => 'string',
        'dateTo' => 'string',
        'dimensions' => '\macropage\SDKs\ebay\rest\marketing\Model\Dimension[]',
        'fundingModels' => 'string[]',
        'inventoryReferences' => '\macropage\SDKs\ebay\rest\marketing\Model\InventoryReference[]',
        'listingIds' => 'string[]',
        'marketplaceId' => 'string',
        'metricKeys' => 'string[]',
        'reportExpirationDate' => 'string',
        'reportFormat' => 'string',
        'reportHref' => 'string',
        'reportId' => 'string',
        'reportName' => 'string',
        'reportTaskCompletionDate' => 'string',
        'reportTaskCreationDate' => 'string',
        'reportTaskExpectedCompletionDate' => 'string',
        'reportTaskId' => 'string',
        'reportTaskStatus' => 'string',
        'reportTaskStatusMessage' => 'string',
        'reportType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaignIds' => null,
        'channels' => null,
        'dateFrom' => null,
        'dateTo' => null,
        'dimensions' => null,
        'fundingModels' => null,
        'inventoryReferences' => null,
        'listingIds' => null,
        'marketplaceId' => null,
        'metricKeys' => null,
        'reportExpirationDate' => null,
        'reportFormat' => null,
        'reportHref' => null,
        'reportId' => null,
        'reportName' => null,
        'reportTaskCompletionDate' => null,
        'reportTaskCreationDate' => null,
        'reportTaskExpectedCompletionDate' => null,
        'reportTaskId' => null,
        'reportTaskStatus' => null,
        'reportTaskStatusMessage' => null,
        'reportType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'campaignIds' => false,
        'channels' => false,
        'dateFrom' => false,
        'dateTo' => false,
        'dimensions' => false,
        'fundingModels' => false,
        'inventoryReferences' => false,
        'listingIds' => false,
        'marketplaceId' => false,
        'metricKeys' => false,
        'reportExpirationDate' => false,
        'reportFormat' => false,
        'reportHref' => false,
        'reportId' => false,
        'reportName' => false,
        'reportTaskCompletionDate' => false,
        'reportTaskCreationDate' => false,
        'reportTaskExpectedCompletionDate' => false,
        'reportTaskId' => false,
        'reportTaskStatus' => false,
        'reportTaskStatusMessage' => false,
        'reportType' => false
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
        'campaignIds' => 'campaignIds',
        'channels' => 'channels',
        'dateFrom' => 'dateFrom',
        'dateTo' => 'dateTo',
        'dimensions' => 'dimensions',
        'fundingModels' => 'fundingModels',
        'inventoryReferences' => 'inventoryReferences',
        'listingIds' => 'listingIds',
        'marketplaceId' => 'marketplaceId',
        'metricKeys' => 'metricKeys',
        'reportExpirationDate' => 'reportExpirationDate',
        'reportFormat' => 'reportFormat',
        'reportHref' => 'reportHref',
        'reportId' => 'reportId',
        'reportName' => 'reportName',
        'reportTaskCompletionDate' => 'reportTaskCompletionDate',
        'reportTaskCreationDate' => 'reportTaskCreationDate',
        'reportTaskExpectedCompletionDate' => 'reportTaskExpectedCompletionDate',
        'reportTaskId' => 'reportTaskId',
        'reportTaskStatus' => 'reportTaskStatus',
        'reportTaskStatusMessage' => 'reportTaskStatusMessage',
        'reportType' => 'reportType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignIds' => 'setCampaignIds',
        'channels' => 'setChannels',
        'dateFrom' => 'setDateFrom',
        'dateTo' => 'setDateTo',
        'dimensions' => 'setDimensions',
        'fundingModels' => 'setFundingModels',
        'inventoryReferences' => 'setInventoryReferences',
        'listingIds' => 'setListingIds',
        'marketplaceId' => 'setMarketplaceId',
        'metricKeys' => 'setMetricKeys',
        'reportExpirationDate' => 'setReportExpirationDate',
        'reportFormat' => 'setReportFormat',
        'reportHref' => 'setReportHref',
        'reportId' => 'setReportId',
        'reportName' => 'setReportName',
        'reportTaskCompletionDate' => 'setReportTaskCompletionDate',
        'reportTaskCreationDate' => 'setReportTaskCreationDate',
        'reportTaskExpectedCompletionDate' => 'setReportTaskExpectedCompletionDate',
        'reportTaskId' => 'setReportTaskId',
        'reportTaskStatus' => 'setReportTaskStatus',
        'reportTaskStatusMessage' => 'setReportTaskStatusMessage',
        'reportType' => 'setReportType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignIds' => 'getCampaignIds',
        'channels' => 'getChannels',
        'dateFrom' => 'getDateFrom',
        'dateTo' => 'getDateTo',
        'dimensions' => 'getDimensions',
        'fundingModels' => 'getFundingModels',
        'inventoryReferences' => 'getInventoryReferences',
        'listingIds' => 'getListingIds',
        'marketplaceId' => 'getMarketplaceId',
        'metricKeys' => 'getMetricKeys',
        'reportExpirationDate' => 'getReportExpirationDate',
        'reportFormat' => 'getReportFormat',
        'reportHref' => 'getReportHref',
        'reportId' => 'getReportId',
        'reportName' => 'getReportName',
        'reportTaskCompletionDate' => 'getReportTaskCompletionDate',
        'reportTaskCreationDate' => 'getReportTaskCreationDate',
        'reportTaskExpectedCompletionDate' => 'getReportTaskExpectedCompletionDate',
        'reportTaskId' => 'getReportTaskId',
        'reportTaskStatus' => 'getReportTaskStatus',
        'reportTaskStatusMessage' => 'getReportTaskStatusMessage',
        'reportType' => 'getReportType'
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
        $this->setIfExists('campaignIds', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('dateFrom', $data ?? [], null);
        $this->setIfExists('dateTo', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('fundingModels', $data ?? [], null);
        $this->setIfExists('inventoryReferences', $data ?? [], null);
        $this->setIfExists('listingIds', $data ?? [], null);
        $this->setIfExists('marketplaceId', $data ?? [], null);
        $this->setIfExists('metricKeys', $data ?? [], null);
        $this->setIfExists('reportExpirationDate', $data ?? [], null);
        $this->setIfExists('reportFormat', $data ?? [], null);
        $this->setIfExists('reportHref', $data ?? [], null);
        $this->setIfExists('reportId', $data ?? [], null);
        $this->setIfExists('reportName', $data ?? [], null);
        $this->setIfExists('reportTaskCompletionDate', $data ?? [], null);
        $this->setIfExists('reportTaskCreationDate', $data ?? [], null);
        $this->setIfExists('reportTaskExpectedCompletionDate', $data ?? [], null);
        $this->setIfExists('reportTaskId', $data ?? [], null);
        $this->setIfExists('reportTaskStatus', $data ?? [], null);
        $this->setIfExists('reportTaskStatusMessage', $data ?? [], null);
        $this->setIfExists('reportType', $data ?? [], null);
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
     * Gets campaignIds
     *
     * @return string[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaignIds'];
    }

    /**
     * Sets campaignIds
     *
     * @param string[]|null $campaignIds A list of IDs for the campaigns that are included in the report. A campaign ID is a unique eBay-assigned identifier of the campaign that's generated when the campaign is created.<br /><br />Call <b>getCampaigns</b> to return the current campaign IDs for a seller.
     *
     * @return self
     */
    public function setCampaignIds($campaignIds)
    {
        if (is_null($campaignIds)) {
            throw new \InvalidArgumentException('non-nullable campaignIds cannot be null');
        }
        $this->container['campaignIds'] = $campaignIds;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return string[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param string[]|null $channels The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets dateFrom
     *
     * @return string|null
     */
    public function getDateFrom()
    {
        return $this->container['dateFrom'];
    }

    /**
     * Sets dateFrom
     *
     * @param string|null $dateFrom The date defining the start of the timespan covered by the report, formatted as an <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 8601</a> timestamp.
     *
     * @return self
     */
    public function setDateFrom($dateFrom)
    {
        if (is_null($dateFrom)) {
            throw new \InvalidArgumentException('non-nullable dateFrom cannot be null');
        }
        $this->container['dateFrom'] = $dateFrom;

        return $this;
    }

    /**
     * Gets dateTo
     *
     * @return string|null
     */
    public function getDateTo()
    {
        return $this->container['dateTo'];
    }

    /**
     * Sets dateTo
     *
     * @param string|null $dateTo The date defining the end of the timespan covered by the report, formatted as an <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 8601</a> timestamp.
     *
     * @return self
     */
    public function setDateTo($dateTo)
    {
        if (is_null($dateTo)) {
            throw new \InvalidArgumentException('non-nullable dateTo cannot be null');
        }
        $this->container['dateTo'] = $dateTo;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\Dimension[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\Dimension[]|null $dimensions A list containing the dimension in the report.
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets fundingModels
     *
     * @return string[]|null
     */
    public function getFundingModels()
    {
        return $this->container['fundingModels'];
    }

    /**
     * Sets fundingModels
     *
     * @param string[]|null $fundingModels The funding model for the campaign that shall be included in the report.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul>
     *
     * @return self
     */
    public function setFundingModels($fundingModels)
    {
        if (is_null($fundingModels)) {
            throw new \InvalidArgumentException('non-nullable fundingModels cannot be null');
        }
        $this->container['fundingModels'] = $fundingModels;

        return $this;
    }

    /**
     * Gets inventoryReferences
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\InventoryReference[]|null
     */
    public function getInventoryReferences()
    {
        return $this->container['inventoryReferences'];
    }

    /**
     * Sets inventoryReferences
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\InventoryReference[]|null $inventoryReferences If supplied in the request, this field returns a list of the seller's inventory reference IDs included in the report.  <p>Each item is referenced by a pair of <b>inventoryRefernceID</b> and <b>inventoryReferenceType</b> values, where an inventory reference ID can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>. An <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing), and is created and used by the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.</p>
     *
     * @return self
     */
    public function setInventoryReferences($inventoryReferences)
    {
        if (is_null($inventoryReferences)) {
            throw new \InvalidArgumentException('non-nullable inventoryReferences cannot be null');
        }
        $this->container['inventoryReferences'] = $inventoryReferences;

        return $this;
    }

    /**
     * Gets listingIds
     *
     * @return string[]|null
     */
    public function getListingIds()
    {
        return $this->container['listingIds'];
    }

    /**
     * Sets listingIds
     *
     * @param string[]|null $listingIds If supplied in the request, this field returns a list of the listing IDs included in the report. A listing ID is an eBay-assigned ID that's generated when a listing is created.
     *
     * @return self
     */
    public function setListingIds($listingIds)
    {
        if (is_null($listingIds)) {
            throw new \InvalidArgumentException('non-nullable listingIds cannot be null');
        }
        $this->container['listingIds'] = $listingIds;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The ID of the eBay marketplace used by the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        if (is_null($marketplaceId)) {
            throw new \InvalidArgumentException('non-nullable marketplaceId cannot be null');
        }
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets metricKeys
     *
     * @return string[]|null
     */
    public function getMetricKeys()
    {
        return $this->container['metricKeys'];
    }

    /**
     * Sets metricKeys
     *
     * @param string[]|null $metricKeys A list of metrics for the report task.
     *
     * @return self
     */
    public function setMetricKeys($metricKeys)
    {
        if (is_null($metricKeys)) {
            throw new \InvalidArgumentException('non-nullable metricKeys cannot be null');
        }
        $this->container['metricKeys'] = $metricKeys;

        return $this;
    }

    /**
     * Gets reportExpirationDate
     *
     * @return string|null
     */
    public function getReportExpirationDate()
    {
        return $this->container['reportExpirationDate'];
    }

    /**
     * Sets reportExpirationDate
     *
     * @param string|null $reportExpirationDate The date after which the report is no longer be available. Reports are available for 30 days and you cannot download a report after it has expired.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     *
     * @return self
     */
    public function setReportExpirationDate($reportExpirationDate)
    {
        if (is_null($reportExpirationDate)) {
            throw new \InvalidArgumentException('non-nullable reportExpirationDate cannot be null');
        }
        $this->container['reportExpirationDate'] = $reportExpirationDate;

        return $this;
    }

    /**
     * Gets reportFormat
     *
     * @return string|null
     */
    public function getReportFormat()
    {
        return $this->container['reportFormat'];
    }

    /**
     * Sets reportFormat
     *
     * @param string|null $reportFormat Indicates the format of the report. Currently, only <code>TSV_GZIP</code> is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReportFormat($reportFormat)
    {
        if (is_null($reportFormat)) {
            throw new \InvalidArgumentException('non-nullable reportFormat cannot be null');
        }
        $this->container['reportFormat'] = $reportFormat;

        return $this;
    }

    /**
     * Gets reportHref
     *
     * @return string|null
     */
    public function getReportHref()
    {
        return $this->container['reportHref'];
    }

    /**
     * Sets reportHref
     *
     * @param string|null $reportHref The URL of the generated report, which can be used to download the report once it has been generated.
     *
     * @return self
     */
    public function setReportHref($reportHref)
    {
        if (is_null($reportHref)) {
            throw new \InvalidArgumentException('non-nullable reportHref cannot be null');
        }
        $this->container['reportHref'] = $reportHref;

        return $this;
    }

    /**
     * Gets reportId
     *
     * @return string|null
     */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
     * Sets reportId
     *
     * @param string|null $reportId A unique eBay-assigned ID for the report.
     *
     * @return self
     */
    public function setReportId($reportId)
    {
        if (is_null($reportId)) {
            throw new \InvalidArgumentException('non-nullable reportId cannot be null');
        }
        $this->container['reportId'] = $reportId;

        return $this;
    }

    /**
     * Gets reportName
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     *
     * @param string|null $reportName An eBay-assigned name for the report that's created by the <b>createReportTask</b> call. This name is unique for the seller.
     *
     * @return self
     */
    public function setReportName($reportName)
    {
        if (is_null($reportName)) {
            throw new \InvalidArgumentException('non-nullable reportName cannot be null');
        }
        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets reportTaskCompletionDate
     *
     * @return string|null
     */
    public function getReportTaskCompletionDate()
    {
        return $this->container['reportTaskCompletionDate'];
    }

    /**
     * Sets reportTaskCompletionDate
     *
     * @param string|null $reportTaskCompletionDate The date the report task completed the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     *
     * @return self
     */
    public function setReportTaskCompletionDate($reportTaskCompletionDate)
    {
        if (is_null($reportTaskCompletionDate)) {
            throw new \InvalidArgumentException('non-nullable reportTaskCompletionDate cannot be null');
        }
        $this->container['reportTaskCompletionDate'] = $reportTaskCompletionDate;

        return $this;
    }

    /**
     * Gets reportTaskCreationDate
     *
     * @return string|null
     */
    public function getReportTaskCreationDate()
    {
        return $this->container['reportTaskCreationDate'];
    }

    /**
     * Sets reportTaskCreationDate
     *
     * @param string|null $reportTaskCreationDate The date the report task was created.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     *
     * @return self
     */
    public function setReportTaskCreationDate($reportTaskCreationDate)
    {
        if (is_null($reportTaskCreationDate)) {
            throw new \InvalidArgumentException('non-nullable reportTaskCreationDate cannot be null');
        }
        $this->container['reportTaskCreationDate'] = $reportTaskCreationDate;

        return $this;
    }

    /**
     * Gets reportTaskExpectedCompletionDate
     *
     * @return string|null
     */
    public function getReportTaskExpectedCompletionDate()
    {
        return $this->container['reportTaskExpectedCompletionDate'];
    }

    /**
     * Sets reportTaskExpectedCompletionDate
     *
     * @param string|null $reportTaskExpectedCompletionDate The date the report task is expected to complete the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     *
     * @return self
     */
    public function setReportTaskExpectedCompletionDate($reportTaskExpectedCompletionDate)
    {
        if (is_null($reportTaskExpectedCompletionDate)) {
            throw new \InvalidArgumentException('non-nullable reportTaskExpectedCompletionDate cannot be null');
        }
        $this->container['reportTaskExpectedCompletionDate'] = $reportTaskExpectedCompletionDate;

        return $this;
    }

    /**
     * Gets reportTaskId
     *
     * @return string|null
     */
    public function getReportTaskId()
    {
        return $this->container['reportTaskId'];
    }

    /**
     * Sets reportTaskId
     *
     * @param string|null $reportTaskId The unique eBay-assigned ID of the report task. This value is generated when the report task is created with a call to <b>createReportTask</b>.
     *
     * @return self
     */
    public function setReportTaskId($reportTaskId)
    {
        if (is_null($reportTaskId)) {
            throw new \InvalidArgumentException('non-nullable reportTaskId cannot be null');
        }
        $this->container['reportTaskId'] = $reportTaskId;

        return $this;
    }

    /**
     * Gets reportTaskStatus
     *
     * @return string|null
     */
    public function getReportTaskStatus()
    {
        return $this->container['reportTaskStatus'];
    }

    /**
     * Sets reportTaskStatus
     *
     * @param string|null $reportTaskStatus Indicates the current state of the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:TaskStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReportTaskStatus($reportTaskStatus)
    {
        if (is_null($reportTaskStatus)) {
            throw new \InvalidArgumentException('non-nullable reportTaskStatus cannot be null');
        }
        $this->container['reportTaskStatus'] = $reportTaskStatus;

        return $this;
    }

    /**
     * Gets reportTaskStatusMessage
     *
     * @return string|null
     */
    public function getReportTaskStatusMessage()
    {
        return $this->container['reportTaskStatusMessage'];
    }

    /**
     * Sets reportTaskStatusMessage
     *
     * @param string|null $reportTaskStatusMessage A status message with additional information about the report task.
     *
     * @return self
     */
    public function setReportTaskStatusMessage($reportTaskStatusMessage)
    {
        if (is_null($reportTaskStatusMessage)) {
            throw new \InvalidArgumentException('non-nullable reportTaskStatusMessage cannot be null');
        }
        $this->container['reportTaskStatusMessage'] = $reportTaskStatusMessage;

        return $this;
    }

    /**
     * Gets reportType
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType
     *
     * @param string|null $reportType Indicates type of report associated with the report task.<br/><br/><span class=\"tablenote\"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReportType($reportType)
    {
        if (is_null($reportType)) {
            throw new \InvalidArgumentException('non-nullable reportType cannot be null');
        }
        $this->container['reportType'] = $reportType;

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

