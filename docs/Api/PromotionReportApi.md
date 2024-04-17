# macropage\SDKs\ebay\rest\marketing\PromotionReportApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPromotionReports()**](PromotionReportApi.md#getPromotionReports) | **GET** /promotion_report |  |


## `getPromotionReports()`

```php
getPromotionReports($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q): \macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection
```



This method generates a report that lists the seller's running, paused, and ended promotions for the specified eBay marketplace. The result set can be filtered by the promotion status and the number of results to return. You can also supply <i>keywords</i> to limit the report to promotions that contain the specified keywords. <br><br>Specify the eBay marketplace for which you want the report run using the <b>marketplace_id</b> query parameter. Supply additional query parameters to control the report as needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.<br><br>See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.
$limit = 'limit_example'; // string | Specifies the maximum number of promotions returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
$offset = 'offset_example'; // string | Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$promotionStatus = 'promotionStatus_example'; // string | This parameter specifies the promotion state by which you want to filter the results. <br><br>See <a href=\"/api-docs/sell/marketing/types/sme:PromotionStatusEnum\" target=\"_blank\">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
$promotionType = 'promotionType_example'; // string | This parameter specifies the campaign promotion type by which you want to filter the results.<br><br>See <a href=\"/api-docs/sell/marketing/types/sme:PromotionTypeEnum\" target=\"_blank\">PromotionTypeEnum</a> for supported values.
$q = 'q_example'; // string | A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  <br><br><b>Example:</b> \"iPhone\" or \"Harry Potter.\"  <br><br>Commas that separate keywords are ignored. For example, a keyword string of \"iPhone, iPad\" equals \"iPhone iPad\", and each results in a response that contains promotions with both \"iPhone\" and \"iPad\" in the title.

try {
    $result = $apiInstance->getPromotionReports($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionReportApi->getPromotionReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplaceId** | **string**| This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. | |
| **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 | [optional] |
| **offset** | **string**| Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |
| **promotionStatus** | **string**| This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 | [optional] |
| **promotionType** | **string**| This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. | [optional] |
| **q** | **string**| A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection**](../Model/PromotionsReportPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
