<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is the base request type of the <b>FindProducts</b> call. The <b>FindProducts</b> call returns one or more eBay catalog products based upon the query string or product ID value that is passed in the call request <br /> <br
 * /> <span class="tablenote"><b>Important:</b> Historically, through an <b>ItemArray</b> container, this call returned detailed information on active listings that are associated with the retrieved eBay catalog product(s). However, active listing data
 * is no longer retrieved in the <b>FindProducts</b> response, so some of the fields/filters in the <b>FindProducts</b> request payload are no longer applicable. </span>
 * @subpackage Structs
 */
class FindProductsRequestType extends AbstractRequestType
{
    /**
     * The IncludeSelector
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Important:</b> The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer
     * reliable. <code>DomainHistogram</code> is the only value that can be used for <b>IncludeSelector</b>, so this filter has no practical use, and may be deprecated in the near future. </span> <br> <br> This filter is included and set to
     * <code>DomainHistogram</code> if the user would like to view domain histogram data in the response. The <b>DomainHistogram</b> container that is returned displays all eBay category domains associated with all eBay catalog products that are retrieved.
     * The count of eBay catalog products associated with each domain is also shown under each <b>Domain</b> container. If this field is omitted, only the catalog product records and pagination data is returned. <br /> <br /> <span
     * class="tablenote"><b>Important:</b> Historically, the <b>IncludeSelector</b> field supported two other values - <code>Items</code> and <code>Details</code>. However, both of these enumeration values controlled the data that was returned through the
     * <b>ItemArray</b> container, and this container is no longer returned at all. The <b>FindProducts</b> call now only retrieves one or more eBay catalog products, and no longer retrieves active listing data related to these catalog products. The
     * <code>Items</code> or <code>Details</code> values will have no effect is used. </span>
     * - minOccurs: 0
     * @var string
     */
    public $IncludeSelector;
    /**
     * The AvailableItemsOnly
     * Meta informations extracted from the WSDL
     * - documentation: This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products. If this field is used, it will have no effect on the response.
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableItemsOnly;
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Important:</b> The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer
     * reliable. </span> <br> <br> An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple
     * <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify
     * DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all
     * eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more
     * <b>DomainName</b> filters. <br> <br> Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global
     * Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomainName;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: Use this field to find a catalog product (or products) associated with an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN. The product identifier is expressed as a string value, and the type
     * of product identifier is expressed in the <b>type</b> attribute. <br> <br> See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the supported enumeration values for the lt;b>typelt;/b> attribute. Note that it is
     * possible that there may be multiple eBay catalog products associated with the same GTIN value, but there can only be one eBay catalog product associated with a specific ePID value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public $ProductID;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This string field is used to defined a query string using one or more keywords. When you use a keyword search, eBay searches the product catalog for matching words in the product title, description, and/or Item Specifics, and it
     * returns a list of matching catalog products. If used, the response will also be affected by any eBay domains that are specified through one or more <b>DomainName</b> filters.<br> <br> The query string must contain at least three alphanumeric
     * characters.<br> <br> The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for products containing these words. To use AND or OR logic, use eBay's standard search string modifiers. Wildcards (+,
     * -, or *) are also supported. Be careful when using spaces before or after modifiers and wildcards.<br> <br> Some keyword queries can result in response times of 30 seconds or longer. If too many results are returned, you may want to refine the search
     * by passing in more keywords and/or by using one or more <b>DomainName</b> filters. Using a <b>CategoryID</b> value is also an option, as this will return only catalog products associated with that eBay category. <br> <br> If you know your product's
     * UPC, EAN, or ISBN, you may want to use the <b>ProductID</b> field instead of the <b>QueryKeywords</b> field. <br> <br>
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The ProductSort
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the user to control the order in which the retrieved catalog products are displayed in the response. If this field is not included, the results are sorted by the catalog product's popularity. <br> <br> See the <a
     * href="types/ProductSortCodeType.html">ProductSortCodeType</a> definition to view the available sort values. <br> <br> This field can be used in conjunction with the <b>SortOrder</b> field. The <b>SortOrder</b> field controls whether catalog products
     * are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     * - minOccurs: 0
     * @var string
     */
    public $ProductSort;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to control whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products
     * are sorted by popularity in descending order.
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The MaxEntries
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to limit/control the maximum number of catalog products that are returned per page of data in a single call. This is generally used with string query searches using the <b>QueryKeywords</b> field. <br> <br> If this
     * field is not used, its value defaults to '1', and only one catalog product is returned. The user may want to look at the <b>TotalProducts</b> field's value to see how many eBay catalog products matched the search criteria, and then the user may want
     * to do another call, possibly refining/narrowing the search with a more precise query string in the <b>QueryKeywords</b> field, or perhaps with one or more <b>DomainName</b> filters. <br> <br> If the <b>MoreResults</b> field is returned as
     * <code>true</code>, this indicates that more than one page of results are available based on the current search criteria, so the user will have to make additional calls to view additional pages of results, changing the <b>PageNumber</b> value as
     * needed.
     * - minOccurs: 0
     * @var int
     */
    public $MaxEntries;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to control the page number of results to retrieve in the call. If this field is omitted, the first page of results is returned by default. You know that you have additional pages or results if the
     * <b>MoreResults</b> field is returned as <code>true</code>. <br> <br> This field takes a positive integer value equal to or lower than the number of pages available. The total number of pages in the results set is shown in the <b>ApproximatePages</b>
     * field of the response.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is included to restrict the catalog products that are returned. Only the catalog products associated with this category ID are returned. <br><br> This field is generally used with the <b>QueryKeywords</b> field. <br><br>
     * The <b>GetCategories</b> or <b>GetSuggestedCategories</b> calls of the Trading API can be used to retrieve <b>CategoryID</b> values.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The HideDuplicateItems
     * Meta informations extracted from the WSDL
     * - documentation: This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     * - minOccurs: 0
     * @var bool
     */
    public $HideDuplicateItems;
    /**
     * Constructor method for FindProductsRequestType
     * @uses FindProductsRequestType::setIncludeSelector()
     * @uses FindProductsRequestType::setAvailableItemsOnly()
     * @uses FindProductsRequestType::setDomainName()
     * @uses FindProductsRequestType::setProductID()
     * @uses FindProductsRequestType::setQueryKeywords()
     * @uses FindProductsRequestType::setProductSort()
     * @uses FindProductsRequestType::setSortOrder()
     * @uses FindProductsRequestType::setMaxEntries()
     * @uses FindProductsRequestType::setPageNumber()
     * @uses FindProductsRequestType::setCategoryID()
     * @uses FindProductsRequestType::setHideDuplicateItems()
     * @param string $includeSelector
     * @param bool $availableItemsOnly
     * @param string[] $domainName
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param string $queryKeywords
     * @param string $productSort
     * @param string $sortOrder
     * @param int $maxEntries
     * @param int $pageNumber
     * @param string $categoryID
     * @param bool $hideDuplicateItems
     */
    public function __construct($includeSelector = null, $availableItemsOnly = null, array $domainName = array(), \macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $queryKeywords = null, $productSort = null, $sortOrder = null, $maxEntries = null, $pageNumber = null, $categoryID = null, $hideDuplicateItems = null)
    {
        $this
            ->setIncludeSelector($includeSelector)
            ->setAvailableItemsOnly($availableItemsOnly)
            ->setDomainName($domainName)
            ->setProductID($productID)
            ->setQueryKeywords($queryKeywords)
            ->setProductSort($productSort)
            ->setSortOrder($sortOrder)
            ->setMaxEntries($maxEntries)
            ->setPageNumber($pageNumber)
            ->setCategoryID($categoryID)
            ->setHideDuplicateItems($hideDuplicateItems);
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
     */
    public function setDomainName(array $domainName = array())
    {
        foreach ($domainName as $findProductsRequestTypeDomainNameItem) {
            // validation for constraint: itemType
            if (!is_string($findProductsRequestTypeDomainNameItem)) {
                throw new \InvalidArgumentException(sprintf('The DomainName property can only contain items of string, "%s" given', is_object($findProductsRequestTypeDomainNameItem) ? get_class($findProductsRequestTypeDomainNameItem) : gettype($findProductsRequestTypeDomainNameItem)), __LINE__);
            }
        }
        $this->DomainName = $domainName;
        return $this;
    }
    /**
     * Add item to DomainName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get HideDuplicateItems value
     * @return bool|null
     */
    public function getHideDuplicateItems()
    {
        return $this->HideDuplicateItems;
    }
    /**
     * Set HideDuplicateItems value
     * @param bool $hideDuplicateItems
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
     */
    public function setHideDuplicateItems($hideDuplicateItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideDuplicateItems) && !is_bool($hideDuplicateItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideDuplicateItems)), __LINE__);
        }
        $this->HideDuplicateItems = $hideDuplicateItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsRequestType
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
