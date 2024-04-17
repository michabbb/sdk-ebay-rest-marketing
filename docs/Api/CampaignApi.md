# macropage\SDKs\ebay\rest\marketing\CampaignApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloneCampaign()**](CampaignApi.md#cloneCampaign) | **POST** /ad_campaign/{campaign_id}/clone |  |
| [**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /ad_campaign |  |
| [**deleteCampaign()**](CampaignApi.md#deleteCampaign) | **DELETE** /ad_campaign/{campaign_id} |  |
| [**endCampaign()**](CampaignApi.md#endCampaign) | **POST** /ad_campaign/{campaign_id}/end |  |
| [**findCampaignByAdReference()**](CampaignApi.md#findCampaignByAdReference) | **GET** /ad_campaign/find_campaign_by_ad_reference |  |
| [**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /ad_campaign/{campaign_id} |  |
| [**getCampaignByName()**](CampaignApi.md#getCampaignByName) | **GET** /ad_campaign/get_campaign_by_name |  |
| [**getCampaigns()**](CampaignApi.md#getCampaigns) | **GET** /ad_campaign |  |
| [**launchCampaign()**](CampaignApi.md#launchCampaign) | **POST** /ad_campaign/{campaign_id}/launch |  |
| [**pauseCampaign()**](CampaignApi.md#pauseCampaign) | **POST** /ad_campaign/{campaign_id}/pause |  |
| [**resumeCampaign()**](CampaignApi.md#resumeCampaign) | **POST** /ad_campaign/{campaign_id}/resume |  |
| [**setupQuickCampaign()**](CampaignApi.md#setupQuickCampaign) | **POST** /ad_campaign/setup_quick_campaign |  |
| [**suggestBudget()**](CampaignApi.md#suggestBudget) | **GET** /ad_campaign/suggest_budget |  |
| [**suggestItems()**](CampaignApi.md#suggestItems) | **GET** /ad_campaign/{campaign_id}/suggest_items |  |
| [**updateAdRateStrategy()**](CampaignApi.md#updateAdRateStrategy) | **POST** /ad_campaign/{campaign_id}/update_ad_rate_strategy |  |
| [**updateBiddingStrategy()**](CampaignApi.md#updateBiddingStrategy) | **POST** /ad_campaign/{campaign_id}/update_bidding_strategy |  |
| [**updateCampaignBudget()**](CampaignApi.md#updateCampaignBudget) | **POST** /ad_campaign/{campaign_id}/update_campaign_budget |  |
| [**updateCampaignIdentification()**](CampaignApi.md#updateCampaignIdentification) | **POST** /ad_campaign/{campaign_id}/update_campaign_identification |  |


## `cloneCampaign()`

```php
cloneCampaign($campaignId, $contentType, $cloneCampaignRequest): object
```



This method clones (makes a copy of) the specified campaign's <b>campaign criterion</b>. The <b>campaign criterion</b> is a container for the fields that define the criteria for a rule-based campaign.<p>To clone a campaign, supply the <b>campaign_id</b> as a path parameter in your call. There is no request payload.</p>  <p>The ID of the newly-cloned campaign is returned in the <b>Location</b> response header.</p><p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's current campaign IDs.</p>  <p><b>Requirement: </b>In order to clone a campaign, the <b>campaignStatus</b> must be <code>ENDED</code> and the campaign must define a set of selection rules (it must be a rules-based campaign).</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign being cloned.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$cloneCampaignRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CloneCampaignRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CloneCampaignRequest | This type defines the fields for a clone campaign request.

try {
    $result = $apiInstance->cloneCampaign($campaignId, $contentType, $cloneCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->cloneCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign being cloned.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **cloneCampaignRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CloneCampaignRequest**](../Model/CloneCampaignRequest.md)| This type defines the fields for a clone campaign request. | |

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

## `createCampaign()`

```php
createCampaign($contentType, $createCampaignRequest): object
```



This method can be used to create a Promoted Listings Standard (PLS), Promoted Listings Advanced (PLA), or Offsite Ads campaign.<br><br>A Promoted Listings <i>campaign</i> is the structure in which you place the ads or ad group for the listings you wish to promote.<br><br><span class=\"tablenote\"><b>Note:</b> Campaigns can only contain ads for a maximum of 50,000 items.</span><br>Promoted Listing Standard campaigns utilize a Cost Per Sale (CPS) funding model. Sellers can set the ad rate and bidding strategies that are right for their business through the <b>adRateStrategy</b>, <b>biddingStrategy</b>, <b>bidPercentage</b> fields. For more information on Promoted Listing Standard campaigns, see <a href=\"/api-docs/sell/static/marketing/pl-campaign-flow-pls.html\" target=\"_blank \">Promoted Listings Standard campaign flow</a>.<br><br>Promoted Listings Advanced campaigns utilize a Cost per Click (CPC) funding model. Sellers can create a daily budget through the <b>budget</b> container and choose what <b>channel</b> that their ads appear on. In addition, PLA campaigns give sellers the ability to create ad groups and specify keywords to ensure their ads reach their intended audience. For more information on Promoted Listings Advanced campaigns, see <a href=\"/api-docs/sell/static/marketing/pl-campaign-flow-pla.html\" target=\"_blank \">Promoted Listings Advanced campaign flow</a>.<br><br>Offsite Ads campaigns give sellers the ability to create their own advertising campaign and promote their eBay listing in leading external search channels. For more information on Offsite Ads campaigns, see <a href=\"/api-docs/sell/static/marketing/offsite-ads.html\" target=\"_blank \">Offsite Ads</a>.<br><br><span class=\"tablenote\"><b>Note:</b> Sellers can use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility\" target=\"_blank \">getAdvertisingEligibility</a> method of the <a href=\"/api-docs/sell/account/overview.html\" target=\"_blank \">Account API v1</a> to determine their eligibility status for eBay advertising programs.</span><br>To create a basic campaign, supply: <ul><li>The user-defined campaign name</li> <li>The start date (and optionally the end date) of the campaign</li> <li>The eBay marketplace on which the campaign is hosted</li> <li>Details on the campaign funding model</li></ul>For details on creating Promoted Listings campaigns and how to select the items to be included in your campaigns, see <a href=\"/api-docs/sell/static/marketing/pl-create-campaign.html\">Promoted Listings campaign creation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createCampaignRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateCampaignRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateCampaignRequest | This type defines the fields for the create campaign request.

try {
    $result = $apiInstance->createCampaign($contentType, $createCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **createCampaignRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)| This type defines the fields for the create campaign request. | |

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

## `deleteCampaign()`

```php
deleteCampaign($campaignId)
```



This method deletes the campaign specified by the <code>campaign_id</code> query parameter.<br /><br /><span class=\"tablenote\"><b>Note: </b> You can only delete campaigns that have ended.</span><br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign being deleted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $apiInstance->deleteCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign being deleted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

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

## `endCampaign()`

```php
endCampaign($campaignId)
```



This method ends an active (<code>RUNNING</code>) or paused campaign. Specify the campaign you want to end by supplying its campaign ID in a query parameter.  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the <code>RUNNING</code> or <code>PAUSED</code> ad campaign that is being ended.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $apiInstance->endCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->endCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the &lt;code&gt;RUNNING&lt;/code&gt; or &lt;code&gt;PAUSED&lt;/code&gt; ad campaign that is being ended.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

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

## `findCampaignByAdReference()`

```php
findCampaignByAdReference($inventoryReferenceId, $inventoryReferenceType, $listingId): \macropage\SDKs\ebay\rest\marketing\Model\Campaigns
```



This method retrieves the campaigns containing the listing that is specified using either a listing ID, or an inventory reference ID and inventory reference type pair. The request accepts either a <b>listing_id</b>, <i>or</i> an <b>inventory_reference_id</b> and <b>inventory_reference_type</b> pair, as used in the Inventory API.<br /><br />eBay <i>listing IDs</i> are generated by either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a> when you create a listing.<br /><br />An <i>inventory reference ID</i> can be either a seller-defined <b>SKU</b> or <b>inventoryItemGroupKey</b>, as specified in the Inventory API.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventoryReferenceId = 'inventoryReferenceId_example'; // string | This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing associated with the campaign being retrieved.<br><br>To retrieve an campaign for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To retrieve an campaign for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.<br><br><span class=\"tablenote\"><b>Note:</b> You must always pass in both <b>inventory_reference_id</b> and <b>inventory_reference_type</b>.</span>
$inventoryReferenceType = 'inventoryReferenceType_example'; // string | This query parameter specifies the type of the seller's inventory reference ID, which is a listing or group of items.<br><br>See <a href=\"/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum\" target=\"_blank\">InventoryReferenceTypeEnum</a> for supported values.<br><br><span class=\"tablenote\"><b>Note:</b> You must always pass in both <b>inventory_reference_id</b> and <b>inventory_reference_type</b>.</span>
$listingId = 'listingId_example'; // string | This query parameter specifies the unique identifier of the eBay listing associated with the ad being used to retrieve the campaign.<br /><br />eBay <i>listing IDs</i> are generated by either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a> when you create a listing.

try {
    $result = $apiInstance->findCampaignByAdReference($inventoryReferenceId, $inventoryReferenceType, $listingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->findCampaignByAdReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventoryReferenceId** | **string**| This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing associated with the campaign being retrieved.&lt;br&gt;&lt;br&gt;To retrieve an campaign for a single-item listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; and specify an item ID or a SKU (if the SKU is defined in the listing).&lt;br&gt;&lt;br&gt;To retrieve an campaign for a multi-variation listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt; and specify the item ID for the multi-variation listing or the &lt;b&gt;inventoryitemGroupKey&lt;/b&gt; value as defined in the Inventory API.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You must always pass in both &lt;b&gt;inventory_reference_id&lt;/b&gt; and &lt;b&gt;inventory_reference_type&lt;/b&gt;.&lt;/span&gt; | [optional] |
| **inventoryReferenceType** | **string**| This query parameter specifies the type of the seller&#39;s inventory reference ID, which is a listing or group of items.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;InventoryReferenceTypeEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You must always pass in both &lt;b&gt;inventory_reference_id&lt;/b&gt; and &lt;b&gt;inventory_reference_type&lt;/b&gt;.&lt;/span&gt; | [optional] |
| **listingId** | **string**| This query parameter specifies the unique identifier of the eBay listing associated with the ad being used to retrieve the campaign.&lt;br /&gt;&lt;br /&gt;eBay &lt;i&gt;listing IDs&lt;/i&gt; are generated by either the &lt;a href&#x3D;\&quot;/Devzone/XML/docs/Reference/eBay/index.html\&quot; title&#x3D;\&quot;Trading API Reference\&quot;&gt;Trading API&lt;/a&gt; or the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/methods\&quot;&gt;Inventory API&lt;/a&gt; when you create a listing. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Campaigns**](../Model/Campaigns.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaignId): \macropage\SDKs\ebay\rest\marketing\Model\Campaign
```



This method retrieves the details of a single campaign, as specified with the <b>campaign_id</b> query parameter.  <p>This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a>.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's campaign IDs.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $result = $apiInstance->getCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignByName()`

```php
getCampaignByName($campaignName): \macropage\SDKs\ebay\rest\marketing\Model\Campaign
```



This method retrieves the details of a single campaign, as specified with the <b>campaign_name</b> query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve.</p><p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's campaign names.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignName = 'campaignName_example'; // string | This query parameter specifies name of the campaign being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve a list of a seller's campaign names.

try {
    $result = $apiInstance->getCampaignByName($campaignName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignName** | **string**| This query parameter specifies name of the campaign being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve a list of a seller&#39;s campaign names. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($campaignName, $campaignStatus, $channels, $endDateRange, $fundingStrategy, $limit, $offset, $startDateRange): \macropage\SDKs\ebay\rest\marketing\Model\CampaignPagedCollectionResponse
```



This method retrieves the details for all of the seller's defined campaigns. Request parameters can be used to retrieve a specific campaign, such as the campaign's name, the start and end date, the channel, the status, and the funding model (i.e., Cost Per Sale (CPS) or Cost Per Click (CPC)). <p>You can filter the result set by a campaign name, end date range, start date range, campaign channel, or campaign status. You can also paginate the records returned from the result set using the <b>limit</b> query parameter, and control which records to return using the  <b>offset</b> parameter.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignName = 'campaignName_example'; // string | This query parameter specifies the name of the campaign being retrieved. The results are filtered to include only the campaign by the specified name.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve a list of a seller's campaign names.<br /><br /><b>Note: </b>The results might be null if other filters exclude the campaign with this name. <br /><br /><b>Maximum: </b> 1 campaign name
$campaignStatus = 'campaignStatus_example'; // string | This query parameter specifies the status of the campaign(s) being retrieved.<br><br><span class=\"tablenote\"><b>Note:</b> The results might not include all the campaigns with this status if other filters exclude them.</span><br><b>Valid values:</b> See <a href=\"/api-docs/sell/marketing/types/pls:CampaignStatusEnum\">CampaignStatusEnum</a> <br /><br /><b>Maximum: </b> 1 status
$channels = 'channels_example'; // string | This query parameter specifies the channel for the the campaign(s) being retrieved.<br><br>The results will be filtered to only include campaigns with the specified channel. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href=\"/api-docs/sell/marketing/types/pls:ChannelEnum\">ChannelEnum</a>
$endDateRange = 'endDateRange_example'; // string | This query parameter specifies the range of a campaign's end date. The results are filtered to include only campaigns with an end date that is within specified range. <br><br><b>Valid format (UTC)</b>: <ul><li><code> yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ </code>  (campaign ends within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ..</code> (campaign ends on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code> (campaign ends on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign ends on September 08, 2016)</li></ul><br><span class=\"tablenote\"><b>Note:</b>The results might not include all the campaigns ending on this date if other filters exclude them.</span>
$fundingStrategy = 'fundingStrategy_example'; // string | This query parameter specifies the funding strategy for the campaign(s) being retrieved.<br /><br />The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href=\"/api-docs/sell/marketing/types/pls:FundingModelEnum\">FundingModelEnum</a>
$limit = 'limit_example'; // string | <p>This query parameter specifies the maximum number of campaigns to return on a page in the paginated response.</p>  <b>Default: </b>10<br><br><b>Maximum: </b> 500
$offset = 'offset_example'; // string | This query parameter specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0
$startDateRange = 'startDateRange_example'; // string | This query parameter specifies the range of a campaign's start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.<br><br><b>Valid format (UTC): </b> <ul><li><code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ</code> (starts within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ</code> (campaign starts on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code>(campaign starts on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign starts on September 08, 2016)</li></ul><br><span class=\"tablenote\"><b>Note:</b> The results might not include all the campaigns with this start date if other filters exclude them.</span>

try {
    $result = $apiInstance->getCampaigns($campaignName, $campaignStatus, $channels, $endDateRange, $fundingStrategy, $limit, $offset, $startDateRange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignName** | **string**| This query parameter specifies the name of the campaign being retrieved. The results are filtered to include only the campaign by the specified name.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve a list of a seller&#39;s campaign names.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt;The results might be null if other filters exclude the campaign with this name. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1 campaign name | [optional] |
| **campaignStatus** | **string**| This query parameter specifies the status of the campaign(s) being retrieved.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The results might not include all the campaigns with this status if other filters exclude them.&lt;/span&gt;&lt;br&gt;&lt;b&gt;Valid values:&lt;/b&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:CampaignStatusEnum\&quot;&gt;CampaignStatusEnum&lt;/a&gt; &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1 status | [optional] |
| **channels** | **string**| This query parameter specifies the channel for the the campaign(s) being retrieved.&lt;br&gt;&lt;br&gt;The results will be filtered to only include campaigns with the specified channel. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:ChannelEnum\&quot;&gt;ChannelEnum&lt;/a&gt; | [optional] |
| **endDateRange** | **string**| This query parameter specifies the range of a campaign&#39;s end date. The results are filtered to include only campaigns with an end date that is within specified range. &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid format (UTC)&lt;/b&gt;: &lt;ul&gt;&lt;li&gt;&lt;code&gt; yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt;  (campaign ends within this range)&lt;/li&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ..&lt;/code&gt; (campaign ends on or after this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt; (campaign ends on or before this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z&lt;/code&gt; (campaign ends on September 08, 2016)&lt;/li&gt;&lt;/ul&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt;The results might not include all the campaigns ending on this date if other filters exclude them.&lt;/span&gt; | [optional] |
| **fundingStrategy** | **string**| This query parameter specifies the funding strategy for the campaign(s) being retrieved.&lt;br /&gt;&lt;br /&gt;The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:FundingModelEnum\&quot;&gt;FundingModelEnum&lt;/a&gt; | [optional] |
| **limit** | **string**| &lt;p&gt;This query parameter specifies the maximum number of campaigns to return on a page in the paginated response.&lt;/p&gt;  &lt;b&gt;Default: &lt;/b&gt;10&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum: &lt;/b&gt; 500 | [optional] |
| **offset** | **string**| This query parameter specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.&lt;br&gt;&lt;br&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;br&gt;&lt;br&gt; &lt;b&gt;Default:&lt;/b&gt; 0 | [optional] |
| **startDateRange** | **string**| This query parameter specifies the range of a campaign&#39;s start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.&lt;br&gt;&lt;br&gt;&lt;b&gt;Valid format (UTC): &lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ&lt;/code&gt; (starts within this range)&lt;/li&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ&lt;/code&gt; (campaign starts on or after this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt;(campaign starts on or before this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z&lt;/code&gt; (campaign starts on September 08, 2016)&lt;/li&gt;&lt;/ul&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The results might not include all the campaigns with this start date if other filters exclude them.&lt;/span&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\CampaignPagedCollectionResponse**](../Model/CampaignPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `launchCampaign()`

```php
launchCampaign($campaignId)
```



This method launches a Promoted Listings Advanced campaign created using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/setupQuickCampaign\">setupQuickCampaign</a> method that is in <code>DRAFT</code> status. This changes the campaign status to <code>RUNNING</code> or <code>SCHEDULED</code>, based on its specified start date. Specify the campaign you wish to launch by supplying its <b>campaign_id</b> as a path parameter in the call URI. <br><br>Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve the <b>campaign_id</b> and the campaign status for all the seller's campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign being launched.<br><br>For PLA campaigns created with the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/setupQuickCampaign\">setupQuickCampaign</a> method, the <b>getCampaign</b> URI for that campaign is returned in the <b>Location</b> response header. That URI will include the <b>campaign_id</b> value, which you will pass in as a path parameter in the <b>launchCampaign</b> method.<br><br><span class=\"tablenote\"><b>Note:</b> The campaign ID value used here must be for a PLA campaign in <code>DRAFT</code> status.</span>

try {
    $apiInstance->launchCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->launchCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign being launched.&lt;br&gt;&lt;br&gt;For PLA campaigns created with the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/setupQuickCampaign\&quot;&gt;setupQuickCampaign&lt;/a&gt; method, the &lt;b&gt;getCampaign&lt;/b&gt; URI for that campaign is returned in the &lt;b&gt;Location&lt;/b&gt; response header. That URI will include the &lt;b&gt;campaign_id&lt;/b&gt; value, which you will pass in as a path parameter in the &lt;b&gt;launchCampaign&lt;/b&gt; method.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The campaign ID value used here must be for a PLA campaign in &lt;code&gt;DRAFT&lt;/code&gt; status.&lt;/span&gt; | |

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

## `pauseCampaign()`

```php
pauseCampaign($campaignId)
```



This method pauses an active (RUNNING) campaign.  <p>You can restart the campaign by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/resumeCampaign\">resumeCampaign</a>, as long as the campaign's end date is in the future.<br><br><span class=\"tablenote\"><b>Note:</b>The listings associated with a paused campaign cannot be added into another campaign.</span><br><br>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the <code>RUNNING</code> ad campaign being paused.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $apiInstance->pauseCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->pauseCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the &lt;code&gt;RUNNING&lt;/code&gt; ad campaign being paused.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

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

## `resumeCampaign()`

```php
resumeCampaign($campaignId)
```



This method resumes a paused campaign, as long as its end date is in the future. Supply the <b>campaign_id</b> for the campaign you want to restart as a query parameter in the request.  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the paused ad campaign that is being resumed.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $apiInstance->resumeCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->resumeCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the paused ad campaign that is being resumed.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

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

## `setupQuickCampaign()`

```php
setupQuickCampaign($contentType, $quickSetupRequest): object
```



This method allows the seller to expedite the creation of a Promoted Listings Advanced (PLA) campaign.<br><br>Sellers only need to provide basic campaign information, such as the user-defined campaign name, the start date (and optionally the end date) of the campaign, the daily budget amount of the campaign, and the eBay marketplace where the campaign will be hosted. The seller must also identify the items they want to place in the campaign by adding the listing id of each item in the <b>listingIds</b> array of the request. <br><br>Using the provided <b>listingIds</b>, eBay creates ad groups for the campaign and organizes the listings into the appropriate ad group. eBay then adds keywords to each ad group and assigns each keyword a suggested bid. <br><br>By default, campaigns created using <b>setupQuickCampaign</b> utilize a <code>FIXED</code> keyword bidding strategy which means that a seller manually assigns and adjusts keyword bids for their CPC campaign.<br><br>Alternatively, once the campaign has been created, sellers may opt to utilize a <code>DYNAMIC</code> bidding strategy which means that eBay will manage a campaign's keyword bids and automatically update them daily to the suggested bid.<br><br>For additional information about <code>FIXED</code> and <code>DYNAMIC</code> bidding strategies, refer to <a href=\"/api-docs/sell/marketing/resources/campaign/methods/updateBiddingStrategy \" target=\"_blank\">updateBiddingStrategy</a>.<br><br>Campaigns created using this method will be in <code>DRAFT</code> status upon creation.<br><br>The location response header returned contains the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaign\">getCampaign</a> URI to retrieve the newly created campaign that is in draft status. Sellers should make this call to review and approve the campaign before they use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/launchCampaign\">launchCampaign</a> method to start the campaign.<br><br><span class=\"tablenote\"><b>Note:</b> Promoted Listing Standard (PLS) campaigns are not supported.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$quickSetupRequest = new \macropage\SDKs\ebay\rest\marketing\Model\QuickSetupRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\QuickSetupRequest | This type defines the fields to create a quick setup Promoted Listings Advanced (PLA) campaign.

try {
    $result = $apiInstance->setupQuickCampaign($contentType, $quickSetupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setupQuickCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **quickSetupRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\QuickSetupRequest**](../Model/QuickSetupRequest.md)| This type defines the fields to create a quick setup Promoted Listings Advanced (PLA) campaign. | |

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

## `suggestBudget()`

```php
suggestBudget($xEBAYCMARKETPLACEID): \macropage\SDKs\ebay\rest\marketing\Model\SuggestBudgetResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only supported for Offsite Ads campaigns. Sellers can use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility\" target=\"_blank \">getAdvertisingEligibility</a> method of the <a href=\"//api-docs/sell/account/overview.html\" target=\"_blank \">Account API v1</a> to determine if they are eligible for Offsite Ads.</span><br>This method allows sellers to retrieve the suggested budget for an Offsite Ads campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xEBAYCMARKETPLACEID = 'xEBAYCMARKETPLACEID_example'; // string | This header identifies the seller's eBay marketplace.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\" target=\"_blank \">MarketplaceIdEnum</a> for supported values.

try {
    $result = $apiInstance->suggestBudget($xEBAYCMARKETPLACEID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->suggestBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xEBAYCMARKETPLACEID** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank \&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported values. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\SuggestBudgetResponse**](../Model/SuggestBudgetResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestItems()`

```php
suggestItems($campaignId, $categoryIds, $limit, $offset): \macropage\SDKs\ebay\rest\marketing\Model\TargetedAdsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method allows sellers to obtain ideas for listings, which can be targeted for Promoted Listings campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which suggestions are being provided.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$categoryIds = 'categoryIds_example'; // string | Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to <code>null</code>.<br><br>Use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method to retrieve category IDs.<br /><br /><b>Maximum: </b> 10
$limit = 'limit_example'; // string | Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. <br /><br /><b>Default: </b>10 <br /><br /><b>Minimum: </b> 1<br /><br /><b>Maximum: </b> 1000
$offset = 'offset_example'; // string | Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0

try {
    $result = $apiInstance->suggestItems($campaignId, $categoryIds, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->suggestItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which suggestions are being provided.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **categoryIds** | **string**| Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to &lt;code&gt;null&lt;/code&gt;.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCategorySuggestions&lt;/a&gt; method to retrieve category IDs.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 10 | [optional] |
| **limit** | **string**| Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt;10 &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Minimum: &lt;/b&gt; 1&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1000 | [optional] |
| **offset** | **string**| Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.&lt;br&gt;&lt;br&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;br&gt;&lt;br&gt; &lt;b&gt;Default:&lt;/b&gt; 0 | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\TargetedAdsPagedCollection**](../Model/TargetedAdsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdRateStrategy()`

```php
updateAdRateStrategy($campaignId, $contentType, $updateAdrateStrategyRequest)
```



This method updates the ad rate strategy for an existing Promoted Listings Standard (PLS) rules-based ad campaign that uses the Cost Per Sale (CPS) funding model.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the CPS funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the ad rate strategy is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateAdrateStrategyRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateAdrateStrategyRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateAdrateStrategyRequest | This type defines the request fields for the ad rate strategy that shall be updated.

try {
    $apiInstance->updateAdRateStrategy($campaignId, $contentType, $updateAdrateStrategyRequest);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAdRateStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the ad rate strategy is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateAdrateStrategyRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateAdrateStrategyRequest**](../Model/UpdateAdrateStrategyRequest.md)| This type defines the request fields for the ad rate strategy that shall be updated. | |

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

## `updateBiddingStrategy()`

```php
updateBiddingStrategy($campaignId, $contentType, $updateBiddingStrategyRequest)
```



This method allows sellers to change the bidding strategy for a specified Cost Per Click (CPC) campaign that uses manual targeting. Available bidding strategies are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay will manage a campaign's keyword bids and automatically update them daily to the suggested bid.<br><br><span class=\"tablenote\"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul>In addition, this method allows sellers to modify the <b>maxCPC</b> value of a smart targeting campaign.<span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model. Refer to <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the keyword bidding strategy is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateBiddingStrategyRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateBiddingStrategyRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateBiddingStrategyRequest | This type specifies the new value for the bidding strategy.

try {
    $apiInstance->updateBiddingStrategy($campaignId, $contentType, $updateBiddingStrategyRequest);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateBiddingStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the keyword bidding strategy is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateBiddingStrategyRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateBiddingStrategyRequest**](../Model/UpdateBiddingStrategyRequest.md)| This type specifies the new value for the bidding strategy. | |

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

## `updateCampaignBudget()`

```php
updateCampaignBudget($campaignId, $contentType, $updateCampaignBudgetRequest)
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the daily budget for a PLA campaign that uses the Cost Per Click (CPC) funding model.<br /><br />A click occurs when an eBay user finds and clicks on the seller’s listing (within the search results) after using a keyword that the seller has created for the campaign. For each ad in an ad group in the campaign, each click triggers a cost, which gets subtracted from the campaign’s daily budget. If the cost of the clicks exceeds the daily budget, the Promoted Listings campaign will be paused until the next day.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the budget is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateCampaignBudgetRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignBudgetRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignBudgetRequest | This type defines the request fields for the budget details that shall be updated.

try {
    $apiInstance->updateCampaignBudget($campaignId, $contentType, $updateCampaignBudgetRequest);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which the budget is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateCampaignBudgetRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignBudgetRequest**](../Model/UpdateCampaignBudgetRequest.md)| This type defines the request fields for the budget details that shall be updated. | |

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

## `updateCampaignIdentification()`

```php
updateCampaignIdentification($campaignId, $contentType, $updateCampaignIdentificationRequest)
```



This method can be used to change the name of a campaign, as well as modify the start or end dates. <p>Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>campaignName</b> and <b>startDate</b> in the request payload.  <p>If you want to change only the end date of the campaign, specify the current campaign name, set <b>endDate</b> as desired, and set <b>startDate</b> to the actual start date of the campaign. This applies if the campaign status is <code>RUNNING</code> or <code>PAUSED</code>. You can retrieve the <b>startDate</b> using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate\">getCampaign</a> method.</p> <p>Note that if you do not set a new end date in this call, any current <b>endDate</b> value will be set to <code>null</code>. To preserve the currently-set end date, you must specify the value again in your request.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's campaign details, including the campaign ID, campaign name, and the start and end dates of the campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateCampaignIdentificationRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignIdentificationRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignIdentificationRequest | This type defines the fields to update the campaign name and start and end dates.

try {
    $apiInstance->updateCampaignIdentification($campaignId, $contentType, $updateCampaignIdentificationRequest);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignIdentification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateCampaignIdentificationRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateCampaignIdentificationRequest**](../Model/UpdateCampaignIdentificationRequest.md)| This type defines the fields to update the campaign name and start and end dates. | |

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
