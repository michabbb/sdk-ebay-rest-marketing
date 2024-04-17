# macropage\SDKs\ebay\rest\marketing\AdReportMetadataApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportMetadata()**](AdReportMetadataApi.md#getReportMetadata) | **GET** /ad_report_metadata |  |
| [**getReportMetadataForReportType()**](AdReportMetadataApi.md#getReportMetadataForReportType) | **GET** /ad_report_metadata/{report_type} |  |


## `getReportMetadata()`

```php
getReportMetadata($fundingModel, $channel): \macropage\SDKs\ebay\rest\marketing\Model\ReportMetadatas
```



This call retrieves information that details the fields used in each of the Promoted Listings reports. Use the returned information to configure the different types of Promoted Listings reports.</br></br> You can retrieve metadata for all report types,funding models and channels, or you can filter based on funding model and/or channel.<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fundingModel = 'fundingModel_example'; // string | This query parameter is used only if the user wants to see report metadata for a specific funding model. Refer to the <a href=\"/api-docs/sell/marketing/types/pls:FundingModelEnum\">FundingModelEnum</a> type for supported values.
$channel = 'channel_example'; // string | This query parameter is used only if the user wants to see COST_PER_CLICK report metadata for a specific channel. Refer to the <a href=\"/api-docs/sell/marketing/types/pls:ChannelEnum\">ChannelEnum</a> type for supported values.<br><br><span class=\"tablenote\"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>

try {
    $result = $apiInstance->getReportMetadata($fundingModel, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundingModel** | **string**| This query parameter is used only if the user wants to see report metadata for a specific funding model. Refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:FundingModelEnum\&quot;&gt;FundingModelEnum&lt;/a&gt; type for supported values. | [optional] |
| **channel** | **string**| This query parameter is used only if the user wants to see COST_PER_CLICK report metadata for a specific channel. Refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:ChannelEnum\&quot;&gt;ChannelEnum&lt;/a&gt; type for supported values.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The channel parameter is only applicable for COST_PER_CLICK funding model.&lt;/span&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ReportMetadatas**](../Model/ReportMetadatas.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportMetadataForReportType()`

```php
getReportMetadataForReportType($reportType, $fundingModel, $channel): \macropage\SDKs\ebay\rest\marketing\Model\ReportMetadata
```



This call retrieves metadata that details the fields used by a specific Promoted Listings report type. Use the <b>report_type</b> path parameter to indicate metadata to retrieve.<br/><br/>This method does not use a request payload.<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportType = 'reportType_example'; // string | This path parameter specifies the name of the report type whose metadata you want to retrieve.<br /><br />For details about available report types and their descriptions, refer to the <a href=\"/api-docs/sell/marketing/types/plr:ReportTypeEnum\" target=\"_blank\">ReportTypeEnum</a>.
$fundingModel = 'fundingModel_example'; // string | The funding model used in the report. The funding model must be compatible with the report type specified in the path parameter. Refer to the <a href=\"/api-docs/sell/marketing/types/pls:FundingModelEnum\">FundingModelEnum</a> type for supported values.
$channel = 'channel_example'; // string | The channel used in the report. The channel must be compatible with the report type specified in the path parameter. Refer to the <a href=\"/api-docs/sell/marketing/types/pls:ChannelEnum\">ChannelEnum</a> type for supported values. <br><br><span class=\"tablenote\"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>

try {
    $result = $apiInstance->getReportMetadataForReportType($reportType, $fundingModel, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadataForReportType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportType** | **string**| This path parameter specifies the name of the report type whose metadata you want to retrieve.&lt;br /&gt;&lt;br /&gt;For details about available report types and their descriptions, refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/plr:ReportTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ReportTypeEnum&lt;/a&gt;. | |
| **fundingModel** | **string**| The funding model used in the report. The funding model must be compatible with the report type specified in the path parameter. Refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:FundingModelEnum\&quot;&gt;FundingModelEnum&lt;/a&gt; type for supported values. | [optional] |
| **channel** | **string**| The channel used in the report. The channel must be compatible with the report type specified in the path parameter. Refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:ChannelEnum\&quot;&gt;ChannelEnum&lt;/a&gt; type for supported values. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The channel parameter is only applicable for COST_PER_CLICK funding model.&lt;/span&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ReportMetadata**](../Model/ReportMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
