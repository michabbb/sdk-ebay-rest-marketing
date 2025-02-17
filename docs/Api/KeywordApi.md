# macropage\SDKs\ebay\rest\marketing\KeywordApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateKeyword()**](KeywordApi.md#bulkCreateKeyword) | **POST** /ad_campaign/{campaign_id}/bulk_create_keyword |  |
| [**bulkUpdateKeyword()**](KeywordApi.md#bulkUpdateKeyword) | **POST** /ad_campaign/{campaign_id}/bulk_update_keyword |  |
| [**createKeyword()**](KeywordApi.md#createKeyword) | **POST** /ad_campaign/{campaign_id}/keyword |  |
| [**getKeyword()**](KeywordApi.md#getKeyword) | **GET** /ad_campaign/{campaign_id}/keyword/{keyword_id} |  |
| [**getKeywords()**](KeywordApi.md#getKeywords) | **GET** /ad_campaign/{campaign_id}/keyword |  |
| [**updateKeyword()**](KeywordApi.md#updateKeyword) | **PUT** /ad_campaign/{campaign_id}/keyword/{keyword_id} |  |


## `bulkCreateKeyword()`

```php
bulkCreateKeyword($campaignId, $bulkCreateKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds keywords, in bulk, to an existing priority strategy ad group in a campaign that uses manual targeting.<br><br>This method also sets the CPC rate for each keyword, depending on the selected bidding strategy, as follows:<br><br><ul><li><code>FIXED</code>: If the seller provides a keyword bid, that bid value will be used.<br><br>If no bid is provided, the adgroup's default bid value will be used.</li><li><code>DYNAMIC</code>: The eBay suggested bid will be used.<br><br>If the seller passes in a value, a warning will be returned.</li></ul><br>In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a set of keywords is being created.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$bulkCreateKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateKeywordRequest | A type that defines the fields for the bulk request to create keywords.

try {
    $result = $apiInstance->bulkCreateKeyword($campaignId, $bulkCreateKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->bulkCreateKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a set of keywords is being created.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **bulkCreateKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateKeywordRequest**](../Model/BulkCreateKeywordRequest.md)| A type that defines the fields for the bulk request to create keywords. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateKeywordResponse**](../Model/BulkCreateKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateKeyword()`

```php
bulkUpdateKeyword($campaignId, $bulkUpdateKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the bids and statuses of keywords, in bulk, for an existing priority strategy campaign.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a set of keywords is being updated. <br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$bulkUpdateKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateKeywordRequest | A type that defines the fields for the bulk request to update keywords.

try {
    $result = $apiInstance->bulkUpdateKeyword($campaignId, $bulkUpdateKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->bulkUpdateKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a set of keywords is being updated. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **bulkUpdateKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateKeywordRequest**](../Model/BulkUpdateKeywordRequest.md)| A type that defines the fields for the bulk request to update keywords. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateKeywordResponse**](../Model/BulkUpdateKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createKeyword()`

```php
createKeyword($campaignId, $createKeywordRequest): object
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method creates keywords using a specified campaign ID for an existing priority strategy campaign that uses manual targeting.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/suggestKeywords\">suggestKeywords</a> method to retrieve a list of keyword ideas to be targeted for priority strategy campaigns, and call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a keyword is being created. <br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$createKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateKeywordRequest | A type that defines the fields for the request to create a keyword.

try {
    $result = $apiInstance->createKeyword($campaignId, $createKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->createKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which a keyword is being created. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **createKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateKeywordRequest**](../Model/CreateKeywordRequest.md)| A type that defines the fields for the request to create a keyword. | |

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

## `getKeyword()`

```php
getKeyword($campaignId, $keywordId): \macropage\SDKs\ebay\rest\marketing\Model\Keyword
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves details on a specific keyword from an ad group within a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> and <b>keyword_id</b> as path parameters.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller and call the <a href=\"/api-docs/sell/marketing/resources/keyword/methods/getKeywords\">getKeywords</a> method to retrieve their keyword IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword being retrieved. <br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$keywordId = 'keywordId_example'; // string | This path parameter specifies the unique identifier of the keyword being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/keyword/methods/getKeywords\" target=\"_blank\">getKeywords</a> method to retrieve keyword IDs.

try {
    $result = $apiInstance->getKeyword($campaignId, $keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->getKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword being retrieved. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **keywordId** | **string**| This path parameter specifies the unique identifier of the keyword being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/keyword/methods/getKeywords\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getKeywords&lt;/a&gt; method to retrieve keyword IDs. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Keyword**](../Model/Keyword.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeywords()`

```php
getKeywords($campaignId, $adGroupIds, $keywordStatus, $limit, $offset): \macropage\SDKs\ebay\rest\marketing\Model\KeywordPagedCollectionResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword(s) being retrieved. <br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$adGroupIds = 'adGroupIds_example'; // string | A comma-separated list of ad group IDs. This query parameter is used if the seller wants to retrieve keywords from one or more specific ad groups. If this query parameter is not used, all keywords that are part of the CPC campaign are returned.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\" target=\"_blank\">getAdGroups</a>  method to retrieve the ad group IDs for a seller.
$keywordStatus = 'keywordStatus_example'; // string | A comma-separated list of keyword statuses. The results will be filtered to only include the given statuses of the keyword. If none are provided, all keywords are returned.<br><br>See <a href=\"/api-docs/sell/marketing/types/pls:KeywordStatusEnum\" target=\"_blank\">KeywordStatusEnum</a> for supported values.
$limit = 'limit_example'; // string | <p>Specifies the maximum number of results to return on a page in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
$offset = 'offset_example'; // string | Specifies the number of results to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->getKeywords($campaignId, $adGroupIds, $keywordStatus, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->getKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword(s) being retrieved. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **adGroupIds** | **string**| A comma-separated list of ad group IDs. This query parameter is used if the seller wants to retrieve keywords from one or more specific ad groups. If this query parameter is not used, all keywords that are part of the CPC campaign are returned.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt;  method to retrieve the ad group IDs for a seller. | [optional] |
| **keywordStatus** | **string**| A comma-separated list of keyword statuses. The results will be filtered to only include the given statuses of the keyword. If none are provided, all keywords are returned.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:KeywordStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;KeywordStatusEnum&lt;/a&gt; for supported values. | [optional] |
| **limit** | **string**| &lt;p&gt;Specifies the maximum number of results to return on a page in the paginated response.&lt;/p&gt;  &lt;b&gt;Default: &lt;/b&gt;10 &lt;br&gt;&lt;b&gt;Maximum: &lt;/b&gt; 500 | [optional] |
| **offset** | **string**| Specifies the number of results to skip in the result set before returning the first report in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\KeywordPagedCollectionResponse**](../Model/KeywordPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKeyword()`

```php
updateKeyword($campaignId, $keywordId, $updateKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\UpdateKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates keywords using a campaign ID and keyword ID for an existing priority strategy campaign.<br /><br />In the request, specify the <b>campaign_id</b> and <b>keyword_id</b> as path parameters.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller and call the <a href=\"/api-docs/sell/marketing/resources/keyword/methods/getKeywords\">getKeywords</a> method to retrieve their keyword IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword being updated. <br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$keywordId = 'keywordId_example'; // string | This path parameter specifies the unique identifier of the keyword being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/keyword/methods/getKeywords\" target=\"_blank\">getKeywords</a> method to retrieve keyword IDs.
$updateKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateKeywordRequest | A type that defines the fields for the request to update a keyword.

try {
    $result = $apiInstance->updateKeyword($campaignId, $keywordId, $updateKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->updateKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keyword being updated. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **keywordId** | **string**| This path parameter specifies the unique identifier of the keyword being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/keyword/methods/getKeywords\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getKeywords&lt;/a&gt; method to retrieve keyword IDs. | |
| **updateKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateKeywordRequest**](../Model/UpdateKeywordRequest.md)| A type that defines the fields for the request to update a keyword. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\UpdateKeywordResponse**](../Model/UpdateKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
