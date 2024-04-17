<?php
require_once(__DIR__ . '/vendor/autoload.php');

use macropage\SDKs\ebay\rest\marketing\API\ItemPromotionApi;
use macropage\SDKs\ebay\rest\marketing\API\PromotionApi;
use macropage\SDKs\ebay\rest\marketing\Configuration;

// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken('xxxxxxxxxxxxxxx');

$apiInstance = new PromotionApi(
    new GuzzleHttp\Client(),
    $config
);
try {
    $result = $apiInstance->getPromotions('EBAY_DE');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new ItemPromotionApi(
    new GuzzleHttp\Client(),
    $config
);
try {
    $result = $apiInstance->getItemPromotion('xxxxxxxxx@EBAY_DE');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->getItemPromotion: ', $e->getMessage(), PHP_EOL;
}