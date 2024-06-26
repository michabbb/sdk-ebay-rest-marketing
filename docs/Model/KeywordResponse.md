# # KeywordResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adGroupId** | **string** | The identifier of the ad group that the keyword was added to. | [optional]
**errors** | [**\macropage\SDKs\ebay\rest\marketing\Model\Error[]**](Error.md) | This container will be returned if there is an issue creating the corresponding keyword and/or adding that keyword to the corresponding ad group. | [optional]
**href** | **string** | The getKeyword URI for the keyword, which is used to retrieve the keyword. This URI will be returned for each successfully created keyword. | [optional]
**keywordId** | **string** | A unique eBay-assigned ID for a keyword that is generated for an ad group. This keyword ID will be generated for each successfully created keyword. | [optional]
**keywordText** | **string** | The text of the keyword. | [optional]
**matchType** | **string** | A field that defines the match type for the keyword.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;BROAD&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;EXACT&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;PHRASE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**statusCode** | **int** | An HTTP status code is returned for each keyword to indicate the success or failure of adding that keyword to the ad group. | [optional]
**warnings** | [**\macropage\SDKs\ebay\rest\marketing\Model\Error[]**](Error.md) | List of warnings associated with this operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
