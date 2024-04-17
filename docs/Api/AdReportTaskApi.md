# macropage\SDKs\ebay\rest\marketing\AdReportTaskApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReportTask()**](AdReportTaskApi.md#createReportTask) | **POST** /ad_report_task |  |
| [**deleteReportTask()**](AdReportTaskApi.md#deleteReportTask) | **DELETE** /ad_report_task/{report_task_id} |  |
| [**getReportTask()**](AdReportTaskApi.md#getReportTask) | **GET** /ad_report_task/{report_task_id} |  |
| [**getReportTasks()**](AdReportTaskApi.md#getReportTasks) | **GET** /ad_report_task |  |


## `createReportTask()`

```php
createReportTask($contentType, $createReportTask)
```



This method creates a <i>report task</i>, which generates a Promoted Listings report based on the values specified in the call.<br /><br />The report is generated based on the criteria you specify, including the report type, the report's dimensions and metrics, the report's start and end dates, the listings to include in the report, and more. <i>Metrics </i>are the quantitative measurements in the report while <i>dimensions</i> specify the attributes of the data included in the reports.<br /><br />When creating a report task, you can specify the items you want included in the report. The items you specify, using either <b>listingId</b> or <b>inventoryReference</b> values, must be in a Promoted Listings campaign for them to be included in the report.<br /><br />For details on the required and optional fields for each report type, see <a href=\"/api-docs/sell/static/marketing/pl-reports.html\">Promoted Listings reporting</a>.<br /><br />This call returns the URL to the report task in the <b>Location</b> response header, and the URL includes the report-task ID.<br /><br />Reports often take time to generate and it's common for this call to return an HTTP status of <code>202</code>, which indicates the report is being generated. Call <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\">getReportTasks</a> (or <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTask\">getReportTask</a> with the report-task ID) to determine the status of a Promoted Listings report. When a report is complete, eBay sets its status to <b>SUCCESS</b> and you can download it using the URL returned in the <b>reportHref</b> field of the <b>getReportTask</b> call. Report files are tab-separated value gzip files with a file extension of <code>.tsv.gz</code>.<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> This call fails if you don't submit all the required fields for the specified report type. Fields not supported by the specified report type are ignored. Call <a href=\"/api-docs/sell/marketing/resources/ad_report_metadata/methods/getReportMetadata\">getReportMetadata</a> to retrieve a list of the fields you need to configure for each Promoted Listings report type.</span><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> The data threshold for a single report is currently 500,000 records; if this threshold is exceeded, the report will fail.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createReportTask = new \macropage\SDKs\ebay\rest\marketing\Model\CreateReportTask(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateReportTask | The container for the fields that define the report task.

try {
    $apiInstance->createReportTask($contentType, $createReportTask);
} catch (Exception $e) {
    echo 'Exception when calling AdReportTaskApi->createReportTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **createReportTask** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateReportTask**](../Model/CreateReportTask.md)| The container for the fields that define the report task. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReportTask()`

```php
deleteReportTask($reportTaskId)
```



This call deletes the report task specified by the <b>report_task_id</b> path parameter. This method also deletes any reports generated by the report task.  <p>Report task IDs are generated by eBay when you call <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask\">createReportTask</a>. Get a complete list of a seller's report-task IDs by calling <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\">getReportTasks</a>.</p><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportTaskId = 'reportTaskId_example'; // string | This path parameter specifies the unique identifier of the report task being deleted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\" target=\"_blank\">getReportTasks</a> method to retrieve report task Ids.

try {
    $apiInstance->deleteReportTask($reportTaskId);
} catch (Exception $e) {
    echo 'Exception when calling AdReportTaskApi->deleteReportTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportTaskId** | **string**| This path parameter specifies the unique identifier of the report task being deleted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getReportTasks&lt;/a&gt; method to retrieve report task Ids. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTask()`

```php
getReportTask($reportTaskId): \macropage\SDKs\ebay\rest\marketing\Model\ReportTask
```



This call returns the details of a specific Promoted Listings report task, as specified by the <b>report_task_id</b> path parameter. <p>The report task includes the report criteria (such as the report dimensions, metrics, and included listing) and the report-generation rules (such as starting and ending dates for the specified report task).</p>  <p>Report-task IDs are generated by eBay when you call <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask\">createReportTask</a>. Get a complete list of a seller's report-task IDs by calling <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\">getReportTasks</a>.</p><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportTaskId = 'reportTaskId_example'; // string | This path parameter specifies the unique identifier of the report task being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\" target=\"_blank\">getReportTasks</a> method to retrieve report task Ids.

try {
    $result = $apiInstance->getReportTask($reportTaskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportTaskApi->getReportTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportTaskId** | **string**| This path parameter specifies the unique identifier of the report task being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getReportTasks&lt;/a&gt; method to retrieve report task Ids. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ReportTask**](../Model/ReportTask.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTasks()`

```php
getReportTasks($limit, $offset, $reportTaskStatuses): \macropage\SDKs\ebay\rest\marketing\Model\ReportTaskPagedCollection
```



This method returns information on all the existing report tasks related to a seller. <p>Use the <b>report_task_statuses</b> query parameter to control which reports to return. You can paginate the result set by specifying a <b>limit</b>, which dictates how many report tasks to return on each page of the response. Use the <b>offset</b> parameter to specify how many reports to skip in the result set before returning the first result.</p><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdReportTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Specifies the maximum number of report tasks to return on a page in the paginated response.<br><br><b>Default:</b> 10<br><b>Maximum:</b> 500
$offset = 'offset_example'; // string | Specifies the number of report tasks to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the response contains the first 10 reports from the complete list of report tasks retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the first page of the response contains reports 11-20 from the complete result set.</p> <b>Default:</b> 0
$reportTaskStatuses = 'reportTaskStatuses_example'; // string | This query parameter filters the returned report tasks by their status. Supply a comma-separated list of the report statuses you want returned. The results are filtered to include only the report statuses you specify.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> The results might not include some report tasks if other search conditions exclude them.</span><br />See <a href=\"/api-docs/sell/marketing/types/plr:TaskStatusEnum\" target=\"_blank\">TaskStatusEnum</a> for supported values.

try {
    $result = $apiInstance->getReportTasks($limit, $offset, $reportTaskStatuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportTaskApi->getReportTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| Specifies the maximum number of report tasks to return on a page in the paginated response.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 10&lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 500 | [optional] |
| **offset** | **string**| Specifies the number of report tasks to skip in the result set before returning the first report in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the reports returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the response contains the first 10 reports from the complete list of report tasks retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt;, the first page of the response contains reports 11-20 from the complete result set.&lt;/p&gt; &lt;b&gt;Default:&lt;/b&gt; 0 | [optional] |
| **reportTaskStatuses** | **string**| This query parameter filters the returned report tasks by their status. Supply a comma-separated list of the report statuses you want returned. The results are filtered to include only the report statuses you specify.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; The results might not include some report tasks if other search conditions exclude them.&lt;/span&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/plr:TaskStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;TaskStatusEnum&lt;/a&gt; for supported values. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ReportTaskPagedCollection**](../Model/ReportTaskPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
