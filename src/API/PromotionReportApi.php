<?php
/**
 * PromotionReportApi
 * PHP version 7.4
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, refer to the <a href=\"/api-docs/sell/static/marketing/pl-landing.html\">Promoted Listings playbook</a>.</li><li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p><p><b>Store Email Campaign</b> allows sellers to create and send email campaigns to customers who have signed up to receive their newsletter. For more information on email campaigns, see <a href=\"/api-docs/sell/static/marketing/store-email-campaigns.html#email-campain-types\" target=\"_blank\">Store Email Campaigns</a>.<p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.21.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\marketing\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use macropage\SDKs\ebay\rest\marketing\ApiException;
use macropage\SDKs\ebay\rest\marketing\Configuration;
use macropage\SDKs\ebay\rest\marketing\HeaderSelector;
use macropage\SDKs\ebay\rest\marketing\ObjectSerializer;

/**
 * PromotionReportApi Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PromotionReportApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getPromotionReports' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPromotionReports
     *
     * @param  string $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; (optional)
     * @param  string $promotionStatus This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 (optional)
     * @param  string $promotionType This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. (optional)
     * @param  string $q A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPromotionReports'] to see the possible values for this operation
     *
     * @throws \macropage\SDKs\ebay\rest\marketing\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection
     */
    public function getPromotionReports($marketplaceId, $limit = null, $offset = null, $promotionStatus = null, $promotionType = null, $q = null, string $contentType = self::contentTypes['getPromotionReports'][0])
    {
        list($response) = $this->getPromotionReportsWithHttpInfo($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $contentType);
        return $response;
    }

    /**
     * Operation getPromotionReportsWithHttpInfo
     *
     * @param  string $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; (optional)
     * @param  string $promotionStatus This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 (optional)
     * @param  string $promotionType This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. (optional)
     * @param  string $q A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPromotionReports'] to see the possible values for this operation
     *
     * @throws \macropage\SDKs\ebay\rest\marketing\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPromotionReportsWithHttpInfo($marketplaceId, $limit = null, $offset = null, $promotionStatus = null, $promotionType = null, $q = null, string $contentType = self::contentTypes['getPromotionReports'][0])
    {
        $request = $this->getPromotionReportsRequest($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPromotionReportsAsync
     *
     * @param  string $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; (optional)
     * @param  string $promotionStatus This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 (optional)
     * @param  string $promotionType This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. (optional)
     * @param  string $q A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPromotionReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionReportsAsync($marketplaceId, $limit = null, $offset = null, $promotionStatus = null, $promotionType = null, $q = null, string $contentType = self::contentTypes['getPromotionReports'][0])
    {
        return $this->getPromotionReportsAsyncWithHttpInfo($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPromotionReportsAsyncWithHttpInfo
     *
     * @param  string $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; (optional)
     * @param  string $promotionStatus This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 (optional)
     * @param  string $promotionType This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. (optional)
     * @param  string $q A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPromotionReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionReportsAsyncWithHttpInfo($marketplaceId, $limit = null, $offset = null, $promotionStatus = null, $promotionType = null, $q = null, string $contentType = self::contentTypes['getPromotionReports'][0])
    {
        $returnType = '\macropage\SDKs\ebay\rest\marketing\Model\PromotionsReportPagedCollection';
        $request = $this->getPromotionReportsRequest($marketplaceId, $limit, $offset, $promotionStatus, $promotionType, $q, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPromotionReports'
     *
     * @param  string $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the promotions report.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/ba:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported Marketplace ID values. (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; (optional)
     * @param  string $promotionStatus This parameter specifies the promotion state by which you want to filter the results. &lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionStatusEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionStatusEnum&lt;/a&gt; for supported values.&lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 (optional)
     * @param  string $promotionType This parameter specifies the campaign promotion type by which you want to filter the results.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/sme:PromotionTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PromotionTypeEnum&lt;/a&gt; for supported values. (optional)
     * @param  string $q A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPromotionReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPromotionReportsRequest($marketplaceId, $limit = null, $offset = null, $promotionStatus = null, $promotionType = null, $q = null, string $contentType = self::contentTypes['getPromotionReports'][0])
    {

        // verify the required parameter 'marketplaceId' is set
        if ($marketplaceId === null || (is_array($marketplaceId) && count($marketplaceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceId when calling getPromotionReports'
            );
        }







        $resourcePath = '/promotion_report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $marketplaceId,
            'marketplace_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $promotionStatus,
            'promotion_status', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $promotionType,
            'promotion_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $q,
            'q', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}