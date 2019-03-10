<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingEstimatedDeliveryInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is not currently in use.
 * @subpackage Structs
 */
class ShippingEstimatedDeliveryInfoType extends AbstractStructBase
{
    /**
     * The OriginalDeliveryEstimatedTimeMin
     * Meta informations extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDeliveryEstimatedTimeMin;
    /**
     * The OriginalDeliveryEstimatedTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDeliveryEstimatedTimeMax;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingEstimatedDeliveryInfoType
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMin()
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMax()
     * @uses ShippingEstimatedDeliveryInfoType::setAny()
     * @param string $originalDeliveryEstimatedTimeMin
     * @param string $originalDeliveryEstimatedTimeMax
     * @param \DOMDocument $any
     */
    public function __construct($originalDeliveryEstimatedTimeMin = null, $originalDeliveryEstimatedTimeMax = null, \DOMDocument $any = null)
    {
        $this
            ->setOriginalDeliveryEstimatedTimeMin($originalDeliveryEstimatedTimeMin)
            ->setOriginalDeliveryEstimatedTimeMax($originalDeliveryEstimatedTimeMax)
            ->setAny($any);
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMin value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMin()
    {
        return $this->OriginalDeliveryEstimatedTimeMin;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMin value
     * @param string $originalDeliveryEstimatedTimeMin
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMin($originalDeliveryEstimatedTimeMin = null)
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMin) && !is_string($originalDeliveryEstimatedTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDeliveryEstimatedTimeMin)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMin = $originalDeliveryEstimatedTimeMin;
        return $this;
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMax value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMax()
    {
        return $this->OriginalDeliveryEstimatedTimeMax;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMax value
     * @param string $originalDeliveryEstimatedTimeMax
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMax($originalDeliveryEstimatedTimeMax = null)
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMax) && !is_string($originalDeliveryEstimatedTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDeliveryEstimatedTimeMax)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMax = $originalDeliveryEstimatedTimeMax;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
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
