<?php

namespace macropage\ebaysdk\finding;

use macropage\ebaysdk\base\base;
use macropage\ebaysdk\base\soap_client_finding;
use macropage\ebaysdk\finding\ClassMap as ClassMapfindingService;
use macropage\ebaysdk\finding\ServiceType as EbayfindingSerice;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as SoapClientBase;

/**
 * Class findingservice
 * @package macropage\sdk_ebay_soap
 *
 * @method getSearchKeywordsRecommendation(\macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationRequest $messageParameters)
 * @method findItemsByKeywords(\macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest $messageParameters)
 * @method findItemsByCategory(\macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest $messageParameters)
 * @method findItemsAdvanced(\macropage\ebaysdk\finding\StructType\FindItemsAdvancedRequest $messageParameters)
 * @method findItemsByProduct(\macropage\ebaysdk\finding\StructType\FindItemsByProductRequest $messageParameters)
 * @method findItemsIneBayStores(\macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest $messageParameters)
 * @method findItemsByImage(\macropage\ebaysdk\finding\StructType\FindItemsByImageRequest $messageParameters)
 * @method getHistograms(\macropage\ebaysdk\finding\StructType\GetHistogramsRequest $messageParameters)
 * @method findCompletedItems(\macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest $messageParameters)
 * @method getVersion(\macropage\ebaysdk\finding\StructType\GetVersionRequest $messageParameters)
 * @method findItemsForFavoriteSearch(\macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest $messageParameters)
 *
 */
class finding extends base {

	/**
	 * @var array
	 */
	private $SoapServicoptions;
	private $soap_namespace = 'http://www.ebay.com/marketplace/search/v1/services';

	private $api_endpoints = [
		'live'    => 'https://svcs.ebay.com/services/search/FindingService/v1',
		'sandbox' => 'https://svcs.sandbox.ebay.com/services/search/FindingService/v1'
	];

	public function __construct(array $wsdlOptions = [], $api_endpoint = 'live') {
		$this->SoapServicoptions = [
			SoapClientBase::WSDL_URL        => 'https://developer.ebay.com/webservices/Finding/latest/FindingService.wsdl',
			SoapClientBase::WSDL_CLASSMAP   => ClassMapfindingService::get(),
			SoapClientBase::WSDL_TRACE      => true,
			SoapClientBase::WSDL_CACHE_WSDL => WSDL_CACHE_BOTH,
		];

		$wsdlOptions = $this->overrideSoapWsdlOptions($this->SoapServicoptions, $wsdlOptions);
		$this->Service = new EbayfindingSerice\Service($wsdlOptions);
		$SpecialSoapClientForFinding = new soap_client_finding($this->SoapServicoptions['wsdl_url'], $wsdlOptions);
		$this->Service->setSoapClient($SpecialSoapClientForFinding);
		if (array_key_exists($api_endpoint, $this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: ' . $api_endpoint . ' available: ' . implode(',', array_keys($this->api_endpoints)));
		}
	}

	public function __call($name, $arguments) {
		return $this->call($name, $arguments);
	}

	/**
	 * @param $appid
	 * @param $devid
	 * @param $authtoken
	 */
	public function setCredentials($appid) {
		$this->appid = $appid;
		$this->Service->setHttpHeader('X-EBAY-SOA-SECURITY-APPNAME', $appid);
	}

	/**
	 * @param mixed $api_endpoint
	 */
	public function setApiEndpoint($api_endpoint) {
		$this->api_endpoint = $api_endpoint;
	}

}
