<?php
declare(strict_types=1);

namespace macropage\ebaysdk\finding;

use macropage\ebaysdk\base\base;
use macropage\ebaysdk\base\soap_client_finding;
use macropage\ebaysdk\finding\ClassMap as ClassMapfindingService;
use macropage\ebaysdk\finding\ServiceType\Service as EbayFindingService;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as SoapClientBase;

/**
 * Class findingservice
 * @package macropage\sdk_ebay_soap
 *
 * @see grep --color=never "public function" src_finding/ServiceType/* -R |grep --color=never Request |cut -d ":" -f 2|sed -E 's/\s+//'|sed 's/public function/* @method/' > findingmethods
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

	private array $api_endpoints = [
		'live'    => 'https://svcs.ebay.com/services/search/FindingService/v1',
		'sandbox' => 'https://svcs.sandbox.ebay.com/services/search/FindingService/v1'
	];

    /**
     * @throws SoapFault
     */
    public function __construct(array $wsdlOptions = [], $api_endpoint = 'live') {
		$SoapServicoptions = [
			SoapClientBase::WSDL_URL                => __DIR__ . DIRECTORY_SEPARATOR . 'wsdl' . DIRECTORY_SEPARATOR . 'finding.wsdl',
			SoapClientBase::WSDL_CLASSMAP           => ClassMapfindingService::get(),
			SoapClientBase::WSDL_TRACE              => true,
			SoapClientBase::WSDL_CACHE_WSDL         => WSDL_CACHE_BOTH,
			SoapClientBase::WSDL_CONNECTION_TIMEOUT => 180,
			SoapClientBase::WSDL_COMPRESSION        => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
			SoapClientBase::WSDL_STREAM_CONTEXT     => stream_context_create([
																				 'ssl' => [
																					 'verify_peer'       => false,
																					 'verify_host'       => false,
																					 'allow_self_signed' => true,
																				 ]
																			 ])
		];

		$wsdlOptions = $this->overrideSoapWsdlOptions($SoapServicoptions, $wsdlOptions);
		$this->Service = new EbayFindingService($wsdlOptions);
		$SpecialSoapClientForFinding = new soap_client_finding($SoapServicoptions['wsdl_url'], $wsdlOptions);
		$this->Service->setSoapClient($SpecialSoapClientForFinding);
		if (array_key_exists($api_endpoint, $this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: ' . $api_endpoint . ' available: ' . implode(',', array_keys($this->api_endpoints)));
		}
	}

    /**
     * @throws SoapFault
     */
    public function __call($name, $arguments) {
		return $this->call($name, $arguments);
	}

	public function setCredentials(string $appid): void
    {
		$this->appid = $appid;
		$this->Service->setHttpHeader('X-EBAY-SOA-SECURITY-APPNAME', $appid);
	}

	public function setApiEndpoint(string $api_endpoint): void
    {
		$this->api_endpoint = $api_endpoint;
	}

}
