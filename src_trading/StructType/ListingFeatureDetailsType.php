<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingFeatureDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ListingFeatureDetails</b> container in the <b>GeteBayDetails</b> response. This container indicates the listing features that are enabled or disabled for an eBay site.
 * @subpackage Structs
 */
class ListingFeatureDetailsType extends AbstractStructBase
{
    /**
     * The BoldTitle
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an
     * enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string
     */
    public $BoldTitle;
    /**
     * The Border
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Picture Border feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $Border;
    /**
     * The Highlight
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Highlight feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $Highlight;
    /**
     * The GiftIcon
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Gift Icon feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Gift Icon feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $GiftIcon;
    /**
     * The HomePageFeatured
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as
     * an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string
     */
    public $HomePageFeatured;
    /**
     * The FeaturedFirst
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     * - minOccurs: 0
     * @var string
     */
    public $FeaturedFirst;
    /**
     * The FeaturedPlus
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $FeaturedPlus;
    /**
     * The ProPack
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Pro Pack Bundle for the site.
     * - minOccurs: 0
     * @var string
     */
    public $ProPack;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the current version of details.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($boldTitle = null, $border = null, $highlight = null, $giftIcon = null, $homePageFeatured = null, $featuredFirst = null, $featuredPlus = null, $proPack = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
    public function getBoldTitle()
    {
        return $this->BoldTitle;
    }
    /**
     * Set BoldTitle value
     * @uses \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $boldTitle
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setBoldTitle($boldTitle = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::valueIsValid($boldTitle)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $boldTitle, implode(', ', \macropage\ebaysdk\trading\EnumType\BoldTitleCodeType::getValidValues())), __LINE__);
        }
        $this->BoldTitle = $boldTitle;
        return $this;
    }
    /**
     * Get Border value
     * @return string|null
     */
    public function getBorder()
    {
        return $this->Border;
    }
    /**
     * Set Border value
     * @uses \macropage\ebaysdk\trading\EnumType\BorderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BorderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $border
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setBorder($border = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BorderCodeType::valueIsValid($border)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $border, implode(', ', \macropage\ebaysdk\trading\EnumType\BorderCodeType::getValidValues())), __LINE__);
        }
        $this->Border = $border;
        return $this;
    }
    /**
     * Get Highlight value
     * @return string|null
     */
    public function getHighlight()
    {
        return $this->Highlight;
    }
    /**
     * Set Highlight value
     * @uses \macropage\ebaysdk\trading\EnumType\HighlightCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HighlightCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highlight
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setHighlight($highlight = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HighlightCodeType::valueIsValid($highlight)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highlight, implode(', ', \macropage\ebaysdk\trading\EnumType\HighlightCodeType::getValidValues())), __LINE__);
        }
        $this->Highlight = $highlight;
        return $this;
    }
    /**
     * Get GiftIcon value
     * @return string|null
     */
    public function getGiftIcon()
    {
        return $this->GiftIcon;
    }
    /**
     * Set GiftIcon value
     * @uses \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giftIcon
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setGiftIcon($giftIcon = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GiftIconCodeType::valueIsValid($giftIcon)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $giftIcon, implode(', ', \macropage\ebaysdk\trading\EnumType\GiftIconCodeType::getValidValues())), __LINE__);
        }
        $this->GiftIcon = $giftIcon;
        return $this;
    }
    /**
     * Get HomePageFeatured value
     * @return string|null
     */
    public function getHomePageFeatured()
    {
        return $this->HomePageFeatured;
    }
    /**
     * Set HomePageFeatured value
     * @uses \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $homePageFeatured
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setHomePageFeatured($homePageFeatured = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::valueIsValid($homePageFeatured)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $homePageFeatured, implode(', ', \macropage\ebaysdk\trading\EnumType\HomePageFeaturedCodeType::getValidValues())), __LINE__);
        }
        $this->HomePageFeatured = $homePageFeatured;
        return $this;
    }
    /**
     * Get FeaturedFirst value
     * @return string|null
     */
    public function getFeaturedFirst()
    {
        return $this->FeaturedFirst;
    }
    /**
     * Set FeaturedFirst value
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $featuredFirst
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setFeaturedFirst($featuredFirst = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::valueIsValid($featuredFirst)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $featuredFirst, implode(', ', \macropage\ebaysdk\trading\EnumType\FeaturedFirstCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedFirst = $featuredFirst;
        return $this;
    }
    /**
     * Get FeaturedPlus value
     * @return string|null
     */
    public function getFeaturedPlus()
    {
        return $this->FeaturedPlus;
    }
    /**
     * Set FeaturedPlus value
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $featuredPlus
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setFeaturedPlus($featuredPlus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::valueIsValid($featuredPlus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $featuredPlus, implode(', ', \macropage\ebaysdk\trading\EnumType\FeaturedPlusCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedPlus = $featuredPlus;
        return $this;
    }
    /**
     * Get ProPack value
     * @return string|null
     */
    public function getProPack()
    {
        return $this->ProPack;
    }
    /**
     * Set ProPack value
     * @uses \macropage\ebaysdk\trading\EnumType\ProPackCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProPackCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $proPack
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setProPack($proPack = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProPackCodeType::valueIsValid($proPack)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $proPack, implode(', ', \macropage\ebaysdk\trading\EnumType\ProPackCodeType::getValidValues())), __LINE__);
        }
        $this->ProPack = $proPack;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType
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
