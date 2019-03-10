<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorSchemeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Store color scheme.
 * @subpackage Structs
 */
class StoreColorSchemeType extends AbstractStructBase
{
    /**
     * The ColorSchemeID
     * Meta informations extracted from the WSDL
     * - documentation: Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme IDs).
     * - minOccurs: 0
     * @var int
     */
    public $ColorSchemeID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Store color scheme name. Provides a user-friendly name for the color scheme.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Color
     * Meta informations extracted from the WSDL
     * - documentation: Store color set.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public $Color;
    /**
     * The Font
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is used 'as is'. Use the <b>GetStoreOptions</b> call to retrieve the complete set of data for the list of
     * predefined eBay Stores options, including the themes and color schemes.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public $Font;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreColorSchemeType
     * @uses StoreColorSchemeType::setColorSchemeID()
     * @uses StoreColorSchemeType::setName()
     * @uses StoreColorSchemeType::setColor()
     * @uses StoreColorSchemeType::setFont()
     * @uses StoreColorSchemeType::setAny()
     * @param int $colorSchemeID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\StoreColorType $color
     * @param \macropage\ebaysdk\trading\StructType\StoreFontType $font
     * @param \DOMDocument $any
     */
    public function __construct($colorSchemeID = null, $name = null, \macropage\ebaysdk\trading\StructType\StoreColorType $color = null, \macropage\ebaysdk\trading\StructType\StoreFontType $font = null, \DOMDocument $any = null)
    {
        $this
            ->setColorSchemeID($colorSchemeID)
            ->setName($name)
            ->setColor($color)
            ->setFont($font)
            ->setAny($any);
    }
    /**
     * Get ColorSchemeID value
     * @return int|null
     */
    public function getColorSchemeID()
    {
        return $this->ColorSchemeID;
    }
    /**
     * Set ColorSchemeID value
     * @param int $colorSchemeID
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setColorSchemeID($colorSchemeID = null)
    {
        // validation for constraint: int
        if (!is_null($colorSchemeID) && !is_numeric($colorSchemeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($colorSchemeID)), __LINE__);
        }
        $this->ColorSchemeID = $colorSchemeID;
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
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
     * Get Color value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType|null
     */
    public function getColor()
    {
        return $this->Color;
    }
    /**
     * Set Color value
     * @param \macropage\ebaysdk\trading\StructType\StoreColorType $color
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setColor(\macropage\ebaysdk\trading\StructType\StoreColorType $color = null)
    {
        $this->Color = $color;
        return $this;
    }
    /**
     * Get Font value
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType|null
     */
    public function getFont()
    {
        return $this->Font;
    }
    /**
     * Set Font value
     * @param \macropage\ebaysdk\trading\StructType\StoreFontType $font
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setFont(\macropage\ebaysdk\trading\StructType\StoreFontType $font = null)
    {
        $this->Font = $font;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreColorSchemeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
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
