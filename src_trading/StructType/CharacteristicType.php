<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeID;
    /**
     * The DateFormat
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DateFormat;
    /**
     * The DisplaySequence
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplaySequence;
    /**
     * The DisplayUOM
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayUOM;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LabelType
     */
    public $Label;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
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
     * Constructor method for CharacteristicType
     * @uses CharacteristicType::setAttributeID()
     * @uses CharacteristicType::setDateFormat()
     * @uses CharacteristicType::setDisplaySequence()
     * @uses CharacteristicType::setDisplayUOM()
     * @uses CharacteristicType::setLabel()
     * @uses CharacteristicType::setSortOrder()
     * @uses CharacteristicType::setValueList()
     * @uses CharacteristicType::setAny()
     * @param int $attributeID
     * @param string $dateFormat
     * @param string $displaySequence
     * @param string $displayUOM
     * @param \macropage\ebaysdk\trading\StructType\LabelType $label
     * @param string $sortOrder
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @param \DOMDocument $any
     */
    public function __construct($attributeID = null, $dateFormat = null, $displaySequence = null, $displayUOM = null, \macropage\ebaysdk\trading\StructType\LabelType $label = null, $sortOrder = null, array $valueList = array(), \DOMDocument $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateFormat($dateFormat)
            ->setDisplaySequence($displaySequence)
            ->setDisplayUOM($displayUOM)
            ->setLabel($label)
            ->setSortOrder($sortOrder)
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
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
     * Get DateFormat value
     * @return string|null
     */
    public function getDateFormat()
    {
        return $this->DateFormat;
    }
    /**
     * Set DateFormat value
     * @param string $dateFormat
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDateFormat($dateFormat = null)
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateFormat)), __LINE__);
        }
        $this->DateFormat = $dateFormat;
        return $this;
    }
    /**
     * Get DisplaySequence value
     * @return string|null
     */
    public function getDisplaySequence()
    {
        return $this->DisplaySequence;
    }
    /**
     * Set DisplaySequence value
     * @param string $displaySequence
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDisplaySequence($displaySequence = null)
    {
        // validation for constraint: string
        if (!is_null($displaySequence) && !is_string($displaySequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displaySequence)), __LINE__);
        }
        $this->DisplaySequence = $displaySequence;
        return $this;
    }
    /**
     * Get DisplayUOM value
     * @return string|null
     */
    public function getDisplayUOM()
    {
        return $this->DisplayUOM;
    }
    /**
     * Set DisplayUOM value
     * @param string $displayUOM
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDisplayUOM($displayUOM = null)
    {
        // validation for constraint: string
        if (!is_null($displayUOM) && !is_string($displayUOM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayUOM)), __LINE__);
        }
        $this->DisplayUOM = $displayUOM;
        return $this;
    }
    /**
     * Get Label value
     * @return \macropage\ebaysdk\trading\StructType\LabelType|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \macropage\ebaysdk\trading\StructType\LabelType $label
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setLabel(\macropage\ebaysdk\trading\StructType\LabelType $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setValueList(array $valueList = array())
    {
        foreach ($valueList as $characteristicTypeValueListItem) {
            // validation for constraint: itemType
            if (!$characteristicTypeValueListItem instanceof \macropage\ebaysdk\trading\StructType\ValType) {
                throw new \InvalidArgumentException(sprintf('The ValueList property can only contain items of \macropage\ebaysdk\trading\StructType\ValType, "%s" given', is_object($characteristicTypeValueListItem) ? get_class($characteristicTypeValueListItem) : gettype($characteristicTypeValueListItem)), __LINE__);
            }
        }
        $this->ValueList = $valueList;
        return $this;
    }
    /**
     * Add item to ValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
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
     * @uses \macropage\ebaysdk\trading\StructType\CharacteristicType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
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
