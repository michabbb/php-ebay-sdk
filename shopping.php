<?php

namespace macropage\ebaysdk\shopping;


use macropage\ebaysdk\base\base;
use macropage\ebaysdk\shopping\ClassMap as ClassMapShoopingService;
use macropage\ebaysdk\shopping\ServiceType\Find as ShoppingServiceFind;
use macropage\ebaysdk\shopping\ServiceType\Gete as ShoppingServiceGete;
use macropage\ebaysdk\shopping\ServiceType\Get as ShoppingServiceGet;
use ReflectionClass;
use ReflectionMethod;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as AbstractSoapClientBaseAlias;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class shoppingervice
 * @package macropage\sdk_ebay_soap
 *
 *
 * @see     grep "public function" src_shopping/ServiceType/* -R |grep Request |cut -d ":" -f 2|sed -E 's/\s+//'|sed 's/public function/@method/'
 *
 * @method FindProducts(\macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest)
 * @method GeteBayTime(\macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest)
 * @method GetCategoryInfo(\macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest)
 * @method GetItemStatus(\macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest)
 * @method GetMultipleItems(\macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest)
 * @method GetShippingCosts(\macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest)
 * @method GetSingleItem(\macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest)
 * @method GetUserProfile(\macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest)
 */
class shopping extends base {

	/**
	 * @var array
	 */
	private $SoapServicoptions;

	private $api_endpoints = [
		'live'    => 'http://open.api.ebay.com/shopping',
		'sandbox' => 'http://open.api.sandbox.ebay.com/shopping'
	];

	private $ServiceClasses              = [];
	private $ServiceClasseMethodsMapping = [];

	/**
	 * shopping constructor.
	 *
	 * @param array  $wsdlOptions
	 * @param string $api_endpoint
	 * @param string $Service
	 *
	 * @throws \ReflectionException
	 */
	public function __construct($api_endpoint = 'live', array $wsdlOptions = []) {

		$this->SoapServicoptions = [
			AbstractSoapClientBaseAlias::WSDL_URL        => __DIR__ . DIRECTORY_SEPARATOR . 'wsdl' . DIRECTORY_SEPARATOR . 'shopping.wsdl',
			AbstractSoapClientBaseAlias::WSDL_CLASSMAP   => ClassMapShoopingService::get(),
			AbstractSoapClientBaseAlias::WSDL_TRACE      => true,
			AbstractSoapClientBaseAlias::WSDL_CACHE_WSDL => WSDL_CACHE_BOTH,
		];

		$wsdlOptions = $this->overrideSoapWsdlOptions($this->SoapServicoptions, $wsdlOptions);

		$this->ServiceClasses = [
			'macropage\ebaysdk\shopping\ServiceType\Find' => new ShoppingServiceFind($wsdlOptions),
			'macropage\ebaysdk\shopping\ServiceType\Get'  => new ShoppingServiceGet($wsdlOptions),
			'macropage\ebaysdk\shopping\ServiceType\Gete' => new ShoppingServiceGete($wsdlOptions)
		];

		/**
		 * get all public methods and find matching service class
		 */
		foreach ($this->ServiceClasses as $serviceClass) {
			$class   = new ReflectionClass($serviceClass);
			$methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);
			foreach ($methods as $method) {
				if (strpos($method->class, 'Abstract') === false) {
					if (!in_array($method->name, ['__toString', 'getResult'])) {
						$this->ServiceClasseMethodsMapping[$method->name] = $method->class;
					}
				}
			}
		}

		if (array_key_exists($api_endpoint, $this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: ' . $api_endpoint . ' available: ' . implode(',', array_keys($this->api_endpoints)));
		}
	}

	public function __call($name, $arguments) {

		if (!array_key_exists($name, $this->ServiceClasseMethodsMapping)) {
			throw new \RuntimeException('unknown method: ' . $name);
		}
		$this->Service = $this->ServiceClasses[$this->ServiceClasseMethodsMapping[$name]];

		return $this->call($name, $arguments);
	}

	/**
	 * @param $appid
	 * @param $devid
	 * @param $authtoken
	 */
	public function setCredentials($appid) {
		$this->appid = $appid;
	}

	/**
	 * @param mixed $api_endpoint
	 */
	public function setApiEndpoint($api_endpoint) {
		$this->api_endpoint = $api_endpoint;
	}

}
