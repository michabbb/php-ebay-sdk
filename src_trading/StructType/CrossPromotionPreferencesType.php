<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionPreferencesType extends AbstractStructBase
{
    /**
     * The CrossPromotionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CrossPromotionEnabled = null;
    /**
     * The CrossSellItemFormatSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CrossSellItemFormatSortFilter = null;
    /**
     * The CrossSellGallerySortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CrossSellGallerySortFilter = null;
    /**
     * The CrossSellItemSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CrossSellItemSortFilter = null;
    /**
     * The UpSellItemFormatSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpSellItemFormatSortFilter = null;
    /**
     * The UpSellGallerySortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpSellGallerySortFilter = null;
    /**
     * The UpSellItemSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpSellItemSortFilter = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $crossPromotionEnabled = null, ?string $crossSellItemFormatSortFilter = null, ?string $crossSellGallerySortFilter = null, ?string $crossSellItemSortFilter = null, ?string $upSellItemFormatSortFilter = null, ?string $upSellGallerySortFilter = null, ?string $upSellItemSortFilter = null, $any = null)
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
    public function getCrossPromotionEnabled(): ?bool
    {
        return $this->CrossPromotionEnabled;
    }
    /**
     * Set CrossPromotionEnabled value
     * @param bool $crossPromotionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossPromotionEnabled(?bool $crossPromotionEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($crossPromotionEnabled) && !is_bool($crossPromotionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossPromotionEnabled, true), gettype($crossPromotionEnabled)), __LINE__);
        }
        $this->CrossPromotionEnabled = $crossPromotionEnabled;
        
        return $this;
    }
    /**
     * Get CrossSellItemFormatSortFilter value
     * @return string|null
     */
    public function getCrossSellItemFormatSortFilter(): ?string
    {
        return $this->CrossSellItemFormatSortFilter;
    }
    /**
     * Set CrossSellItemFormatSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $crossSellItemFormatSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemFormatSortFilter(?string $crossSellItemFormatSortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid($crossSellItemFormatSortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType', is_array($crossSellItemFormatSortFilter) ? implode(', ', $crossSellItemFormatSortFilter) : var_export($crossSellItemFormatSortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemFormatSortFilter = $crossSellItemFormatSortFilter;
        
        return $this;
    }
    /**
     * Get CrossSellGallerySortFilter value
     * @return string|null
     */
    public function getCrossSellGallerySortFilter(): ?string
    {
        return $this->CrossSellGallerySortFilter;
    }
    /**
     * Set CrossSellGallerySortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $crossSellGallerySortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellGallerySortFilter(?string $crossSellGallerySortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid($crossSellGallerySortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType', is_array($crossSellGallerySortFilter) ? implode(', ', $crossSellGallerySortFilter) : var_export($crossSellGallerySortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellGallerySortFilter = $crossSellGallerySortFilter;
        
        return $this;
    }
    /**
     * Get CrossSellItemSortFilter value
     * @return string|null
     */
    public function getCrossSellItemSortFilter(): ?string
    {
        return $this->CrossSellItemSortFilter;
    }
    /**
     * Set CrossSellItemSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $crossSellItemSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemSortFilter(?string $crossSellItemSortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid($crossSellItemSortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType', is_array($crossSellItemSortFilter) ? implode(', ', $crossSellItemSortFilter) : var_export($crossSellItemSortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemSortFilter = $crossSellItemSortFilter;
        
        return $this;
    }
    /**
     * Get UpSellItemFormatSortFilter value
     * @return string|null
     */
    public function getUpSellItemFormatSortFilter(): ?string
    {
        return $this->UpSellItemFormatSortFilter;
    }
    /**
     * Set UpSellItemFormatSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $upSellItemFormatSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemFormatSortFilter(?string $upSellItemFormatSortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::valueIsValid($upSellItemFormatSortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType', is_array($upSellItemFormatSortFilter) ? implode(', ', $upSellItemFormatSortFilter) : var_export($upSellItemFormatSortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemFormatSortFilter = $upSellItemFormatSortFilter;
        
        return $this;
    }
    /**
     * Get UpSellGallerySortFilter value
     * @return string|null
     */
    public function getUpSellGallerySortFilter(): ?string
    {
        return $this->UpSellGallerySortFilter;
    }
    /**
     * Set UpSellGallerySortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $upSellGallerySortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellGallerySortFilter(?string $upSellGallerySortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::valueIsValid($upSellGallerySortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType', is_array($upSellGallerySortFilter) ? implode(', ', $upSellGallerySortFilter) : var_export($upSellGallerySortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellGallerySortFilter = $upSellGallerySortFilter;
        
        return $this;
    }
    /**
     * Get UpSellItemSortFilter value
     * @return string|null
     */
    public function getUpSellItemSortFilter(): ?string
    {
        return $this->UpSellItemSortFilter;
    }
    /**
     * Set UpSellItemSortFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $upSellItemSortFilter
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemSortFilter(?string $upSellItemSortFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::valueIsValid($upSellItemSortFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType', is_array($upSellItemSortFilter) ? implode(', ', $upSellItemSortFilter) : var_export($upSellItemSortFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemSortFilter = $upSellItemSortFilter;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
