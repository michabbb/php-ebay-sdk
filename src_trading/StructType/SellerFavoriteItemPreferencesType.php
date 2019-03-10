<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFavoriteItemPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data for the seller favorite item preferences, i.e. the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
 * @subpackage Structs
 */
class SellerFavoriteItemPreferencesType extends AbstractStructBase
{
    /**
     * The SearchKeywords
     * Meta informations extracted from the WSDL
     * - documentation: The keywords in the item title for the automatic item search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $SearchKeywords;
    /**
     * The StoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: (For eBay Store owners only) The store custom category for the automatic item search criteria.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: The listing format (fixed price, auction, etc) for the automatic item search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The SearchSortOrder
     * Meta informations extracted from the WSDL
     * - documentation: The sort order chosen from the standard ebay sorts for the automatic search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $SearchSortOrder;
    /**
     * The MinPrice
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the lower limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MinPrice;
    /**
     * The MaxPrice
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the upper limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxPrice;
    /**
     * The FavoriteItemID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the list of favorite items. | Type that represents the unique identifier for an eBay listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FavoriteItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerFavoriteItemPreferencesType
     * @uses SellerFavoriteItemPreferencesType::setSearchKeywords()
     * @uses SellerFavoriteItemPreferencesType::setStoreCategoryID()
     * @uses SellerFavoriteItemPreferencesType::setListingType()
     * @uses SellerFavoriteItemPreferencesType::setSearchSortOrder()
     * @uses SellerFavoriteItemPreferencesType::setMinPrice()
     * @uses SellerFavoriteItemPreferencesType::setMaxPrice()
     * @uses SellerFavoriteItemPreferencesType::setFavoriteItemID()
     * @uses SellerFavoriteItemPreferencesType::setAny()
     * @param string $searchKeywords
     * @param int $storeCategoryID
     * @param string $listingType
     * @param string $searchSortOrder
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @param string[] $favoriteItemID
     * @param \DOMDocument $any
     */
    public function __construct($searchKeywords = null, $storeCategoryID = null, $listingType = null, $searchSortOrder = null, \macropage\ebaysdk\trading\StructType\AmountType $minPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null, array $favoriteItemID = array(), \DOMDocument $any = null)
    {
        $this
            ->setSearchKeywords($searchKeywords)
            ->setStoreCategoryID($storeCategoryID)
            ->setListingType($listingType)
            ->setSearchSortOrder($searchSortOrder)
            ->setMinPrice($minPrice)
            ->setMaxPrice($maxPrice)
            ->setFavoriteItemID($favoriteItemID)
            ->setAny($any);
    }
    /**
     * Get SearchKeywords value
     * @return string|null
     */
    public function getSearchKeywords()
    {
        return $this->SearchKeywords;
    }
    /**
     * Set SearchKeywords value
     * @param string $searchKeywords
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchKeywords($searchKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($searchKeywords) && !is_string($searchKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchKeywords)), __LINE__);
        }
        $this->SearchKeywords = $searchKeywords;
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
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
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get SearchSortOrder value
     * @return string|null
     */
    public function getSearchSortOrder()
    {
        return $this->SearchSortOrder;
    }
    /**
     * Set SearchSortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchSortOrder
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchSortOrder($searchSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid($searchSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $searchSortOrder, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SearchSortOrder = $searchSortOrder;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setMinPrice(\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null)
    {
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setMaxPrice(\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null)
    {
        $this->MaxPrice = $maxPrice;
        return $this;
    }
    /**
     * Get FavoriteItemID value
     * @return string[]|null
     */
    public function getFavoriteItemID()
    {
        return $this->FavoriteItemID;
    }
    /**
     * Set FavoriteItemID value
     * @throws \InvalidArgumentException
     * @param string[] $favoriteItemID
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setFavoriteItemID(array $favoriteItemID = array())
    {
        foreach ($favoriteItemID as $sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The FavoriteItemID property can only contain items of string, "%s" given', is_object($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) ? get_class($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) : gettype($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem)), __LINE__);
            }
        }
        $this->FavoriteItemID = $favoriteItemID;
        return $this;
    }
    /**
     * Add item to FavoriteItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function addToFavoriteItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FavoriteItemID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FavoriteItemID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
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
