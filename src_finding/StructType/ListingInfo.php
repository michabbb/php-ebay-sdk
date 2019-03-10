<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information specific to the item listing.
 * @subpackage Structs
 */
class ListingInfo extends AbstractStructBase
{
    /**
     * The bestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Shows whether or not the seller will accept a best offer for the associated item. Best Offer allows a buyer to make a lower-priced binding offer on a fixed price item. Buyers cannot see how many offers have been made (only the seller
     * can see this information). To make a best offer on a listing, use the eBay Web site.
     * - minOccurs: 0
     * @var bool
     */
    public $bestOfferEnabled;
    /**
     * The buyItNowAvailable
     * Meta informations extracted from the WSDL
     * - documentation: Applies only to auction listings that were listed with a Buy It Now price. Buy It Now lets a user purchase the item at a fixed price, effectively ending the auction. On most sites, the Buy It Now option is removed (and this value
     * returns false) once a valid bid is made on the associated item (a valid bid could be a bid above the reserve price). <br><br> buyItNowAvailable will return "false" if the listing type is anything but "AuctionWithBIN". Please ignore buyItNowAvailable
     * for fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $buyItNowAvailable;
    /**
     * The buyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: The Buy It Now Price of the item (if any), in the currency of the site on which the item was listed. You can use this field to determine if the item was originally listed with Buy It Now, even if the Buy It Now option is no longer
     * available for the item. <br><br> For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad Format (AdFormat), and Classified Ad (Classified) listings, currentPrice is the current fixed price. <br><br> Only returned if an item was
     * listed with Buy It Now.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $buyItNowPrice;
    /**
     * The convertedBuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent your search request. For active items, refresh this value every 24 hours to pick up changes in conversion rates (if this value has
     * been converted). <br><br> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br><br> Only returned if an item
     * was listed with Buy It Now.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $convertedBuyItNowPrice;
    /**
     * The startTime
     * Meta informations extracted from the WSDL
     * - documentation: Time stamp that eBay recorded as the moment the listing was made available. This value is returned in GMT, the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>dateTime</b> type for information about the time
     * format, and for details on converting to and from the GMT time zone. <br><br> <span class="tablenote"><strong>Note:</strong> It is possible for <b>startTime</b> to be different from the value returned by <b>GetSingleItem</b>.</span>
     * - minOccurs: 0
     * @var string
     */
    public $startTime;
    /**
     * The endTime
     * Meta informations extracted from the WSDL
     * - documentation: Time stamp specifying when the listing is scheduled to end, or the actual end time if the item listing has ended. This value is returned in GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the <b>dateTime</b>
     * type for information about the time format, and for details on converting to and from the GMT time zone. <br><br> <span class="tablenote"><strong>Note:</strong> For items that are "Good Till Canceled," this value is 5 minutes later than the actual
     * end time of the item. This difference in time is intended to facilitate the renewal of these items' end times (which occurs every 30 days).</span> </span>
     * - minOccurs: 0
     * @var string
     */
    public $endTime;
    /**
     * The listingType
     * Meta informations extracted from the WSDL
     * - documentation: The format of the listing, such as online auction, fixed price, or advertisement. <dl> <dt> <strong>listingType values:</strong> </dt> <dt> AdFormat </dt> <dd> Advertisement to solicit inquiries on listings such as real estate.
     * Permits no bidding on that item, service, or property. To express interest, a buyer fills out a contact form that eBay forwards to the seller as a lead. This format does not enable buyers and sellers to transact online through eBay and eBay Feedback
     * is not available for ad format listings. </dd> <dt> Auction </dt> <dd> Competitive-bid online auction format. Buyers engage in competitive bidding, although Buy It Now may be offered as long as no valid bids have been placed. Online auctions are
     * listed on eBay.com; they can also be listed in a seller's eBay Store if the seller is a Store owner. </dd> <dt> AuctionWithBIN </dt> <dd> Same as Auction format, but Buy It Now is enabled. AuctionWithBIN changes to Auction if a valid bid has been
     * placed on the item. Valid bids include bids that are equal to or above any specified reserve price. </dd> <dt> Classified </dt> <dd> Classified Ads connect buyers and sellers, who then complete the sale outside of eBay. This format does not enable
     * buyers and sellers to transact online through eBay and eBay Feedback is not available for these listing types. </dd> <dt> FixedPrice </dt> <dd> A fixed-price listing. Auction-style bidding is not allowed. On some sites, this auction format is also
     * known as "Buy It Now Only" (not to be confused with the Buy It Now option available with competitive- bidding auctions). Fixed-price listings appear on eBay.com; they can also be listed in a seller's eBay Store if the seller is a Store owner. </dd>
     * <dt> StoreInventory </dt> <dd> A fixed-price format for eBay Store sellers. Store Inventory listings appear after other listings in regular browse and search item listings on eBay. Store items have a lower Insertion Fee and longer listing durations.
     * This selling type can only be specified by sellers who have an eBay Store. Store Inventory listings are listed on eBay.com as well as in the seller's eBay Store. </dd> </dl>
     * - minOccurs: 0
     * @var string
     */
    public $listingType;
    /**
     * The gift
     * Meta informations extracted from the WSDL
     * - documentation: If true, a generic gift icon displays next the listing's title in search and browse pages.
     * - minOccurs: 0
     * @var bool
     */
    public $gift;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingInfo
     * @uses ListingInfo::setBestOfferEnabled()
     * @uses ListingInfo::setBuyItNowAvailable()
     * @uses ListingInfo::setBuyItNowPrice()
     * @uses ListingInfo::setConvertedBuyItNowPrice()
     * @uses ListingInfo::setStartTime()
     * @uses ListingInfo::setEndTime()
     * @uses ListingInfo::setListingType()
     * @uses ListingInfo::setGift()
     * @uses ListingInfo::setDelimiter()
     * @uses ListingInfo::setAny()
     * @param bool $bestOfferEnabled
     * @param bool $buyItNowAvailable
     * @param \macropage\ebaysdk\finding\StructType\Amount $buyItNowPrice
     * @param \macropage\ebaysdk\finding\StructType\Amount $convertedBuyItNowPrice
     * @param string $startTime
     * @param string $endTime
     * @param string $listingType
     * @param bool $gift
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferEnabled = null, $buyItNowAvailable = null, \macropage\ebaysdk\finding\StructType\Amount $buyItNowPrice = null, \macropage\ebaysdk\finding\StructType\Amount $convertedBuyItNowPrice = null, $startTime = null, $endTime = null, $listingType = null, $gift = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setBuyItNowAvailable($buyItNowAvailable)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setConvertedBuyItNowPrice($convertedBuyItNowPrice)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setListingType($listingType)
            ->setGift($gift)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get bestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }
    /**
     * Set bestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferEnabled)), __LINE__);
        }
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get buyItNowAvailable value
     * @return bool|null
     */
    public function getBuyItNowAvailable()
    {
        return $this->buyItNowAvailable;
    }
    /**
     * Set buyItNowAvailable value
     * @param bool $buyItNowAvailable
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setBuyItNowAvailable($buyItNowAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAvailable) && !is_bool($buyItNowAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyItNowAvailable)), __LINE__);
        }
        $this->buyItNowAvailable = $buyItNowAvailable;
        return $this;
    }
    /**
     * Get buyItNowPrice value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }
    /**
     * Set buyItNowPrice value
     * @param \macropage\ebaysdk\finding\StructType\Amount $buyItNowPrice
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setBuyItNowPrice(\macropage\ebaysdk\finding\StructType\Amount $buyItNowPrice = null)
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get convertedBuyItNowPrice value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->convertedBuyItNowPrice;
    }
    /**
     * Set convertedBuyItNowPrice value
     * @param \macropage\ebaysdk\finding\StructType\Amount $convertedBuyItNowPrice
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setConvertedBuyItNowPrice(\macropage\ebaysdk\finding\StructType\Amount $convertedBuyItNowPrice = null)
    {
        $this->convertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Get listingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->listingType;
    }
    /**
     * Set listingType value
     * @param string $listingType
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: string
        if (!is_null($listingType) && !is_string($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingType)), __LINE__);
        }
        $this->listingType = $listingType;
        return $this;
    }
    /**
     * Get gift value
     * @return bool|null
     */
    public function getGift()
    {
        return $this->gift;
    }
    /**
     * Set gift value
     * @param bool $gift
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setGift($gift = null)
    {
        // validation for constraint: boolean
        if (!is_null($gift) && !is_bool($gift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gift)), __LINE__);
        }
        $this->gift = $gift;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\ListingInfo::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
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
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo
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
