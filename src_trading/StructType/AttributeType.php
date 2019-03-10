<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * @subpackage Structs
 */
class AttributeType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValType[]
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeID
     * Meta informations extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * @var int
     */
    public $attributeID;
    /**
     * The attributeLabel
     * Meta informations extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * @var string
     */
    public $attributeLabel;
    /**
     * Constructor method for AttributeType
     * @uses AttributeType::setValue()
     * @uses AttributeType::setAny()
     * @uses AttributeType::setAttributeID()
     * @uses AttributeType::setAttributeLabel()
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $value
     * @param \DOMDocument $any
     * @param int $attributeID
     * @param string $attributeLabel
     */
    public function __construct(array $value = array(), \DOMDocument $any = null, $attributeID = null, $attributeLabel = null)
    {
        $this
            ->setValue($value)
            ->setAny($any)
            ->setAttributeID($attributeID)
            ->setAttributeLabel($attributeLabel);
    }
    /**
     * Get Value value
     * @return \macropage\ebaysdk\trading\StructType\ValType[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $value
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $attributeTypeValueItem) {
            // validation for constraint: itemType
            if (!$attributeTypeValueItem instanceof \macropage\ebaysdk\trading\StructType\ValType) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of \macropage\ebaysdk\trading\StructType\ValType, "%s" given', is_object($attributeTypeValueItem) ? get_class($attributeTypeValueItem) : gettype($attributeTypeValueItem)), __LINE__);
            }
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType $item
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
     */
    public function addToValue(\macropage\ebaysdk\trading\StructType\ValType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ValType) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of \macropage\ebaysdk\trading\StructType\ValType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AttributeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get attributeID value
     * @return int|null
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }
    /**
     * Set attributeID value
     * @param int $attributeID
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !is_numeric($attributeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeID)), __LINE__);
        }
        $this->attributeID = $attributeID;
        return $this;
    }
    /**
     * Get attributeLabel value
     * @return string|null
     */
    public function getAttributeLabel()
    {
        return $this->attributeLabel;
    }
    /**
     * Set attributeLabel value
     * @param string $attributeLabel
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
     */
    public function setAttributeLabel($attributeLabel = null)
    {
        // validation for constraint: string
        if (!is_null($attributeLabel) && !is_string($attributeLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attributeLabel)), __LINE__);
        }
        $this->attributeLabel = $attributeLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AttributeType
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
