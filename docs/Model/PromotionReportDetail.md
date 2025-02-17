# # PromotionReportDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**averageItemDiscount** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**averageItemRevenue** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**averageOrderDiscount** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**averageOrderRevenue** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**averageOrderSize** | **string** | The &lt;i&gt;average order size&lt;/i&gt; is the average number of items that each order contained that have an active discount. This value is calculated as follows:  &lt;br&gt;&lt;br&gt;&lt;b&gt;itemsSoldQuantity&lt;/b&gt; / &lt;b&gt;numberOfOrdersSold&lt;/b&gt; &#x3D; &lt;b&gt;averageOrderSize&lt;/b&gt; | [optional]
**baseSale** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**itemsSoldQuantity** | **int** | This is the quantity of items purchased in a threshold discount where the threshold &lt;i&gt;has been met&lt;/i&gt; and the discount was applied. &lt;br&gt;&lt;br&gt;For example, suppose you&#39;re running a \&quot;Buy 1, get 1 at 50%\&quot; discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (&lt;b&gt;itemsSoldQuantity&lt;/b&gt;) would be 2 and you number of orders sold (&lt;b&gt;numberOfOrdersSold&lt;/b&gt;) would be 1. | [optional]
**numberOfOrdersSold** | **int** | This is the number of orders sold in a threshold discount where the threshold &lt;i&gt;has been met&lt;/i&gt; and the discount was applied. &lt;br&gt;&lt;br&gt;For example, suppose you&#39;re running a \&quot;Buy 1, get 1 at 50%\&quot; discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your &lt;b&gt;numberOfOrdersSold&lt;/b&gt; would be 1 and your &lt;b&gt;itemsSoldQuantity&lt;/b&gt; would be 2. | [optional]
**percentageSalesLift** | **string** | The &lt;i&gt;percentage sales lift&lt;/i&gt; is the total dollar amount gained due to discounts. This value is calculated as follows:  &lt;br&gt;&lt;br&gt; &lt;b&gt;promotionSale&lt;/b&gt; / &lt;b&gt;totalSale&lt;/b&gt; &#x3D;  &lt;b&gt;percentageSalesLift&lt;/b&gt; | [optional]
**promotionHref** | **string** | The URI of the discount report. | [optional]
**promotionId** | **string** | A unique eBay-assigned ID for the discount that&#39;s generated when the discount is created. | [optional]
**promotionReportId** | **string** | The unique eBay-assigned ID of the discount report that is generated when the report is created. | [optional]
**promotionSale** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**promotionType** | **string** | Indicates the type of the discount, either &lt;code&gt;CODED_COUPON&lt;/code&gt;, &lt;code&gt;MARKDOWN_SALE&lt;/code&gt;, &lt;code&gt;ORDER_DISCOUNT&lt;/code&gt;, or &lt;code&gt;VOLUME_DISCOUNT&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**totalDiscount** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]
**totalSale** | [**\macropage\SDKs\ebay\rest\marketing\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
