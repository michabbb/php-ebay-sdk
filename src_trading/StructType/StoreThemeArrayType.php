<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Set of Store themes.
 * @subpackage Structs
 */
class StoreThemeArrayType extends AbstractStructBase
{
    /**
     * The Theme
     * Meta informations extracted from the WSDL
     * - documentation: A Store theme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeType[]
     */
    public $Theme;
    /**
     * The GenericColorSchemeArray
     * Meta informations extracted from the WSDL
     * - documentation: Set of color schemes. This set is for use with those themes that do not explicitly list a color scheme in the theme definition (these themes are also known as advanced themes).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
     */
    public $GenericColorSchemeArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreThemeArrayType
     * @uses StoreThemeArrayType::setTheme()
     * @uses StoreThemeArrayType::setGenericColorSchemeArray()
     * @uses StoreThemeArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType[] $theme
     * @param \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @param \DOMDocument $any
     */
    public function __construct(array $theme = array(), \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null, \DOMDocument $any = null)
    {
        $this
            ->setTheme($theme)
            ->setGenericColorSchemeArray($genericColorSchemeArray)
            ->setAny($any);
    }
    /**
     * Get Theme value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType[]|null
     */
    public function getTheme()
    {
        return $this->Theme;
    }
    /**
     * Set Theme value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType[] $theme
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function setTheme(array $theme = array())
    {
        foreach ($theme as $storeThemeArrayTypeThemeItem) {
            // validation for constraint: itemType
            if (!$storeThemeArrayTypeThemeItem instanceof \macropage\ebaysdk\trading\StructType\StoreThemeType) {
                throw new \InvalidArgumentException(sprintf('The Theme property can only contain items of \macropage\ebaysdk\trading\StructType\StoreThemeType, "%s" given', is_object($storeThemeArrayTypeThemeItem) ? get_class($storeThemeArrayTypeThemeItem) : gettype($storeThemeArrayTypeThemeItem)), __LINE__);
            }
        }
        $this->Theme = $theme;
        return $this;
    }
    /**
     * Add item to Theme value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function addToTheme(\macropage\ebaysdk\trading\StructType\StoreThemeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreThemeType) {
            throw new \InvalidArgumentException(sprintf('The Theme property can only contain items of \macropage\ebaysdk\trading\StructType\StoreThemeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Theme[] = $item;
        return $this;
    }
    /**
     * Get GenericColorSchemeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType|null
     */
    public function getGenericColorSchemeArray()
    {
        return $this->GenericColorSchemeArray;
    }
    /**
     * Set GenericColorSchemeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function setGenericColorSchemeArray(\macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null)
    {
        $this->GenericColorSchemeArray = $genericColorSchemeArray;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreThemeArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
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
