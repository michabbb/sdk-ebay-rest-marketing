# # CreateKeywordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adGroupId** | **string** | This &lt;b&gt;adGroupId&lt;/b&gt; is created when an ad group is first created and associated with a campaign. This is the ad group that the corresponding keyword will be added to. This ad group must be a part of the campaign that is specified in the call URI. Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve the ad group IDs for a seller, and &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/keywords/methods/getKeywords\&quot;&gt;getKeywords&lt;/a&gt; to retrieve the keyword IDs for a seller&#39;s keywords. | [optional]
**bid** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**keywordText** | **string** | The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of characters:&lt;/b&gt; 100&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of words:&lt;/b&gt; 10 | [optional]
**matchType** | **string** | A field that defines the match type for the keyword.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;BROAD&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;EXACT&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;PHRASE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
