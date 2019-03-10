<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains summary information about the items the seller is selling.
 * @subpackage Structs
 */
class SellingSummaryType extends AbstractStructBase
{
    /**
     * The ActiveAuctionCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of currently active auctions that will sell. That is, there is at least one bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
     * - minOccurs: 0
     * @var int
     */
    public $ActiveAuctionCount;
    /**
     * The AuctionSellingCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of currently active auctions for a given seller. Equivalent to the "Auction Quantity" value in My eBay.
     * - minOccurs: 0
     * @var int
     */
    public $AuctionSellingCount;
    /**
     * The AuctionBidCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of bids made on the seller's active auction listings.
     * - minOccurs: 0
     * @var int
     */
    public $AuctionBidCount;
    /**
     * The TotalAuctionSellingValue
     * Meta informations extracted from the WSDL
     * - documentation: The total value of all items the seller has for sale in all listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalAuctionSellingValue;
    /**
     * The TotalSoldCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of items the seller has sold.
     * - minOccurs: 0
     * @var int
     */
    public $TotalSoldCount;
    /**
     * The TotalSoldValue
     * Meta informations extracted from the WSDL
     * - documentation: The total monetary value of the items the seller has sold.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalSoldValue;
    /**
     * The SoldDurationInDays
     * Meta informations extracted from the WSDL
     * - documentation: The average duration, in days, of all items sold.
     * - minOccurs: 0
     * @var int
     */
    public $SoldDurationInDays;
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
    public function __construct($activeAuctionCount = null, $auctionSellingCount = null, $auctionBidCount = null, \macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue = null, $totalSoldCount = null, \macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue = null, $soldDurationInDays = null)
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
    public function getActiveAuctionCount()
    {
        return $this->ActiveAuctionCount;
    }
    /**
     * Set ActiveAuctionCount value
     * @param int $activeAuctionCount
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setActiveAuctionCount($activeAuctionCount = null)
    {
        // validation for constraint: int
        if (!is_null($activeAuctionCount) && !is_numeric($activeAuctionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($activeAuctionCount)), __LINE__);
        }
        $this->ActiveAuctionCount = $activeAuctionCount;
        return $this;
    }
    /**
     * Get AuctionSellingCount value
     * @return int|null
     */
    public function getAuctionSellingCount()
    {
        return $this->AuctionSellingCount;
    }
    /**
     * Set AuctionSellingCount value
     * @param int $auctionSellingCount
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setAuctionSellingCount($auctionSellingCount = null)
    {
        // validation for constraint: int
        if (!is_null($auctionSellingCount) && !is_numeric($auctionSellingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($auctionSellingCount)), __LINE__);
        }
        $this->AuctionSellingCount = $auctionSellingCount;
        return $this;
    }
    /**
     * Get AuctionBidCount value
     * @return int|null
     */
    public function getAuctionBidCount()
    {
        return $this->AuctionBidCount;
    }
    /**
     * Set AuctionBidCount value
     * @param int $auctionBidCount
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setAuctionBidCount($auctionBidCount = null)
    {
        // validation for constraint: int
        if (!is_null($auctionBidCount) && !is_numeric($auctionBidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($auctionBidCount)), __LINE__);
        }
        $this->AuctionBidCount = $auctionBidCount;
        return $this;
    }
    /**
     * Get TotalAuctionSellingValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAuctionSellingValue()
    {
        return $this->TotalAuctionSellingValue;
    }
    /**
     * Set TotalAuctionSellingValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setTotalAuctionSellingValue(\macropage\ebaysdk\trading\StructType\AmountType $totalAuctionSellingValue = null)
    {
        $this->TotalAuctionSellingValue = $totalAuctionSellingValue;
        return $this;
    }
    /**
     * Get TotalSoldCount value
     * @return int|null
     */
    public function getTotalSoldCount()
    {
        return $this->TotalSoldCount;
    }
    /**
     * Set TotalSoldCount value
     * @param int $totalSoldCount
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setTotalSoldCount($totalSoldCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalSoldCount) && !is_numeric($totalSoldCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalSoldCount)), __LINE__);
        }
        $this->TotalSoldCount = $totalSoldCount;
        return $this;
    }
    /**
     * Get TotalSoldValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalSoldValue()
    {
        return $this->TotalSoldValue;
    }
    /**
     * Set TotalSoldValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setTotalSoldValue(\macropage\ebaysdk\trading\StructType\AmountType $totalSoldValue = null)
    {
        $this->TotalSoldValue = $totalSoldValue;
        return $this;
    }
    /**
     * Get SoldDurationInDays value
     * @return int|null
     */
    public function getSoldDurationInDays()
    {
        return $this->SoldDurationInDays;
    }
    /**
     * Set SoldDurationInDays value
     * @param int $soldDurationInDays
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
     */
    public function setSoldDurationInDays($soldDurationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($soldDurationInDays) && !is_numeric($soldDurationInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($soldDurationInDays)), __LINE__);
        }
        $this->SoldDurationInDays = $soldDurationInDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType
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
