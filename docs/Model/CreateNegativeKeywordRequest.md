# # CreateNegativeKeywordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adGroupId** | **string** | This adGroupId is created when an ad group is first created and associated with a campaign. This is the ad group to which the corresponding negative keyword will be added.&lt;br /&gt;&lt;br /&gt;Use the  &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve the ad group IDs for a seller.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;i&gt;Required if&lt;/i&gt; the negative keyword is being created at the ad group level. | [optional]
**campaignId** | **string** | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the set of negative keywords being created. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs.&lt;br /&gt;&lt;br /&gt;&lt;i&gt;Required if&lt;/i&gt; the negative keyword is being created at the ad group level. | [optional]
**negativeKeywordMatchType** | **string** | A field that defines the match type for the negative keyword.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Broad matching of negative keywords is not currently supported.&lt;/span&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;EXACT&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;PHRASE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**negativeKeywordText** | **string** | The negative keyword text. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
