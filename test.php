<?php
require_once __DIR__ . '/vendor/autoload.php';

use macropage\ebaysdk\finding\finding;
use macropage\ebaysdk\trading\trading;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


$log = new Logger('name');
try {
	$log->pushHandler(new StreamHandler('/app/mysdk.log', Logger::DEBUG));
} catch (Exception $e) {
	throw new \RuntimeException($e);
}

$appid = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX			';

$FindingService = new finding();
$FindingService->setLogger($log);
$FindingService->setSiteId('EBAY-DE');
$FindingService->setCredentials($appid);
//$response = $FindingService->getVersion(new \macropage\ebaysdk\finding\StructType\GetVersionRequest());
$FindItemsAdvancedRequest = new \macropage\ebaysdk\finding\StructType\FindItemsAdvancedRequest();
//d(new SoapVar('iphone', XSD_STRING,null, null, null, 'http://www.ebay.com/marketplace/search/v1/services'));
//$FindItemsAdvancedRequest->setKeywords(new SoapVar('iphone', XSD_STRING,null, null, null, 'http://www.ebay.com/marketplace/search/v1/services'));
$FindItemsAdvancedRequest->setKeywords('iphone');
$FindItemsAdvancedRequest->setCategoryId([(string)178893,(string)178893]);
$FindItemsAdvancedRequest->setOutputSelector(['AspectHistogram']);
//$Filter = new \macropage\ebaysdk\finding\StructType\AspectFilter();
//$Filter->setAspectName('Farbe');
//$Filter->setAspectValueName(['weiß']);
//$FindItemsAdvancedRequest->setAspectFilter([$Filter]);
$PaginationInput = new \macropage\ebaysdk\finding\StructType\PaginationInput(1,1);
$PaginationInput->setEntriesPerPage(1);
$FindItemsAdvancedRequest->setPaginationInput($PaginationInput);
$response = $FindingService->findItemsAdvanced($FindItemsAdvancedRequest);
d($response);
print_r($FindingService->getLastRequest());
print_r($FindingService->getLastResponse());
print_r($FindingService->getLastRequestHeaders());
print_r($FindingService->getLastResponseHeaders());


exit;


$TradingService = new trading();
$TradingService->setLogger($log);
$TradingService->setCredentials($appid,'XXXXXXXXXXXXX','XXXXXXXXXXXXXX');
$TradingService->setSiteId(77);
$TradingService->setVersion(1077);
$GetItemRequestType = new macropage\ebaysdk\trading\StructType\GetItemRequestType();
$GetItemRequestType->setItemID('1111111111111');
$GetItemRequestType->setErrorLanguage('en_US');
/** @var \macropage\ebaysdk\trading\StructType\GetItemResponseType $response */
$response = $TradingService->GetItem($GetItemRequestType);
d($TradingService->GmtTimeToLocalTime($response->getItem()->getListingDetails()->getEndTime()));
exit;
d($response);
print_r($TradingService->getLastRequest());
print_r($TradingService->getLastResponse());
print_r($TradingService->getLastRequestHeaders());
print_r($TradingService->getLastResponseHeaders());
print_r($response);

