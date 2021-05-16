<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFavoriteItemPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for the seller favorite item preferences, i.e. the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
 * @subpackage Structs
 */
class SellerFavoriteItemPreferencesType extends AbstractStructBase
{
    /**
     * The SearchKeywords
     * Meta information extracted from the WSDL
     * - documentation: The keywords in the item title for the automatic item search criteria.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchKeywords = null;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: (For eBay Store owners only) The store custom category for the automatic item search criteria.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StoreCategoryID = null;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: The listing format (fixed price, auction, etc) for the automatic item search criteria.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingType = null;
    /**
     * The SearchSortOrder
     * Meta information extracted from the WSDL
     * - documentation: The sort order chosen from the standard ebay sorts for the automatic search criteria.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchSortOrder = null;
    /**
     * The MinPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the lower limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MinPrice = null;
    /**
     * The MaxPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the upper limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxPrice = null;
    /**
     * The FavoriteItemID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the list of favorite items. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $FavoriteItemID = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $searchKeywords = null, ?int $storeCategoryID = null, ?string $listingType = null, ?string $searchSortOrder = null, ?\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null, array $favoriteItemID = [], $any = null)
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
    public function getSearchKeywords(): ?string
    {
        return $this->SearchKeywords;
    }
    /**
     * Set SearchKeywords value
     * @param string $searchKeywords
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchKeywords(?string $searchKeywords = null): self
    {
        // validation for constraint: string
        if (!is_null($searchKeywords) && !is_string($searchKeywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchKeywords, true), gettype($searchKeywords)), __LINE__);
        }
        $this->SearchKeywords = $searchKeywords;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
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
     * Get ListingType value
     * @return string|null
     */
    public function getListingType(): ?string
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setListingType(?string $listingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        
        return $this;
    }
    /**
     * Get SearchSortOrder value
     * @return string|null
     */
    public function getSearchSortOrder(): ?string
    {
        return $this->SearchSortOrder;
    }
    /**
     * Set SearchSortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchSortOrder
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchSortOrder(?string $searchSortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid($searchSortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType', is_array($searchSortOrder) ? implode(', ', $searchSortOrder) : var_export($searchSortOrder, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SearchSortOrder = $searchSortOrder;
        
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setMinPrice(?\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null): self
    {
        $this->MinPrice = $minPrice;
        
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setMaxPrice(?\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null): self
    {
        $this->MaxPrice = $maxPrice;
        
        return $this;
    }
    /**
     * Get FavoriteItemID value
     * @return string[]
     */
    public function getFavoriteItemID(): array
    {
        return $this->FavoriteItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteItemIDForArrayConstraintsFromSetFavoriteItemID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem)) {
                $invalidValues[] = is_object($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) ? get_class($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) : sprintf('%s(%s)', gettype($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem), var_export($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FavoriteItemID value
     * @throws InvalidArgumentException
     * @param string[] $favoriteItemID
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function setFavoriteItemID(array $favoriteItemID = []): self
    {
        // validation for constraint: array
        if ('' !== ($favoriteItemIDArrayErrorMessage = self::validateFavoriteItemIDForArrayConstraintsFromSetFavoriteItemID($favoriteItemID))) {
            throw new InvalidArgumentException($favoriteItemIDArrayErrorMessage, __LINE__);
        }
        $this->FavoriteItemID = $favoriteItemID;
        
        return $this;
    }
    /**
     * Add item to FavoriteItemID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public function addToFavoriteItemID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FavoriteItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteItemID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
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
