<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsShipmentPayeeCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the available options for who pays the return shipping costs for domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsShipmentPayeeCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsShipmentPayee
     * Meta informations extracted from the WSDL
     * - documentation: Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticReturnsShipmentPayee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsShipmentPayeeCodeType
     * @uses DomesticReturnsShipmentPayeeCodeType::setDomesticReturnsShipmentPayee()
     * @uses DomesticReturnsShipmentPayeeCodeType::setAny()
     * @param string[] $domesticReturnsShipmentPayee
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticReturnsShipmentPayee = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticReturnsShipmentPayee($domesticReturnsShipmentPayee)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsShipmentPayee value
     * @return string[]|null
     */
    public function getDomesticReturnsShipmentPayee()
    {
        return $this->DomesticReturnsShipmentPayee;
    }
    /**
     * Set DomesticReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticReturnsShipmentPayee
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public function setDomesticReturnsShipmentPayee(array $domesticReturnsShipmentPayee = array())
    {
        $invalidValues = array();
        foreach ($domesticReturnsShipmentPayee as $domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem)) {
                $invalidValues[] = var_export($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsShipmentPayee = $domesticReturnsShipmentPayee;
        return $this;
    }
    /**
     * Add item to DomesticReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public function addToDomesticReturnsShipmentPayee($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsShipmentPayee[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
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
