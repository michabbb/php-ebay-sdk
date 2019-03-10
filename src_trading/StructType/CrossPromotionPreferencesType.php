<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionPreferencesType extends AbstractStructBase
{
    /**
     * The CrossPromotionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossPromotionEnabled;
    /**
     * The CrossSellItemFormatSortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellItemFormatSortFilter;
    /**
     * The CrossSellGallerySortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellGallerySortFilter;
    /**
     * The CrossSellItemSortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellItemSortFilter;
    /**
     * The UpSellItemFormatSortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellItemFormatSortFilter;
    /**
     * The UpSellGallerySortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellGallerySortFilter;
    /**
     * The UpSellItemSortFilter
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellItemSortFilter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CrossPromotionPreferencesType
     * @uses CrossPromotionPreferencesType::setCrossPromotionEnabled()
     * @uses CrossPromotionPreferencesType::setCrossSellItemFormatSortFilter()
     * @uses CrossPromotionPreferencesType::setCrossSellGallerySortFilter()
     * @uses CrossPromotionPreferencesType::setCrossSellItemSortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellItemFormatSortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellGallerySortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellItemSortFilter()
     * @uses CrossPromotionPreferencesType::setAny()
     * @param bool $crossPromotionEnabled
     * @param string $crossSellItemFormatSortFilter
     * @param string $crossSellGallerySortFilter
     * @param string $crossSellItemSortFilter
     * @param string $upSellItemFormatSortFilter
     * @param string $upSellGallerySortFilter
     * @param string $upSellItemSortFilter
     * @param \DOMDocument $any
     */
    public function __construct($crossPromotionEnabled = null, $crossSellItemFormatSortFilter = null, $crossSellGallerySortFilter = null, $crossSellItemSortFilter = null, $upSellItemFormatSortFilter = null, $upSellGallerySortFilter = null, $upSellItemSortFilter = null, \DOMDocument $any = null)
    {
        $this
            ->setCrossPromotionEnabled($crossPromotionEnabled)
            ->setCrossSellItemFormatSortFilter($crossSellItemFormatSortFilter)
            ->setCrossSellGallerySortFilter($crossSellGallerySortFilter)
            ->setCrossSellItemSortFilter($crossSellItemSortFilter)
            ->setUpSellItemFormatSortFilter($upSellItemFormatSortFilter)
            ->setUpSellGallerySortFilter($upSellGallerySortFilter)
            ->setUpSellItemSortFilter($upSellItemSortFilter)
            ->setAny($any);
    }
    /**
     * Get CrossPromotionEnabled value
     * @return bool|null
     */
    public function getCrossPromotionEnabled()
    {
        return $this->CrossPromotionEnabled;
    }
    /**
     * Set CrossPromotionEnabled value
     * @param bool $crossPromotionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossPromotionEnabled($crossPromotionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossPromotionEnabled) && !is_bool($crossPromotionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossPromotionEnabled)), __LINE__);
        }
        $this->CrossPromotionEnabled = $crossPromotionEnabled;
        return $this;
    }
    /**
     * Get CrossSellItemFormatSortFilter value
     * @return string|null
     */
    public function getCrossSellItemFormatSortFilter()
    {
        return $this->CrossSellItemFormatSortFilter;
    }
    /**
     * Set CrossSellItemFormatSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellItemFormatSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemFormatSortFilter($crossSellItemFormatSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid($crossSellItemFormatSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $crossSellItemFormatSortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemFormatSortFilter = $crossSellItemFormatSortFilter;
        return $this;
    }
    /**
     * Get CrossSellGallerySortFilter value
     * @return string|null
     */
    public function getCrossSellGallerySortFilter()
    {
        return $this->CrossSellGallerySortFilter;
    }
    /**
     * Set CrossSellGallerySortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellGallerySortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellGallerySortFilter($crossSellGallerySortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid($crossSellGallerySortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $crossSellGallerySortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellGallerySortFilter = $crossSellGallerySortFilter;
        return $this;
    }
    /**
     * Get CrossSellItemSortFilter value
     * @return string|null
     */
    public function getCrossSellItemSortFilter()
    {
        return $this->CrossSellItemSortFilter;
    }
    /**
     * Set CrossSellItemSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellItemSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemSortFilter($crossSellItemSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid($crossSellItemSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $crossSellItemSortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemSortFilter = $crossSellItemSortFilter;
        return $this;
    }
    /**
     * Get UpSellItemFormatSortFilter value
     * @return string|null
     */
    public function getUpSellItemFormatSortFilter()
    {
        return $this->UpSellItemFormatSortFilter;
    }
    /**
     * Set UpSellItemFormatSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellItemFormatSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemFormatSortFilter($upSellItemFormatSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid($upSellItemFormatSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $upSellItemFormatSortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemFormatSortFilter = $upSellItemFormatSortFilter;
        return $this;
    }
    /**
     * Get UpSellGallerySortFilter value
     * @return string|null
     */
    public function getUpSellGallerySortFilter()
    {
        return $this->UpSellGallerySortFilter;
    }
    /**
     * Set UpSellGallerySortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellGallerySortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellGallerySortFilter($upSellGallerySortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid($upSellGallerySortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $upSellGallerySortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellGallerySortFilter = $upSellGallerySortFilter;
        return $this;
    }
    /**
     * Get UpSellItemSortFilter value
     * @return string|null
     */
    public function getUpSellItemSortFilter()
    {
        return $this->UpSellItemSortFilter;
    }
    /**
     * Set UpSellItemSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellItemSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemSortFilter($upSellItemSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid($upSellItemSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $upSellItemSortFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemSortFilter = $upSellItemSortFilter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
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
