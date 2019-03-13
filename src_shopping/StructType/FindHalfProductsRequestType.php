<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindHalfProductsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>FindHalfProducts</b> call is deprecated. </span>
 * @subpackage Structs
 */
class FindHalfProductsRequestType extends AbstractRequestType
{
    /**
     * The IncludeSelector
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $IncludeSelector;
    /**
     * The AvailableItemsOnly
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableItemsOnly;
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomainName;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public $ProductID;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The SellerID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The ProductSort
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ProductSort;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The MaxEntries
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $MaxEntries;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * Constructor method for FindHalfProductsRequestType
     * @uses FindHalfProductsRequestType::setIncludeSelector()
     * @uses FindHalfProductsRequestType::setAvailableItemsOnly()
     * @uses FindHalfProductsRequestType::setDomainName()
     * @uses FindHalfProductsRequestType::setProductID()
     * @uses FindHalfProductsRequestType::setQueryKeywords()
     * @uses FindHalfProductsRequestType::setSellerID()
     * @uses FindHalfProductsRequestType::setProductSort()
     * @uses FindHalfProductsRequestType::setSortOrder()
     * @uses FindHalfProductsRequestType::setMaxEntries()
     * @uses FindHalfProductsRequestType::setPageNumber()
     * @param string $includeSelector
     * @param bool $availableItemsOnly
     * @param string[] $domainName
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param string $queryKeywords
     * @param string $sellerID
     * @param string $productSort
     * @param string $sortOrder
     * @param int $maxEntries
     * @param int $pageNumber
     */
    public function __construct($includeSelector = null, $availableItemsOnly = null, array $domainName = array(), \macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $queryKeywords = null, $sellerID = null, $productSort = null, $sortOrder = null, $maxEntries = null, $pageNumber = null)
    {
        $this
            ->setIncludeSelector($includeSelector)
            ->setAvailableItemsOnly($availableItemsOnly)
            ->setDomainName($domainName)
            ->setProductID($productID)
            ->setQueryKeywords($queryKeywords)
            ->setSellerID($sellerID)
            ->setProductSort($productSort)
            ->setSortOrder($sortOrder)
            ->setMaxEntries($maxEntries)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get IncludeSelector value
     * @return string|null
     */
    public function getIncludeSelector()
    {
        return $this->IncludeSelector;
    }
    /**
     * Set IncludeSelector value
     * @param string $includeSelector
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setIncludeSelector($includeSelector = null)
    {
        // validation for constraint: string
        if (!is_null($includeSelector) && !is_string($includeSelector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($includeSelector)), __LINE__);
        }
        $this->IncludeSelector = $includeSelector;
        return $this;
    }
    /**
     * Get AvailableItemsOnly value
     * @return bool|null
     */
    public function getAvailableItemsOnly()
    {
        return $this->AvailableItemsOnly;
    }
    /**
     * Set AvailableItemsOnly value
     * @param bool $availableItemsOnly
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setAvailableItemsOnly($availableItemsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableItemsOnly) && !is_bool($availableItemsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableItemsOnly)), __LINE__);
        }
        $this->AvailableItemsOnly = $availableItemsOnly;
        return $this;
    }
    /**
     * Get DomainName value
     * @return string[]|null
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @throws \InvalidArgumentException
     * @param string[] $domainName
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setDomainName(array $domainName = array())
    {
        foreach ($domainName as $findHalfProductsRequestTypeDomainNameItem) {
            // validation for constraint: itemType
            if (!is_string($findHalfProductsRequestTypeDomainNameItem)) {
                throw new \InvalidArgumentException(sprintf('The DomainName property can only contain items of string, "%s" given', is_object($findHalfProductsRequestTypeDomainNameItem) ? get_class($findHalfProductsRequestTypeDomainNameItem) : gettype($findHalfProductsRequestTypeDomainNameItem)), __LINE__);
            }
        }
        $this->DomainName = $domainName;
        return $this;
    }
    /**
     * Add item to DomainName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function addToDomainName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DomainName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DomainName[] = $item;
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null)
    {
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setQueryKeywords($queryKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get ProductSort value
     * @return string|null
     */
    public function getProductSort()
    {
        return $this->ProductSort;
    }
    /**
     * Set ProductSort value
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductSortCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductSortCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productSort
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setProductSort($productSort = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ProductSortCodeType::valueIsValid($productSort)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productSort, implode(', ', \macropage\ebaysdk\shopping\EnumType\ProductSortCodeType::getValidValues())), __LINE__);
        }
        $this->ProductSort = $productSort;
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
     * @uses \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get MaxEntries value
     * @return int|null
     */
    public function getMaxEntries()
    {
        return $this->MaxEntries;
    }
    /**
     * Set MaxEntries value
     * @param int $maxEntries
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
     */
    public function setMaxEntries($maxEntries = null)
    {
        // validation for constraint: int
        if (!is_null($maxEntries) && !is_numeric($maxEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxEntries)), __LINE__);
        }
        $this->MaxEntries = $maxEntries;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsRequestType
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
