<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalShippingServiceOptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to an international shipping service. If one or more international shipping services are provided, the seller must specify at least one domestic shipping service as
 * well.
 * @subpackage Structs
 */
class InternationalShippingServiceOptionsType extends AbstractStructBase
{
    /**
     * The ShippingService
     * Meta informations extracted from the WSDL
     * - documentation: An international shipping service being offered by the seller to ship an item to a buyer. For a list of valid values, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>. <br/><br/> To view the full
     * list of International shipping service options in the response, look for the <b>ShippingService</b> fields in the <b>ShippingServiceDetails</b> containers that contain a <b>InternationalService</b> = <code>true</code> field, as this indicates that
     * the <b>ShippingService</b> value is an International shipping service option. <br/><br/> The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot
     * be offered to buyers through a listing. <br><br> For flat and calculated shipping.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: The base cost of shipping the item using the shipping service specified in the <b>ShippingService</b> field. In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field shows the cost to
     * ship each additional item if the buyer purchases multiple quantity of the same line item. <br> <br> When returned by <b>GetItemShipping</b>, it includes the packaging and handling cost. For flat and calculated shipping. <br> <br> If a shipping
     * service has been specified (even LocalPickup), <b>GetItem</b> returns the shipping service cost, even if the cost is zero. Otherwise, cost is not returned. <br> <br> If this is for calculated shipping for a listing that has not yet ended, note that
     * the cost cannot be determined until the listing has ended and the buyer has specified a postal code. <br> <br> For <b>GetItemShipping</b>, promotional shipping savings is reflected in the cost, if applicable. If the promotional shipping option is
     * lower than other shipping services being offered, the savings is reflected in the returned shipping cost. The shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services. If
     * the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list. (The LOWEST shipping service cost is always presented first, regardless of whether there is promotional shipping.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a
     * shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> if the seller wants
     * to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not
     * applicable for single-quantity listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingServicePriority
     * Meta informations extracted from the WSDL
     * - documentation: This integer value controls the order (relative to other shipping services) in which the corresponding <b>ShippingService</b> will appear in the View Item and Checkout page. Sellers can specify up to five international shipping
     * services (with five <b>InternationalShippingServiceOption</b> containers), so valid values are 1, 2, 3, 4, and 5. A shipping service with a <b>ShippingServicePriority</b> value of <code>1</code> appears at the top. Conversely, a shipping service with
     * a <b>ShippingServicePriority</b> value of 5 appears at the bottom of a list of five shipping service options. If the Global Shipping Program is enabled on the listing for international shipping, only four additional shipping services may be
     * specified. <br><br> This field is applicable to Flat and Calculated shipping.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ShipToLocation
     * Meta informations extracted from the WSDL
     * - documentation: An international location or region to where the item seller will ship the item. <br/><br/> Use <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingLocationDetails</b> to determine which locations are valid per site. In
     * the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields. <br/><br/> For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified. <br><br> <b>For
     * GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a
     * Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipToLocation;
    /**
     * The ShippingInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: The insurance cost associated with shipping a single item with this shipping service. Exception: for <b>GetItemShipping</b>, this is proportional to <b>QuantitySold</b>. If the item has not yet been sold, insurance information cannot
     * be calculated and the value is 0.00. For calculated shipping only. <br><br> Valid only on the following sites: AU, FR, and IT
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The ImportCharge
     * Meta informations extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ImportCharge;
    /**
     * The ShippingServiceCutOffTime
     * Meta informations extracted from the WSDL
     * - documentation: The last time of day that an order using the specified shipping service will be accepted by the seller. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying
     * time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>. <br><br> The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCutOffTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalShippingServiceOptionsType
     * @uses InternationalShippingServiceOptionsType::setShippingService()
     * @uses InternationalShippingServiceOptionsType::setShippingServiceCost()
     * @uses InternationalShippingServiceOptionsType::setShippingServiceAdditionalCost()
     * @uses InternationalShippingServiceOptionsType::setShippingServicePriority()
     * @uses InternationalShippingServiceOptionsType::setShipToLocation()
     * @uses InternationalShippingServiceOptionsType::setShippingInsuranceCost()
     * @uses InternationalShippingServiceOptionsType::setImportCharge()
     * @uses InternationalShippingServiceOptionsType::setShippingServiceCutOffTime()
     * @uses InternationalShippingServiceOptionsType::setAny()
     * @param string $shippingService
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @param int $shippingServicePriority
     * @param string[] $shipToLocation
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @param string $shippingServiceCutOffTime
     * @param \DOMDocument $any
     */
    public function __construct($shippingService = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null, $shippingServicePriority = null, array $shipToLocation = array(), \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null, \macropage\ebaysdk\trading\StructType\AmountType $importCharge = null, $shippingServiceCutOffTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingService($shippingService)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingServicePriority($shippingServicePriority)
            ->setShipToLocation($shipToLocation)
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setImportCharge($importCharge)
            ->setShippingServiceCutOffTime($shippingServiceCutOffTime)
            ->setAny($any);
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingServiceAdditionalCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority()
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingServicePriority($shippingServicePriority = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !is_numeric($shippingServicePriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        return $this;
    }
    /**
     * Get ShipToLocation value
     * @return string[]|null
     */
    public function getShipToLocation()
    {
        return $this->ShipToLocation;
    }
    /**
     * Set ShipToLocation value
     * @throws \InvalidArgumentException
     * @param string[] $shipToLocation
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShipToLocation(array $shipToLocation = array())
    {
        foreach ($shipToLocation as $internationalShippingServiceOptionsTypeShipToLocationItem) {
            // validation for constraint: itemType
            if (!is_string($internationalShippingServiceOptionsTypeShipToLocationItem)) {
                throw new \InvalidArgumentException(sprintf('The ShipToLocation property can only contain items of string, "%s" given', is_object($internationalShippingServiceOptionsTypeShipToLocationItem) ? get_class($internationalShippingServiceOptionsTypeShipToLocationItem) : gettype($internationalShippingServiceOptionsTypeShipToLocationItem)), __LINE__);
            }
        }
        $this->ShipToLocation = $shipToLocation;
        return $this;
    }
    /**
     * Add item to ShipToLocation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function addToShipToLocation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ShipToLocation property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipToLocation[] = $item;
        return $this;
    }
    /**
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingInsuranceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getImportCharge()
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setImportCharge(\macropage\ebaysdk\trading\StructType\AmountType $importCharge = null)
    {
        $this->ImportCharge = $importCharge;
        return $this;
    }
    /**
     * Get ShippingServiceCutOffTime value
     * @return string|null
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->ShippingServiceCutOffTime;
    }
    /**
     * Set ShippingServiceCutOffTime value
     * @param string $shippingServiceCutOffTime
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setShippingServiceCutOffTime($shippingServiceCutOffTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceCutOffTime) && !is_string($shippingServiceCutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceCutOffTime)), __LINE__);
        }
        $this->ShippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
