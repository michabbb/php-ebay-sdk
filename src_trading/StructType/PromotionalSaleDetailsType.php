<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalSaleDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: If a seller has reduced the price of a listed item with the Promotional Price Display feature, this type contains the original price of the discounted item and other information.
 * @subpackage Structs
 */
class PromotionalSaleDetailsType extends AbstractStructBase
{
    /**
     * The OriginalPrice
     * Meta informations extracted from the WSDL
     * - documentation: Original price of an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $OriginalPrice;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: Start time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: End time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionalSaleDetailsType
     * @uses PromotionalSaleDetailsType::setOriginalPrice()
     * @uses PromotionalSaleDetailsType::setStartTime()
     * @uses PromotionalSaleDetailsType::setEndTime()
     * @uses PromotionalSaleDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalPrice
     * @param string $startTime
     * @param string $endTime
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $originalPrice = null, $startTime = null, $endTime = null, \DOMDocument $any = null)
    {
        $this
            ->setOriginalPrice($originalPrice)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setAny($any);
    }
    /**
     * Get OriginalPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalPrice()
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setOriginalPrice(\macropage\ebaysdk\trading\StructType\AmountType $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
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
