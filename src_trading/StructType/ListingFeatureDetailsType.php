<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingFeatureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ListingFeatureDetails</b> container in the <b>GeteBayDetails</b> response. This container indicates the listing features that are enabled or disabled for an eBay site.
 * @subpackage Structs
 */
class ListingFeatureDetailsType extends AbstractStructBase
{
    /**
     * The BoldTitle
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an
     * enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BoldTitle = null;
    /**
     * The Border
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Picture Border feature for the site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Border = null;
    /**
     * The Highlight
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Highlight feature for the site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Highlight = null;
    /**
     * The GiftIcon
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Gift Icon feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Gift Icon feature for the site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GiftIcon = null;
    /**
     * The HomePageFeatured
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as
     * an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HomePageFeatured = null;
    /**
     * The FeaturedFirst
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeaturedFirst = null;
    /**
     * The FeaturedPlus
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeaturedPlus = null;
    /**
     * The ProPack
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Pro Pack Bundle for the site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProPack = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the current version of details.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingFeatureDetailsType
     * @uses ListingFeatureDetailsType::setBoldTitle()
     * @uses ListingFeatureDetailsType::setBorder()
     * @uses ListingFeatureDetailsType::setHighlight()
     * @uses ListingFeatureDetailsType::setGiftIcon()
     * @uses ListingFeatureDetailsType::setHomePageFeatured()
     * @uses ListingFeatureDetailsType::setFeaturedFirst()
     * @uses ListingFeatureDetailsType::setFeaturedPlus()
     * @uses ListingFeatureDetailsType::setProPack()
     * @uses ListingFeatureDetailsType::setDetailVersion()
     * @uses ListingFeatureDetailsType::setUpdateTime()
     * @uses ListingFeatureDetailsType::setAny()
     * @param string $boldTitle
     * @param string $border
     * @param string $highlight
     * @param string $giftIcon
     * @param string $homePageFeatured
     * @param string $featuredFirst
     * @param string $featuredPlus
     * @param string $proPack
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $boldTitle = null, ?string $border = null, ?string $highlight = null, ?string $giftIcon = null, ?string $homePageFeatured = null, ?string $featuredFirst = null, ?string $featuredPlus = null, ?string $proPack = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setBoldTitle($boldTitle)
            ->setBorder($border)
            ->setHighlight($highlight)
            ->setGiftIcon($giftIcon)
            ->setHomePageFeatured($homePageFeatured)
            ->setFeaturedFirst($featuredFirst)
            ->setFeaturedPlus($featuredPlus)
            ->setProPack($proPack)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get BoldTitle value
     * @return string|null
     */
    public function getBoldTitle(): ?string
    {
        return $this->BoldTitle;
    }
    /**
     * Set BoldTitle value
     * @uses \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $boldTitle
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setBoldTitle(?string $boldTitle = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::valueIsValid($boldTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType', is_array($boldTitle) ? implode(', ', $boldTitle) : var_export($boldTitle, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::getValidValues())), __LINE__);
        }
        $this->BoldTitle = $boldTitle;
        
        return $this;
    }
    /**
     * Get Border value
     * @return string|null
     */
    public function getBorder(): ?string
    {
        return $this->Border;
    }
    /**
     * Set Border value
     * @uses \macropage\ebaysdk\trading\EnumType\BorderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BorderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $border
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setBorder(?string $border = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BorderCodeType::valueIsValid($border)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BorderCodeType', is_array($border) ? implode(', ', $border) : var_export($border, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BorderCodeType::getValidValues())), __LINE__);
        }
        $this->Border = $border;
        
        return $this;
    }
    /**
     * Get Highlight value
     * @return string|null
     */
    public function getHighlight(): ?string
    {
        return $this->Highlight;
    }
    /**
     * Set Highlight value
     * @uses \macropage\ebaysdk\trading\EnumType\HighlightCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HighlightCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $highlight
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setHighlight(?string $highlight = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HighlightCodeType::valueIsValid($highlight)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\HighlightCodeType', is_array($highlight) ? implode(', ', $highlight) : var_export($highlight, true), implode(', ', \macropage\ebaysdk\trading\EnumType\HighlightCodeType::getValidValues())), __LINE__);
        }
        $this->Highlight = $highlight;
        
        return $this;
    }
    /**
     * Get GiftIcon value
     * @return string|null
     */
    public function getGiftIcon(): ?string
    {
        return $this->GiftIcon;
    }
    /**
     * Set GiftIcon value
     * @uses \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $giftIcon
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setGiftIcon(?string $giftIcon = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GiftIconCodeType::valueIsValid($giftIcon)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GiftIconCodeType', is_array($giftIcon) ? implode(', ', $giftIcon) : var_export($giftIcon, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::getValidValues())), __LINE__);
        }
        $this->GiftIcon = $giftIcon;
        
        return $this;
    }
    /**
     * Get HomePageFeatured value
     * @return string|null
     */
    public function getHomePageFeatured(): ?string
    {
        return $this->HomePageFeatured;
    }
    /**
     * Set HomePageFeatured value
     * @uses \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $homePageFeatured
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setHomePageFeatured(?string $homePageFeatured = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::valueIsValid($homePageFeatured)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType', is_array($homePageFeatured) ? implode(', ', $homePageFeatured) : var_export($homePageFeatured, true), implode(', ', \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::getValidValues())), __LINE__);
        }
        $this->HomePageFeatured = $homePageFeatured;
        
        return $this;
    }
    /**
     * Get FeaturedFirst value
     * @return string|null
     */
    public function getFeaturedFirst(): ?string
    {
        return $this->FeaturedFirst;
    }
    /**
     * Set FeaturedFirst value
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $featuredFirst
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setFeaturedFirst(?string $featuredFirst = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::valueIsValid($featuredFirst)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType', is_array($featuredFirst) ? implode(', ', $featuredFirst) : var_export($featuredFirst, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedFirst = $featuredFirst;
        
        return $this;
    }
    /**
     * Get FeaturedPlus value
     * @return string|null
     */
    public function getFeaturedPlus(): ?string
    {
        return $this->FeaturedPlus;
    }
    /**
     * Set FeaturedPlus value
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $featuredPlus
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setFeaturedPlus(?string $featuredPlus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::valueIsValid($featuredPlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType', is_array($featuredPlus) ? implode(', ', $featuredPlus) : var_export($featuredPlus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedPlus = $featuredPlus;
        
        return $this;
    }
    /**
     * Get ProPack value
     * @return string|null
     */
    public function getProPack(): ?string
    {
        return $this->ProPack;
    }
    /**
     * Set ProPack value
     * @uses \macropage\ebaysdk\trading\EnumType\ProPackCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProPackCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $proPack
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setProPack(?string $proPack = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProPackCodeType::valueIsValid($proPack)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProPackCodeType', is_array($proPack) ? implode(', ', $proPack) : var_export($proPack, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProPackCodeType::getValidValues())), __LINE__);
        }
        $this->ProPack = $proPack;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
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
