<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticRefundMethodCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling domestic returns.
 * @subpackage Structs
 */
class DomesticRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The DomesticRefundMethod
     * Meta informations extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticRefundMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticRefundMethodCodeType
     * @uses DomesticRefundMethodCodeType::setDomesticRefundMethod()
     * @uses DomesticRefundMethodCodeType::setAny()
     * @param string[] $domesticRefundMethod
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticRefundMethod = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticRefundMethod($domesticRefundMethod)
            ->setAny($any);
    }
    /**
     * Get DomesticRefundMethod value
     * @return string[]|null
     */
    public function getDomesticRefundMethod()
    {
        return $this->DomesticRefundMethod;
    }
    /**
     * Set DomesticRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticRefundMethod
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public function setDomesticRefundMethod(array $domesticRefundMethod = array())
    {
        $invalidValues = array();
        foreach ($domesticRefundMethod as $domesticRefundMethodCodeTypeDomesticRefundMethodItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($domesticRefundMethodCodeTypeDomesticRefundMethodItem)) {
                $invalidValues[] = var_export($domesticRefundMethodCodeTypeDomesticRefundMethodItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticRefundMethod = $domesticRefundMethod;
        return $this;
    }
    /**
     * Add item to DomesticRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public function addToDomesticRefundMethod($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticRefundMethod[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
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
