# macropage\SDKs\ebay\rest\marketing\EmailCampaignApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailCampaign()**](EmailCampaignApi.md#createEmailCampaign) | **POST** /email_campaign |  |
| [**deleteEmailCampaign()**](EmailCampaignApi.md#deleteEmailCampaign) | **DELETE** /email_campaign/{email_campaign_id} |  |
| [**getAudiences()**](EmailCampaignApi.md#getAudiences) | **GET** /email_campaign/audience |  |
| [**getEmailCampaign()**](EmailCampaignApi.md#getEmailCampaign) | **GET** /email_campaign/{email_campaign_id} |  |
| [**getEmailCampaigns()**](EmailCampaignApi.md#getEmailCampaigns) | **GET** /email_campaign |  |
| [**getEmailPreview()**](EmailCampaignApi.md#getEmailPreview) | **GET** /email_campaign/{email_campaign_id}/email_preview |  |
| [**getEmailReport()**](EmailCampaignApi.md#getEmailReport) | **GET** /email_campaign/report |  |
| [**updateEmailCampaign()**](EmailCampaignApi.md#updateEmailCampaign) | **PUT** /email_campaign/{email_campaign_id} |  |


## `createEmailCampaign()`

```php
createEmailCampaign($xEBAYCMARKETPLACEID, $createEmailCampaignRequest): \macropage\SDKs\ebay\rest\marketing\Model\CreateEmailCampaignResponse
```



This method creates a new email campaign. An eBay store owner can create six different types of email campaigns: Welcome, New products & collections, Coupon, Sale event + markdown, Order discount, and Volume pricing.<br><br>A successful <b>createEmailCampaign</b> request returns the <b>emailCampaignId</b> assigned to the new email campaign.<br><br>The fields <b>emailCampaignType</b>, <b>audienceCodes</b>, <b>itemSelectMode</b>, <b>subject</b>, and <b>personalizedMessage</b> are required for all email campaign types. <br><br>Specific email campaign types have required values for additional fields. For more information on the email campaign types, see the <a href=\"/api-docs/sell/static/marketing/store-email-campaigns.html#email-campain-types\" target=\"_blank\">Store Email Campaigns</a> section of the Selling Integration Guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xEBAYCMARKETPLACEID = 'xEBAYCMARKETPLACEID_example'; // string | The eBay marketplace that the email campaign interfaces with.<br><br>eBay marketplaces correspond to geographical regions or large submarkets of regions. For example, <code>EBAY-US</code> corresponds to the United States market.<br><br>See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for supported values.
$createEmailCampaignRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateEmailCampaignRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateEmailCampaignRequest | Create a new email campaign request.

try {
    $result = $apiInstance->createEmailCampaign($xEBAYCMARKETPLACEID, $createEmailCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xEBAYCMARKETPLACEID** | **string**| The eBay marketplace that the email campaign interfaces with.&lt;br&gt;&lt;br&gt;eBay marketplaces correspond to geographical regions or large submarkets of regions. For example, &lt;code&gt;EBAY-US&lt;/code&gt; corresponds to the United States market.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported values. | |
| **createEmailCampaignRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateEmailCampaignRequest**](../Model/CreateEmailCampaignRequest.md)| Create a new email campaign request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\CreateEmailCampaignResponse**](../Model/CreateEmailCampaignResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailCampaign()`

```php
deleteEmailCampaign($emailCampaignId): \macropage\SDKs\ebay\rest\marketing\Model\DeleteEmailCampaignResponse
```



This method deletes the email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href=\"/api-docs/sell/marketing/resources/email_campaign/methods/getEmailCampaigns\">getEmailCampaigns</a> to retrieve all of the seller's email campaigns. Use the <b>email_campaign_id</b> of the desired email campaign in the response as the path parameter for this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaignId = 'emailCampaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier for the email campaign being deleted.<br /><br /> You can retrieve the email campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/email_campaign/methods/getEmailCampaigns\">getEmailCampaigns</a> method.

try {
    $result = $apiInstance->deleteEmailCampaign($emailCampaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->deleteEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailCampaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier for the email campaign being deleted.&lt;br /&gt;&lt;br /&gt; You can retrieve the email campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/email_campaign/methods/getEmailCampaigns\&quot;&gt;getEmailCampaigns&lt;/a&gt; method. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\DeleteEmailCampaignResponse**](../Model/DeleteEmailCampaignResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudiences()`

```php
getAudiences($emailCampaignType, $limit, $offset): \macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignAudiencesResponse
```



This method retrieves all available email newsletter audiences for the <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\">email campaign type</a> specified by the <b>emailCampaignType</b> path parameter.<br><br>Use the optional <b>limit</b> and <b>offset</b> path parameters to paginate the results and to control which records are returned, respectively.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaignType = 'emailCampaignType_example'; // string | The email campaign type to search against.<br><br>See <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\" target=\"_blank\">CampaignTypeEnum</a> for the full list of available email campaign types and associated enum values.
$limit = 'limit_example'; // string | The maximum number of audience groups returned per page in the results set.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200<br><br><b>Default value</b>: 100
$offset = 'offset_example'; // string | The number of results to skip in a pagination query. This value cannot be less than 0.<br><br><b>Default value</b>: 0

try {
    $result = $apiInstance->getAudiences($emailCampaignType, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->getAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailCampaignType** | **string**| The email campaign type to search against.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:CampaignTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;CampaignTypeEnum&lt;/a&gt; for the full list of available email campaign types and associated enum values. | |
| **limit** | **string**| The maximum number of audience groups returned per page in the results set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min value&lt;/b&gt;: 1&lt;br&gt;&lt;br&gt;&lt;b&gt;Max value&lt;/b&gt;: 200&lt;br&gt;&lt;br&gt;&lt;b&gt;Default value&lt;/b&gt;: 100 | [optional] |
| **offset** | **string**| The number of results to skip in a pagination query. This value cannot be less than 0.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default value&lt;/b&gt;: 0 | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignAudiencesResponse**](../Model/GetEmailCampaignAudiencesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaign()`

```php
getEmailCampaign($emailCampaignId): \macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignResponse
```



This method returns the details of a single email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\">getEmailCampaigns</a> to retrieve a list of all email campaigns from a seller's eBay store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaignId = 'emailCampaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the email campaign being retrieved.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\">getEmailCampaigns</a> method to retrieve a list of email campaign IDs for a seller.

try {
    $result = $apiInstance->getEmailCampaign($emailCampaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailCampaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the email campaign being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\&quot;&gt;getEmailCampaigns&lt;/a&gt; method to retrieve a list of email campaign IDs for a seller. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignResponse**](../Model/GetEmailCampaignResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaigns()`

```php
getEmailCampaigns($limit, $offset, $q, $sort): \macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignsResponse
```



This method retrieves a list of email campaigns from a seller's eBay store.<br><br>Users can filter the results by <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\">email campaign type</a>, <a href=\"/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\">email campaign status</a>, and <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">marketplace ID</a> using the <code>q</code> query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The maximum number of email campaigns returned in a page.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200
$offset = 'offset_example'; // string | The number of results to skip in a pagination query. This value cannot be less than zero.<br><br><b>Default value</b>: 0
$q = 'q_example'; // string | This field contains filter criteria for the results returned. Filter by <a href=\"/api-docs/sell/marketing/types/api:CampaignTypeEnum\">email campaign type</a>, <a href=\"/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\">email campaign status</a>, and <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">marketplace ID</a>.<br><br>For example, setting <code>q=campaignType:WELCOME,ITEM_SHOWCASE</code> will return only Welcome and Item Showcase email campaigns.<br><br><span class=\"tablenote\"><b>Note:</b> At least one <code>campaignType</code> value must be set through the <code>q</code> query parameter. If no other filters are set, all email campaigns for the specified campaign type(s) will be returned in the results set.</span>
$sort = 'sort_example'; // string | The criteria for sorting email campaign results. See <a href=\"/api-docs/sell/marketing/types/api:ItemSortEnum\" target=\"_blank\">ItemSortEnum</a> for sorting options and their enum values.<br><br><b>Default</b>: <code>NEWLY_LISTED</code>

try {
    $result = $apiInstance->getEmailCampaigns($limit, $offset, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->getEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| The maximum number of email campaigns returned in a page.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min value&lt;/b&gt;: 1&lt;br&gt;&lt;br&gt;&lt;b&gt;Max value&lt;/b&gt;: 200 | [optional] |
| **offset** | **string**| The number of results to skip in a pagination query. This value cannot be less than zero.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default value&lt;/b&gt;: 0 | [optional] |
| **q** | **string**| This field contains filter criteria for the results returned. Filter by &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:CampaignTypeEnum\&quot;&gt;email campaign type&lt;/a&gt;, &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum\&quot;&gt;email campaign status&lt;/a&gt;, and &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;marketplace ID&lt;/a&gt;.&lt;br&gt;&lt;br&gt;For example, setting &lt;code&gt;q&#x3D;campaignType:WELCOME,ITEM_SHOWCASE&lt;/code&gt; will return only Welcome and Item Showcase email campaigns.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; At least one &lt;code&gt;campaignType&lt;/code&gt; value must be set through the &lt;code&gt;q&lt;/code&gt; query parameter. If no other filters are set, all email campaigns for the specified campaign type(s) will be returned in the results set.&lt;/span&gt; | [optional] |
| **sort** | **string**| The criteria for sorting email campaign results. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/api:ItemSortEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ItemSortEnum&lt;/a&gt; for sorting options and their enum values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default&lt;/b&gt;: &lt;code&gt;NEWLY_LISTED&lt;/code&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\GetEmailCampaignsResponse**](../Model/GetEmailCampaignsResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPreview()`

```php
getEmailPreview($emailCampaignId): \macropage\SDKs\ebay\rest\marketing\Model\GetEmailPreviewResponse
```



This method returns a preview of the email sent by the email campaign indicated by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\">getEmailCampaigns</a> to obtain a list of email campaigns. Use the <b>emailCampaignId</b> value of the desired email campaign as the <b>email_campaign_id</b> path parameter value.<br><br>If this call is executed successfully, the response returns a <b>content</b> field that contains the raw HTML code of the email campaign that can then be rendered anywhere.<br><br><span class=\"tablenote\"><b>Note:</b> The eBay listings in the email are sorted according to the email campaign sort criteria. The individual listings can change over time, as well.<br><br>The result of the email preview call can be treated as a snapshot of the email campaign taken at the date and time of the <b>renderDate</b> value found in the results of the call.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaignId = 'emailCampaignId_example'; // string | This path parameter specifies the unique eBay assigned identifier for the email campaign associated with the preview being retrieved.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\" target=\"_blank\">getEmailCampaigns</a> method to retrieve a list of email campaign IDs for a seller.

try {
    $result = $apiInstance->getEmailPreview($emailCampaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->getEmailPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailCampaignId** | **string**| This path parameter specifies the unique eBay assigned identifier for the email campaign associated with the preview being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getEmailCampaigns&lt;/a&gt; method to retrieve a list of email campaign IDs for a seller. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\GetEmailPreviewResponse**](../Model/GetEmailPreviewResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailReport()`

```php
getEmailReport($endDate, $startDate): \macropage\SDKs\ebay\rest\marketing\Model\GetEmailReportResponse
```



This method returns the seller's email campaign performance report for a time period specified by the <b>startDate</b> and <b>endDate</b> path parameters. The maximum date range for a report retrieved by this method is one year. <br><br><span class=\"tablenote\"><b>Note: </b>The <b>startDate</b> and <b>endDate</b> must be given in UTC format, as shown in the following example: <br><code>sell/marketing/v1/email_campaign/report?startDate=2022-11-01T19:09:02.768Z&endDate=2022-12-28T19:09:02.768Z</code></span><br>The email report returns a list of metrics, such as the number of times an email report has been opened and resulted in clicks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endDate = 'endDate_example'; // string | The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
$startDate = 'startDate_example'; // string | The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.

try {
    $result = $apiInstance->getEmailReport($endDate, $startDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->getEmailReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **endDate** | **string**| The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year. | |
| **startDate** | **string**| The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\GetEmailReportResponse**](../Model/GetEmailReportResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCampaign()`

```php
updateEmailCampaign($emailCampaignId, $updateCampaignRequest): \macropage\SDKs\ebay\rest\marketing\Model\UpdateEmailCampaignResponse
```



This method lets users update an existing email campaign. Pass the <b>emailCampaignId</b> in the request URL and specify the changes to field values in the request payload.<br><br><span class=\"tablenote\"><b>Note: </b>You can only update the custom fields of an email campaign. Fixed values, such as the <b>emailCampaignType</b>, cannot be changed. For full specifications of fixed values for each email campaign type, see the <a href=\"/api-docs/sell/marketing/resources/email_campaign/methods/createEmailCampaign\">createEmailCampaign</a> method documentation.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\EmailCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaignId = 'emailCampaignId_example'; // string | This path parameter specifies the unique eBay assigned identifier for the email campaign being updated.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\" target=\"_blank\">getEmailCampaigns</a> method to retrieve a list of email campaign IDs for a seller.
$updateCampaignRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignRequest | update email campaign request

try {
    $result = $apiInstance->updateEmailCampaign($emailCampaignId, $updateCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignApi->updateEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailCampaignId** | **string**| This path parameter specifies the unique eBay assigned identifier for the email campaign being updated.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getEmailCampaigns&lt;/a&gt; method to retrieve a list of email campaign IDs for a seller. | |
| **updateCampaignRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignRequest**](../Model/UpdateCampaignRequest.md)| update email campaign request | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\UpdateEmailCampaignResponse**](../Model/UpdateEmailCampaignResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
