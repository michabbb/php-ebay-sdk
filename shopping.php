<?php
declare(strict_types=1);

namespace macropage\ebaysdk\shopping;


use macropage\ebaysdk\base\base;
use macropage\ebaysdk\shopping\ClassMap as ClassMapShoopingService;
use macropage\ebaysdk\shopping\ServiceType\Service as ShoppingService;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as AbstractSoapClientBaseAlias;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class shoppingervice
 * @package macropage\sdk_ebay_soap
 *
 *
 * @see grep --color=never "public function" src_shopping/ServiceType/* -R |grep --color=never Request |cut -d ":" -f 2|sed -E 's/\s+//'|sed 's/public function/* @method/' > shoppingmethods
 *
 * @method FindProducts(\macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest)
 * @method GetCategoryInfo(\macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest)
 * @method GetItemStatus(\macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest)
 * @method GetMultipleItems(\macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest)
 * @method GetShippingCosts(\macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest)
 * @method GetSingleItem(\macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest)
 * @method GetUserProfile(\macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest)
 * @method GeteBayTime(\macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest)

 */
class shopping extends base {

	private array $api_endpoints = [
		'live'    => 'https://open.api.ebay.com/shopping',
		'sandbox' => 'https://open.api.sandbox.ebay.com/shopping'
	];

	/**
	 * shopping constructor.
	 */
	public function __construct(string $api_endpoint = 'live', array $wsdlOptions = []) {

		$SoapServicoptions = [
			AbstractSoapClientBaseAlias::WSDL_URL        => __DIR__ . DIRECTORY_SEPARATOR . 'wsdl' . DIRECTORY_SEPARATOR . 'shopping.wsdl',
			AbstractSoapClientBaseAlias::WSDL_CLASSMAP   => ClassMapShoopingService::get(),
			AbstractSoapClientBaseAlias::WSDL_TRACE      => true,
			AbstractSoapClientBaseAlias::WSDL_CACHE_WSDL => WSDL_CACHE_BOTH,
		];

		$wsdlOptions = $this->overrideSoapWsdlOptions($SoapServicoptions, $wsdlOptions);

		$this->Service = new ShoppingService($wsdlOptions);

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
	}

	public function setApiEndpoint(string $api_endpoint): void
    {
		$this->api_endpoint = $api_endpoint;
	}

}
