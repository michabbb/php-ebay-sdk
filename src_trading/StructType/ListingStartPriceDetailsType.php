<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingStartPriceDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ListingStartPriceDetails</b> container returned in <b>GeteBayDetails</b>. The <b>ListingStartPriceDetails</b> container lists the minimum start price for auction listings, the minimum sale price for fixed-price
 * listings, and the minimum percentage value that a Buy It Now price for an auction listing must be above the minimum start price for that same listing. <br><br> The <b>ListingStartPriceDetails</b> container is returned if
 * <b>ListingStartPriceDetails</b> is included as a <b>DetailName</b> filter in the request, or if no lt;b>DetailName</b> filters are used in the request.
 * @subpackage Structs
 */
class ListingStartPriceDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This value is a string description of the listing type for which the pricing data is intended, such as "Pricing for the auction-like listings".
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the listing type of the listing, and is a value defined in <b>ListingTypeCodeType</b> enumerated type. The only possible values for this field are 'Chinese' (auction listing) and 'FixedPriceItem'.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: For auction listings, the <b>StartPrice</b> indicates the lowest dollar value that can be set for the item's Starting bid. <br><br> For fixed-price listings, the <b>StartPrice</b> indicates the lowest dollar value that can be set for
     * the item's sale price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The MinBuyItNowPricePercent
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned and applicable for auction listings. <br><br> This float value indicates the minimum percentage value that a Buy It Now price for an auction listing must be above the Starting bid price for that same
     * listing. <br><br> On the US eBay Motors site (Site ID 0), this field only applies to the Parts and Accessories categories.
     * - minOccurs: 0
     * @var float
     */
    public $MinBuyItNowPricePercent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingStartPriceDetailsType
     * @uses ListingStartPriceDetailsType::setDescription()
     * @uses ListingStartPriceDetailsType::setListingType()
     * @uses ListingStartPriceDetailsType::setStartPrice()
     * @uses ListingStartPriceDetailsType::setDetailVersion()
     * @uses ListingStartPriceDetailsType::setUpdateTime()
     * @uses ListingStartPriceDetailsType::setMinBuyItNowPricePercent()
     * @uses ListingStartPriceDetailsType::setAny()
     * @param string $description
     * @param string $listingType
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @param string $detailVersion
     * @param string $updateTime
     * @param float $minBuyItNowPricePercent
     * @param \DOMDocument $any
     */
    public function __construct($description = null, $listingType = null, \macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, $detailVersion = null, $updateTime = null, $minBuyItNowPricePercent = null, \DOMDocument $any = null)
    {
        $this
            ->setDescription($description)
            ->setListingType($listingType)
            ->setStartPrice($startPrice)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setMinBuyItNowPricePercent($minBuyItNowPricePercent)
            ->setAny($any);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
     */
    public function setStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
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
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
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
     * Get MinBuyItNowPricePercent value
     * @return float|null
     */
    public function getMinBuyItNowPricePercent()
    {
        return $this->MinBuyItNowPricePercent;
    }
    /**
     * Set MinBuyItNowPricePercent value
     * @param float $minBuyItNowPricePercent
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
     */
    public function setMinBuyItNowPricePercent($minBuyItNowPricePercent = null)
    {
        $this->MinBuyItNowPricePercent = $minBuyItNowPricePercent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType
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
