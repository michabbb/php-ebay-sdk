<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteWideCharacteristicsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SiteWideCharacteristicsType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public $CharacteristicsSet;
    /**
     * The ExcludeCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludeCategoryID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteWideCharacteristicsType
     * @uses SiteWideCharacteristicsType::setCharacteristicsSet()
     * @uses SiteWideCharacteristicsType::setExcludeCategoryID()
     * @uses SiteWideCharacteristicsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @param string[] $excludeCategoryID
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null, array $excludeCategoryID = array(), \DOMDocument $any = null)
    {
        $this
            ->setCharacteristicsSet($characteristicsSet)
            ->setExcludeCategoryID($excludeCategoryID)
            ->setAny($any);
    }
    /**
     * Get CharacteristicsSet value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    public function getCharacteristicsSet()
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function setCharacteristicsSet(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null)
    {
        $this->CharacteristicsSet = $characteristicsSet;
        return $this;
    }
    /**
     * Get ExcludeCategoryID value
     * @return string[]|null
     */
    public function getExcludeCategoryID()
    {
        return $this->ExcludeCategoryID;
    }
    /**
     * Set ExcludeCategoryID value
     * @throws \InvalidArgumentException
     * @param string[] $excludeCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function setExcludeCategoryID(array $excludeCategoryID = array())
    {
        foreach ($excludeCategoryID as $siteWideCharacteristicsTypeExcludeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($siteWideCharacteristicsTypeExcludeCategoryIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ExcludeCategoryID property can only contain items of string, "%s" given', is_object($siteWideCharacteristicsTypeExcludeCategoryIDItem) ? get_class($siteWideCharacteristicsTypeExcludeCategoryIDItem) : gettype($siteWideCharacteristicsTypeExcludeCategoryIDItem)), __LINE__);
            }
        }
        $this->ExcludeCategoryID = $excludeCategoryID;
        return $this;
    }
    /**
     * Add item to ExcludeCategoryID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function addToExcludeCategoryID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludeCategoryID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExcludeCategoryID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
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
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
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
