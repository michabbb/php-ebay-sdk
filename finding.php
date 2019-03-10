<?php

namespace macropage\ebaysdk\finding;

use macropage\ebaysdk\base\base;
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
		if (array_key_exists($api_endpoint, $this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: ' . $api_endpoint . ' available: ' . implode(',', array_keys($this->api_endpoints)));
		}
	}

	/**
	 * @param $obj
	 *
	 * @return mixed
	 *
	 * @see https://stackoverflow.com/a/39931047/1092858
	 * @see https://www.fischco.org/technica/2011/php-soap/
	 * @see https://stackoverflow.com/a/5602699/1092858
	 */
	private function addNamespaceToObjects($obj) {
		if (is_object($obj)) {
			foreach ((new \ReflectionObject($obj))->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
				$property_name = $property->name;
				if (is_object($obj->{$property->name})) {
					$obj->$property_name = new \SoapVar(self::addNamespaceToObjects($obj->{$property->name}), SOAP_ENC_OBJECT, null, null, null, $this->soap_namespace);
				} elseif (is_array($obj->{$property->name})) {
					$ArrayObject = new \ArrayObject();
					foreach ($obj->{$property->name} as $avalue) {
						$ArrayObject->append(self::addNamespaceToObjects($avalue));
					}
					$obj->$property_name = (array)$ArrayObject;
				} else {
					if ($obj->{$property->name}) {
						$obj->$property_name = new \SoapVar($obj->{$property->name}, XSD_STRING, null, null, null, $this->soap_namespace);
					}
				}
			}
		} else {
			return new \SoapVar($obj, XSD_STRING, null, null, null, $this->soap_namespace);
		}
		return $obj;
	}

	public function __call($name, $arguments) {
		if (is_object($arguments[0]) && strpos((string)$arguments[0],'Request')!==false) {
			$arguments[0] = $this->addNamespaceToObjects($arguments[0]);
		}
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