# macropage\SDKs\ebay\rest\marketing\PromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getListingSet()**](PromotionApi.md#getListingSet) | **GET** /promotion/{promotion_id}/get_listing_set |  |
| [**getPromotions()**](PromotionApi.md#getPromotions) | **GET** /promotion |  |
| [**pausePromotion()**](PromotionApi.md#pausePromotion) | **POST** /promotion/{promotion_id}/pause |  |
| [**resumePromotion()**](PromotionApi.md#resumePromotion) | **POST** /promotion/{promotion_id}/resume |  |


## `getListingSet()`

```php
getListingSet($promotionId, $limit, $offset, $q, $sort, $status): \macropage\SDKs\ebay\rest\marketing\Model\ItemsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns the set of listings associated with the <b>promotion_id</b> specified in the path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's discounts.  <p>The listing details are returned in a paginated set and you can control and results returned using the following query parameters: <b>limit</b>, <b>offset</b>, <b>q</b>, <b>sort</b>, and <b>status</b>.</p>  <ul><li><b>Maximum associated listings returned:</b> 200</li>  <li><b>Default number of listings returned:</b> 200</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the discount associated with the listing set plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
$limit = 'limit_example'; // string | Specifies the maximum number of discounts returned on a page from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
$offset = 'offset_example'; // string | Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$q = 'q_example'; // string | Reserved for future use.
$sort = 'sort_example'; // string | Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by their current price in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul class=\"compact\"><li>AVAILABLE</li> <li>PRICE</li> <li>TITLE</li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
$status = 'status_example'; // string | This query parameter applies only to markdown discounts. It filters the response based on the indicated status of the discount.<br><br><span class=\"tablenote\"><b>Note:</b> Currently, the only supported value for this parameter is <code>MARKED_DOWN</code>, which indicates active markdown discounts.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum

try {
    $result = $apiInstance->getListingSet($promotionId, $limit, $offset, $q, $sort, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getListingSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the discount associated with the listing set plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |
| **limit** | **string**| Specifies the maximum number of discounts returned on a page from the result set. &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200&lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 | [optional] |
| **offset** | **string**| Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |
| **q** | **string**| Reserved for future use. | [optional] |
| **sort** | **string**| Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;PRICE&lt;/code&gt; - Sorts the associated listings by their current price in ascending order &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;-TITLE&lt;/code&gt; - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values&lt;/b&gt;:&lt;ul class&#x3D;\&quot;compact\&quot;&gt;&lt;li&gt;AVAILABLE&lt;/li&gt; &lt;li&gt;PRICE&lt;/li&gt; &lt;li&gt;TITLE&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional] |
| **status** | **string**| This query parameter applies only to markdown discounts. It filters the response based on the indicated status of the discount.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Currently, the only supported value for this parameter is &lt;code&gt;MARKED_DOWN&lt;/code&gt;, which indicates active markdown discounts.&lt;/span&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\ItemsPagedCollection**](../Model/ItemsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotions()`

```php
getPromotions($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $sort): \macropage\SDKs\ebay\rest\marketing\Model\PromotionsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns a list of a seller's undeleted discounts. <p>The call returns up to 200 currently-available discounts on the specified marketplace. While the response body does not include the discount's <b>discountRules</b> or <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b> (which you can use to retrieve the complete details of the discount).</p>  <p>Use query parameters to sort and filter the results by the number of discounts to return, the discount state or type, and the eBay marketplace. You can also supply keywords to limit the response to the discounts that contain that keywords in the title of the discount.</p> <p><b>Maximum returned:</b> 200</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This parameter specifies eBay marketplace ID of the site where the discount is hosted.<br><br>See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.
$limit = 'limit_example'; // string | Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
$offset = 'offset_example'; // string | Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$promotionStatus = 'promotionStatus_example'; // string | This parameter specifies the discount state by which you want to filter the results. The response contains only those discounts that match the state you specify. <br><br>See <a href=\"/api-docs/sell/marketing/types/sme:PromotionStatusEnum\" target=\"_blank\">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
$promotionType = 'promotionType_example'; // string | This parameter specifies the campaign discounts type by which you want to filter the results.<br><br>See <a href=\"/api-docs/sell/marketing/types/sme:PromotionTypeEnum\" target=\"_blank\">PromotionTypeEnum</a> for supported values.
$q = 'q_example'; // string | A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the title.  <br><br><b>Example:</b> \"iPhone\" or \"Harry Potter.\"  <br><br>Commas that separate keywords are ignored. For example, a keyword string of \"iPhone, iPad\" equals \"iPhone iPad\", and each results in a response that contains discounts with both \"iPhone\" and \"iPad\" in the title.
$sort = 'sort_example'; // string | Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp; Sorts the discounts in the response by their end dates in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the discounts by their name in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li> <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField

try {
    $result = $apiInstance->getPromotions($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplaceId** | **string**| This parameter specifies eBay marketplace ID of the site where the discount is hosted.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. | |
| **limit** | **string**| Specifies the maximum number of discounts returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 | [optional] |
| **offset** | **string**| Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |
| **promotionStatus** | **string**| This parameter specifies the discount state by which you want to filter the results. The response contains only those discounts that match the state you specify. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 | [optional] |
| **promotionType** | **string**| This parameter specifies the campaign discounts type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. | [optional] |
| **q** | **string**| A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the discounts that contain the supplied keywords in the title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains discounts with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. | [optional] |
| **sort** | **string**| Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;END_DATE&lt;/code&gt; &amp;nbsp; Sorts the discounts in the response by their end dates in ascending order &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;-PROMOTION_NAME&lt;/code&gt; &amp;nbsp; Sorts the discounts by their name in descending alphabetical order (Z-Az-a)  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values&lt;/b&gt;:&lt;ul&gt;&lt;li&gt;&lt;code&gt;START_DATE&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;END_DATE&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;PROMOTION_NAME&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\marketing\Model\PromotionsPagedCollection**](../Model/PromotionsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pausePromotion()`

```php
pausePromotion($promotionId)
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method pauses a currently-active (RUNNING) threshold discount and changes the state of the discount from <code>RUNNING</code> to <code>PAUSED</code>. Pausing a discount makes the discount temporarily unavailable to buyers and any currently-incomplete transactions will not receive the offer until the discount is resumed. Also, discount teasers are not displayed when a discount is paused.  <br><br>Pass the ID of the discount you want to pause using the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of the seller's discounts. <br><br><b>Note:</b> You can only pause threshold discounts (you cannot pause markdown discounts).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the active discount being paused plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->pausePromotion($promotionId);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->pausePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the active discount being paused plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |

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

## `resumePromotion()`

```php
resumePromotion($promotionId)
```



<span class=\"tablenote\"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method restarts a threshold discount that was previously paused and changes the state of the discount from <code>PAUSED</code> to <code>RUNNING</code>. Only discounts that have been previously paused can be resumed. Resuming a discount reinstates the teasers and any transactions that were in motion before the discount was paused will again be eligible for the discount.  <br><br>Pass the ID of the discount you want to resume using the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of the seller's discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | This path parameter takes a concatenation of the ID of the paused discount being resumed with the listing set plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> method to retrieve promotion Ids. See <a href=\"/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->resumePromotion($promotionId);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->resumePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| This path parameter takes a concatenation of the ID of the paused discount being resumed with the listing set plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;). &lt;br&gt;&lt;br&gt;The ID of the discount (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/promotion/methods/getPromotions\&quot;&gt;getPromotions&lt;/a&gt; method to retrieve promotion Ids. See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; | |

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
