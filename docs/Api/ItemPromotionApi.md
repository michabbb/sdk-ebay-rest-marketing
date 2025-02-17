# macropage\SDKs\ebay\rest\marketing\ItemPromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemPromotion()**](ItemPromotionApi.md#createItemPromotion) | **POST** /item_promotion |  |
| [**deleteItemPromotion()**](ItemPromotionApi.md#deleteItemPromotion) | **DELETE** /item_promotion/{promotion_id} |  |
| [**getItemPromotion()**](ItemPromotionApi.md#getItemPromotion) | **GET** /item_promotion/{promotion_id} |  |
| [**updateItemPromotion()**](ItemPromotionApi.md#updateItemPromotion) | **PUT** /item_promotion/{promotion_id} |  |


## `createItemPromotion()`

```php
createItemPromotion($itemPromotion): \macropage\SDKs\ebay\rest\marketing\Model\BaseResponse
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item discount</b>, where the buyer receives a discount when they meet the specific buying criteria. Known here as \"threshold discounts\", these discounts trigger when a threshold is met.  <p>eBay highlights discounted items by placing teasers for the discounted items throughout the online buyer flows.</p>  <p><i>Discounts</i> are specified as either a monetary amount or a percentage off the standard sales price of a listing, letting you offer deals such as \"Buy 1 Get 1\" and \"Buy $50, get 20% off\".</p> <p><i>Volume pricing</i> discounts increase the value of the discount as the buyer increases the quantity they purchase.</p> <p><i>Coded Coupons</i> provide unique codes that a buyer can use during checkout to receive a discount. The seller can specify the number of times a buyer can use the coupon and the maximum amount across all purchases that can be discounted using the coupon. The coupon code can also be made public (appearing on the seller's Offer page, search pages, the item listing, and the checkout page) or private (only on the seller's Offer page, but the seller can include the code in email and social media).</p> <p class=\"tablenote\"><b>Note</b>: Coded Coupons are currently available in the US, UK, DE, FR, IT, ES, and AU marketplaces.</p><p>There are two ways to add items to a threshold discount:</p>  <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to be discounted.</li> <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain the items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>You must create a new discount in either a <code>DRAFT</code> or <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the promotion ID is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests.</p>  <p class=\"tablenote\"><b>Tip:</b> Refer to the <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Selling Integration Guide</a> for details and examples showing how to create and manage threshold discounts using the Discounts Manager.</p>  <p>For information on the eBay marketplaces that support item discounts, see <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Discounts Manager requirements and restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$itemPromotion = new \macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion(); // \macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion | This type defines the fields that describe an item discount.

try {
    $result = $apiInstance->createItemPromotion($itemPromotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->createItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemPromotion** | [**\macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item discount. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemPromotion()`

```php
deleteItemPromotion($promotionId)
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method deletes the threshold discount specified by the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.  <br><br>You can delete any discount with the exception of those that are currently active (RUNNING). To end a running threshold discount, call <a href=\"/api-docs/sell/marketing/resources/item_promotion/methods/updateItemPromotion\">updateItemPromotion</a> and adjust the <b>endDate</b> field as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to delete plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->deleteItemPromotion($promotionId);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->deleteItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount you want to delete plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |

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

## `getItemPromotion()`

```php
getItemPromotion($promotionId): \macropage\SDKs\ebay\rest\marketing\Model\ItemPromotionResponse
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns the complete details of the threshold discount specified by the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $result = $apiInstance->getItemPromotion($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->getItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ItemPromotionResponse**](../Model/ItemPromotionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemPromotion()`

```php
updateItemPromotion($promotionId, $itemPromotion): \macropage\SDKs\ebay\rest\marketing\Model\BaseResponse
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method updates the specified threshold discount with the new configuration that you supply in the request. Indicate the discount you want to update using the <b>promotion_id</b> path parameter.  <p>Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.</p>  <p>When updating a discount, supply all the fields that you used to configure the original discount (and not just the fields you are updating). eBay replaces the specified discount with the values you supply in the update request and if you don't pass a field that currently has a value, the update request will fail.</p>  <p>The parameters you are allowed to update with this request depend on the status of the discount you're updating:  <ul><li>DRAFT or SCHEDULED discounts: You can update any of the parameters in these discounts that have not yet started to run, including the <b>discountRules</b>.</li> <li>RUNNING or PAUSED discounts: You can change the <b>endDate</b> and the item's inventory but you cannot change the discount or the start date.</li> <li>ENDED discounts: Nothing can be changed.</li></ul> <p class=\"tablenote\"><b>Tip:</b> When updating a <code>RUNNING</code> or <code>PAUSED</code> discount, set the <b>status</b> field to <code>SCHEDULED</code> for the update request. When the discount is updated, the previous status (either <code>RUNNING</code> or <code>PAUSED</code>) is retained.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to update plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</bte>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discouint is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
$itemPromotion = new \macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion(); // \macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion | This type defines the fields that describe an item discount.

try {
    $result = $apiInstance->updateItemPromotion($promotionId, $itemPromotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->updateItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount you want to update plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/bte&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discouint is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |
| **itemPromotion** | [**\macropage\SDKs\ebay\rest\marketing\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item discount. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
