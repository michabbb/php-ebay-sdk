<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleListingsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables the seller to change the item listings that are affected by a promotional sale. To use this call, the seller must be a registered eBay Store owner.
 * @subpackage Structs
 */
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
    /**
     * The PromotionalSaleID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the seller's promotional sale. Based on the <b>Action</b> value, listings will either be added to or removed from the promotional sale.
     * - minOccurs: 0
     * @var int
     */
    public $PromotionalSaleID;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: This required field determines whether you are adding (specify 'Add') or removing (specify 'Delete) one or more listings from the promotional sale identified by the <b>PromotionalSaleID</b> value in the request. <br><br> If you
     * specify 'Delete', you must include one or more <b>ItemID</b> values under the <b>PromotionalSaleItemIDArray</b> container, and you cannot use the other filter options in the request. If you specify 'Add', you can add one or more listings using any of
     * the filtering options in the request. Active auction listings that have one or more bids cannot be added to or removed from a promotional sale.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The PromotionalSaleItemIDArray
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is
     * required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public $PromotionalSaleItemIDArray;
    /**
     * The StoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: If a <b>StoreCategoryID</b> value is included in the call request, all active items in this eBay Store category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: If a <b>CategoryID</b> value is included in the call request, all active items in this eBay category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryID;
    /**
     * The AllFixedPriceItems
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included and set to 'true' in the call request, all fixed-price listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var bool
     */
    public $AllFixedPriceItems;
    /**
     * The AllStoreInventoryItems
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated and should no longer be used because Store Inventory is no longer a supported listing format.
     * - minOccurs: 0
     * @var bool
     */
    public $AllStoreInventoryItems;
    /**
     * The AllAuctionItems
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included and set to 'true' in the call request, all auction listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var bool
     */
    public $AllAuctionItems;
    /**
     * Constructor method for SetPromotionalSaleListingsRequestType
     * @uses SetPromotionalSaleListingsRequestType::setPromotionalSaleID()
     * @uses SetPromotionalSaleListingsRequestType::setAction()
     * @uses SetPromotionalSaleListingsRequestType::setPromotionalSaleItemIDArray()
     * @uses SetPromotionalSaleListingsRequestType::setStoreCategoryID()
     * @uses SetPromotionalSaleListingsRequestType::setCategoryID()
     * @uses SetPromotionalSaleListingsRequestType::setAllFixedPriceItems()
     * @uses SetPromotionalSaleListingsRequestType::setAllStoreInventoryItems()
     * @uses SetPromotionalSaleListingsRequestType::setAllAuctionItems()
     * @param int $promotionalSaleID
     * @param string $action
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @param int $storeCategoryID
     * @param int $categoryID
     * @param bool $allFixedPriceItems
     * @param bool $allStoreInventoryItems
     * @param bool $allAuctionItems
     */
    public function __construct($promotionalSaleID = null, $action = null, \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null, $storeCategoryID = null, $categoryID = null, $allFixedPriceItems = null, $allStoreInventoryItems = null, $allAuctionItems = null)
    {
        $this
            ->setPromotionalSaleID($promotionalSaleID)
            ->setAction($action)
            ->setPromotionalSaleItemIDArray($promotionalSaleItemIDArray)
            ->setStoreCategoryID($storeCategoryID)
            ->setCategoryID($categoryID)
            ->setAllFixedPriceItems($allFixedPriceItems)
            ->setAllStoreInventoryItems($allStoreInventoryItems)
            ->setAllAuctionItems($allAuctionItems);
    }
    /**
     * Get PromotionalSaleID value
     * @return int|null
     */
    public function getPromotionalSaleID()
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleID($promotionalSaleID = null)
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !is_numeric($promotionalSaleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get PromotionalSaleItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getPromotionalSaleItemIDArray()
    {
        return $this->PromotionalSaleItemIDArray;
    }
    /**
     * Set PromotionalSaleItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleItemIDArray(\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null)
    {
        $this->PromotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        return $this;
    }
    /**
     * Get StoreCategoryID value
     * @return int|null
     */
    public function getStoreCategoryID()
    {
        return $this->StoreCategoryID;
    }
    /**
     * Set StoreCategoryID value
     * @param int $storeCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setStoreCategoryID($storeCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($storeCategoryID) && !is_numeric($storeCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($storeCategoryID)), __LINE__);
        }
        $this->StoreCategoryID = $storeCategoryID;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !is_numeric($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get AllFixedPriceItems value
     * @return bool|null
     */
    public function getAllFixedPriceItems()
    {
        return $this->AllFixedPriceItems;
    }
    /**
     * Set AllFixedPriceItems value
     * @param bool $allFixedPriceItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllFixedPriceItems($allFixedPriceItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($allFixedPriceItems) && !is_bool($allFixedPriceItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allFixedPriceItems)), __LINE__);
        }
        $this->AllFixedPriceItems = $allFixedPriceItems;
        return $this;
    }
    /**
     * Get AllStoreInventoryItems value
     * @return bool|null
     */
    public function getAllStoreInventoryItems()
    {
        return $this->AllStoreInventoryItems;
    }
    /**
     * Set AllStoreInventoryItems value
     * @param bool $allStoreInventoryItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllStoreInventoryItems($allStoreInventoryItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($allStoreInventoryItems) && !is_bool($allStoreInventoryItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allStoreInventoryItems)), __LINE__);
        }
        $this->AllStoreInventoryItems = $allStoreInventoryItems;
        return $this;
    }
    /**
     * Get AllAuctionItems value
     * @return bool|null
     */
    public function getAllAuctionItems()
    {
        return $this->AllAuctionItems;
    }
    /**
     * Set AllAuctionItems value
     * @param bool $allAuctionItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllAuctionItems($allAuctionItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($allAuctionItems) && !is_bool($allAuctionItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allAuctionItems)), __LINE__);
        }
        $this->AllAuctionItems = $allAuctionItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
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
