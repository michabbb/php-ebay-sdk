<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleListingsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>SetPromotionalSaleListings</b> call is being deprecated. No new features and/or fields will be added to <b>SetPromotionalSaleListings</b>, and it will no longer be supported after May 17,
 * 2021. eBay recommends that sellers use the Marketing API, which provides all Promotions Manager and Promoted Listings capabilities. The Marketing API will continue to be improved and enhanced as more marketing features become available to sellers.
 * </span> Enables the seller to change the item listings that are affected by a promotional sale. To use this call, the seller must be a registered eBay Store owner.
 * @subpackage Structs
 */
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
    /**
     * The PromotionalSaleID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the seller's promotional sale. Based on the <b>Action</b> value, listings will either be added to or removed from the promotional sale.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PromotionalSaleID = null;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: This required field determines whether you are adding (specify 'Add') or removing (specify 'Delete) one or more listings from the promotional sale identified by the <b>PromotionalSaleID</b> value in the request. <br><br> If you
     * specify 'Delete', you must include one or more <b>ItemID</b> values under the <b>PromotionalSaleItemIDArray</b> container, and you cannot use the other filter options in the request. If you specify 'Add', you can add one or more listings using any of
     * the filtering options in the request. Active auction listings that have one or more bids cannot be added to or removed from a promotional sale.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The PromotionalSaleItemIDArray
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is
     * required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $PromotionalSaleItemIDArray = null;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: If a <b>StoreCategoryID</b> value is included in the call request, all active items in this eBay Store category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StoreCategoryID = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: If a <b>CategoryID</b> value is included in the call request, all active items in this eBay category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryID = null;
    /**
     * The AllFixedPriceItems
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to 'true' in the call request, all fixed-price listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllFixedPriceItems = null;
    /**
     * The AllStoreInventoryItems
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated and should no longer be used because Store Inventory is no longer a supported listing format.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllStoreInventoryItems = null;
    /**
     * The AllAuctionItems
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to 'true' in the call request, all auction listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllAuctionItems = null;
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
    public function __construct(?int $promotionalSaleID = null, ?string $action = null, ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null, ?int $storeCategoryID = null, ?int $categoryID = null, ?bool $allFixedPriceItems = null, ?bool $allStoreInventoryItems = null, ?bool $allAuctionItems = null)
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
    public function getPromotionalSaleID(): ?int
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleID(?int $promotionalSaleID = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !(is_int($promotionalSaleID) || ctype_digit($promotionalSaleID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionalSaleID, true), gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get PromotionalSaleItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getPromotionalSaleItemIDArray(): ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType
    {
        return $this->PromotionalSaleItemIDArray;
    }
    /**
     * Set PromotionalSaleItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleItemIDArray(?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null): self
    {
        $this->PromotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        
        return $this;
    }
    /**
     * Get StoreCategoryID value
     * @return int|null
     */
    public function getStoreCategoryID(): ?int
    {
        return $this->StoreCategoryID;
    }
    /**
     * Set StoreCategoryID value
     * @param int $storeCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setStoreCategoryID(?int $storeCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($storeCategoryID) && !(is_int($storeCategoryID) || ctype_digit($storeCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeCategoryID, true), gettype($storeCategoryID)), __LINE__);
        }
        $this->StoreCategoryID = $storeCategoryID;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setCategoryID(?int $categoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !(is_int($categoryID) || ctype_digit($categoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get AllFixedPriceItems value
     * @return bool|null
     */
    public function getAllFixedPriceItems(): ?bool
    {
        return $this->AllFixedPriceItems;
    }
    /**
     * Set AllFixedPriceItems value
     * @param bool $allFixedPriceItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllFixedPriceItems(?bool $allFixedPriceItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allFixedPriceItems) && !is_bool($allFixedPriceItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allFixedPriceItems, true), gettype($allFixedPriceItems)), __LINE__);
        }
        $this->AllFixedPriceItems = $allFixedPriceItems;
        
        return $this;
    }
    /**
     * Get AllStoreInventoryItems value
     * @return bool|null
     */
    public function getAllStoreInventoryItems(): ?bool
    {
        return $this->AllStoreInventoryItems;
    }
    /**
     * Set AllStoreInventoryItems value
     * @param bool $allStoreInventoryItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllStoreInventoryItems(?bool $allStoreInventoryItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allStoreInventoryItems) && !is_bool($allStoreInventoryItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allStoreInventoryItems, true), gettype($allStoreInventoryItems)), __LINE__);
        }
        $this->AllStoreInventoryItems = $allStoreInventoryItems;
        
        return $this;
    }
    /**
     * Get AllAuctionItems value
     * @return bool|null
     */
    public function getAllAuctionItems(): ?bool
    {
        return $this->AllAuctionItems;
    }
    /**
     * Set AllAuctionItems value
     * @param bool $allAuctionItems
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType
     */
    public function setAllAuctionItems(?bool $allAuctionItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allAuctionItems) && !is_bool($allAuctionItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allAuctionItems, true), gettype($allAuctionItems)), __LINE__);
        }
        $this->AllAuctionItems = $allAuctionItems;
        
        return $this;
    }
}
