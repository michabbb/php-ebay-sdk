<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThemeGroupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data for one theme group. Returned for <b>GetDescriptionTemplates</b> if theme groups are requested.
 * @subpackage Structs
 */
class ThemeGroupType extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for this theme group.
     * - minOccurs: 0
     * @var int
     */
    public $GroupID;
    /**
     * The GroupName
     * Meta informations extracted from the WSDL
     * - documentation: Name of this theme group (localized to the language associated with the eBay site).
     * - minOccurs: 0
     * @var string
     */
    public $GroupName;
    /**
     * The ThemeID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for each theme in this group. There is at least one theme in a theme group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $ThemeID;
    /**
     * The ThemeTotal
     * Meta informations extracted from the WSDL
     * - documentation: The number of <b>ThemeID</b> elements in this group.
     * - minOccurs: 0
     * @var int
     */
    public $ThemeTotal;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ThemeGroupType
     * @uses ThemeGroupType::setGroupID()
     * @uses ThemeGroupType::setGroupName()
     * @uses ThemeGroupType::setThemeID()
     * @uses ThemeGroupType::setThemeTotal()
     * @uses ThemeGroupType::setAny()
     * @param int $groupID
     * @param string $groupName
     * @param int[] $themeID
     * @param int $themeTotal
     * @param \DOMDocument $any
     */
    public function __construct($groupID = null, $groupName = null, array $themeID = array(), $themeTotal = null, \DOMDocument $any = null)
    {
        $this
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setThemeID($themeID)
            ->setThemeTotal($themeTotal)
            ->setAny($any);
    }
    /**
     * Get GroupID value
     * @return int|null
     */
    public function getGroupID()
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setGroupID($groupID = null)
    {
        // validation for constraint: int
        if (!is_null($groupID) && !is_numeric($groupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        return $this;
    }
    /**
     * Get GroupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }
    /**
     * Set GroupName value
     * @param string $groupName
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        $this->GroupName = $groupName;
        return $this;
    }
    /**
     * Get ThemeID value
     * @return int[]|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @throws \InvalidArgumentException
     * @param int[] $themeID
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setThemeID(array $themeID = array())
    {
        foreach ($themeID as $themeGroupTypeThemeIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($themeGroupTypeThemeIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ThemeID property can only contain items of int, "%s" given', is_object($themeGroupTypeThemeIDItem) ? get_class($themeGroupTypeThemeIDItem) : gettype($themeGroupTypeThemeIDItem)), __LINE__);
            }
        }
        $this->ThemeID = $themeID;
        return $this;
    }
    /**
     * Add item to ThemeID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function addToThemeID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The ThemeID property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ThemeID[] = $item;
        return $this;
    }
    /**
     * Get ThemeTotal value
     * @return int|null
     */
    public function getThemeTotal()
    {
        return $this->ThemeTotal;
    }
    /**
     * Set ThemeTotal value
     * @param int $themeTotal
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setThemeTotal($themeTotal = null)
    {
        // validation for constraint: int
        if (!is_null($themeTotal) && !is_numeric($themeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($themeTotal)), __LINE__);
        }
        $this->ThemeTotal = $themeTotal;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ThemeGroupType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
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
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
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
