<?php
include 'vendor/autoload.php';

use GuzzleHttp\Client;
use macropage\SDKs\ebay\rest\marketing\API\{CampaignApi, ItemPromotionApi, PromotionApi};
use macropage\SDKs\ebay\rest\marketing\Configuration;

// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken($_ENV['EBAY_ACCESS_TOKEN'] ?? 'xxxxxxxxxxx');

$client           = new Client();
$apiPromotion     = new PromotionApi($client, $config);
$apiCampaign      = new CampaignApi($client, $config);
$apiItemPromotion = new ItemPromotionApi($client, $config);

$marketplaceId = 'EBAY_DE';

try {
    $result = $apiPromotion->getPromotions($marketplaceId);
    print_r($result);
} catch (\Exception $e) {
    echo "Exception when calling PromotionApi->getPromotions: {$e->getMessage()}\n";
    echo "Stack trace: {$e->getTraceAsString()}\n";
}

try {
    $result = $apiCampaign->getCampaigns();
    print_r($result);
} catch (\Exception $e) {
    echo "Exception when calling CampaignApi->getCampaigns: {$e->getMessage()}\n";
    echo "Stack trace: {$e->getTraceAsString()}\n";
}

try {
    $result = $apiItemPromotion->getItemPromotion('xxxxxxxxx@EBAY_DE');
    print_r($result);
} catch (\Exception $e) {
    echo "Exception when calling ItemPromotionApi->getItemPromotion: {$e->getMessage()}\n";
    echo "Stack trace: {$e->getTraceAsString()}\n";
}
