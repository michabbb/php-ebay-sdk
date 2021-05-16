<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBaySellingResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns summary and detail information about items the user is selling, items scheduled to sell, currently listed, sold, and closed but not sold.
 * @subpackage Structs
 */
class GetMyeBaySellingResponseType extends AbstractResponseType
{
    /**
     * The SellingSummary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of seller activity counts and values. For this container to be returned, the user must include the <b>SellingSummary.Include</b> field in the request and set its value to <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingSummaryType $SellingSummary = null;
    /**
     * The ScheduledList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items that are scheduled to become active at a future date/time. This container will be returned if the eBay user has one or more listings scheduled to become active at a future date/time. <br><br> This
     * container will not be returned in the response (even if there are listings scheduled to become active) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ScheduledList.Include</b> field is omitted or set to
     * <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $ScheduledList = null;
    /**
     * The ActiveList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of active listings. This container will be returned if the eBay user has one or more active listings on eBay.com. <br><br> This container will not be returned in the response (even if there are one or more
     * active listings) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ActiveList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $ActiveList = null;
    /**
     * The SoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of order line items that have been sold. This container will be returned if the eBay user has one or more listings that have had recent sales. <br><br> This container will not be returned in the response (even
     * if there are one or more sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SoldList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $SoldList = null;
    /**
     * The UnsoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have ended without sales. This container will be returned if the eBay user has one or more listings that have ended without sales. <br><br> This container will not be returned in the response
     * (even if there are one or more listings that ended without sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UnsoldList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $UnsoldList = null;
    /**
     * The Summary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of seller activity counts and values. This container is always returned if there has been recent sell activity.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType $Summary = null;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer applicable to <b>GetMyeBaySelling</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $BidList = null;
    /**
     * The DeletedFromSoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have had sales but have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay. <br><br> This
     * container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is
     * omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $DeletedFromSoldList = null;
    /**
     * The DeletedFromUnsoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have ended without sales and have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay. <br><br>
     * This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field
     * is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $DeletedFromUnsoldList = null;
    /**
     * Constructor method for GetMyeBaySellingResponseType
     * @uses GetMyeBaySellingResponseType::setSellingSummary()
     * @uses GetMyeBaySellingResponseType::setScheduledList()
     * @uses GetMyeBaySellingResponseType::setActiveList()
     * @uses GetMyeBaySellingResponseType::setSoldList()
     * @uses GetMyeBaySellingResponseType::setUnsoldList()
     * @uses GetMyeBaySellingResponseType::setSummary()
     * @uses GetMyeBaySellingResponseType::setBidList()
     * @uses GetMyeBaySellingResponseType::setDeletedFromSoldList()
     * @uses GetMyeBaySellingResponseType::setDeletedFromUnsoldList()
     * @param \macropage\ebaysdk\trading\StructType\SellingSummaryType $sellingSummary
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $scheduledList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $activeList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $soldList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $unsoldList
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType $summary
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromUnsoldList
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingSummaryType $sellingSummary = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $scheduledList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $activeList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $soldList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $unsoldList = null, ?\macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType $summary = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromUnsoldList = null)
    {
        $this
            ->setSellingSummary($sellingSummary)
            ->setScheduledList($scheduledList)
            ->setActiveList($activeList)
            ->setSoldList($soldList)
            ->setUnsoldList($unsoldList)
            ->setSummary($summary)
            ->setBidList($bidList)
            ->setDeletedFromSoldList($deletedFromSoldList)
            ->setDeletedFromUnsoldList($deletedFromUnsoldList);
    }
    /**
     * Get SellingSummary value
     * @return \macropage\ebaysdk\trading\StructType\SellingSummaryType|null
     */
    public function getSellingSummary(): ?\macropage\ebaysdk\trading\StructType\SellingSummaryType
    {
        return $this->SellingSummary;
    }
    /**
     * Set SellingSummary value
     * @param \macropage\ebaysdk\trading\StructType\SellingSummaryType $sellingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setSellingSummary(?\macropage\ebaysdk\trading\StructType\SellingSummaryType $sellingSummary = null): self
    {
        $this->SellingSummary = $sellingSummary;
        
        return $this;
    }
    /**
     * Get ScheduledList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getScheduledList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->ScheduledList;
    }
    /**
     * Set ScheduledList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $scheduledList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setScheduledList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $scheduledList = null): self
    {
        $this->ScheduledList = $scheduledList;
        
        return $this;
    }
    /**
     * Get ActiveList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getActiveList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->ActiveList;
    }
    /**
     * Set ActiveList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $activeList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setActiveList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $activeList = null): self
    {
        $this->ActiveList = $activeList;
        
        return $this;
    }
    /**
     * Get SoldList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getSoldList(): ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
    {
        return $this->SoldList;
    }
    /**
     * Set SoldList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $soldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setSoldList(?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $soldList = null): self
    {
        $this->SoldList = $soldList;
        
        return $this;
    }
    /**
     * Get UnsoldList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getUnsoldList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->UnsoldList;
    }
    /**
     * Set UnsoldList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $unsoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setUnsoldList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $unsoldList = null): self
    {
        $this->UnsoldList = $unsoldList;
        
        return $this;
    }
    /**
     * Get Summary value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType|null
     */
    public function getSummary(): ?\macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType $summary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setSummary(?\macropage\ebaysdk\trading\StructType\MyeBaySellingSummaryType $summary = null): self
    {
        $this->Summary = $summary;
        
        return $this;
    }
    /**
     * Get BidList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getBidList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setBidList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList = null): self
    {
        $this->BidList = $bidList;
        
        return $this;
    }
    /**
     * Get DeletedFromSoldList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getDeletedFromSoldList(): ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
    {
        return $this->DeletedFromSoldList;
    }
    /**
     * Set DeletedFromSoldList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setDeletedFromSoldList(?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList = null): self
    {
        $this->DeletedFromSoldList = $deletedFromSoldList;
        
        return $this;
    }
    /**
     * Get DeletedFromUnsoldList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getDeletedFromUnsoldList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->DeletedFromUnsoldList;
    }
    /**
     * Set DeletedFromUnsoldList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromUnsoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType
     */
    public function setDeletedFromUnsoldList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromUnsoldList = null): self
    {
        $this->DeletedFromUnsoldList = $deletedFromUnsoldList;
        
        return $this;
    }
}
