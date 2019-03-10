<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
    /**
     * The Search
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported
     * search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public $Search;
    /**
     * The StoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Filter;
    /**
     * The Archived
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     * - minOccurs: 0
     * @var bool
     */
    public $Archived;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to
     * read more about the available sorting options.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The SaleDateRange
     * Meta informations extracted from the WSDL
     * - documentation: This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to
     * <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public $SaleDateRange;
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
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null, $storeCategoryID = null, array $filter = array(), $archived = null, $sort = null, $sortOrder = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, \macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange = null)
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
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSearch(\macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null)
    {
        $this->Search = $search;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
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
     * Get Filter value
     * @return string[]|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $filter
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setFilter(array $filter = array())
    {
        $invalidValues = array();
        foreach ($filter as $getSellingManagerSoldListingsRequestTypeFilterItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($getSellingManagerSoldListingsRequestTypeFilterItem)) {
                $invalidValues[] = var_export($getSellingManagerSoldListingsRequestTypeFilterItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Add item to Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function addToFilter($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        return $this;
    }
    /**
     * Get Archived value
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->Archived;
    }
    /**
     * Set Archived value
     * @param bool $archived
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setArchived($archived = null)
    {
        // validation for constraint: boolean
        if (!is_null($archived) && !is_bool($archived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($archived)), __LINE__);
        }
        $this->Archived = $archived;
        return $this;
    }
    /**
     * Get Sort value
     * @return string|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sort, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get SaleDateRange value
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    public function getSaleDateRange()
    {
        return $this->SaleDateRange;
    }
    /**
     * Set SaleDateRange value
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSaleDateRange(\macropage\ebaysdk\trading\StructType\TimeRangeType $saleDateRange = null)
    {
        $this->SaleDateRange = $saleDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType
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
