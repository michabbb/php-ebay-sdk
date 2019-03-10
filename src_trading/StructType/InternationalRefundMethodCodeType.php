<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalRefundMethodCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling international returns.
 * @subpackage Structs
 */
class InternationalRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The InternationalRefundMethod
     * Meta informations extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalRefundMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalRefundMethodCodeType
     * @uses InternationalRefundMethodCodeType::setInternationalRefundMethod()
     * @uses InternationalRefundMethodCodeType::setAny()
     * @param string[] $internationalRefundMethod
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalRefundMethod = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalRefundMethod($internationalRefundMethod)
            ->setAny($any);
    }
    /**
     * Get InternationalRefundMethod value
     * @return string[]|null
     */
    public function getInternationalRefundMethod()
    {
        return $this->InternationalRefundMethod;
    }
    /**
     * Set InternationalRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalRefundMethod
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public function setInternationalRefundMethod(array $internationalRefundMethod = array())
    {
        $invalidValues = array();
        foreach ($internationalRefundMethod as $internationalRefundMethodCodeTypeInternationalRefundMethodItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($internationalRefundMethodCodeTypeInternationalRefundMethodItem)) {
                $invalidValues[] = var_export($internationalRefundMethodCodeTypeInternationalRefundMethodItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalRefundMethod = $internationalRefundMethod;
        return $this;
    }
    /**
     * Add item to InternationalRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public function addToInternationalRefundMethod($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalRefundMethod[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
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
