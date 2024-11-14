<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBaySellingRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves information regarding the user's selling activity, such as items that the user is currently selling (the Active list), auction listings that have bids, sold items, and unsold items.
 * @subpackage Structs
 */
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    /**
     * The ScheduledList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time. <br><br> The user also has the
     * option of using pagination and sorting for the list of Scheduled listings that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $ScheduledList = null;
    /**
     * The ActiveList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com. <br><br> The user also has the option of using pagination and sorting for the list of active
     * listings that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $ActiveList = null;
    /**
     * The SoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items. <br><br> The user also has the option of using pagination and sorting for the list of sold items that
     * will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $SoldList = null;
    /**
     * The UnsoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase. <br><br> The user also has the option of using pagination and sorting for the list of
     * unsold items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $UnsoldList = null;
    /**
     * The SellingSummary
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and
     * values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $SellingSummary = null;
    /**
     * The HideVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HideVariations = null;
    /**
     * Constructor method for GetMyeBaySellingRequestType
     * @uses GetMyeBaySellingRequestType::setScheduledList()
     * @uses GetMyeBaySellingRequestType::setActiveList()
     * @uses GetMyeBaySellingRequestType::setSoldList()
     * @uses GetMyeBaySellingRequestType::setUnsoldList()
     * @uses GetMyeBaySellingRequestType::setSellingSummary()
     * @uses GetMyeBaySellingRequestType::setHideVariations()
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary
     * @param bool $hideVariations
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary = null, ?bool $hideVariations = null)
    {
        $this
            ->setScheduledList($scheduledList)
            ->setActiveList($activeList)
            ->setSoldList($soldList)
            ->setUnsoldList($unsoldList)
            ->setSellingSummary($sellingSummary)
            ->setHideVariations($hideVariations);
    }
    /**
     * Get ScheduledList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getScheduledList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->ScheduledList;
    }
    /**
     * Set ScheduledList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setScheduledList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList = null): self
    {
        $this->ScheduledList = $scheduledList;
        
        return $this;
    }
    /**
     * Get ActiveList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getActiveList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->ActiveList;
    }
    /**
     * Set ActiveList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setActiveList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList = null): self
    {
        $this->ActiveList = $activeList;
        
        return $this;
    }
    /**
     * Get SoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getSoldList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->SoldList;
    }
    /**
     * Set SoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setSoldList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList = null): self
    {
        $this->SoldList = $soldList;
        
        return $this;
    }
    /**
     * Get UnsoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getUnsoldList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->UnsoldList;
    }
    /**
     * Set UnsoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setUnsoldList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList = null): self
    {
        $this->UnsoldList = $unsoldList;
        
        return $this;
    }
    /**
     * Get SellingSummary value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getSellingSummary(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->SellingSummary;
    }
    /**
     * Set SellingSummary value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setSellingSummary(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary = null): self
    {
        $this->SellingSummary = $sellingSummary;
        
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations(): ?bool
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setHideVariations(?bool $hideVariations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideVariations, true), gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        
        return $this;
    }
}
