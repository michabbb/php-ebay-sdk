<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a paginated list containing details of a user's Selling Manager Inventory. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro
 * subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Inventory results based on a specific aspect such as Product Name, Average Price, etc. See <b>SellingManagerProductSortCodeType</b> to read more about the available
     * sorting options.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sort = null;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: This field is included if the seller wants to view Selling Manager Inventory from a specific folder.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many products are returned per page and which page to view.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortOrder = null;
    /**
     * The Search
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Inventory based on certain identifiers like Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in
     * <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSearchType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $Search = null;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Inventory listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StoreCategoryID = null;
    /**
     * The Filter
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Inventory that is in a certain state, such as active listings, inactive listings, or listings that are low in stock.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Filter = [];
    /**
     * Constructor method for GetSellingManagerInventoryRequestType
     * @uses GetSellingManagerInventoryRequestType::setSort()
     * @uses GetSellingManagerInventoryRequestType::setFolderID()
     * @uses GetSellingManagerInventoryRequestType::setPagination()
     * @uses GetSellingManagerInventoryRequestType::setSortOrder()
     * @uses GetSellingManagerInventoryRequestType::setSearch()
     * @uses GetSellingManagerInventoryRequestType::setStoreCategoryID()
     * @uses GetSellingManagerInventoryRequestType::setFilter()
     * @param string $sort
     * @param int $folderID
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $sortOrder
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search
     * @param int $storeCategoryID
     * @param string[] $filter
     */
    public function __construct(?string $sort = null, ?int $folderID = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $sortOrder = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null, ?int $storeCategoryID = null, array $filter = [])
    {
        $this
            ->setSort($sort)
            ->setFolderID($folderID)
            ->setPagination($pagination)
            ->setSortOrder($sortOrder)
            ->setSearch($search)
            ->setStoreCategoryID($storeCategoryID)
            ->setFilter($filter);
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
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setSort(?string $sort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::valueIsValid($sort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID(): ?int
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setFolderID(?int $folderID = null): self
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
        foreach ($values as $getSellingManagerInventoryRequestTypeFilterItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($getSellingManagerInventoryRequestTypeFilterItem)) {
                $invalidValues[] = is_object($getSellingManagerInventoryRequestTypeFilterItem) ? get_class($getSellingManagerInventoryRequestTypeFilterItem) : sprintf('%s(%s)', gettype($getSellingManagerInventoryRequestTypeFilterItem), var_export($getSellingManagerInventoryRequestTypeFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $filter
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function addToFilter(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        
        return $this;
    }
}
