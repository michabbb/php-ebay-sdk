<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShipmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about the shipping service, cost, address, and delivery estimates for the domestic leg of a Global Shipping Program shipment. This type is only applicable for international shipments using the GSP
 * program.
 * @subpackage Structs
 */
class MultiLegShipmentType extends AbstractStructBase
{
    /**
     * The ShippingServiceDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
     */
    public $ShippingServiceDetails;
    /**
     * The ShipToAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique
     * identifier for the order.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The ShippingTimeMin
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShipmentType
     * @uses MultiLegShipmentType::setShippingServiceDetails()
     * @uses MultiLegShipmentType::setShipToAddress()
     * @uses MultiLegShipmentType::setShippingTimeMin()
     * @uses MultiLegShipmentType::setShippingTimeMax()
     * @uses MultiLegShipmentType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipToAddress
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails = null, \macropage\ebaysdk\trading\StructType\AddressType $shipToAddress = null, $shippingTimeMin = null, $shippingTimeMax = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingServiceDetails($shippingServiceDetails)
            ->setShipToAddress($shipToAddress)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setAny($any);
    }
    /**
     * Get ShippingServiceDetails value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType|null
     */
    public function getShippingServiceDetails()
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * Set ShippingServiceDetails value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingServiceDetails(\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails = null)
    {
        $this->ShippingServiceDetails = $shippingServiceDetails;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipToAddress
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShipToAddress(\macropage\ebaysdk\trading\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin()
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingTimeMin($shippingTimeMin = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !is_numeric($shippingTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax()
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingTimeMax($shippingTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !is_numeric($shippingTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MultiLegShipmentType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
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
