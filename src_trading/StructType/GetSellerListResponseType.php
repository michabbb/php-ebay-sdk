<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerListResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of the items listed by the seller specified as input. The list of items is returned in an ItemArrayType object, in which are returned zero, one, or multiple ItemType objects. Each ItemType object contains the detail
 * data for one item listing.
 * @subpackage Structs
 */
class GetSellerListResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta informations extracted from the WSDL
     * - documentation: If true, there are more items yet to be retrieved. Additional <b>GetSellerList</b> calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains the list of the seller's items, one <b>ItemType</b> object per item. Returns empty if no items are available that match the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The ItemsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of items that are being returned per page of data (i.e., per call). Will be the same as the value specified in the <b>Pagination.EntriesPerPage</b> input. Only returned if items are returned.
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which page of data was just returned. Will be the same as the value specified in the <b>Pagination.PageNumber</b> input. (If the input is higher than the total number of pages, the call fails with an error.) Only returned
     * if items are returned.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedItemCountActual
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of items returned (i.e., the number of ItemType objects in ItemArray).
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedItemCountActual;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the seller whose items are returned. The seller is the eBay member whose <b>UserID</b> was passed in the request. If <b>UserID</b> was not specified, the seller is the user who made the request (identified by
     * eBayAuthToken).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $Seller;
    /**
     * Constructor method for GetSellerListResponseType
     * @uses GetSellerListResponseType::setPaginationResult()
     * @uses GetSellerListResponseType::setHasMoreItems()
     * @uses GetSellerListResponseType::setItemArray()
     * @uses GetSellerListResponseType::setItemsPerPage()
     * @uses GetSellerListResponseType::setPageNumber()
     * @uses GetSellerListResponseType::setReturnedItemCountActual()
     * @uses GetSellerListResponseType::setSeller()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param int $returnedItemCountActual
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null, \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, $itemsPerPage = null, $pageNumber = null, $returnedItemCountActual = null, \macropage\ebaysdk\trading\StructType\UserType $seller = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems)
            ->setItemArray($itemArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedItemCountActual($returnedItemCountActual)
            ->setSeller($seller);
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems()
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setHasMoreItems($hasMoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setItemArray(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setItemsPerPage($itemsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !is_numeric($itemsPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get ReturnedItemCountActual value
     * @return int|null
     */
    public function getReturnedItemCountActual()
    {
        return $this->ReturnedItemCountActual;
    }
    /**
     * Set ReturnedItemCountActual value
     * @param int $returnedItemCountActual
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setReturnedItemCountActual($returnedItemCountActual = null)
    {
        // validation for constraint: int
        if (!is_null($returnedItemCountActual) && !is_numeric($returnedItemCountActual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnedItemCountActual)), __LINE__);
        }
        $this->ReturnedItemCountActual = $returnedItemCountActual;
        return $this;
    }
    /**
     * Get Seller value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setSeller(\macropage\ebaysdk\trading\StructType\UserType $seller = null)
    {
        $this->Seller = $seller;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
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
