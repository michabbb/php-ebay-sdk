<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsShipmentPayeeCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the available options for who pays the return shipping costs for international returns.
 * @subpackage Structs
 */
class InternationalReturnsShipmentPayeeCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsShipmentPayee
     * Meta informations extracted from the WSDL
     * - documentation: Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalReturnsShipmentPayee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalReturnsShipmentPayeeCodeType
     * @uses InternationalReturnsShipmentPayeeCodeType::setInternationalReturnsShipmentPayee()
     * @uses InternationalReturnsShipmentPayeeCodeType::setAny()
     * @param string[] $internationalReturnsShipmentPayee
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalReturnsShipmentPayee = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsShipmentPayee value
     * @return string[]|null
     */
    public function getInternationalReturnsShipmentPayee()
    {
        return $this->InternationalReturnsShipmentPayee;
    }
    /**
     * Set InternationalReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalReturnsShipmentPayee
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function setInternationalReturnsShipmentPayee(array $internationalReturnsShipmentPayee = array())
    {
        $invalidValues = array();
        foreach ($internationalReturnsShipmentPayee as $internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem)) {
                $invalidValues[] = var_export($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsShipmentPayee = $internationalReturnsShipmentPayee;
        return $this;
    }
    /**
     * Add item to InternationalReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function addToInternationalReturnsShipmentPayee($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsShipmentPayee[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
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
