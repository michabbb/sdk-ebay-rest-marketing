# # CreateEmailCampaignResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emailCampaignId** | **string** | The unique eBay-assigned identifier of the email campaign. It is generated automatically when the email campaign is created.&lt;br&gt;&lt;br&gt;This value is returned unless there is an error. | [optional]
**emailCampaignStatus** | **string** | The status of the email campaign.&lt;br&gt;&lt;br&gt;&lt;code&gt;ACTIVE&lt;/code&gt; is returned for email campaigns that have been successfully created but not been sent.&lt;br&gt;&lt;br&gt;&lt;code&gt;SENT&lt;/code&gt; is returned for email campaigns that have already been sent.&lt;br&gt;&lt;br&gt;&lt;code&gt;ERROR&lt;/code&gt; is returned when an email has not been successfully created. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
