<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains summary information about the items the seller is selling.
 * @subpackage Structs
 */
class SellingSummaryType extends AbstractStructBase
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
     * - documentation: The total number of currently active auctions for a given seller. Equivalent to the "Auction Quantity" value in My eBay.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AuctionSellingCount = null;
    /**
     * The AuctionBidCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of bids made on the seller's active auction listings.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AuctionBidCount = null;
    /**
     * The TotalAuctionSellingValue
     * Meta information extracted from the WSDL
     * - documentation: The total value of all items the seller has for sale in all listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalAuctionSellingValue = null;
    /**
     * The TotalSoldCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of items the seller has sold.
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
     * Constructor method for SellingSummaryType
     * @uses SellingSummaryType::setActiveAuctionCount()
     * @uses SellingSummaryType::setAuctionSellingCount()
     * @uses SellingSummaryType::setAuctionBidCount()
     * @uses SellingSummaryType::setTotalAuctionSellingValue()
     * @uses SellingSummaryType::setTotalSoldCount()
     * @uses SellingSummaryType::setTotalSoldValue()
     * @uses SellingSummaryType::setSoldDurationInDays()
     * @param int $activeAuctionCount
     * @param int $auctionSellingCount
     * @param int $auctionBidCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue
     * @param int $totalSoldCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue
     * @param int $soldDurationInDays
     */
    public function __construct(?int $activeAuctionCount = null, ?int $auctionSellingCount = null, ?int $auctionBidCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue = null, ?int $totalSoldCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue = null, ?int $soldDurationInDays = null)
    {
        $this
            ->setActiveAuctionCount($activeAuctionCount)
            ->setAuctionSellingCount($auctionSellingCount)
            ->setAuctionBidCount($auctionBidCount)
            ->setTotalAuctionSellingValue($totalAuctionSellingValue)
            ->setTotalSoldCount($totalSoldCount)
            ->setTotalSoldValue($totalSoldValue)
            ->setSoldDurationInDays($soldDurationInDays);
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
}
