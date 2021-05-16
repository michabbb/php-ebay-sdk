<?php
require_once __DIR__ . '/vendor/autoload.php';

use macropage\ebaysdk\finding\finding;
use macropage\ebaysdk\shopping\shopping;
use macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType;
use macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType;
use macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType;
use macropage\ebaysdk\trading\trading;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


$log = new Logger('name');
try {
	$log->pushHandler(new StreamHandler('/tmp/ebaysdk.log', Logger::DEBUG));
} catch (Exception $e) {
	throw new \RuntimeException($e->getMessage());
}

$appid = 'xxxxxxxxxxx';

/*$ShoppingService = new shopping();
$ShoppingService->setLogger($log);
$ShoppingService->setCredentials($appid);
$ShoppingService->setSiteId(77);
$ShoppingService->setVersion(1199);
$GetMultipleItemsRequestType = new GetMultipleItemsRequestType(['124476308832'],'Details');
$response = $ShoppingService->GetMultipleItems($GetMultipleItemsRequestType);
d($response);
foreach ($response->getItem()as $item) {
	echo 'ItemID: '.$item->getItemID()."\n";
	echo 'QuantitySold: '.$item->getQuantitySold()."\n";
	echo "=================================================\n";
}
$GeteBayTimeRequestType = new GeteBayTimeRequestType();
$response = $ShoppingService->GeteBayTime($GeteBayTimeRequestType);
d($response);
d($ShoppingService->GmtTimeToLocalTime($response->getTimestamp()));
exit;*/

//$FindingService = new finding();
//$FindingService->setLogger($log);
//$FindingService->setSiteId('EBAY-DE');
//$FindingService->setCredentials($appid);
//$FindItemsAdvancedRequest = new \macropage\ebaysdk\finding\StructType\FindItemsAdvancedRequest();
//$FindItemsAdvancedRequest->setKeywords('iphone');
//$FindItemsAdvancedRequest->setCategoryId([(string)178893,(string)178893]);
//$FindItemsAdvancedRequest->setOutputSelector(['AspectHistogram']);
//$Filter = new \macropage\ebaysdk\finding\StructType\AspectFilter();
//$Filter->setAspectName('Farbe');
//$Filter->setAspectValueName(['weiß']);
//$FindItemsAdvancedRequest->setAspectFilter([$Filter]);
//$PaginationInput = new \macropage\ebaysdk\finding\StructType\PaginationInput(1,1);
//$PaginationInput->setEntriesPerPage(1);
//$FindItemsAdvancedRequest->setPaginationInput($PaginationInput);
///** @var \macropage\ebaysdk\finding\StructType\FindItemsAdvancedResponse $response */
//$response = $FindingService->findItemsAdvanced($FindItemsAdvancedRequest);
//d($response);
//d($FindingService->getLastRequest());
//d($FindingService->getLastResponse());
//d($FindingService->getLastRequestHeaders());
//d($FindingService->getLastResponseHeaders());
//if ($response->getSearchResult()->count) {
//    if (!is_array($response->getSearchResult()->getItem())) {
//        $response->getSearchResult()->setItem([$response->getSearchResult()->getItem()]);
//    }
//    foreach ($response->getSearchResult()->getItem() as $item) {
//        d($item->getItemId().' -> '.$item->getTitle());
//    }
//}

//exit;

//$TradingService = new trading();
//$TradingService->setLogger($log);
//$TradingService->setCredentials($appid,'xxxxxxx','xxxxxxxxx');
//$TradingService->setSiteId(77);
//$TradingService->setVersion(1203);
//$GetItemRequestType = new macropage\ebaysdk\trading\StructType\GetItemRequestType();
//$GetItemRequestType->setItemID('124476308832');
//$GetItemRequestType->setErrorLanguage('en_US');
///** @var \macropage\ebaysdk\trading\StructType\GetItemResponseType $response */
//$response = $TradingService->GetItem($GetItemRequestType);
//d($TradingService->getLastRequest());
//d($TradingService->getLastResponse());
//d($TradingService->getLastRequestHeaders());
//d($TradingService->getLastResponseHeaders());
//d($TradingService->GmtTimeToLocalTime($response->getItem()->getListingDetails()->getEndTime()));
//d($response->getItem()->getTitle());

