# macropage\SDKs\ebay\rest\marketing\NegativeKeywordApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateNegativeKeyword()**](NegativeKeywordApi.md#bulkCreateNegativeKeyword) | **POST** /bulk_create_negative_keyword |  |
| [**bulkUpdateNegativeKeyword()**](NegativeKeywordApi.md#bulkUpdateNegativeKeyword) | **POST** /bulk_update_negative_keyword |  |
| [**createNegativeKeyword()**](NegativeKeywordApi.md#createNegativeKeyword) | **POST** /negative_keyword |  |
| [**getNegativeKeyword()**](NegativeKeywordApi.md#getNegativeKeyword) | **GET** /negative_keyword/{negative_keyword_id} |  |
| [**getNegativeKeywords()**](NegativeKeywordApi.md#getNegativeKeywords) | **GET** /negative_keyword |  |
| [**updateNegativeKeyword()**](NegativeKeywordApi.md#updateNegativeKeyword) | **PUT** /negative_keyword/{negative_keyword_id} |  |


## `bulkCreateNegativeKeyword()`

```php
bulkCreateNegativeKeyword($bulkCreateNegativeKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateNegativeKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds negative keywords, in bulk, to an existing ad group in a priority strategy campaign that uses manual targeting.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkCreateNegativeKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateNegativeKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateNegativeKeywordRequest | A type that defines the fields for the bulk request to create negative keywords.

try {
    $result = $apiInstance->bulkCreateNegativeKeyword($bulkCreateNegativeKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->bulkCreateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkCreateNegativeKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateNegativeKeywordRequest**](../Model/BulkCreateNegativeKeywordRequest.md)| A type that defines the fields for the bulk request to create negative keywords. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateNegativeKeywordResponse**](../Model/BulkCreateNegativeKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateNegativeKeyword()`

```php
bulkUpdateNegativeKeyword($bulkUpdateNegativeKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateNegativeKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the statuses of existing negative keywords, in bulk.<br /><br />Specify the <b>negativeKeywordId</b> and <b>negativeKeywordStatus</b> in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkUpdateNegativeKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateNegativeKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateNegativeKeywordRequest | A type that defines the fields for the bulk request to update negative keyword statuses.

try {
    $result = $apiInstance->bulkUpdateNegativeKeyword($bulkUpdateNegativeKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->bulkUpdateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkUpdateNegativeKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateNegativeKeywordRequest**](../Model/BulkUpdateNegativeKeywordRequest.md)| A type that defines the fields for the bulk request to update negative keyword statuses. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateNegativeKeywordResponse**](../Model/BulkUpdateNegativeKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNegativeKeyword()`

```php
createNegativeKeyword($createNegativeKeywordRequest): object
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds a negative keyword to an existing ad group in a priority strategy campaign that uses manual targeting.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createNegativeKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateNegativeKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateNegativeKeywordRequest | A type that defines the fields for the request to create a negative keyword.

try {
    $result = $apiInstance->createNegativeKeyword($createNegativeKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->createNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createNegativeKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateNegativeKeywordRequest**](../Model/CreateNegativeKeywordRequest.md)| A type that defines the fields for the request to create a negative keyword. | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeyword()`

```php
getNegativeKeyword($negativeKeywordId): \macropage\SDKs\ebay\rest\marketing\Model\NegativeKeyword
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves details on a specific negative keyword.<br /><br />In the request, specify the <b>negative_keyword_id</b> as a path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negativeKeywordId = 'negativeKeywordId_example'; // string | This path parameter specifies the unique identifier for the negative keyword being retrieved.<br /><br />Use the <a href=\"/api-docs/sell/marketing/resources/negative_keyword/methods/getNegativeKeywords\" target=\"_blank \"> getNegativeKeywords</a> method to retrieve negative keyword IDs.

try {
    $result = $apiInstance->getNegativeKeyword($negativeKeywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->getNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **negativeKeywordId** | **string**| This path parameter specifies the unique identifier for the negative keyword being retrieved.&lt;br /&gt;&lt;br /&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/negative_keyword/methods/getNegativeKeywords\&quot; target&#x3D;\&quot;_blank \&quot;&gt; getNegativeKeywords&lt;/a&gt; method to retrieve negative keyword IDs. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\NegativeKeyword**](../Model/NegativeKeyword.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeywords()`

```php
getNegativeKeywords($adGroupIds, $campaignIds, $limit, $negativeKeywordStatus, $offset): \macropage\SDKs\ebay\rest\marketing\Model\NegativeKeywordPagedCollectionResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the negative keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />The results can be filtered using the <b>campaign_ids</b>, <b>ad_group_ids</b>, and <b>negative_keyword_status</b> query parameters.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupIds = 'adGroupIds_example'; // string | A comma-separated list of ad group IDs.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.<br /><br />Use the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br /><br /><i>Required if</i> the search results must be filtered to include negative keywords created at the ad group level.
$campaignIds = 'campaignIds_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the negative keywords being retrieved.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.<br /><br /><span class=\"tablenote\"><b>Note:</b> Currently, only one campaign ID value is supported for each request.</span><br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$limit = 'limit_example'; // string | The number of results, from the current result set, to be returned in a single page.
$negativeKeywordStatus = 'negativeKeywordStatus_example'; // string | A comma-separated list of negative keyword statuses.<br /><br />This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.<br><br> See <a href=\"/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum\" target=\"_blank\">NegativeKeywordStatusEnum</a> for supported values.
$offset = 'offset_example'; // string | The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.

try {
    $result = $apiInstance->getNegativeKeywords($adGroupIds, $campaignIds, $limit, $negativeKeywordStatus, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->getNegativeKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupIds** | **string**| A comma-separated list of ad group IDs.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve the ad group IDs for a seller.&lt;br /&gt;&lt;br /&gt;&lt;i&gt;Required if&lt;/i&gt; the search results must be filtered to include negative keywords created at the ad group level. | [optional] |
| **campaignIds** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the negative keywords being retrieved.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Currently, only one campaign ID value is supported for each request.&lt;/span&gt;&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | [optional] |
| **limit** | **string**| The number of results, from the current result set, to be returned in a single page. | [optional] |
| **negativeKeywordStatus** | **string**| A comma-separated list of negative keyword statuses.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.&lt;br&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;NegativeKeywordStatusEnum&lt;/a&gt; for supported values. | [optional] |
| **offset** | **string**| The number of results that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\NegativeKeywordPagedCollectionResponse**](../Model/NegativeKeywordPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNegativeKeyword()`

```php
updateNegativeKeyword($negativeKeywordId, $updateNegativeKeywordRequest)
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the status of an existing negative keyword.<br /><br />Specify the <b>negative_keyword_id</b> as a path parameter, and specify the <b>negativeKeywordStatus</b> in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negativeKeywordId = 'negativeKeywordId_example'; // string | The unique identifier for the negative keyword.<br /><br />This value is returned in the <b>Location</b> response header from the <a href=\"/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\">createNegativeKeyword</a> method.
$updateNegativeKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateNegativeKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateNegativeKeywordRequest | A type that defines the fields for the request to update a negative keyword.

try {
    $apiInstance->updateNegativeKeyword($negativeKeywordId, $updateNegativeKeywordRequest);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->updateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **negativeKeywordId** | **string**| The unique identifier for the negative keyword.&lt;br /&gt;&lt;br /&gt;This value is returned in the &lt;b&gt;Location&lt;/b&gt; response header from the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\&quot;&gt;createNegativeKeyword&lt;/a&gt; method. | |
| **updateNegativeKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateNegativeKeywordRequest**](../Model/UpdateNegativeKeywordRequest.md)| A type that defines the fields for the request to update a negative keyword. | |

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
