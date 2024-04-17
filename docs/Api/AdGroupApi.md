# macropage\SDKs\ebay\rest\marketing\AdGroupApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdGroup()**](AdGroupApi.md#createAdGroup) | **POST** /ad_campaign/{campaign_id}/ad_group |  |
| [**getAdGroup()**](AdGroupApi.md#getAdGroup) | **GET** /ad_campaign/{campaign_id}/ad_group/{ad_group_id} |  |
| [**getAdGroups()**](AdGroupApi.md#getAdGroups) | **GET** /ad_campaign/{campaign_id}/ad_group |  |
| [**suggestBids()**](AdGroupApi.md#suggestBids) | **POST** /ad_campaign/{campaign_id}/ad_group/{ad_group_id}/suggest_bids |  |
| [**suggestKeywords()**](AdGroupApi.md#suggestKeywords) | **POST** /ad_campaign/{campaign_id}/ad_group/{ad_group_id}/suggest_keywords |  |
| [**updateAdGroup()**](AdGroupApi.md#updateAdGroup) | **PUT** /ad_campaign/{campaign_id}/ad_group/{ad_group_id} |  |


## `createAdGroup()`

```php
createAdGroup($campaignId, $contentType, $createAdGroupRequest): object
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds an ad group to an existing PLA campaign that uses manual targeting.<br /><br />To create an ad group for a campaign, specify the <b>defaultBid</b> for the ad group in the payload of the request. Then specify the campaign to which the ad group should be associated using the <b>campaign_id</b> path parameter.<br /><br />Each campaign can have one or more associated ad groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign to associate with the ad group being created.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createAdGroupRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateAdGroupRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateAdGroupRequest | This type defines the fields for the <b>createAdGroup</b> request.

try {
    $result = $apiInstance->createAdGroup($campaignId, $contentType, $createAdGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->createAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign to associate with the ad group being created.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **createAdGroupRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateAdGroupRequest**](../Model/CreateAdGroupRequest.md)| This type defines the fields for the &lt;b&gt;createAdGroup&lt;/b&gt; request. | |

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

## `getAdGroup()`

```php
getAdGroup($adGroupId, $campaignId): \macropage\SDKs\ebay\rest\marketing\Model\AdGroup
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves the details of a specified ad group, such as the ad group’s default bid and status.<br /><br />In the request, specify the <b>campaign_id</b> and <b>ad_group_id</b> as path parameters.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller and call <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\">getAdGroups</a> for the ad group ID of the ad group you wish to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | This path parameter specifies the unique identifier of the ad group being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\" target=\"_blank\">getAdGroups</a> method to retrieve ad group IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad group being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $result = $apiInstance->getAdGroup($adGroupId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->getAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| This path parameter specifies the unique identifier of the ad group being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve ad group IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad group being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\AdGroup**](../Model/AdGroup.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdGroups()`

```php
getAdGroups($campaignId, $adGroupStatus, $limit, $offset): \macropage\SDKs\ebay\rest\marketing\Model\AdGroupPagedCollectionResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves ad groups for the specified campaigns.<br /><br />Each campaign can only have <b>one</b> ad group.<br /><br />In the request, supply the <b>campaign_ids</b> as path parameters.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad groups being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$adGroupStatus = 'adGroupStatus_example'; // string | A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.<br><br> See <a href=\"/api-docs/sell/marketing/types/pls:AdGroupStatusEnum\" target=\"_blank\">AdGroupStatusEnum</a> for supported values.
$limit = 'limit_example'; // string | The number of results, from the current result set, to be returned in a single page.
$offset = 'offset_example'; // string | The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br><br><b>Default</b>: <code>0</code>

try {
    $result = $apiInstance->getAdGroups($campaignId, $adGroupStatus, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->getAdGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad groups being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **adGroupStatus** | **string**| A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.&lt;br&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:AdGroupStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;AdGroupStatusEnum&lt;/a&gt; for supported values. | [optional] |
| **limit** | **string**| The number of results, from the current result set, to be returned in a single page. | [optional] |
| **offset** | **string**| The number of results that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default&lt;/b&gt;: &lt;code&gt;0&lt;/code&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\AdGroupPagedCollectionResponse**](../Model/AdGroupPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestBids()`

```php
suggestBids($adGroupId, $campaignId, $contentType, $targetedBidRequest): \macropage\SDKs\ebay\rest\marketing\Model\TargetedBidsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method allows sellers to retrieve the suggested bids for input keywords and match type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | This path parameter specifies the unique identifier of the ad group containing the keywords for which the bid suggestions will be provided.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\" target=\"_blank\">getAdGroups</a> method to retrieve ad group IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keywords for which bid suggestions will be provided.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$targetedBidRequest = new \macropage\SDKs\ebay\rest\marketing\Model\TargetedBidRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\TargetedBidRequest | The data requested to retrieve the suggested bids.

try {
    $result = $apiInstance->suggestBids($adGroupId, $campaignId, $contentType, $targetedBidRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->suggestBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| This path parameter specifies the unique identifier of the ad group containing the keywords for which the bid suggestions will be provided.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve ad group IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the keywords for which bid suggestions will be provided.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **targetedBidRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\TargetedBidRequest**](../Model/TargetedBidRequest.md)| The data requested to retrieve the suggested bids. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\TargetedBidsPagedCollection**](../Model/TargetedBidsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestKeywords()`

```php
suggestKeywords($adGroupId, $campaignId, $contentType, $targetedKeywordRequest): \macropage\SDKs\ebay\rest\marketing\Model\TargetedKeywordsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method allows sellers to retrieve a list of keyword ideas to be targeted for Promoted Listings campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | This path parameter specifies the unique identifier of the ad group for which the keyword suggestions will be provided.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\" target=\"_blank\">getAdGroups</a> method to retrieve ad group IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which keyword suggestions will be provided.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$targetedKeywordRequest = new \macropage\SDKs\ebay\rest\marketing\Model\TargetedKeywordRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\TargetedKeywordRequest | The required data to retrieve suggested keywords.

try {
    $result = $apiInstance->suggestKeywords($adGroupId, $campaignId, $contentType, $targetedKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->suggestKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| This path parameter specifies the unique identifier of the ad group for which the keyword suggestions will be provided.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve ad group IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which keyword suggestions will be provided.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **targetedKeywordRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\TargetedKeywordRequest**](../Model/TargetedKeywordRequest.md)| The required data to retrieve suggested keywords. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\TargetedKeywordsPagedCollection**](../Model/TargetedKeywordsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdGroup()`

```php
updateAdGroup($adGroupId, $campaignId, $contentType, $updateAdGroupRequest)
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the ad group associated with a campaign.<br /><br />With this method, you can modify the <b>default bid</b> for the ad group, change the state of the ad group, or change the name of the ad group. Pass the <b>ad_group_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> and <b>defaultBid</b> in the request payload.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroup\">getAdGroup</a> to retrieve the current default bid and status of the ad group that you would like to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | This path parameter specifies the unique identifier of the ad group that is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\" target=\"_blank\">getAdGroups</a> method to retrieve ad group IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the ad group is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateAdGroupRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateAdGroupRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateAdGroupRequest | This type defines the fields for the <b>UpdateAdGroup</b> request.

try {
    $apiInstance->updateAdGroup($adGroupId, $campaignId, $contentType, $updateAdGroupRequest);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->updateAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| This path parameter specifies the unique identifier of the ad group that is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad_group/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve ad group IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the ad group is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateAdGroupRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateAdGroupRequest**](../Model/UpdateAdGroupRequest.md)| This type defines the fields for the &lt;b&gt;UpdateAdGroup&lt;/b&gt; request. | |

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
