# # DeleteAdsByInventoryReferenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventoryReferenceId** | **string** | The unique identifier of a single-item listing or a multi-variation listing.&lt;br&gt;&lt;br&gt;To create an ad for a single-item listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; and specify an item ID or a SKU (if the SKU is defined in the listing).&lt;br&gt;&lt;br&gt;To create an ad for a multi-variation listing, set the &lt;b&gt;inventoryReferenceType&lt;/b&gt; value to &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt; and specify the item ID for the multi-variation listing or the &lt;b&gt;inventoryitemGroupKey&lt;/b&gt; value as defined in the Inventory API. | [optional]
**inventoryReferenceType** | **string** | This enumerated value indicates the type of item the &lt;b&gt;inventoryReferenceId&lt;/b&gt; references.&lt;br&gt;&lt;br&gt;The item can be either an &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; or an &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
