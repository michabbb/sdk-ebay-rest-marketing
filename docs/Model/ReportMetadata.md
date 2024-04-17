# # ReportMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimensionMetadata** | [**\macropage\SDKs\ebay\rest\marketing\Model\DimensionMetadata[]**](DimensionMetadata.md) | A list containing the metadata for the dimension used in the report. | [optional]
**maxNumberOfDimensionsToRequest** | **int** | The maximum number of dimensions that can be requested for the specified report type. | [optional]
**maxNumberOfMetricsToRequest** | **int** | The maximum number of metrics that can be requested for the specified report type. | [optional]
**channel** | **string** | This field indicates whether a COST_PER_CLICK report type is related to an ON_SITE or OFF_SITE Promoted Listings campaign. This field is not returned for COST_PER_SALE report types since COST_PER_SALE campaigns are only available ON_SITE. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:ChannelEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**metricMetadata** | [**\macropage\SDKs\ebay\rest\marketing\Model\MetricMetadata[]**](MetricMetadata.md) | A list containing the metadata for the metrics in the report. | [optional]
**reportType** | **string** | The &lt;b&gt;report_type&lt;/b&gt;, as specified in the request to create the report task.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
