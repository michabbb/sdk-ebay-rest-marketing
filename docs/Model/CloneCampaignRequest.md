# # CloneCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignName** | **string** | A seller-defined name for the newly-cloned campaign. This value must be unique for the seller.&lt;br&gt;&lt;br&gt;You can use any alphanumeric characters in the name, except the less than (&amp;lt;) or greater than (&amp;gt;) characters.&lt;br&gt;&lt;br&gt;&lt;b&gt;Max length: &lt;/b&gt;80 characters | [optional]
**endDate** | **string** | The date and time the campaign ends, in UTC format (&lt;code&gt;yyyy-MM-ddThh:mm:ssZ&lt;/code&gt;). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/endCampaign\&quot;&gt;endCampaign&lt;/a&gt; call, or if they update the campaign at a later time with an end date. | [optional]
**fundingStrategy** | [**\macropage\SDKs\ebay\rest\marketing\Model\FundingStrategy**](FundingStrategy.md) |  | [optional]
**startDate** | **string** | The date and time the cloned campaign starts, in UTC format (&lt;code&gt;yyyy-MM-ddThh:mm:ssZ&lt;/code&gt;). For display purposes, convert this time into the local time of the seller.  &lt;p&gt;On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call &lt;b&gt;getCampaign&lt;/b&gt; to check the status of the campaign.&lt;/p&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
