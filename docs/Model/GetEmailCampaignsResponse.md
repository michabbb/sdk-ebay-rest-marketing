# # GetEmailCampaignsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaigns** | [**\macropage\SDKs\ebay\rest\marketing\Model\CampaignDTO[]**](CampaignDTO.md) | A list of email campaigns that match the search criteria. | [optional]
**href** | **string** | The URL to the current page of store email campaigns. | [optional]
**limit** | **int** | The value of the limit parameter submitted in the request, which is the maximum number of store email campaigns to return on a page from the result set. | [optional]
**next** | **string** | The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set. | [optional]
**offset** | **int** | This value indicates the offset used for current page of store email campaigns being returned. | [optional]
**prev** | **string** | The URI for the previous page of results. This is returned if there is a previous page of results from the result set. | [optional]
**total** | **int** | Total number of available results returned under the filter criteria submitted in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
