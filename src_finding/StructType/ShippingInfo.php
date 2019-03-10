<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container holding the item's shipping details.
 * @subpackage Structs
 */
class ShippingInfo extends AbstractStructBase
{
    /**
     * The shippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: The basic shipping cost of the item. This reflects the domestic shipping cost or the international shipping costs, depending on which applies (that is, whether the bidder/buyer is in the same country as the listing site of the item).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $shippingServiceCost;
    /**
     * The shippingType
     * Meta informations extracted from the WSDL
     * - documentation: The shipping method that was used for determining the cost of shipping. For example: flat rate, calculated, or free. The seller specifies the available shipping services when they list the item. <dl> <dt> <strong>shippingType
     * values:</strong> </dt> <dt> Calculated </dt> <dd> The calculated shipping model: The posted cost of shipping is based on the buyer-selected shipping service, chosen by the buyer from the different shipping services offered by the seller. The shipping
     * costs are calculated by eBay and the shipping carrier, based on the buyer's address. Any packaging and handling costs established by the seller are automatically rolled into the total. </dd> <dt> CalculatedDomesticFlatInternational </dt> <dd> The
     * seller specified one or more calculated domestic shipping services and one or more flat international shipping services. </dd> <dt> Flat </dt> <dd> The flat-rate shipping model: The seller establishes the cost of shipping and any shipping insurance,
     * regardless of what any buyer-selected shipping service might charge the seller. </dd> <dt> FlatDomesticCalculatedInternational </dt> <dd> The seller specified one or more flat domestic shipping services and one or more calculated international
     * shipping services. </dd> <dt> Free </dt> <dd> Free is used when the seller has declared that shipping is free for the buyer. </dd> <dt> FreePickup </dt> <dd> No shipping available, the buyer must pick up the item from the seller. </dd> <dt> Freight
     * </dt> <dd> The freight shipping model: the cost of shipping is determined by a third party, FreightQuote.com, based on the buyer's address (postal code). </dd> <dt> FreightFlat </dt> <dd> The flat rate shipping model: the seller establishes the cost
     * of freight shipping and freight insurance, regardless of what any buyer-selected shipping service might charge the seller. </dd> <dt> NotSpecified </dt> <dd> The seller did not specify the shipping type. </dd> </dl>
     * - minOccurs: 0
     * @var string
     */
    public $shippingType;
    /**
     * The shipToLocations
     * Meta informations extracted from the WSDL
     * - documentation: An international location or region to which the seller is willing to ship the item. Only returned when the seller has specifically identified locations where she is willing to ship the given item. specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $shipToLocations;
    /**
     * The expeditedShipping
     * Meta informations extracted from the WSDL
     * - documentation: This is returned set to true if expedited shipping is available for the item.
     * - minOccurs: 0
     * @var bool
     */
    public $expeditedShipping;
    /**
     * The oneDayShippingAvailable
     * Meta informations extracted from the WSDL
     * - documentation: This is returned set to true if one-day shipping is available for the item.
     * - minOccurs: 0
     * @var bool
     */
    public $oneDayShippingAvailable;
    /**
     * The handlingTime
     * Meta informations extracted from the WSDL
     * - documentation: The number of days it will take the seller to ship this item.
     * - minOccurs: 0
     * @var int
     */
    public $handlingTime;
    /**
     * The intermediatedShipping
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $intermediatedShipping;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingInfo
     * @uses ShippingInfo::setShippingServiceCost()
     * @uses ShippingInfo::setShippingType()
     * @uses ShippingInfo::setShipToLocations()
     * @uses ShippingInfo::setExpeditedShipping()
     * @uses ShippingInfo::setOneDayShippingAvailable()
     * @uses ShippingInfo::setHandlingTime()
     * @uses ShippingInfo::setIntermediatedShipping()
     * @uses ShippingInfo::setDelimiter()
     * @uses ShippingInfo::setAny()
     * @param \macropage\ebaysdk\finding\StructType\Amount $shippingServiceCost
     * @param string $shippingType
     * @param string[] $shipToLocations
     * @param bool $expeditedShipping
     * @param bool $oneDayShippingAvailable
     * @param int $handlingTime
     * @param bool $intermediatedShipping
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\Amount $shippingServiceCost = null, $shippingType = null, array $shipToLocations = array(), $expeditedShipping = null, $oneDayShippingAvailable = null, $handlingTime = null, $intermediatedShipping = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingType($shippingType)
            ->setShipToLocations($shipToLocations)
            ->setExpeditedShipping($expeditedShipping)
            ->setOneDayShippingAvailable($oneDayShippingAvailable)
            ->setHandlingTime($handlingTime)
            ->setIntermediatedShipping($intermediatedShipping)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get shippingServiceCost value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }
    /**
     * Set shippingServiceCost value
     * @param \macropage\ebaysdk\finding\StructType\Amount $shippingServiceCost
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setShippingServiceCost(\macropage\ebaysdk\finding\StructType\Amount $shippingServiceCost = null)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get shippingType value
     * @return string|null
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }
    /**
     * Set shippingType value
     * @param string $shippingType
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setShippingType($shippingType = null)
    {
        // validation for constraint: string
        if (!is_null($shippingType) && !is_string($shippingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingType)), __LINE__);
        }
        $this->shippingType = $shippingType;
        return $this;
    }
    /**
     * Get shipToLocations value
     * @return string[]|null
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }
    /**
     * Set shipToLocations value
     * @throws \InvalidArgumentException
     * @param string[] $shipToLocations
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setShipToLocations(array $shipToLocations = array())
    {
        foreach ($shipToLocations as $shippingInfoShipToLocationsItem) {
            // validation for constraint: itemType
            if (!is_string($shippingInfoShipToLocationsItem)) {
                throw new \InvalidArgumentException(sprintf('The shipToLocations property can only contain items of string, "%s" given', is_object($shippingInfoShipToLocationsItem) ? get_class($shippingInfoShipToLocationsItem) : gettype($shippingInfoShipToLocationsItem)), __LINE__);
            }
        }
        $this->shipToLocations = $shipToLocations;
        return $this;
    }
    /**
     * Add item to shipToLocations value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function addToShipToLocations($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The shipToLocations property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipToLocations[] = $item;
        return $this;
    }
    /**
     * Get expeditedShipping value
     * @return bool|null
     */
    public function getExpeditedShipping()
    {
        return $this->expeditedShipping;
    }
    /**
     * Set expeditedShipping value
     * @param bool $expeditedShipping
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setExpeditedShipping($expeditedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($expeditedShipping) && !is_bool($expeditedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expeditedShipping)), __LINE__);
        }
        $this->expeditedShipping = $expeditedShipping;
        return $this;
    }
    /**
     * Get oneDayShippingAvailable value
     * @return bool|null
     */
    public function getOneDayShippingAvailable()
    {
        return $this->oneDayShippingAvailable;
    }
    /**
     * Set oneDayShippingAvailable value
     * @param bool $oneDayShippingAvailable
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setOneDayShippingAvailable($oneDayShippingAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($oneDayShippingAvailable) && !is_bool($oneDayShippingAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($oneDayShippingAvailable)), __LINE__);
        }
        $this->oneDayShippingAvailable = $oneDayShippingAvailable;
        return $this;
    }
    /**
     * Get handlingTime value
     * @return int|null
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }
    /**
     * Set handlingTime value
     * @param int $handlingTime
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setHandlingTime($handlingTime = null)
    {
        // validation for constraint: int
        if (!is_null($handlingTime) && !is_numeric($handlingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($handlingTime)), __LINE__);
        }
        $this->handlingTime = $handlingTime;
        return $this;
    }
    /**
     * Get intermediatedShipping value
     * @return bool|null
     */
    public function getIntermediatedShipping()
    {
        return $this->intermediatedShipping;
    }
    /**
     * Set intermediatedShipping value
     * @param bool $intermediatedShipping
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setIntermediatedShipping($intermediatedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($intermediatedShipping) && !is_bool($intermediatedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($intermediatedShipping)), __LINE__);
        }
        $this->intermediatedShipping = $intermediatedShipping;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\ShippingInfo::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
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
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo
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
