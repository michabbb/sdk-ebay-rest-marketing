# # UpdateAdsByInventoryReferenceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\macropage\SDKs\ebay\rest\marketing\Model\AdReference[]**](AdReference.md) | A list of ad IDs and links to retrieve them. | [optional]
**errors** | [**\macropage\SDKs\ebay\rest\marketing\Model\Error[]**](Error.md) | A container for all of the errors associated with the specified inventory reference ID. | [optional]
**inventoryReferenceId** | **string** | The reference ID associated with the ad. The reference ID could be a SKU number or Inventory Item Group, depending on value of &lt;code&gt;inventoryReferenceType&lt;/code&gt;. | [optional]
**inventoryReferenceType** | **string** | The inventory reference type associated with the ad. The inventory reference type could be a SKU number or Inventory Item Group. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**statusCode** | **int** | An HTTP status code that indicates whether or not the CPS ad was successfully updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
