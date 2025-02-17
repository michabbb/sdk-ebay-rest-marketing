# # GetEmailCampaignResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audiences** | [**\macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]**](CampaignAudience.md) | An array of one or more audiences associated with the email campaign. | [optional]
**categoryId** | **string** | The unique identifier of an eBay category or an eBay store category. This field is returned if a seller has applied the email campaign to a specific category.&lt;br&gt;&lt;br&gt;The &lt;b&gt;categoryType&lt;/b&gt; value will indicate if the category ID is for an eBay category or an eBay store category. | [optional]
**categoryType** | **string** | The enumeration value returned here indicates if the &lt;b&gt;categoryId&lt;/b&gt; value is the identifier of an eBay category or an eBay store category.&lt;br&gt;&lt;br&gt;This field is returned if a seller has applied the email campaign to a specific category. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**creationDate** | **string** | The date and time that the email campaign was created, given in UTC format. | [optional]
**emailCampaignId** | **string** | The unique identifier of the email campaign. | [optional]
**emailCampaignStatus** | **string** | The email campaign status. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\&quot;&gt;EmailCampaignStatusEnum&lt;/a&gt; for a list of valid statuses. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**emailCampaignType** | **string** | The email campaign type. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:CampaignTypeEnum\&quot;&gt;CampaignTypeEnum&lt;/a&gt; for valid email campaign types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**itemIds** | **string[]** | The listing IDs of the items that were manually added to the email campaign.&lt;br&gt;&lt;br&gt;Only listings added manually by the seller are returned. Returns a null array if no listings were added. | [optional]
**itemSelectMode** | **string** | The mode used to select the items listed in the email campaign. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**marketplaceId** | **string** | The eBay marketplace where the email campaign is active. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for a list of marketplace IDs. | [optional]
**modificationDate** | **string** | The date and time the email campaign was last modified, given in UTC format. | [optional]
**personalizedMessage** | **string** | The body of the email campaign sent to the audience. | [optional]
**priceRange** | [**\macropage\SDKs\ebay\rest\marketing\Model\PriceRange**](PriceRange.md) |  | [optional]
**promotionId** | **string** | The ID of the discount that was assigned to the email campaign. | [optional]
**promotionSelectMode** | **string** | Indicates whether the listings that the discount was applied to were selected manually or automatically.&lt;br&gt;&lt;br&gt;This field will only return if a discount was applied. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**scheduleDate** | **string** | The date and time that the email campaign newsletter is scheduled to send, given in UTC format. This field is only returned if the seller set the start of the email campaign to a date in the future. | [optional]
**scheduleDateType** | **string** | The schedule type of the email campaign. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum\&quot;&gt;ScheduleDateTypeEnum&lt;/a&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**sentDate** | **string** | The date and time that the email campaign was sent, given in UTC format. | [optional]
**sort** | **string** | The sort rule is used to display the items in the email campaign. If no sort rule was selected, the default will be &lt;code&gt;NEWLY_LISTED&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**subject** | **string** | The email campaign subject. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
