# macropage\SDKs\ebay\rest\marketing\AdReportApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReport()**](AdReportApi.md#getReport) | **GET** /ad_report/{report_id} |  |


## `getReport()`

```php
getReport($reportId): object
```



This call downloads the report as specified by the <b>report_id</b> path parameter.  <br><br>Call <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask\" title=\"createReportTask API docs\">createReportTask</a> to schedule and generate a Promoted Listings report. All date values are returned in UTC format (<code>yyyy-MM-ddThh:mm:ss.sssZ</code>).<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | This path parameter specifies the unique ID of the Promoted Listings report being retrieved.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\">getReportTasks</a> method to retrieve report IDs.

try {
    $result = $apiInstance->getReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportApi->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**| This path parameter specifies the unique ID of the Promoted Listings report being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\&quot;&gt;getReportTasks&lt;/a&gt; method to retrieve report IDs. | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/tab-separated-values`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
