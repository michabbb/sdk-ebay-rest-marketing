# macropage\SDKs\ebay\rest\marketing\AdApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateAdsByInventoryReference()**](AdApi.md#bulkCreateAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference |  |
| [**bulkCreateAdsByListingId()**](AdApi.md#bulkCreateAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id |  |
| [**bulkDeleteAdsByInventoryReference()**](AdApi.md#bulkDeleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference |  |
| [**bulkDeleteAdsByListingId()**](AdApi.md#bulkDeleteAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_listing_id |  |
| [**bulkUpdateAdsBidByInventoryReference()**](AdApi.md#bulkUpdateAdsBidByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference |  |
| [**bulkUpdateAdsBidByListingId()**](AdApi.md#bulkUpdateAdsBidByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id |  |
| [**bulkUpdateAdsStatus()**](AdApi.md#bulkUpdateAdsStatus) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_status |  |
| [**bulkUpdateAdsStatusByListingId()**](AdApi.md#bulkUpdateAdsStatusByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_status_by_listing_id |  |
| [**createAdByListingId()**](AdApi.md#createAdByListingId) | **POST** /ad_campaign/{campaign_id}/ad |  |
| [**createAdsByInventoryReference()**](AdApi.md#createAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/create_ads_by_inventory_reference |  |
| [**deleteAd()**](AdApi.md#deleteAd) | **DELETE** /ad_campaign/{campaign_id}/ad/{ad_id} |  |
| [**deleteAdsByInventoryReference()**](AdApi.md#deleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/delete_ads_by_inventory_reference |  |
| [**getAd()**](AdApi.md#getAd) | **GET** /ad_campaign/{campaign_id}/ad/{ad_id} |  |
| [**getAds()**](AdApi.md#getAds) | **GET** /ad_campaign/{campaign_id}/ad |  |
| [**getAdsByInventoryReference()**](AdApi.md#getAdsByInventoryReference) | **GET** /ad_campaign/{campaign_id}/get_ads_by_inventory_reference |  |
| [**updateBid()**](AdApi.md#updateBid) | **POST** /ad_campaign/{campaign_id}/ad/{ad_id}/update_bid |  |


## `bulkCreateAdsByInventoryReference()`

```php
bulkCreateAdsByInventoryReference($campaignId, $contentType, $bulkCreateAdsByInventoryReferenceRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceResponse
```



This method adds multiple listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) model, bulk ads may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the ads created with the specified campaign.</li></ul><br />To create ads for a listing, specify their <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to which you want to associate the ads using the <b>campaign_id</b> path parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associated the ads being created.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkCreateAdsByInventoryReferenceRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest | The container for the bulk request to create ads for eBay inventory reference IDs. eBay inventory reference IDs are seller-defined IDs used by theInventory API.

try {
    $result = $apiInstance->bulkCreateAdsByInventoryReference($campaignId, $contentType, $bulkCreateAdsByInventoryReferenceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associated the ads being created.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkCreateAdsByInventoryReferenceRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| The container for the bulk request to create ads for eBay inventory reference IDs. eBay inventory reference IDs are seller-defined IDs used by theInventory API. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceResponse**](../Model/BulkCreateAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateAdsByListingId()`

```php
bulkCreateAdsByListingId($campaignId, $contentType, $bulkCreateAdRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkAdResponse
```



This method adds multiple listings to an existing Promoted Listings campaign using <b>listingId</b> values generated by the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>, or using values generated by an ad group ID.<p>For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, bulk ads may be directly created for the listing.</p><p>For each listing ID specified in the request, this method:</p>  <ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ad.</li> <li>Associates the ad with the specified campaign.</li></ul><p>To create an ad for a listing, specify its <b>listingId</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Listing IDs are generated by eBay when a seller creates listings with the Trading API.</p><p>You can specify a maximum of <b>500 listings per call</b> and each campaign can have ads for a maximum of 50,000 items. Be aware when using this call that each variation in a multiple-variation listing creates an individual ad.</p><p>For manual targeting Promoted Listings Advanced (PLA) campaigns using the Cost Per Click (CPC) funding model, an ad group must be created first. If no ad group has been created for the campaign, ads cannot be created.<br><br><span class=\"tablenote\"><b>Note:</b> Ad groups are not required when adding listings to a smart targeting campaign.</span></p><p>For the ad group specified in the request, this method associates the ad with the specified ad group.</p><p>To create an ad for an ad group, specify the name of the ad group plus the <b>defaultBid</b> for the ad in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Ad groups are generated using the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/createAdGroup\">createAdGroup</a>  method.</p> <p>You can specify one or more ad groups per campaign.</p><p>Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associated the ads being created.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkCreateAdRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest | The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated by the Trading API and Inventory API when the listing is created on eBay.

try {
    $result = $apiInstance->bulkCreateAdsByListingId($campaignId, $contentType, $bulkCreateAdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associated the ads being created.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkCreateAdRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated by the Trading API and Inventory API when the listing is created on eBay. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkAdResponse**](../Model/BulkAdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAdsByInventoryReference()`

```php
bulkDeleteAdsByInventoryReference($campaignId, $contentType, $bulkDeleteAdsByInventoryReferenceRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdsByInventoryReferenceResponse
```



This method works with listings created with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.<br /><br />The method deletes a set of ads, as specified by a list of inventory reference IDs, from the specified campaign. <i>Inventory reference IDs</i> are seller-defined IDs that are used with the Inventory API</a>.<br /><br />Pass the <b>campaign_id</b> as a path parameter and populate the payload with a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs that you want to delete.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to delete a set of ads.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkDeleteAdsByInventoryReferenceRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdsByInventoryReferenceRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdsByInventoryReferenceRequest | This request works with listings created via the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />The request is to delete a set of ads in bulk, as specified by a list of inventory reference IDs from the specified campaign.

try {
    $result = $apiInstance->bulkDeleteAdsByInventoryReference($campaignId, $contentType, $bulkDeleteAdsByInventoryReferenceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to delete a set of ads.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkDeleteAdsByInventoryReferenceRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdsByInventoryReferenceRequest**](../Model/BulkDeleteAdsByInventoryReferenceRequest.md)| This request works with listings created via the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/methods\&quot;&gt;Inventory API&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;The request is to delete a set of ads in bulk, as specified by a list of inventory reference IDs from the specified campaign. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdsByInventoryReferenceResponse**](../Model/BulkDeleteAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAdsByListingId()`

```php
bulkDeleteAdsByListingId($campaignId, $contentType, $bulkDeleteAdRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdResponse
```



This method works with listing IDs created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.<br /><br />The method deletes a set of ads, as specified by a list of <b>listingID</b> values from a Promoted Listings campaign. A listing ID value is generated by eBay when a seller creates a listing with either the Trading API and Inventory API.<br /><br />Pass the <b>campaign_id</b> as a path parameter and populate the payload with the set of listing IDs that you want to delete.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />When using the CPC funding model, use the <a href=\"/api-docs/sell/marketing/resources/ad/methods/bulkUpdateAdsStatusByListingId\">bulkUpdateAdsStatusByListingId</a> method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the eBay-assigned identifier of the ad campaign for which to delete a set of ads.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkDeleteAdRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdRequest | This request object defines the fields for the <b>bulkDeleteAdsByListingId</b> request.

try {
    $result = $apiInstance->bulkDeleteAdsByListingId($campaignId, $contentType, $bulkDeleteAdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the eBay-assigned identifier of the ad campaign for which to delete a set of ads.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkDeleteAdRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdRequest**](../Model/BulkDeleteAdRequest.md)| This request object defines the fields for the &lt;b&gt;bulkDeleteAdsByListingId&lt;/b&gt; request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkDeleteAdResponse**](../Model/BulkDeleteAdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsBidByInventoryReference()`

```php
bulkUpdateAdsBidByInventoryReference($campaignId, $contentType, $bulkCreateAdsByInventoryReferenceRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdsByInventoryReferenceResponse
```



This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to update the bid percentage for a set of ads.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkCreateAdsByInventoryReferenceRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest | This request object defines the fields for the <b>BulkCreateAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->bulkUpdateAdsBidByInventoryReference($campaignId, $contentType, $bulkCreateAdsByInventoryReferenceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to update the bid percentage for a set of ads.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkCreateAdsByInventoryReferenceRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| This request object defines the fields for the &lt;b&gt;BulkCreateAdsByInventoryReference&lt;/b&gt; request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdsByInventoryReferenceResponse**](../Model/BulkUpdateAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsBidByListingId()`

```php
bulkUpdateAdsBidByListingId($campaignId, $contentType, $bulkCreateAdRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateResponse
```



This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to update the bid percentage for a set of ads.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkCreateAdRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest | This request object defines the fields for the <b>BulkCreateAdsByListingId</b> request.

try {
    $result = $apiInstance->bulkUpdateAdsBidByListingId($campaignId, $contentType, $bulkCreateAdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to update the bid percentage for a set of ads.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkCreateAdRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| This request object defines the fields for the &lt;b&gt;BulkCreateAdsByListingId&lt;/b&gt; request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateResponse**](../Model/BulkAdUpdateResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsStatus()`

```php
bulkUpdateAdsStatus($campaignId, $contentType, $bulkUpdateAdStatusRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateStatusResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method works with listings created with either the <a href= \"/Devzone/XML/docs/Reference/eBay/index.html\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />This method updates the status of ads in bulk.<br /><br />Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> in the request payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad statuses being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkUpdateAdStatusRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusRequest | The bulk request to update the ads.

try {
    $result = $apiInstance->bulkUpdateAdsStatus($campaignId, $contentType, $bulkUpdateAdStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad statuses being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkUpdateAdStatusRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusRequest**](../Model/BulkUpdateAdStatusRequest.md)| The bulk request to update the ads. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateStatusResponse**](../Model/BulkAdUpdateStatusResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsStatusByListingId()`

```php
bulkUpdateAdsStatusByListingId($campaignId, $contentType, $bulkUpdateAdStatusByListingIdRequest): \macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateStatusByListingIdResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />The method updates the status of ads in bulk, based on listing ID values.<br /><br />Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their updated <b>adStatus</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to retrieve a list of seller inventory reference IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$bulkUpdateAdStatusByListingIdRequest = new \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusByListingIdRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusByListingIdRequest | The bulk request to update ads.

try {
    $result = $apiInstance->bulkUpdateAdsStatusByListingId($campaignId, $contentType, $bulkUpdateAdStatusByListingIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsStatusByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **bulkUpdateAdStatusByListingIdRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\BulkUpdateAdStatusByListingIdRequest**](../Model/BulkUpdateAdStatusByListingIdRequest.md)| The bulk request to update ads. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BulkAdUpdateStatusByListingIdResponse**](../Model/BulkAdUpdateStatusByListingIdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdByListingId()`

```php
createAdByListingId($campaignId, $contentType, $createAdRequest): object
```



This method adds a listing to an existing Promoted Listings campaign using a <b>listingId</b> value generated by the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>, or using a value generated by an ad group ID. <p>For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.</p><p>For the listing ID specified in the request, this method:</p>  <ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ad.</li> <li>Associates the ad with the specified campaign.</li></ul>  <p>To create an ad for a listing, specify its <b>listingId</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter. Listing IDs are generated by eBay when a seller creates listings with the Trading API.</p><p>For manual targeting Promoted Listings Advanced (PLA) campaigns using the Cost Per Click (CPC) funding model, an ad group must be created first. If no ad group has been created for the campaign, ads cannot be created.<br><br><span class=\"tablenote\"><b>Note:</b> Ad groups are not required when adding listings to a smart targeting campaign.</span></p><p>For the ad group specified in the request, this method associates the ad with the specified ad group.</p><p>To create an ad for an ad group, specify the name of the ad group in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Ad groups are generated using the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/createAdGroup\">createAdGroup</a> method.</p> <p>You can specify one or more ad groups per campaign.</p><p>Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.</p><p>This call has no response payload. If the ad is successfully created, a <code>201 Created</code> HTTP status code and the <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAd\">getAd</a> URI of the ad are returned in the location header.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associate the newly created ad.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createAdRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateAdRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateAdRequest | This request object defines the fields used in the <b>createAdByListingId</b> request.

try {
    $result = $apiInstance->createAdByListingId($campaignId, $contentType, $createAdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associate the newly created ad.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **createAdRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateAdRequest**](../Model/CreateAdRequest.md)| This request object defines the fields used in the &lt;b&gt;createAdByListingId&lt;/b&gt; request. | |

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

## `createAdsByInventoryReference()`

```php
createAdsByInventoryReference($campaignId, $contentType, $createAdsByInventoryReferenceRequest): \macropage\SDKs\ebay\rest\marketing\Model\AdReferences
```



This method adds a listing that is managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the created ad with the specified campaign.</li></ul><br />To create an ad for a listing, specify its <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associate the newly created ads.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createAdsByInventoryReferenceRequest = new \macropage\SDKs\ebay\rest\marketing\Model\CreateAdsByInventoryReferenceRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\CreateAdsByInventoryReferenceRequest | This request object defines the fields used in the <b>createAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->createAdsByInventoryReference($campaignId, $contentType, $createAdsByInventoryReferenceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign for which to associate the newly created ads.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **createAdsByInventoryReferenceRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\CreateAdsByInventoryReferenceRequest**](../Model/CreateAdsByInventoryReferenceRequest.md)| This request object defines the fields used in the &lt;b&gt;createAdsByInventoryReference&lt;/b&gt; request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\AdReferences**](../Model/AdReferences.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAd()`

```php
deleteAd($adId, $campaignId)
```



This method removes the specified ad from the specified campaign.<br /><br />Pass the ID of the ad to delete with the ID of the campaign associated with the ad as path parameters to the call.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get the current list of the seller's campaign IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />When using the CPC funding model, use the <b>bulkUpdateAdsStatusByListingId</b> method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adId = 'adId_example'; // string | This path parameter specifies the unique identifier of the ad being deleted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\" target=\"_blank\">getAds</a> method to retrieve ad IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being deleted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $apiInstance->deleteAd($adId, $campaignId);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adId** | **string**| This path parameter specifies the unique identifier of the ad being deleted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad/methods/getAds\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAds&lt;/a&gt; method to retrieve ad IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being deleted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

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

## `deleteAdsByInventoryReference()`

```php
deleteAdsByInventoryReference($campaignId, $contentType, $deleteAdsByInventoryReferenceRequest): \macropage\SDKs\ebay\rest\marketing\Model\AdIds
```



This method works with listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method deletes ads using a list of seller-defined inventory reference IDs, used with the Inventory API, that are associated with the specified campaign ID.</p> <p>Specify the campaign ID (as a path parameter) and a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs to be deleted.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of the seller's current campaign IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br />When using the CPC funding model, use the bulkUpdateAdsStatusByInventoryReference method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being deleted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$deleteAdsByInventoryReferenceRequest = new \macropage\SDKs\ebay\rest\marketing\Model\DeleteAdsByInventoryReferenceRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\DeleteAdsByInventoryReferenceRequest | This request object defines the fields for the <b>deleteAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->deleteAdsByInventoryReference($campaignId, $contentType, $deleteAdsByInventoryReferenceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being deleted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **deleteAdsByInventoryReferenceRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\DeleteAdsByInventoryReferenceRequest**](../Model/DeleteAdsByInventoryReferenceRequest.md)| This request object defines the fields for the &lt;b&gt;deleteAdsByInventoryReference&lt;/b&gt; request. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\AdIds**](../Model/AdIds.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAd()`

```php
getAd($adId, $campaignId): \macropage\SDKs\ebay\rest\marketing\Model\Ad
```



This method retrieves the specified ad from the specified campaign.  <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters.</p> <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's current campaign IDs and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to retrieve their current ad IDs.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adId = 'adId_example'; // string | This path parameter specifies the unique identifier of the ad being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\" target=\"_blank\">getAds</a> method to retrieve ad IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.

try {
    $result = $apiInstance->getAd($adId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adId** | **string**| This path parameter specifies the unique identifier of the ad being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad/methods/getAds\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAds&lt;/a&gt; method to retrieve ad IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Ad**](../Model/Ad.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAds()`

```php
getAds($campaignId, $adGroupIds, $adStatus, $limit, $listingIds, $offset): \macropage\SDKs\ebay\rest\marketing\Model\AdPagedCollectionResponse
```



This method retrieves Promoted Listings ads that are associated with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>. <p>The method retrieves ads related to the specified campaign. Specify the Promoted Listings campaign to target with the <b>campaign_id</b> path parameter.</p>  <p>Because of the large number of possible results, you can use query parameters to paginate the result set by specifying a <b>limit</b>, which dictates how many ads to return on each page of the response. You can also specify how many ads to skip in the result set before returning the first result using the <b>offset</b> path parameter.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the current campaign IDs for the seller.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$adGroupIds = 'adGroupIds_example'; // string | A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups.<br><br>Use the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\" target=\"_blank\">getAdGroups</a> method to retrieve the ad group ID for the ad group.<br /><br /><span class=\"tablenote\"><b>Note:</b> This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
$adStatus = 'adStatus_example'; // string | A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.<br><br>See <a href=\"/api-docs/sell/marketing/types/pls:AdStatusEnum\" target=\"_blank\">AdStatusEnum</a> for supported values.
$limit = 'limit_example'; // string | Specifies the maximum number of ads to return on a page in the paginated response.<br><br><b>Default: </b>10 <br><br><b>Maximum:</b> 500
$listingIds = 'listingIds_example'; // string | A comma-separated list of listing IDs. <br><br><span class=\"tablenote\"><b>Note:</b> The response includes only active ads. The results do not include listing IDs that are excluded by other conditions.</span>
$offset = 'offset_example'; // string | Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->getAds($campaignId, $adGroupIds, $adStatus, $limit, $listingIds, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **adGroupIds** | **string**| A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve the ad group ID for the ad group.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.&lt;/span&gt; | [optional] |
| **adStatus** | **string**| A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:AdStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;AdStatusEnum&lt;/a&gt; for supported values. | [optional] |
| **limit** | **string**| Specifies the maximum number of ads to return on a page in the paginated response.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default: &lt;/b&gt;10 &lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 500 | [optional] |
| **listingIds** | **string**| A comma-separated list of listing IDs. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The response includes only active ads. The results do not include listing IDs that are excluded by other conditions.&lt;/span&gt; | [optional] |
| **offset** | **string**| Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\AdPagedCollectionResponse**](../Model/AdPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdsByInventoryReference()`

```php
getAdsByInventoryReference($campaignId, $inventoryReferenceId, $inventoryReferenceType): \macropage\SDKs\ebay\rest\marketing\Model\Ads
```



This method retrieves Promoted Listings ads associated with listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> from the specified campaign.<br /><br />Supply the <b>campaign_id</b> as a path parameter and use query parameters to specify the <b>inventory_reference_id</b> and <b>inventory_reference_type</b> pairs.<br /><br />In the Inventory API, an <i>inventory reference ID</i> is either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b> (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). To indicate a listing managed by the Inventory API, you must always specify both an <b>inventory_reference_id</b> and the associated <b>inventory_reference_type</b>.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve all of the seller's the current campaign IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being retrieved.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$inventoryReferenceId = 'inventoryReferenceId_example'; // string | This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing.<br><br>To retrieve an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To retrieve an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
$inventoryReferenceType = 'inventoryReferenceType_example'; // string | This query parameter specifies the type of the item the <b>inventory_reference_id</b> references.<br><br>See <a href=\"/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum\" target=\"_blank\">InventoryReferenceType</a> for supported values.

try {
    $result = $apiInstance->getAdsByInventoryReference($campaignId, $inventoryReferenceId, $inventoryReferenceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ads being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **inventoryReferenceId** | **string**| This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing.&lt;br&gt;&lt;br&gt;To retrieve an ad for a single-item listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; and specify an item ID or a SKU (if the SKU is defined in the listing).&lt;br&gt;&lt;br&gt;To retrieve an ad for a multi-variation listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt; and specify the item ID for the multi-variation listing or the &lt;b&gt;inventoryitemGroupKey&lt;/b&gt; value as defined in the Inventory API. | |
| **inventoryReferenceType** | **string**| This query parameter specifies the type of the item the &lt;b&gt;inventory_reference_id&lt;/b&gt; references.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;InventoryReferenceType&lt;/a&gt; for supported values. | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\Ads**](../Model/Ads.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBid()`

```php
updateBid($adId, $campaignId, $contentType, $updateBidPercentageRequest)
```



This method updates the bid percentage (also known as the \"ad rate\") for the specified ad in the specified campaign. <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters, and supply the new <b>bidPercentage</b> value in the payload of the call.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's current campaign IDs and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get their ad IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adId = 'adId_example'; // string | This path parameter specifies the unique identifier of the ad for which the bid percentage is being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\" target=\"_blank\">getAds</a> method to retrieve ad IDs.
$campaignId = 'campaignId_example'; // string | This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being updated.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\" target=\"_blank\">getCampaigns</a> method to retrieve campaign IDs.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$updateBidPercentageRequest = new \macropage\SDKs\ebay\rest\marketing\Model\UpdateBidPercentageRequest(); // \macropage\SDKs\ebay\rest\marketing\Model\UpdateBidPercentageRequest | This type defines the fields for the <b>updateBid</b> request.

try {
    $apiInstance->updateBid($adId, $campaignId, $contentType, $updateBidPercentageRequest);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->updateBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adId** | **string**| This path parameter specifies the unique identifier of the ad for which the bid percentage is being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/ad/methods/getAds\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getAds&lt;/a&gt; method to retrieve ad IDs. | |
| **campaignId** | **string**| This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the ad being updated.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCampaigns&lt;/a&gt; method to retrieve campaign IDs. | |
| **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **updateBidPercentageRequest** | [**\macropage\SDKs\ebay\rest\marketing\Model\UpdateBidPercentageRequest**](../Model/UpdateBidPercentageRequest.md)| This type defines the fields for the &lt;b&gt;updateBid&lt;/b&gt; request. | |

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
