<?php
/**
 * CampaignDTO
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
 * CampaignDTO Class Doc Comment
 *
 * @category Class
 * @description email campaign instance body
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audiences' => '\macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]',
        'creationDate' => 'string',
        'emailCampaignId' => 'string',
        'emailCampaignStatus' => 'string',
        'emailCampaignType' => 'string',
        'marketplaceId' => 'string',
        'modificationDate' => 'string',
        'scheduleDate' => 'string',
        'scheduleDateType' => 'string',
        'sentDate' => 'string',
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
        'audiences' => null,
        'creationDate' => null,
        'emailCampaignId' => null,
        'emailCampaignStatus' => null,
        'emailCampaignType' => null,
        'marketplaceId' => null,
        'modificationDate' => null,
        'scheduleDate' => null,
        'scheduleDateType' => null,
        'sentDate' => null,
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audiences' => false,
        'creationDate' => false,
        'emailCampaignId' => false,
        'emailCampaignStatus' => false,
        'emailCampaignType' => false,
        'marketplaceId' => false,
        'modificationDate' => false,
        'scheduleDate' => false,
        'scheduleDateType' => false,
        'sentDate' => false,
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
        'audiences' => 'audiences',
        'creationDate' => 'creationDate',
        'emailCampaignId' => 'emailCampaignId',
        'emailCampaignStatus' => 'emailCampaignStatus',
        'emailCampaignType' => 'emailCampaignType',
        'marketplaceId' => 'marketplaceId',
        'modificationDate' => 'modificationDate',
        'scheduleDate' => 'scheduleDate',
        'scheduleDateType' => 'scheduleDateType',
        'sentDate' => 'sentDate',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audiences' => 'setAudiences',
        'creationDate' => 'setCreationDate',
        'emailCampaignId' => 'setEmailCampaignId',
        'emailCampaignStatus' => 'setEmailCampaignStatus',
        'emailCampaignType' => 'setEmailCampaignType',
        'marketplaceId' => 'setMarketplaceId',
        'modificationDate' => 'setModificationDate',
        'scheduleDate' => 'setScheduleDate',
        'scheduleDateType' => 'setScheduleDateType',
        'sentDate' => 'setSentDate',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audiences' => 'getAudiences',
        'creationDate' => 'getCreationDate',
        'emailCampaignId' => 'getEmailCampaignId',
        'emailCampaignStatus' => 'getEmailCampaignStatus',
        'emailCampaignType' => 'getEmailCampaignType',
        'marketplaceId' => 'getMarketplaceId',
        'modificationDate' => 'getModificationDate',
        'scheduleDate' => 'getScheduleDate',
        'scheduleDateType' => 'getScheduleDateType',
        'sentDate' => 'getSentDate',
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
        $this->setIfExists('audiences', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('emailCampaignId', $data ?? [], null);
        $this->setIfExists('emailCampaignStatus', $data ?? [], null);
        $this->setIfExists('emailCampaignType', $data ?? [], null);
        $this->setIfExists('marketplaceId', $data ?? [], null);
        $this->setIfExists('modificationDate', $data ?? [], null);
        $this->setIfExists('scheduleDate', $data ?? [], null);
        $this->setIfExists('scheduleDateType', $data ?? [], null);
        $this->setIfExists('sentDate', $data ?? [], null);
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
     * Gets audiences
     *
     * @return \macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]|null
     */
    public function getAudiences()
    {
        return $this->container['audiences'];
    }

    /**
     * Sets audiences
     *
     * @param \macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]|null $audiences The audiences that the email campaign is being sent to. See <a href=\"/api-docs/sell/marketing/types/api:AudienceTypeEnum\">AudienceTypeEnum</a> for a list of audience types.
     *
     * @return self
     */
    public function setAudiences($audiences)
    {
        if (is_null($audiences)) {
            throw new \InvalidArgumentException('non-nullable audiences cannot be null');
        }
        $this->container['audiences'] = $audiences;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string|null $creationDate The date and time that the email campaign was created, given in UTC format.
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets emailCampaignId
     *
     * @return string|null
     */
    public function getEmailCampaignId()
    {
        return $this->container['emailCampaignId'];
    }

    /**
     * Sets emailCampaignId
     *
     * @param string|null $emailCampaignId The unique eBay identifier for the email campaign assigned automatically when the email campaign is created.
     *
     * @return self
     */
    public function setEmailCampaignId($emailCampaignId)
    {
        if (is_null($emailCampaignId)) {
            throw new \InvalidArgumentException('non-nullable emailCampaignId cannot be null');
        }
        $this->container['emailCampaignId'] = $emailCampaignId;

        return $this;
    }

    /**
     * Gets emailCampaignStatus
     *
     * @return string|null
     */
    public function getEmailCampaignStatus()
    {
        return $this->container['emailCampaignStatus'];
    }

    /**
     * Sets emailCampaignStatus
     *
     * @param string|null $emailCampaignStatus The email campaign status. See <a href=\"/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\">EmailCampaignStatusEnum</a> for information on statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setEmailCampaignStatus($emailCampaignStatus)
    {
        if (is_null($emailCampaignStatus)) {
            throw new \InvalidArgumentException('non-nullable emailCampaignStatus cannot be null');
        }
        $this->container['emailCampaignStatus'] = $emailCampaignStatus;

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
     * @param string|null $emailCampaignType The email campaign type. See <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\">CampaignTypeEnum</a> for definitions of email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
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
     * @param string|null $marketplaceId The eBay marketplace where the email campaign is active.
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
     * Gets modificationDate
     *
     * @return string|null
     */
    public function getModificationDate()
    {
        return $this->container['modificationDate'];
    }

    /**
     * Sets modificationDate
     *
     * @param string|null $modificationDate The date and time the email campaign was last modified, given in UTC format.
     *
     * @return self
     */
    public function setModificationDate($modificationDate)
    {
        if (is_null($modificationDate)) {
            throw new \InvalidArgumentException('non-nullable modificationDate cannot be null');
        }
        $this->container['modificationDate'] = $modificationDate;

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
     * @param string|null $scheduleDate The date and time that the email campaign newsletter is scheduled to send, given in UTC format.
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
     * Gets scheduleDateType
     *
     * @return string|null
     */
    public function getScheduleDateType()
    {
        return $this->container['scheduleDateType'];
    }

    /**
     * Sets scheduleDateType
     *
     * @param string|null $scheduleDateType The schedule type used for sending the email campaign. See <a href=\"/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum\">ScheduleDateTypeEnum</a> for available schedule types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setScheduleDateType($scheduleDateType)
    {
        if (is_null($scheduleDateType)) {
            throw new \InvalidArgumentException('non-nullable scheduleDateType cannot be null');
        }
        $this->container['scheduleDateType'] = $scheduleDateType;

        return $this;
    }

    /**
     * Gets sentDate
     *
     * @return string|null
     */
    public function getSentDate()
    {
        return $this->container['sentDate'];
    }

    /**
     * Sets sentDate
     *
     * @param string|null $sentDate The date and time that the email campaign was last sent, given in UTC format.
     *
     * @return self
     */
    public function setSentDate($sentDate)
    {
        if (is_null($sentDate)) {
            throw new \InvalidArgumentException('non-nullable sentDate cannot be null');
        }
        $this->container['sentDate'] = $sentDate;

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
     * @param string|null $subject The email campaign subject line..
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


