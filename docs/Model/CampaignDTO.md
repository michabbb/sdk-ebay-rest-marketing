# # CampaignDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audiences** | [**\macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]**](CampaignAudience.md) | The audiences that the email campaign is being sent to. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:AudienceTypeEnum\&quot;&gt;AudienceTypeEnum&lt;/a&gt; for a list of audience types. | [optional]
**creationDate** | **string** | The date and time that the email campaign was created, given in UTC format. | [optional]
**emailCampaignId** | **string** | The unique eBay identifier for the email campaign assigned automatically when the email campaign is created. | [optional]
**emailCampaignStatus** | **string** | The email campaign status. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\&quot;&gt;EmailCampaignStatusEnum&lt;/a&gt; for information on statuses. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**emailCampaignType** | **string** | The email campaign type. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:CampaignTypeEnum\&quot;&gt;CampaignTypeEnum&lt;/a&gt; for definitions of email campaign types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**marketplaceId** | **string** | The eBay marketplace where the email campaign is active. | [optional]
**modificationDate** | **string** | The date and time the email campaign was last modified, given in UTC format. | [optional]
**scheduleDate** | **string** | The date and time that the email campaign newsletter is scheduled to send, given in UTC format. | [optional]
**scheduleDateType** | **string** | The schedule type used for sending the email campaign. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum\&quot;&gt;ScheduleDateTypeEnum&lt;/a&gt; for available schedule types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**sentDate** | **string** | The date and time that the email campaign was last sent, given in UTC format. | [optional]
**subject** | **string** | The email campaign subject line.. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
