<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a paginated list containing details of a user's Selling Manager Inventory. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro
 * subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Inventory results based on a specific aspect such as Product Name, Average Price, etc. See <b>SellingManagerProductSortCodeType</b> to read more about the available
     * sorting options.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: This field is included if the seller wants to view Selling Manager Inventory from a specific folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many products are returned per page and which page to view.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The Search
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Inventory based on certain identifiers like Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in
     * <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public $Search;
    /**
     * The StoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Inventory listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Inventory that is in a certain state, such as active listings, inactive listings, or listings that are low in stock.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Filter;
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
    public function __construct($sort = null, $folderID = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $sortOrder = null, \macropage\ebaysdk\trading\StructType\SellingManagerSearchType $search = null, $storeCategoryID = null, array $filter = array())
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
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sort, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerProductSortCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !is_numeric($folderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $filter
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function setFilter(array $filter = array())
    {
        $invalidValues = array();
        foreach ($filter as $getSellingManagerInventoryRequestTypeFilterItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($getSellingManagerInventoryRequestTypeFilterItem)) {
                $invalidValues[] = var_export($getSellingManagerInventoryRequestTypeFilterItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Add item to Filter value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
     */
    public function addToFilter($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType
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
