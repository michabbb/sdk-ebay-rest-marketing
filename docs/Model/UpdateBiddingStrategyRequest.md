# # UpdateBiddingStrategyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**biddingStrategy** | **string** | The new bidding strategy for the specified Cost Per Click (CPC) campaign. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:BiddingStrategyEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**bidPreferences** | [**\macropage\SDKs\ebay\rest\marketing\Model\BidPreference[]**](BidPreference.md) | This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This container is only applicable for smart targeting campaigns.&lt;/span&gt;&lt;br&gt;This container is required if the user wants to create a Smart Targeting campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
