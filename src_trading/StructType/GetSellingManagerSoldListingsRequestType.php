<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
    /**
     * The Search
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported
     * search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSearchType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $Search = null;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StoreCategoryID = null;
    /**
     * The Filter
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Filter = [];
    /**
     * The Archived
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Archived = null;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to
     * read more about the available sorting options.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sort = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortOrder = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The SaleDateRange
     * Meta information extracted from the WSDL
     * - documentation: This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to
     * <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TimeRangeType $SaleDateRange = null;
    /**
     * Constructor method for GetSellingManagerSoldListingsRequestType
     * @uses GetSellingManagerSoldListingsRequestType::setSearch()
     * @uses GetSellingManagerSoldListingsRequestType::setStoreCategoryID()
     * @uses GetSellingManagerSoldListingsRequestType::setFilter()
     * @uses GetSellingManagerSoldListingsRequestType::setArchived()
     * @uses GetSellingManagerSoldListingsRequestType::setSort()
     * @uses GetSellingManagerSoldListingsRequestType::setSortOrder()
     * @uses GetSellingManagerSoldListingsRequestType::setPagination()
     * @uses GetSellingManagerSoldListingsRequestType::setSaleDateRange()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search
     * @param int $storeCategoryID
     * @param string[] $filter
     * @param bool $archived
     * @param string $sort
     * @param string $sortOrder
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null, ?int $storeCategoryID = null, array $filter = [], ?bool $archived = null, ?string $sort = null, ?string $sortOrder = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?\macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange = null)
    {
        $this
            ->setSearch($search)
            ->setStoreCategoryID($storeCategoryID)
            ->setFilter($filter)
            ->setArchived($archived)
            ->setSort($sort)
            ->setSortOrder($sortOrder)
            ->setPagination($pagination)
            ->setSaleDateRange($saleDateRange);
    }
    /**
     * Get Search value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType|null
     */
    public function getSearch(): ?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSearch(?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null): self
    {
        $this->Search = $search;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
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
     * Get Filter value
     * @return string[]
     */
    public function getFilter(): array
    {
        return $this->Filter;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterForArrayConstraintsFromSetFilter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerSoldListingsRequestTypeFilterItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($getSellingManagerSoldListingsRequestTypeFilterItem)) {
                $invalidValues[] = is_object($getSellingManagerSoldListingsRequestTypeFilterItem) ? get_class($getSellingManagerSoldListingsRequestTypeFilterItem) : sprintf('%s(%s)', gettype($getSellingManagerSoldListingsRequestTypeFilterItem), var_export($getSellingManagerSoldListingsRequestTypeFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $filter
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setFilter(array $filter = []): self
    {
        // validation for constraint: array
        if ('' !== ($filterArrayErrorMessage = self::validateFilterForArrayConstraintsFromSetFilter($filter))) {
            throw new InvalidArgumentException($filterArrayErrorMessage, __LINE__);
        }
        $this->Filter = $filter;
        
        return $this;
    }
    /**
     * Add item to Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function addToFilter(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        
        return $this;
    }
    /**
     * Get Archived value
     * @return bool|null
     */
    public function getArchived(): ?bool
    {
        return $this->Archived;
    }
    /**
     * Set Archived value
     * @param bool $archived
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setArchived(?bool $archived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($archived) && !is_bool($archived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($archived, true), gettype($archived)), __LINE__);
        }
        $this->Archived = $archived;
        
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
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSort(?string $sort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid($sort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get SaleDateRange value
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    public function getSaleDateRange(): ?\macropage\ebaysdk\trading\StructType\TimeRangeType
    {
        return $this->SaleDateRange;
    }
    /**
     * Set SaleDateRange value
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSaleDateRange(?\macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange = null): self
    {
        $this->SaleDateRange = $saleDateRange;
        
        return $this;
    }
}