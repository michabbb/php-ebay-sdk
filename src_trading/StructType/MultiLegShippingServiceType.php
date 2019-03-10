<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingServiceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
 * @subpackage Structs
 */
class MultiLegShippingServiceType extends AbstractStructBase
{
    /**
     * The ShippingService
     * Meta informations extracted from the WSDL
     * - documentation: The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international
     * shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The TotalShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalShippingCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShippingServiceType
     * @uses MultiLegShippingServiceType::setShippingService()
     * @uses MultiLegShippingServiceType::setTotalShippingCost()
     * @uses MultiLegShippingServiceType::setAny()
     * @param string $shippingService
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost
     * @param \DOMDocument $any
     */
    public function __construct($shippingService = null, \macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingService($shippingService)
            ->setTotalShippingCost($totalShippingCost)
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
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
     * Get TotalShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalShippingCost()
    {
        return $this->TotalShippingCost;
    }
    /**
     * Set TotalShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
     */
    public function setTotalShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost = null)
    {
        $this->TotalShippingCost = $totalShippingCost;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
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
