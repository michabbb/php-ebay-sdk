<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAttributesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchAttributesType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeID;
    /**
     * The DateSpecifier
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DateSpecifier;
    /**
     * The RangeSpecifier
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RangeSpecifier;
    /**
     * The ValueList
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValType[]
     */
    public $ValueList;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SearchAttributesType
     * @uses SearchAttributesType::setAttributeID()
     * @uses SearchAttributesType::setDateSpecifier()
     * @uses SearchAttributesType::setRangeSpecifier()
     * @uses SearchAttributesType::setValueList()
     * @uses SearchAttributesType::setAny()
     * @param int $attributeID
     * @param string $dateSpecifier
     * @param string $rangeSpecifier
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @param \DOMDocument $any
     */
    public function __construct($attributeID = null, $dateSpecifier = null, $rangeSpecifier = null, array $valueList = array(), \DOMDocument $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateSpecifier($dateSpecifier)
            ->setRangeSpecifier($rangeSpecifier)
            ->setValueList($valueList)
            ->setAny($any);
    }
    /**
     * Get AttributeID value
     * @return int|null
     */
    public function getAttributeID()
    {
        return $this->AttributeID;
    }
    /**
     * Set AttributeID value
     * @param int $attributeID
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !is_numeric($attributeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeID)), __LINE__);
        }
        $this->AttributeID = $attributeID;
        return $this;
    }
    /**
     * Get DateSpecifier value
     * @return string|null
     */
    public function getDateSpecifier()
    {
        return $this->DateSpecifier;
    }
    /**
     * Set DateSpecifier value
     * @uses \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dateSpecifier
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setDateSpecifier($dateSpecifier = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::valueIsValid($dateSpecifier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dateSpecifier, implode(', ', \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::getValidValues())), __LINE__);
        }
        $this->DateSpecifier = $dateSpecifier;
        return $this;
    }
    /**
     * Get RangeSpecifier value
     * @return string|null
     */
    public function getRangeSpecifier()
    {
        return $this->RangeSpecifier;
    }
    /**
     * Set RangeSpecifier value
     * @uses \macropage\ebaysdk\trading\EnumType\RangeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RangeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rangeSpecifier
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setRangeSpecifier($rangeSpecifier = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RangeCodeType::valueIsValid($rangeSpecifier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rangeSpecifier, implode(', ', \macropage\ebaysdk\trading\EnumType\RangeCodeType::getValidValues())), __LINE__);
        }
        $this->RangeSpecifier = $rangeSpecifier;
        return $this;
    }
    /**
     * Get ValueList value
     * @return \macropage\ebaysdk\trading\StructType\ValType[]|null
     */
    public function getValueList()
    {
        return $this->ValueList;
    }
    /**
     * Set ValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setValueList(array $valueList = array())
    {
        foreach ($valueList as $searchAttributesTypeValueListItem) {
            // validation for constraint: itemType
            if (!$searchAttributesTypeValueListItem instanceof \macropage\ebaysdk\trading\StructType\ValType) {
                throw new \InvalidArgumentException(sprintf('The ValueList property can only contain items of \macropage\ebaysdk\trading\StructType\ValType, "%s" given', is_object($searchAttributesTypeValueListItem) ? get_class($searchAttributesTypeValueListItem) : gettype($searchAttributesTypeValueListItem)), __LINE__);
            }
        }
        $this->ValueList = $valueList;
        return $this;
    }
    /**
     * Add item to ValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType $item
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function addToValueList(\macropage\ebaysdk\trading\StructType\ValType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ValType) {
            throw new \InvalidArgumentException(sprintf('The ValueList property can only contain items of \macropage\ebaysdk\trading\StructType\ValType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValueList[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SearchAttributesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
