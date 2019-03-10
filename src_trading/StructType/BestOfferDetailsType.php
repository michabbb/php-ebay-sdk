<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestOfferDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BestOfferDetails</b> container, which consists of Best Offer details associated with a listing. The <b>BestOfferEnabled</b> field in this container is used by <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls to
 * enable the Best Offer feature on a listing.
 * @subpackage Structs
 */
class BestOfferDetailsType extends AbstractStructBase
{
    /**
     * The BestOfferCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var int
     */
    public $BestOfferCount;
    /**
     * The BestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a fixed-price or classified ad listing as long as the category supports the Best Offer feature. To
     * see if an eBay category supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload. <br/><br/> A listing enabled with the Best Offer feature
     * allows a buyer to bargain with the seller and make a lower-priced offer than the fixed price. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best Offer price, but lower than the
     * fixed price. <br/><br/> <b>For a ReviseItem or ReviseFixedPriceItem call</b>, this boolean value can only be changed (enable or disable) in a fixed-price listing if the listing has not had any sales (Best Offer or standard purchase), the listing does
     * not have any Best Offer or counter offers pending, and the listing is not scheduled to end within 12 hours. Some large merchant accounts are enabled to revise this field through a Revise call even within 12 hours of the listing's scheduled end time,
     * but these sellers are still subject to the other two rules - no sales of any kind for the listing, and no Best Offers or counter offers pending.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The BestOffer
     * Meta informations extracted from the WSDL
     * - documentation: This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BestOffer;
    /**
     * The BestOfferStatus
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the latest Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the response if the buyer has not made a Best Offer.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferStatus;
    /**
     * The BestOfferType
     * Meta informations extracted from the WSDL
     * - documentation: Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>,
     * <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferType;
    /**
     * The NewBestOffer
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $NewBestOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BestOfferDetailsType
     * @uses BestOfferDetailsType::setBestOfferCount()
     * @uses BestOfferDetailsType::setBestOfferEnabled()
     * @uses BestOfferDetailsType::setBestOffer()
     * @uses BestOfferDetailsType::setBestOfferStatus()
     * @uses BestOfferDetailsType::setBestOfferType()
     * @uses BestOfferDetailsType::setNewBestOffer()
     * @uses BestOfferDetailsType::setAny()
     * @param int $bestOfferCount
     * @param bool $bestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOffer
     * @param string $bestOfferStatus
     * @param string $bestOfferType
     * @param bool $newBestOffer
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferCount = null, $bestOfferEnabled = null, \macropage\ebaysdk\trading\StructType\AmountType $bestOffer = null, $bestOfferStatus = null, $bestOfferType = null, $newBestOffer = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferCount($bestOfferCount)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setBestOffer($bestOffer)
            ->setBestOfferStatus($bestOfferStatus)
            ->setBestOfferType($bestOfferType)
            ->setNewBestOffer($newBestOffer)
            ->setAny($any);
    }
    /**
     * Get BestOfferCount value
     * @return int|null
     */
    public function getBestOfferCount()
    {
        return $this->BestOfferCount;
    }
    /**
     * Set BestOfferCount value
     * @param int $bestOfferCount
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferCount($bestOfferCount = null)
    {
        // validation for constraint: int
        if (!is_null($bestOfferCount) && !is_numeric($bestOfferCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bestOfferCount)), __LINE__);
        }
        $this->BestOfferCount = $bestOfferCount;
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get BestOffer value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOffer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOffer(\macropage\ebaysdk\trading\StructType\AmountType $bestOffer = null)
    {
        $this->BestOffer = $bestOffer;
        return $this;
    }
    /**
     * Get BestOfferStatus value
     * @return string|null
     */
    public function getBestOfferStatus()
    {
        return $this->BestOfferStatus;
    }
    /**
     * Set BestOfferStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferStatus
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferStatus($bestOfferStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid($bestOfferStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bestOfferStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferStatus = $bestOfferStatus;
        return $this;
    }
    /**
     * Get BestOfferType value
     * @return string|null
     */
    public function getBestOfferType()
    {
        return $this->BestOfferType;
    }
    /**
     * Set BestOfferType value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferType
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferType($bestOfferType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid($bestOfferType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bestOfferType, implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferType = $bestOfferType;
        return $this;
    }
    /**
     * Get NewBestOffer value
     * @return bool|null
     */
    public function getNewBestOffer()
    {
        return $this->NewBestOffer;
    }
    /**
     * Set NewBestOffer value
     * @param bool $newBestOffer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setNewBestOffer($newBestOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($newBestOffer) && !is_bool($newBestOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newBestOffer)), __LINE__);
        }
        $this->NewBestOffer = $newBestOffer;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BestOfferDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
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
