<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>FavoriteSearch</b> container returned in <b>GetMyeBayBuying</b>. The <b>FavoriteSearch</b> container consists of options and filtering used in a buyer's Saved Search on My eBay, and is only returned in
 * <b>GetMyeBayBuying</b> if the <b>FavoriteSearches</b> container is included the request, and if there is at least one Saved Search for the buyer.
 * @subpackage Structs
 */
class MyeBayFavoriteSearchType extends AbstractStructBase
{
    /**
     * The SearchName
     * Meta information extracted from the WSDL
     * - documentation: The name of the buyer's Saved Search on My eBay. The name defaults to the user's original search string, or the user has the option of modifying the name of the Saved Search.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchName = null;
    /**
     * The SearchQuery
     * Meta information extracted from the WSDL
     * - documentation: This is the URL of the buyer's Saved Search on My eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchQuery = null;
    /**
     * The QueryKeywords
     * Meta information extracted from the WSDL
     * - documentation: This string is the original search string of the buyer's Saved Search on My eBay. This is the string that the user input into the search field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QueryKeywords = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique identifier (Category ID) of the category in which the user was searching for the item for the Saved Search. Specifying a category in a query restricts the search to a specific category. If the Saved Search is not
     * restricted to a specific category, the <b>CategoryID</b> field will not appear in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The ItemSort
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the "Sort by" value that the user specified in the Saved Search. Some of the ways buyers can sort items include by Best Match (generally, the default), item price, item price + shipping, listing end
     * time, and item distance (relative to the buyer's shipping address). Available sort values may vary for each search, but below is the complete set of values that may be returned in this field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemSort = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: The <b>SortOrder</b> value works in conjunction with the <b>ItemSort</b> value, and indicates whether Saved Search results are returned in ascending (low to high values) or descending (high to low values) order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortOrder = null;
    /**
     * The EndTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values indicates that a date range has been specified in the Saved Search. Only listings ending during the date range defined with the <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values are
     * retrieved in the search results. <br/><br/> The <b>EndTimeFrom</b> value indicates the beginning of the date range.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeFrom = null;
    /**
     * The EndTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The appearance of <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values in the response indicates that a date range has been specified in the Saved Search. Only listings ending during the date range defined with the <b>EndTimeFrom</b> and
     * <b>EndTimeFrom</b> values are retrieved in the search results. <br/><br/> The <b>EndTimeTo</b> value indicates the ending of the date range.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeTo = null;
    /**
     * The MaxDistance
     * Meta information extracted from the WSDL
     * - documentation: The appearance of a <b>MaxDistance</b> value in the response indicates that a proximity (Items near me) filter has been specified in the Saved Search. <br/><br/> The <b>MaxDistance</b> value is the maximum distance (in miles) away
     * from the buyer's postal code (specified or default) that an item may be located (based on the <b>PostalCode</b> value returned in the <b>FavoriteSearch</b> container). In a Saved Search, a buyer can supply a postal code or can base that postal code
     * on a major city. If neither one of these methods for selecting a postal code is used, the postal code defaults to the buyer's primary shipping address. Only items located within the <b>MaxDistance</b> value are returned in the search results.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxDistance = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: The <b>PostalCode</b> value is either the postal code for the buyer's primary shipping address, or it is the postal code specified through the proximity (Items near me) filter of a Saved Search. In a Saved Search, a buyer can supply
     * a postal code or can base that postal code on a major city.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The ItemType
     * Meta information extracted from the WSDL
     * - documentation: Enumerated value that provides more information on the type of listing type filtering the buyer used when setting up a Saved Search in My eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemType = null;
    /**
     * The PriceMax
     * Meta information extracted from the WSDL
     * - documentation: The appearance of a <b>PriceMax</b> value indicates that a maximum price filter has been specified in the Saved Search. Only listings with an item price at or below the <b>PriceMax</b> value are retrieved in the search results.
     * <br/><br/> <b>PriceMax</b> can be used in conjunction with <b>PriceMin</b> in a Saved Search to specify a price range. Only listings with item prices within this price range are retrieved in the search results.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PriceMax = null;
    /**
     * The PriceMin
     * Meta information extracted from the WSDL
     * - documentation: The appearance of a <b>PriceMin</b> value indicates that a minimum price filter has been specified in the Saved Search. Only listings with an item price at or above the <b>PriceMin</b> value are retrieved in the search results.
     * <br/><br/> <b>PriceMin</b> can be used in conjunction with <b>PriceMax</b> in a Saved Search to specify a price range. Only listings with item prices within this price range are retrieved in the search results.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PriceMin = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: The appearance of a <b>Currency</b> value indicates that a currency filter has been specified in the Saved Search. Only listings with the specified <b>Currency</b> value are retrieved in the search results.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The BidCountMax
     * Meta information extracted from the WSDL
     * - documentation: The BidCountMax value in a My eBay Favorite Search. The BidCountMax limits the search results to items with a maximum number of bids.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidCountMax = null;
    /**
     * The BidCountMin
     * Meta information extracted from the WSDL
     * - documentation: The BidCountMin value in a My eBay Favorite Search. The BidCountMin limits the results of a search to items with a maximum number of bids.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidCountMin = null;
    /**
     * The SearchFlag
     * Meta information extracted from the WSDL
     * - documentation: The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to specify whether you want to include charity listings, free-shipping listings, and listings with other features in your search.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $SearchFlag = [];
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported/applicable.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * The PreferredLocation
     * Meta information extracted from the WSDL
     * - documentation: The PreferredLocation value of a My eBay Favorite Search. The PreferredLocation specifies the criteria for filtering search results by site, where site is determined by the site ID in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PreferredLocation = null;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a specific seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $SellerID = [];
    /**
     * The SellerIDExclude
     * Meta information extracted from the WSDL
     * - documentation: The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits the search results to exclude items sold by a specific seller or by specific sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $SellerIDExclude = [];
    /**
     * The ItemsAvailableTo
     * Meta information extracted from the WSDL
     * - documentation: The ItemsAvailableTo value in a My eBay Favorite Search. ItemsAvailableTo limits the result set to just those items available to the specified country.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemsAvailableTo = null;
    /**
     * The ItemsLocatedIn
     * Meta information extracted from the WSDL
     * - documentation: The ItemsLocatedIn value in a My eBay Favorite Search. ItemsLocatedIn limits the result set to just those items located in the specified country.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemsLocatedIn = null;
    /**
     * The SellerBusinessType
     * Meta information extracted from the WSDL
     * - documentation: The SellerBusinessType value in a My eBay Favorite Search. The SellerBusinessType limits the search results to those of a particular seller business type such as commercial or private. SellerBusinessType is only available for sites
     * that have business seller features enabled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerBusinessType = null;
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - documentation: The Condition value in a My eBay Favorite Search. Condition limits the results to new or used items, plus items that have no condition specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Condition = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The Quantity value in a My eBay Favorite Search. The Quantity limits the search results to listings that offer a certain number of items matching the query. The Quantity field is used with QuantityOperator to specify that you are
     * seeking listings with quantities greater than, equal to, or less than the value you specify in Quantity.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The QuantityOperator
     * Meta information extracted from the WSDL
     * - documentation: The Quantity Operator value in a My eBay Favorite Search. The Quantity Operator limits the results to listings with quantities greater than, equal to, or less than the value you specify in Quantity.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QuantityOperator = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBayFavoriteSearchType
     * @uses MyeBayFavoriteSearchType::setSearchName()
     * @uses MyeBayFavoriteSearchType::setSearchQuery()
     * @uses MyeBayFavoriteSearchType::setQueryKeywords()
     * @uses MyeBayFavoriteSearchType::setCategoryID()
     * @uses MyeBayFavoriteSearchType::setItemSort()
     * @uses MyeBayFavoriteSearchType::setSortOrder()
     * @uses MyeBayFavoriteSearchType::setEndTimeFrom()
     * @uses MyeBayFavoriteSearchType::setEndTimeTo()
     * @uses MyeBayFavoriteSearchType::setMaxDistance()
     * @uses MyeBayFavoriteSearchType::setPostalCode()
     * @uses MyeBayFavoriteSearchType::setItemType()
     * @uses MyeBayFavoriteSearchType::setPriceMax()
     * @uses MyeBayFavoriteSearchType::setPriceMin()
     * @uses MyeBayFavoriteSearchType::setCurrency()
     * @uses MyeBayFavoriteSearchType::setBidCountMax()
     * @uses MyeBayFavoriteSearchType::setBidCountMin()
     * @uses MyeBayFavoriteSearchType::setSearchFlag()
     * @uses MyeBayFavoriteSearchType::setPaymentMethod()
     * @uses MyeBayFavoriteSearchType::setPreferredLocation()
     * @uses MyeBayFavoriteSearchType::setSellerID()
     * @uses MyeBayFavoriteSearchType::setSellerIDExclude()
     * @uses MyeBayFavoriteSearchType::setItemsAvailableTo()
     * @uses MyeBayFavoriteSearchType::setItemsLocatedIn()
     * @uses MyeBayFavoriteSearchType::setSellerBusinessType()
     * @uses MyeBayFavoriteSearchType::setCondition()
     * @uses MyeBayFavoriteSearchType::setQuantity()
     * @uses MyeBayFavoriteSearchType::setQuantityOperator()
     * @uses MyeBayFavoriteSearchType::setAny()
     * @param string $searchName
     * @param string $searchQuery
     * @param string $queryKeywords
     * @param string $categoryID
     * @param string $itemSort
     * @param string $sortOrder
     * @param string $endTimeFrom
     * @param string $endTimeTo
     * @param int $maxDistance
     * @param string $postalCode
     * @param string $itemType
     * @param \macropage\ebaysdk\trading\StructType\AmountType $priceMax
     * @param \macropage\ebaysdk\trading\StructType\AmountType $priceMin
     * @param string $currency
     * @param int $bidCountMax
     * @param int $bidCountMin
     * @param string[] $searchFlag
     * @param string $paymentMethod
     * @param string $preferredLocation
     * @param string[] $sellerID
     * @param string[] $sellerIDExclude
     * @param string $itemsAvailableTo
     * @param string $itemsLocatedIn
     * @param string $sellerBusinessType
     * @param string $condition
     * @param int $quantity
     * @param string $quantityOperator
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $searchName = null, ?string $searchQuery = null, ?string $queryKeywords = null, ?string $categoryID = null, ?string $itemSort = null, ?string $sortOrder = null, ?string $endTimeFrom = null, ?string $endTimeTo = null, ?int $maxDistance = null, ?string $postalCode = null, ?string $itemType = null, ?\macropage\ebaysdk\trading\StructType\AmountType $priceMax = null, ?\macropage\ebaysdk\trading\StructType\AmountType $priceMin = null, ?string $currency = null, ?int $bidCountMax = null, ?int $bidCountMin = null, array $searchFlag = [], ?string $paymentMethod = null, ?string $preferredLocation = null, array $sellerID = [], array $sellerIDExclude = [], ?string $itemsAvailableTo = null, ?string $itemsLocatedIn = null, ?string $sellerBusinessType = null, ?string $condition = null, ?int $quantity = null, ?string $quantityOperator = null, $any = null)
    {
        $this
            ->setSearchName($searchName)
            ->setSearchQuery($searchQuery)
            ->setQueryKeywords($queryKeywords)
            ->setCategoryID($categoryID)
            ->setItemSort($itemSort)
            ->setSortOrder($sortOrder)
            ->setEndTimeFrom($endTimeFrom)
            ->setEndTimeTo($endTimeTo)
            ->setMaxDistance($maxDistance)
            ->setPostalCode($postalCode)
            ->setItemType($itemType)
            ->setPriceMax($priceMax)
            ->setPriceMin($priceMin)
            ->setCurrency($currency)
            ->setBidCountMax($bidCountMax)
            ->setBidCountMin($bidCountMin)
            ->setSearchFlag($searchFlag)
            ->setPaymentMethod($paymentMethod)
            ->setPreferredLocation($preferredLocation)
            ->setSellerID($sellerID)
            ->setSellerIDExclude($sellerIDExclude)
            ->setItemsAvailableTo($itemsAvailableTo)
            ->setItemsLocatedIn($itemsLocatedIn)
            ->setSellerBusinessType($sellerBusinessType)
            ->setCondition($condition)
            ->setQuantity($quantity)
            ->setQuantityOperator($quantityOperator)
            ->setAny($any);
    }
    /**
     * Get SearchName value
     * @return string|null
     */
    public function getSearchName(): ?string
    {
        return $this->SearchName;
    }
    /**
     * Set SearchName value
     * @param string $searchName
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSearchName(?string $searchName = null): self
    {
        // validation for constraint: string
        if (!is_null($searchName) && !is_string($searchName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchName, true), gettype($searchName)), __LINE__);
        }
        $this->SearchName = $searchName;
        
        return $this;
    }
    /**
     * Get SearchQuery value
     * @return string|null
     */
    public function getSearchQuery(): ?string
    {
        return $this->SearchQuery;
    }
    /**
     * Set SearchQuery value
     * @param string $searchQuery
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSearchQuery(?string $searchQuery = null): self
    {
        // validation for constraint: string
        if (!is_null($searchQuery) && !is_string($searchQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchQuery, true), gettype($searchQuery)), __LINE__);
        }
        $this->SearchQuery = $searchQuery;
        
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords(): ?string
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setQueryKeywords(?string $queryKeywords = null): self
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryKeywords, true), gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get ItemSort value
     * @return string|null
     */
    public function getItemSort(): ?string
    {
        return $this->ItemSort;
    }
    /**
     * Set ItemSort value
     * @uses \macropage\ebaysdk\trading\EnumType\SimpleItemSortCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SimpleItemSortCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemSort
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setItemSort(?string $itemSort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SimpleItemSortCodeType::valueIsValid($itemSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SimpleItemSortCodeType', is_array($itemSort) ? implode(', ', $itemSort) : var_export($itemSort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SimpleItemSortCodeType::getValidValues())), __LINE__);
        }
        $this->ItemSort = $itemSort;
        
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SortOrderCodeType', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get EndTimeFrom value
     * @return string|null
     */
    public function getEndTimeFrom(): ?string
    {
        return $this->EndTimeFrom;
    }
    /**
     * Set EndTimeFrom value
     * @param string $endTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setEndTimeFrom(?string $endTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeFrom) && !is_string($endTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeFrom, true), gettype($endTimeFrom)), __LINE__);
        }
        $this->EndTimeFrom = $endTimeFrom;
        
        return $this;
    }
    /**
     * Get EndTimeTo value
     * @return string|null
     */
    public function getEndTimeTo(): ?string
    {
        return $this->EndTimeTo;
    }
    /**
     * Set EndTimeTo value
     * @param string $endTimeTo
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setEndTimeTo(?string $endTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeTo) && !is_string($endTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeTo, true), gettype($endTimeTo)), __LINE__);
        }
        $this->EndTimeTo = $endTimeTo;
        
        return $this;
    }
    /**
     * Get MaxDistance value
     * @return int|null
     */
    public function getMaxDistance(): ?int
    {
        return $this->MaxDistance;
    }
    /**
     * Set MaxDistance value
     * @param int $maxDistance
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setMaxDistance(?int $maxDistance = null): self
    {
        // validation for constraint: int
        if (!is_null($maxDistance) && !(is_int($maxDistance) || ctype_digit($maxDistance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDistance, true), gettype($maxDistance)), __LINE__);
        }
        $this->MaxDistance = $maxDistance;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get ItemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemType
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemTypeCodeType::valueIsValid($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemTypeCodeType', is_array($itemType) ? implode(', ', $itemType) : var_export($itemType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ItemType = $itemType;
        
        return $this;
    }
    /**
     * Get PriceMax value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPriceMax(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PriceMax;
    }
    /**
     * Set PriceMax value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $priceMax
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setPriceMax(?\macropage\ebaysdk\trading\StructType\AmountType $priceMax = null): self
    {
        $this->PriceMax = $priceMax;
        
        return $this;
    }
    /**
     * Get PriceMin value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPriceMin(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PriceMin;
    }
    /**
     * Set PriceMin value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $priceMin
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setPriceMin(?\macropage\ebaysdk\trading\StructType\AmountType $priceMin = null): self
    {
        $this->PriceMin = $priceMin;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get BidCountMax value
     * @return int|null
     */
    public function getBidCountMax(): ?int
    {
        return $this->BidCountMax;
    }
    /**
     * Set BidCountMax value
     * @param int $bidCountMax
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setBidCountMax(?int $bidCountMax = null): self
    {
        // validation for constraint: int
        if (!is_null($bidCountMax) && !(is_int($bidCountMax) || ctype_digit($bidCountMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCountMax, true), gettype($bidCountMax)), __LINE__);
        }
        $this->BidCountMax = $bidCountMax;
        
        return $this;
    }
    /**
     * Get BidCountMin value
     * @return int|null
     */
    public function getBidCountMin(): ?int
    {
        return $this->BidCountMin;
    }
    /**
     * Set BidCountMin value
     * @param int $bidCountMin
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setBidCountMin(?int $bidCountMin = null): self
    {
        // validation for constraint: int
        if (!is_null($bidCountMin) && !(is_int($bidCountMin) || ctype_digit($bidCountMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCountMin, true), gettype($bidCountMin)), __LINE__);
        }
        $this->BidCountMin = $bidCountMin;
        
        return $this;
    }
    /**
     * Get SearchFlag value
     * @return string[]
     */
    public function getSearchFlag(): array
    {
        return $this->SearchFlag;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchFlag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchFlag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchFlagForArrayConstraintsFromSetSearchFlag(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSearchTypeSearchFlagItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::valueIsValid($myeBayFavoriteSearchTypeSearchFlagItem)) {
                $invalidValues[] = is_object($myeBayFavoriteSearchTypeSearchFlagItem) ? get_class($myeBayFavoriteSearchTypeSearchFlagItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSearchTypeSearchFlagItem), var_export($myeBayFavoriteSearchTypeSearchFlagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchFlag value
     * @uses \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $searchFlag
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSearchFlag(array $searchFlag = []): self
    {
        // validation for constraint: array
        if ('' !== ($searchFlagArrayErrorMessage = self::validateSearchFlagForArrayConstraintsFromSetSearchFlag($searchFlag))) {
            throw new InvalidArgumentException($searchFlagArrayErrorMessage, __LINE__);
        }
        $this->SearchFlag = $searchFlag;
        
        return $this;
    }
    /**
     * Add item to SearchFlag value
     * @uses \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function addToSearchFlag(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SearchFlagCodeType::getValidValues())), __LINE__);
        }
        $this->SearchFlag[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentMethodSearchCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentMethodSearchCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentMethodSearchCodeType::valueIsValid($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentMethodSearchCodeType', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentMethodSearchCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get PreferredLocation value
     * @return string|null
     */
    public function getPreferredLocation(): ?string
    {
        return $this->PreferredLocation;
    }
    /**
     * Set PreferredLocation value
     * @uses \macropage\ebaysdk\trading\EnumType\PreferredLocationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PreferredLocationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $preferredLocation
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setPreferredLocation(?string $preferredLocation = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PreferredLocationCodeType::valueIsValid($preferredLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PreferredLocationCodeType', is_array($preferredLocation) ? implode(', ', $preferredLocation) : var_export($preferredLocation, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PreferredLocationCodeType::getValidValues())), __LINE__);
        }
        $this->PreferredLocation = $preferredLocation;
        
        return $this;
    }
    /**
     * Get SellerID value
     * @return string[]
     */
    public function getSellerID(): array
    {
        return $this->SellerID;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerIDForArrayConstraintsFromSetSellerID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSearchTypeSellerIDItem) {
            // validation for constraint: itemType
            if (!is_string($myeBayFavoriteSearchTypeSellerIDItem)) {
                $invalidValues[] = is_object($myeBayFavoriteSearchTypeSellerIDItem) ? get_class($myeBayFavoriteSearchTypeSellerIDItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSearchTypeSellerIDItem), var_export($myeBayFavoriteSearchTypeSellerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerID value
     * @throws InvalidArgumentException
     * @param string[] $sellerID
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSellerID(array $sellerID = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellerIDArrayErrorMessage = self::validateSellerIDForArrayConstraintsFromSetSellerID($sellerID))) {
            throw new InvalidArgumentException($sellerIDArrayErrorMessage, __LINE__);
        }
        $this->SellerID = $sellerID;
        
        return $this;
    }
    /**
     * Add item to SellerID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function addToSellerID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SellerID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellerID[] = $item;
        
        return $this;
    }
    /**
     * Get SellerIDExclude value
     * @return string[]
     */
    public function getSellerIDExclude(): array
    {
        return $this->SellerIDExclude;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerIDExclude method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerIDExclude method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerIDExcludeForArrayConstraintsFromSetSellerIDExclude(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSearchTypeSellerIDExcludeItem) {
            // validation for constraint: itemType
            if (!is_string($myeBayFavoriteSearchTypeSellerIDExcludeItem)) {
                $invalidValues[] = is_object($myeBayFavoriteSearchTypeSellerIDExcludeItem) ? get_class($myeBayFavoriteSearchTypeSellerIDExcludeItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSearchTypeSellerIDExcludeItem), var_export($myeBayFavoriteSearchTypeSellerIDExcludeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerIDExclude property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerIDExclude value
     * @throws InvalidArgumentException
     * @param string[] $sellerIDExclude
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSellerIDExclude(array $sellerIDExclude = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellerIDExcludeArrayErrorMessage = self::validateSellerIDExcludeForArrayConstraintsFromSetSellerIDExclude($sellerIDExclude))) {
            throw new InvalidArgumentException($sellerIDExcludeArrayErrorMessage, __LINE__);
        }
        $this->SellerIDExclude = $sellerIDExclude;
        
        return $this;
    }
    /**
     * Add item to SellerIDExclude value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function addToSellerIDExclude(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SellerIDExclude property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellerIDExclude[] = $item;
        
        return $this;
    }
    /**
     * Get ItemsAvailableTo value
     * @return string|null
     */
    public function getItemsAvailableTo(): ?string
    {
        return $this->ItemsAvailableTo;
    }
    /**
     * Set ItemsAvailableTo value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemsAvailableTo
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setItemsAvailableTo(?string $itemsAvailableTo = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($itemsAvailableTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CountryCodeType', is_array($itemsAvailableTo) ? implode(', ', $itemsAvailableTo) : var_export($itemsAvailableTo, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->ItemsAvailableTo = $itemsAvailableTo;
        
        return $this;
    }
    /**
     * Get ItemsLocatedIn value
     * @return string|null
     */
    public function getItemsLocatedIn(): ?string
    {
        return $this->ItemsLocatedIn;
    }
    /**
     * Set ItemsLocatedIn value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemsLocatedIn
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setItemsLocatedIn(?string $itemsLocatedIn = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($itemsLocatedIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CountryCodeType', is_array($itemsLocatedIn) ? implode(', ', $itemsLocatedIn) : var_export($itemsLocatedIn, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->ItemsLocatedIn = $itemsLocatedIn;
        
        return $this;
    }
    /**
     * Get SellerBusinessType value
     * @return string|null
     */
    public function getSellerBusinessType(): ?string
    {
        return $this->SellerBusinessType;
    }
    /**
     * Set SellerBusinessType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setSellerBusinessType(?string $sellerBusinessType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType', is_array($sellerBusinessType) ? implode(', ', $sellerBusinessType) : var_export($sellerBusinessType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        
        return $this;
    }
    /**
     * Get Condition value
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemConditionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemConditionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $condition
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setCondition(?string $condition = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemConditionCodeType::valueIsValid($condition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemConditionCodeType', is_array($condition) ? implode(', ', $condition) : var_export($condition, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemConditionCodeType::getValidValues())), __LINE__);
        }
        $this->Condition = $condition;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get QuantityOperator value
     * @return string|null
     */
    public function getQuantityOperator(): ?string
    {
        return $this->QuantityOperator;
    }
    /**
     * Set QuantityOperator value
     * @uses \macropage\ebaysdk\trading\EnumType\QuantityOperatorCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\QuantityOperatorCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $quantityOperator
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
     */
    public function setQuantityOperator(?string $quantityOperator = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\QuantityOperatorCodeType::valueIsValid($quantityOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\QuantityOperatorCodeType', is_array($quantityOperator) ? implode(', ', $quantityOperator) : var_export($quantityOperator, true), implode(', ', \macropage\ebaysdk\trading\EnumType\QuantityOperatorCodeType::getValidValues())), __LINE__);
        }
        $this->QuantityOperator = $quantityOperator;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType
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
