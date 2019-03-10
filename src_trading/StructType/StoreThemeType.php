<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Store theme.
 * @subpackage Structs
 */
class StoreThemeType extends AbstractStructBase
{
    /**
     * The ThemeID
     * Meta informations extracted from the WSDL
     * - documentation: Store theme ID (use GetStoreOptions to get the list of valid theme IDs).
     * - minOccurs: 0
     * @var int
     */
    public $ThemeID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Store theme name. Provides a user-friendly name for the theme.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ColorScheme
     * Meta informations extracted from the WSDL
     * - documentation: Theme color scheme.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public $ColorScheme;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreThemeType
     * @uses StoreThemeType::setThemeID()
     * @uses StoreThemeType::setName()
     * @uses StoreThemeType::setColorScheme()
     * @uses StoreThemeType::setAny()
     * @param int $themeID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme
     * @param \DOMDocument $any
     */
    public function __construct($themeID = null, $name = null, \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme = null, \DOMDocument $any = null)
    {
        $this
            ->setThemeID($themeID)
            ->setName($name)
            ->setColorScheme($colorScheme)
            ->setAny($any);
    }
    /**
     * Get ThemeID value
     * @return int|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @param int $themeID
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
     */
    public function setThemeID($themeID = null)
    {
        // validation for constraint: int
        if (!is_null($themeID) && !is_numeric($themeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($themeID)), __LINE__);
        }
        $this->ThemeID = $themeID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
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
     * Get ColorScheme value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function getColorScheme()
    {
        return $this->ColorScheme;
    }
    /**
     * Set ColorScheme value
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
     */
    public function setColorScheme(\macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme = null)
    {
        $this->ColorScheme = $colorScheme;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreThemeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
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
