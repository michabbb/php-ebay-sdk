<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsDurationCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the available options for the return durations for domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsDurationCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsDuration
     * Meta informations extracted from the WSDL
     * - documentation: Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticReturnsDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsDurationCodeType
     * @uses DomesticReturnsDurationCodeType::setDomesticReturnsDuration()
     * @uses DomesticReturnsDurationCodeType::setAny()
     * @param string[] $domesticReturnsDuration
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticReturnsDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticReturnsDuration($domesticReturnsDuration)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsDuration value
     * @return string[]|null
     */
    public function getDomesticReturnsDuration()
    {
        return $this->DomesticReturnsDuration;
    }
    /**
     * Set DomesticReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticReturnsDuration
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
     */
    public function setDomesticReturnsDuration(array $domesticReturnsDuration = array())
    {
        $invalidValues = array();
        foreach ($domesticReturnsDuration as $domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem)) {
                $invalidValues[] = var_export($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsDuration = $domesticReturnsDuration;
        return $this;
    }
    /**
     * Add item to DomesticReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
     */
    public function addToDomesticReturnsDuration($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsDuration[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
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
