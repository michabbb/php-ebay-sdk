<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemListCustomizationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines how a list of items should be returned.
 * @subpackage Structs
 */
class ItemListCustomizationType extends AbstractStructBase
{
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Include = null;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the listing type of items in the returned list.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingType = null;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: Specifies the sort order of the result. Default is Ascending.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sort = null;
    /**
     * The DurationInDays
     * Meta information extracted from the WSDL
     * - documentation: Specifies the time period during which an item was won or lost. Similar to the period drop-down menu in the My eBay user interface. For example, to return the items won or lost in the last week, specify a DurationInDays of 7.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DurationInDays = null;
    /**
     * The IncludeNotes
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeNotes = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Specifies how to create virtual pages in the returned list. <br> Default for EntriesPerPage with GetMyeBayBuying is 200.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The OrderStatusFilter
     * Meta information extracted from the WSDL
     * - documentation: Filter to reduce the <b>SoldList</b> response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped in My eBay.<br> <br> Sellers can use <b>CompleteSale</b> or My eBay to mark an order as Paid or
     * Shipped.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderStatusFilter = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemListCustomizationType
     * @uses ItemListCustomizationType::setInclude()
     * @uses ItemListCustomizationType::setListingType()
     * @uses ItemListCustomizationType::setSort()
     * @uses ItemListCustomizationType::setDurationInDays()
     * @uses ItemListCustomizationType::setIncludeNotes()
     * @uses ItemListCustomizationType::setPagination()
     * @uses ItemListCustomizationType::setOrderStatusFilter()
     * @uses ItemListCustomizationType::setAny()
     * @param bool $include
     * @param string $listingType
     * @param string $sort
     * @param int $durationInDays
     * @param bool $includeNotes
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $orderStatusFilter
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $include = null, ?string $listingType = null, ?string $sort = null, ?int $durationInDays = null, ?bool $includeNotes = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $orderStatusFilter = null, $any = null)
    {
        $this
            ->setInclude($include)
            ->setListingType($listingType)
            ->setSort($sort)
            ->setDurationInDays($durationInDays)
            ->setIncludeNotes($includeNotes)
            ->setPagination($pagination)
            ->setOrderStatusFilter($orderStatusFilter)
            ->setAny($any);
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude(): ?bool
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setInclude(?bool $include = null): self
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->Include = $include;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
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
     * Get Sort value
     * @return string|null
     */
    public function getSort(): ?string
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setSort(?string $sort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid($sort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        
        return $this;
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays(): ?int
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setDurationInDays(?int $durationInDays = null): self
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !(is_int($durationInDays) || ctype_digit($durationInDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationInDays, true), gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes(): ?bool
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setIncludeNotes(?bool $includeNotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNotes, true), gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get OrderStatusFilter value
     * @return string|null
     */
    public function getOrderStatusFilter(): ?string
    {
        return $this->OrderStatusFilter;
    }
    /**
     * Set OrderStatusFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderStatusFilter
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setOrderStatusFilter(?string $orderStatusFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::valueIsValid($orderStatusFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType', is_array($orderStatusFilter) ? implode(', ', $orderStatusFilter) : var_export($orderStatusFilter, true), implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatusFilter = $orderStatusFilter;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
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
