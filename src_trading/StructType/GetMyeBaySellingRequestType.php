<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBaySellingRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves information regarding the user's selling activity, such as items that the user is currently selling (the Active list), auction listings that have bids, sold items, and unsold items.
 * @subpackage Structs
 */
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    /**
     * The ScheduledList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time. <br><br> The user also has the
     * option of using pagination and sorting for the list of Scheduled listings that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $ScheduledList;
    /**
     * The ActiveList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com. <br><br> The user also has the option of using pagination and sorting for the list of active
     * listings that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $ActiveList;
    /**
     * The SoldList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items. <br><br> The user also has the option of using pagination and sorting for the list of sold items that
     * will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $SoldList;
    /**
     * The UnsoldList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase. <br><br> The user also has the option of using pagination and sorting for the list of
     * unsold items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $UnsoldList;
    /**
     * The BidList
     * Meta informations extracted from the WSDL
     * - documentation: This container is deprecated as a Bid List is no longer returned in <b>GetMyeBaySelling</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $BidList;
    /**
     * The DeletedFromSoldList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromSoldList.Include</b> field to <code>true</code> to return the list of sold order line items that have since been deleted from the seller's My eBay page. <br><br> The user also has the
     * option of using pagination and sorting for the list of deleted, sold items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $DeletedFromSoldList;
    /**
     * The DeletedFromUnsoldList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromUnsoldList.Include</b> field to <code>true</code> to return the list of unsold order line items that have since been deleted from the seller's My eBay page. <br><br> The user also has
     * the option of using pagination and sorting for the list of deleted, unsold items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $DeletedFromUnsoldList;
    /**
     * The SellingSummary
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and
     * values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $SellingSummary;
    /**
     * The HideVariations
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $HideVariations;
    /**
     * Constructor method for GetMyeBaySellingRequestType
     * @uses GetMyeBaySellingRequestType::setScheduledList()
     * @uses GetMyeBaySellingRequestType::setActiveList()
     * @uses GetMyeBaySellingRequestType::setSoldList()
     * @uses GetMyeBaySellingRequestType::setUnsoldList()
     * @uses GetMyeBaySellingRequestType::setBidList()
     * @uses GetMyeBaySellingRequestType::setDeletedFromSoldList()
     * @uses GetMyeBaySellingRequestType::setDeletedFromUnsoldList()
     * @uses GetMyeBaySellingRequestType::setSellingSummary()
     * @uses GetMyeBaySellingRequestType::setHideVariations()
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromSoldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromUnsoldList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary
     * @param bool $hideVariations
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromSoldList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromUnsoldList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary = null, $hideVariations = null)
    {
        $this
            ->setScheduledList($scheduledList)
            ->setActiveList($activeList)
            ->setSoldList($soldList)
            ->setUnsoldList($unsoldList)
            ->setBidList($bidList)
            ->setDeletedFromSoldList($deletedFromSoldList)
            ->setDeletedFromUnsoldList($deletedFromUnsoldList)
            ->setSellingSummary($sellingSummary)
            ->setHideVariations($hideVariations);
    }
    /**
     * Get ScheduledList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getScheduledList()
    {
        return $this->ScheduledList;
    }
    /**
     * Set ScheduledList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setScheduledList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $scheduledList = null)
    {
        $this->ScheduledList = $scheduledList;
        return $this;
    }
    /**
     * Get ActiveList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getActiveList()
    {
        return $this->ActiveList;
    }
    /**
     * Set ActiveList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setActiveList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $activeList = null)
    {
        $this->ActiveList = $activeList;
        return $this;
    }
    /**
     * Get SoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getSoldList()
    {
        return $this->SoldList;
    }
    /**
     * Set SoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setSoldList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $soldList = null)
    {
        $this->SoldList = $soldList;
        return $this;
    }
    /**
     * Get UnsoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getUnsoldList()
    {
        return $this->UnsoldList;
    }
    /**
     * Set UnsoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setUnsoldList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $unsoldList = null)
    {
        $this->UnsoldList = $unsoldList;
        return $this;
    }
    /**
     * Get BidList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setBidList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get DeletedFromSoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromSoldList()
    {
        return $this->DeletedFromSoldList;
    }
    /**
     * Set DeletedFromSoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromSoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setDeletedFromSoldList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromSoldList = null)
    {
        $this->DeletedFromSoldList = $deletedFromSoldList;
        return $this;
    }
    /**
     * Get DeletedFromUnsoldList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->DeletedFromUnsoldList;
    }
    /**
     * Set DeletedFromUnsoldList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromUnsoldList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setDeletedFromUnsoldList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromUnsoldList = null)
    {
        $this->DeletedFromUnsoldList = $deletedFromUnsoldList;
        return $this;
    }
    /**
     * Get SellingSummary value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getSellingSummary()
    {
        return $this->SellingSummary;
    }
    /**
     * Set SellingSummary value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setSellingSummary(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $sellingSummary = null)
    {
        $this->SellingSummary = $sellingSummary;
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations()
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
     */
    public function setHideVariations($hideVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType
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
