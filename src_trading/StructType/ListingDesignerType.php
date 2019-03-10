<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDesignerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the IDs for the Listing Designer theme and template (if either are used) associated with an item, which can optionally be used to enhance the appearance of the item's description. Cannot be used with Photo Display.
 * @subpackage Structs
 */
class ListingDesignerType extends AbstractStructBase
{
    /**
     * The LayoutID
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the Layout template to use when displaying the item's description. Call <b>GetDescriptionTemplates</b> for valid IDs. Set to false in <b>GetDescriptionTemplates</b> (or do not specify <b>LayoutID</b>) to get the standard
     * layout. If a Listing Designer layout is used (except standard layout), <b>PhotoDisplayType</b> must be false (or not be specified). When relisting an item, <b>LayoutID</b> is removed from the listing if you specify <b>ListingDesignerType</b> without
     * <b>LayoutID</b>. Alternatively, to remove this value when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var int
     */
    public $LayoutID;
    /**
     * The OptimalPictureSize
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that the item's picture will be enlarged to fit description of the item.
     * - minOccurs: 0
     * @var bool
     */
    public $OptimalPictureSize;
    /**
     * The ThemeID
     * Meta informations extracted from the WSDL
     * - documentation: ID for the Listing Designer theme template to use when displaying the item's description. When relisting, if you specify <b>ListingDesignerType</b> without <b>ThemeID</b>, <b>ThemeID</b> is removed from the listing. Alternatively, to
     * remove this value when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var int
     */
    public $ThemeID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingDesignerType
     * @uses ListingDesignerType::setLayoutID()
     * @uses ListingDesignerType::setOptimalPictureSize()
     * @uses ListingDesignerType::setThemeID()
     * @uses ListingDesignerType::setAny()
     * @param int $layoutID
     * @param bool $optimalPictureSize
     * @param int $themeID
     * @param \DOMDocument $any
     */
    public function __construct($layoutID = null, $optimalPictureSize = null, $themeID = null, \DOMDocument $any = null)
    {
        $this
            ->setLayoutID($layoutID)
            ->setOptimalPictureSize($optimalPictureSize)
            ->setThemeID($themeID)
            ->setAny($any);
    }
    /**
     * Get LayoutID value
     * @return int|null
     */
    public function getLayoutID()
    {
        return $this->LayoutID;
    }
    /**
     * Set LayoutID value
     * @param int $layoutID
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType
     */
    public function setLayoutID($layoutID = null)
    {
        // validation for constraint: int
        if (!is_null($layoutID) && !is_numeric($layoutID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($layoutID)), __LINE__);
        }
        $this->LayoutID = $layoutID;
        return $this;
    }
    /**
     * Get OptimalPictureSize value
     * @return bool|null
     */
    public function getOptimalPictureSize()
    {
        return $this->OptimalPictureSize;
    }
    /**
     * Set OptimalPictureSize value
     * @param bool $optimalPictureSize
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType
     */
    public function setOptimalPictureSize($optimalPictureSize = null)
    {
        // validation for constraint: boolean
        if (!is_null($optimalPictureSize) && !is_bool($optimalPictureSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optimalPictureSize)), __LINE__);
        }
        $this->OptimalPictureSize = $optimalPictureSize;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingDesignerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType
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
