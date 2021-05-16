<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySellingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains summary information about the items the seller is selling.
 * @subpackage Structs
 */
class MyeBaySellingSummaryType extends AbstractStructBase
{
    /**
     * The ActiveAuctionCount
     * Meta information extracted from the WSDL
     * - documentation: The number of currently active auctions that will sell. That is, there is at least one bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ActiveAuctionCount = null;
    /**
     * The AuctionSellingCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of currently active auctions for a given seller. Note that this does not include listings that are FixedPriceItem or StoresFixedPrice. Equivalent to the "Auction Quantity" value in My eBay.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AuctionSellingCount = null;
    /**
     * The AuctionBidCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of bids made on the seller's active listings.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AuctionBidCount = null;
    /**
     * The TotalAuctionSellingValue
     * Meta information extracted from the WSDL
     * - documentation: For all items that the seller has for sale, the total selling values of those items having bids and where the Reserve price is met (if a Reserve price is specified).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalAuctionSellingValue = null;
    /**
     * The TotalSoldCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of items that the seller has sold in the past 31 days.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalSoldCount = null;
    /**
     * The TotalSoldValue
     * Meta information extracted from the WSDL
     * - documentation: The total monetary value of the items the seller has sold.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalSoldValue = null;
    /**
     * The SoldDurationInDays
     * Meta information extracted from the WSDL
     * - documentation: The average duration, in days, of all items sold.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SoldDurationInDays = null;
    /**
     * The ClassifiedAdCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of Classified Ad listings listed by the seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ClassifiedAdCount = null;
    /**
     * The TotalLeadCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of leads from the seller's classified ad listings. Number indicates the total number of emails received for the listings
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalLeadCount = null;
    /**
     * The ClassifiedAdOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of offers received on active Classified Ad listings.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ClassifiedAdOfferCount = null;
    /**
     * The TotalListingsWithLeads
     * Meta information extracted from the WSDL
     * - documentation: The total number of Classified Ad listings that have an associated lead.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalListingsWithLeads = null;
    /**
     * The QuantityLimitRemaining
     * Meta information extracted from the WSDL
     * - documentation: The quantity of items that this seller can list. This number refers to the total quantity of items in all listings. For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing
     * with a quantity of 100 items. The seller will be unable to list additional items or quantities of items for sale in excess of this number for the current month unless the seller requests an increase from eBay using the "Request higher selling limits"
     * link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached before the quantity limit is reached.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityLimitRemaining = null;
    /**
     * The AmountLimitRemaining
     * Meta information extracted from the WSDL
     * - documentation: The total value of the items listed price that this seller can list. This amount is the total of the prices specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts. For auction
     * listings, this is the total of the starting prices. The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions) exceeds the amount limit. This is part of the seller limit, which can be increased
     * by requesting an increase from eBay using the "Request higher selling limits" link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached before the amount limit is
     * reached.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountLimitRemaining = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBaySellingSummaryType
     * @uses MyeBaySellingSummaryType::setActiveAuctionCount()
     * @uses MyeBaySellingSummaryType::setAuctionSellingCount()
     * @uses MyeBaySellingSummaryType::setAuctionBidCount()
     * @uses MyeBaySellingSummaryType::setTotalAuctionSellingValue()
     * @uses MyeBaySellingSummaryType::setTotalSoldCount()
     * @uses MyeBaySellingSummaryType::setTotalSoldValue()
     * @uses MyeBaySellingSummaryType::setSoldDurationInDays()
     * @uses MyeBaySellingSummaryType::setClassifiedAdCount()
     * @uses MyeBaySellingSummaryType::setTotalLeadCount()
     * @uses MyeBaySellingSummaryType::setClassifiedAdOfferCount()
     * @uses MyeBaySellingSummaryType::setTotalListingsWithLeads()
     * @uses MyeBaySellingSummaryType::setQuantityLimitRemaining()
     * @uses MyeBaySellingSummaryType::setAmountLimitRemaining()
     * @uses MyeBaySellingSummaryType::setAny()
     * @param int $activeAuctionCount
     * @param int $auctionSellingCount
     * @param int $auctionBidCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue
     * @param int $totalSoldCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue
     * @param int $soldDurationInDays
     * @param int $classifiedAdCount
     * @param int $totalLeadCount
     * @param int $classifiedAdOfferCount
     * @param int $totalListingsWithLeads
     * @param int $quantityLimitRemaining
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountLimitRemaining
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $activeAuctionCount = null, ?int $auctionSellingCount = null, ?int $auctionBidCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue = null, ?int $totalSoldCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue = null, ?int $soldDurationInDays = null, ?int $classifiedAdCount = null, ?int $totalLeadCount = null, ?int $classifiedAdOfferCount = null, ?int $totalListingsWithLeads = null, ?int $quantityLimitRemaining = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountLimitRemaining = null, $any = null)
    {
        $this
            ->setActiveAuctionCount($activeAuctionCount)
            ->setAuctionSellingCount($auctionSellingCount)
            ->setAuctionBidCount($auctionBidCount)
            ->setTotalAuctionSellingValue($totalAuctionSellingValue)
            ->setTotalSoldCount($totalSoldCount)
            ->setTotalSoldValue($totalSoldValue)
            ->setSoldDurationInDays($soldDurationInDays)
            ->setClassifiedAdCount($classifiedAdCount)
            ->setTotalLeadCount($totalLeadCount)
            ->setClassifiedAdOfferCount($classifiedAdOfferCount)
            ->setTotalListingsWithLeads($totalListingsWithLeads)
            ->setQuantityLimitRemaining($quantityLimitRemaining)
            ->setAmountLimitRemaining($amountLimitRemaining)
            ->setAny($any);
    }
    /**
     * Get ActiveAuctionCount value
     * @return int|null
     */
    public function getActiveAuctionCount(): ?int
    {
        return $this->ActiveAuctionCount;
    }
    /**
     * Set ActiveAuctionCount value
     * @param int $activeAuctionCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setActiveAuctionCount(?int $activeAuctionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($activeAuctionCount) && !(is_int($activeAuctionCount) || ctype_digit($activeAuctionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($activeAuctionCount, true), gettype($activeAuctionCount)), __LINE__);
        }
        $this->ActiveAuctionCount = $activeAuctionCount;
        
        return $this;
    }
    /**
     * Get AuctionSellingCount value
     * @return int|null
     */
    public function getAuctionSellingCount(): ?int
    {
        return $this->AuctionSellingCount;
    }
    /**
     * Set AuctionSellingCount value
     * @param int $auctionSellingCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setAuctionSellingCount(?int $auctionSellingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($auctionSellingCount) && !(is_int($auctionSellingCount) || ctype_digit($auctionSellingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($auctionSellingCount, true), gettype($auctionSellingCount)), __LINE__);
        }
        $this->AuctionSellingCount = $auctionSellingCount;
        
        return $this;
    }
    /**
     * Get AuctionBidCount value
     * @return int|null
     */
    public function getAuctionBidCount(): ?int
    {
        return $this->AuctionBidCount;
    }
    /**
     * Set AuctionBidCount value
     * @param int $auctionBidCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setAuctionBidCount(?int $auctionBidCount = null): self
    {
        // validation for constraint: int
        if (!is_null($auctionBidCount) && !(is_int($auctionBidCount) || ctype_digit($auctionBidCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($auctionBidCount, true), gettype($auctionBidCount)), __LINE__);
        }
        $this->AuctionBidCount = $auctionBidCount;
        
        return $this;
    }
    /**
     * Get TotalAuctionSellingValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAuctionSellingValue(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalAuctionSellingValue;
    }
    /**
     * Set TotalAuctionSellingValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setTotalAuctionSellingValue(?\macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue = null): self
    {
        $this->TotalAuctionSellingValue = $totalAuctionSellingValue;
        
        return $this;
    }
    /**
     * Get TotalSoldCount value
     * @return int|null
     */
    public function getTotalSoldCount(): ?int
    {
        return $this->TotalSoldCount;
    }
    /**
     * Set TotalSoldCount value
     * @param int $totalSoldCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setTotalSoldCount(?int $totalSoldCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalSoldCount) && !(is_int($totalSoldCount) || ctype_digit($totalSoldCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalSoldCount, true), gettype($totalSoldCount)), __LINE__);
        }
        $this->TotalSoldCount = $totalSoldCount;
        
        return $this;
    }
    /**
     * Get TotalSoldValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalSoldValue(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalSoldValue;
    }
    /**
     * Set TotalSoldValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setTotalSoldValue(?\macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue = null): self
    {
        $this->TotalSoldValue = $totalSoldValue;
        
        return $this;
    }
    /**
     * Get SoldDurationInDays value
     * @return int|null
     */
    public function getSoldDurationInDays(): ?int
    {
        return $this->SoldDurationInDays;
    }
    /**
     * Set SoldDurationInDays value
     * @param int $soldDurationInDays
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setSoldDurationInDays(?int $soldDurationInDays = null): self
    {
        // validation for constraint: int
        if (!is_null($soldDurationInDays) && !(is_int($soldDurationInDays) || ctype_digit($soldDurationInDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($soldDurationInDays, true), gettype($soldDurationInDays)), __LINE__);
        }
        $this->SoldDurationInDays = $soldDurationInDays;
        
        return $this;
    }
    /**
     * Get ClassifiedAdCount value
     * @return int|null
     */
    public function getClassifiedAdCount(): ?int
    {
        return $this->ClassifiedAdCount;
    }
    /**
     * Set ClassifiedAdCount value
     * @param int $classifiedAdCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setClassifiedAdCount(?int $classifiedAdCount = null): self
    {
        // validation for constraint: int
        if (!is_null($classifiedAdCount) && !(is_int($classifiedAdCount) || ctype_digit($classifiedAdCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdCount, true), gettype($classifiedAdCount)), __LINE__);
        }
        $this->ClassifiedAdCount = $classifiedAdCount;
        
        return $this;
    }
    /**
     * Get TotalLeadCount value
     * @return int|null
     */
    public function getTotalLeadCount(): ?int
    {
        return $this->TotalLeadCount;
    }
    /**
     * Set TotalLeadCount value
     * @param int $totalLeadCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setTotalLeadCount(?int $totalLeadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalLeadCount) && !(is_int($totalLeadCount) || ctype_digit($totalLeadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalLeadCount, true), gettype($totalLeadCount)), __LINE__);
        }
        $this->TotalLeadCount = $totalLeadCount;
        
        return $this;
    }
    /**
     * Get ClassifiedAdOfferCount value
     * @return int|null
     */
    public function getClassifiedAdOfferCount(): ?int
    {
        return $this->ClassifiedAdOfferCount;
    }
    /**
     * Set ClassifiedAdOfferCount value
     * @param int $classifiedAdOfferCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setClassifiedAdOfferCount(?int $classifiedAdOfferCount = null): self
    {
        // validation for constraint: int
        if (!is_null($classifiedAdOfferCount) && !(is_int($classifiedAdOfferCount) || ctype_digit($classifiedAdOfferCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdOfferCount, true), gettype($classifiedAdOfferCount)), __LINE__);
        }
        $this->ClassifiedAdOfferCount = $classifiedAdOfferCount;
        
        return $this;
    }
    /**
     * Get TotalListingsWithLeads value
     * @return int|null
     */
    public function getTotalListingsWithLeads(): ?int
    {
        return $this->TotalListingsWithLeads;
    }
    /**
     * Set TotalListingsWithLeads value
     * @param int $totalListingsWithLeads
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setTotalListingsWithLeads(?int $totalListingsWithLeads = null): self
    {
        // validation for constraint: int
        if (!is_null($totalListingsWithLeads) && !(is_int($totalListingsWithLeads) || ctype_digit($totalListingsWithLeads))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalListingsWithLeads, true), gettype($totalListingsWithLeads)), __LINE__);
        }
        $this->TotalListingsWithLeads = $totalListingsWithLeads;
        
        return $this;
    }
    /**
     * Get QuantityLimitRemaining value
     * @return int|null
     */
    public function getQuantityLimitRemaining(): ?int
    {
        return $this->QuantityLimitRemaining;
    }
    /**
     * Set QuantityLimitRemaining value
     * @param int $quantityLimitRemaining
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setQuantityLimitRemaining(?int $quantityLimitRemaining = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityLimitRemaining) && !(is_int($quantityLimitRemaining) || ctype_digit($quantityLimitRemaining))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityLimitRemaining, true), gettype($quantityLimitRemaining)), __LINE__);
        }
        $this->QuantityLimitRemaining = $quantityLimitRemaining;
        
        return $this;
    }
    /**
     * Get AmountLimitRemaining value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountLimitRemaining(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountLimitRemaining;
    }
    /**
     * Set AmountLimitRemaining value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountLimitRemaining
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
     */
    public function setAmountLimitRemaining(?\macropage\ebaysdk\trading\StructType\AmountType $amountLimitRemaining = null): self
    {
        $this->AmountLimitRemaining = $amountLimitRemaining;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
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
