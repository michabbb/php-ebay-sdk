<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class AttributeSetType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    public $Attribute;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $attributeSetID;
    /**
     * The attributeSetVersion
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string
     */
    public $attributeSetVersion;
    /**
     * Constructor method for AttributeSetType
     * @uses AttributeSetType::setAttribute()
     * @uses AttributeSetType::setAny()
     * @uses AttributeSetType::setAttributeSetID()
     * @uses AttributeSetType::setAttributeSetVersion()
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @param \DOMDocument $any
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     */
    public function __construct(array $attribute = array(), \DOMDocument $any = null, $attributeSetID = null, $attributeSetVersion = null)
    {
        $this
            ->setAttribute($attribute)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion);
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\AttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $attributeSetTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeSetTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeType, "%s" given', is_object($attributeSetTypeAttributeItem) ? get_class($attributeSetTypeAttributeItem) : gettype($attributeSetTypeAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function addToAttribute(\macropage\ebaysdk\trading\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AttributeSetType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get attributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion()
    {
        return $this->attributeSetVersion;
    }
    /**
     * Set attributeSetVersion value
     * @param string $attributeSetVersion
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttributeSetVersion($attributeSetVersion = null)
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attributeSetVersion)), __LINE__);
        }
        $this->attributeSetVersion = $attributeSetVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
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
