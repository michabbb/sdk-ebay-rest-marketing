# # GetEmailCampaignAudiencesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audiences** | [**\macropage\SDKs\ebay\rest\marketing\Model\CampaignAudience[]**](CampaignAudience.md) | An array of audiences available for the specified email campaign type. If no audiences are available, the result will return an empty array. | [optional]
**href** | **string** | The URL to the current page of store email campaign audiences. | [optional]
**limit** | **int** | The value of the limit parameter submitted in the request, which is the maximum number of store email campaign audiences to return on a page from the result set. | [optional]
**next** | **string** | The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set. | [optional]
**offset** | **int** | This value indicates the offset used for the current page of store email campaign audiences returned. | [optional]
**prev** | **string** | The URI for the previous page of results. This is returned if there is a previous page of results from the result set. | [optional]
**total** | **int** | The total number of available audiences returned under the query conditions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
