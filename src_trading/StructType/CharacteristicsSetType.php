<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AttributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $AttributeSetID;
    /**
     * The AttributeSetVersion
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AttributeSetVersion;
    /**
     * The Characteristics
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    public $Characteristics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharacteristicsSetType
     * @uses CharacteristicsSetType::setName()
     * @uses CharacteristicsSetType::setAttributeSetID()
     * @uses CharacteristicsSetType::setAttributeSetVersion()
     * @uses CharacteristicsSetType::setCharacteristics()
     * @uses CharacteristicsSetType::setAny()
     * @param string $name
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $characteristics
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $attributeSetID = null, $attributeSetVersion = null, array $characteristics = array(), \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion)
            ->setCharacteristics($characteristics)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get AttributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion()
    {
        return $this->AttributeSetVersion;
    }
    /**
     * Set AttributeSetVersion value
     * @param string $attributeSetVersion
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setAttributeSetVersion($attributeSetVersion = null)
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attributeSetVersion)), __LINE__);
        }
        $this->AttributeSetVersion = $attributeSetVersion;
        return $this;
    }
    /**
     * Get Characteristics value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType[]|null
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }
    /**
     * Set Characteristics value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $characteristics
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setCharacteristics(array $characteristics = array())
    {
        foreach ($characteristics as $characteristicsSetTypeCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetTypeCharacteristicsItem instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
                throw new \InvalidArgumentException(sprintf('The Characteristics property can only contain items of \macropage\ebaysdk\trading\StructType\CharacteristicType, "%s" given', is_object($characteristicsSetTypeCharacteristicsItem) ? get_class($characteristicsSetTypeCharacteristicsItem) : gettype($characteristicsSetTypeCharacteristicsItem)), __LINE__);
            }
        }
        $this->Characteristics = $characteristics;
        return $this;
    }
    /**
     * Add item to Characteristics value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function addToCharacteristics(\macropage\ebaysdk\trading\StructType\CharacteristicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
            throw new \InvalidArgumentException(sprintf('The Characteristics property can only contain items of \macropage\ebaysdk\trading\StructType\CharacteristicType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Characteristics[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharacteristicsSetType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
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
