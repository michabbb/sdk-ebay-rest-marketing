# macropage\SDKs\ebay\rest\marketing\PromotionSummaryReportApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPromotionSummaryReport()**](PromotionSummaryReportApi.md#getPromotionSummaryReport) | **GET** /promotion_summary_report |  |


## `getPromotionSummaryReport()`

```php
getPromotionSummaryReport($marketplaceId): \macropage\SDKs\ebay\rest\marketing\Model\SummaryReportResponse
```



This method generates a report that summarizes the seller's promotions for the specified eBay marketplace. The report returns information on <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code> promotions (deleted reports are not returned) and summarizes the seller's campaign performance for all promotions on a given site.  <br><br>For information about summary reports, see <a href=\"/api-docs/sell/static/marketing/pm-summary-report.html\">Reading the item promotion Summary report</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionSummaryReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This parameter specifies the eBay marketplace ID of the site for which you want a promotions summary report.<br><br>See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.

try {
    $result = $apiInstance->getPromotionSummaryReport($marketplaceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSummaryReportApi->getPromotionSummaryReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplaceId** | **string**| This parameter specifies the eBay marketplace ID of the site for which you want a promotions summary report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\SummaryReportResponse**](../Model/SummaryReportResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
