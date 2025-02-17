# macropage\SDKs\ebay\rest\marketing\ItemPriceMarkdownApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemPriceMarkdownPromotion()**](ItemPriceMarkdownApi.md#createItemPriceMarkdownPromotion) | **POST** /item_price_markdown |  |
| [**deleteItemPriceMarkdownPromotion()**](ItemPriceMarkdownApi.md#deleteItemPriceMarkdownPromotion) | **DELETE** /item_price_markdown/{promotion_id} |  |
| [**getItemPriceMarkdownPromotion()**](ItemPriceMarkdownApi.md#getItemPriceMarkdownPromotion) | **GET** /item_price_markdown/{promotion_id} |  |
| [**updateItemPriceMarkdownPromotion()**](ItemPriceMarkdownApi.md#updateItemPriceMarkdownPromotion) | **PUT** /item_price_markdown/{promotion_id} |  |


## `createItemPriceMarkdownPromotion()`

```php
createItemPriceMarkdownPromotion($itemPriceMarkdown): object
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item price markdown discount</b> (know simply as a \"markdown discount\") where a discount amount is applied directly to the items included in the discount. Discounts can be specified as either a monetary amount or a percentage off the standard sales price. eBay highlights discounted items by placing teasers for the items throughout the online sales flows.  <p>Unlike an <a href=\"/api-docs/sell/marketing/resources/item_promotion/methods/createItemPromotion\">item discount</a>, a markdown discount does not require the buyer meet a \"threshold\" before the offer takes effect. With markdown discounts, all the buyer needs to do is purchase the item to receive the discount benefit.</p>  <p class=\"tablenote\"><b>Important:</b> There are some restrictions for which listings are available for price markdown discounts. For details, see <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Discounts Manager requirements and restrictions</a>. <br><br>In addition, we recommend you list items at competitive prices before including them in your markdown discounts. For an extensive list of pricing recommendations, see the <b>Growth</b> tab in Seller Hub.</p> <p>There are two ways to enable items for markdown discounts:</p> <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to include.</li>  <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>New discounts must be created in either a <code>DRAFT</code> or a <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the <b>promotionId</b> is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests (such as to schedule a discount that's in a DRAFT state).</p>  <p class=\"tablenote\"><b>Tip:</b> Refer to <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Discounts Manager</a> in the <i>Selling Integration Guide</i> for details and examples showing how to create and manage seller discounts.</p>  <p>Markdown discounts are available on all eBay marketplaces. For more information, see <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Discounts Manager requirements and restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$itemPriceMarkdown = new \macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown(); // \macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown | This type defines the fields that describe an item price markdown discount.

try {
    $result = $apiInstance->createItemPriceMarkdownPromotion($itemPriceMarkdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->createItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemPriceMarkdown** | [**\macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)| This type defines the fields that describe an item price markdown discount. | [optional] |

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

## `deleteItemPriceMarkdownPromotion()`

```php
deleteItemPriceMarkdownPromotion($promotionId)
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method deletes the item price markdown discount specified by the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.  <br><br>You can delete any discount with the exception of those that are currently active (RUNNING). To end a running discount, call <a href=\"/api-docs/sell/marketing/resources/item_price_markdown/methods/updateItemPriceMarkdownPromotion\">updateItemPriceMarkdownPromotion</a> and adjust the <b>endDate</b> field as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to delete plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->deleteItemPriceMarkdownPromotion($promotionId);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->deleteItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
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

## `getItemPriceMarkdownPromotion()`

```php
getItemPriceMarkdownPromotion($promotionId): \macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns the complete details of the item price markdown discounnt that's indicated by the <b>promotion_id</b> path parameter. <br><br>Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discoun is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $result = $apiInstance->getItemPriceMarkdownPromotion($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->getItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discoun is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemPriceMarkdownPromotion()`

```php
updateItemPriceMarkdownPromotion($promotionId, $itemPriceMarkdown): object
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method updates the specified item price markdown discount with the new configuration that you supply in the payload of the request. Specify the discount you want to update using the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.<br><br>When updating a discount, supply all the fields that you used to configure the original discount (and not just the fields you are updating). eBay replaces the specified discount with the values you supply in the update request and if you don't pass a field that currently has a value, the update request fails.  <br><br>The parameters you are allowed to update with this request depend on the status of the discount you're updating:  <ul><li>DRAFT or SCHEDULED discounts: You can update any of the parameters in these discounts that have not yet started to run, including the <b>discountRules</b>.</li> <li>RUNNING discounts: You can change the <b>endDate</b> and the item's inventory but you cannot change the discount or the start date.</li> <li>ENDED discounts: Nothing can be changed.</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount you want to update plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
$itemPriceMarkdown = new \macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown(); // \macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown | This type defines the fields that describe an item price markdown discount.

try {
    $result = $apiInstance->updateItemPriceMarkdownPromotion($promotionId, $itemPriceMarkdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->updateItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount you want to update plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |
| **itemPriceMarkdown** | [**\macropage\SDKs\ebay\rest\marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)| This type defines the fields that describe an item price markdown discount. | [optional] |

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
