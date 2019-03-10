<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsIneBayStoresRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns items listed in eBay stores. Specify storeName in the request to retrieve all listings within a single store. You can combine storeName with keywords to find specific items, or use keywords without storeName to search for
 * items in all eBay stores. <br><br> Search results can be filtered by item details or aspects and sorted by a variety of criteria.
 * @subpackage Structs
 */
class FindItemsIneBayStoresRequest extends BaseFindingServiceRequest
{
    /**
     * The keywords
     * Meta informations extracted from the WSDL
     * - documentation: Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each
     * other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it
     * doesn't matter whether you use uppercase or lowercase letters. <br><br> You can incorporate wildcards in a multi-word search. For example, "ap*%20ip*" returns results for "apple ipod" among other matches. The words "and" and "or" are treated like any
     * other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those specific words. <br><br> You must specify keywords when you are searching across all eBay stores. That is, <b
     * class="con">keywords</b> is required if <b class="con">storeName</b> is not specified in the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $keywords;
    /**
     * The storeName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the eBay store to search. Returns all items in the store, or can be used with keywords to search for specific items in an eBay store. If you do not specify keywords, you must specify storeName. <br><br> <span
     * class="tablenote"><strong>Note:</strong> Store names are case sensitive and must be an exact match. For example, if a store name contains an ampersand (&), you must use the & character entity (& amp;) in its place. You can use the Shopping API
     * <b>GetUserProfile</b> call to find the exact name of the store. </span> If you do not specify <b class="con">storeName</b> in the request, the search is across all eBay stores. When searching across all stores, you must specify keywords. <br><br> The
     * results can be filtered by item listing details or aspects.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $storeName;
    /**
     * The itemFilter
     * Meta informations extracted from the WSDL
     * - documentation: Reduce the number of items returned by a find request using item filters. Use <b class="con">itemFilter</b> to specify name/value pairs. You can include multiple item filters in a single request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ItemFilter[]
     */
    public $itemFilter;
    /**
     * The outputSelector
     * Meta informations extracted from the WSDL
     * - documentation: Defines what data to return, in addition to the default set of data, in a response. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use the <b>outputSelector</b> to include more information in the
     * response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can affect the call's
     * response time (performance), including in the case with feedback data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $outputSelector;
    /**
     * The aspectFilter
     * Meta informations extracted from the WSDL
     * - documentation: Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for the <b>aspectFilter</b> fields from an <b>aspectHistogramContainer</b> returned in the response of a previous query. <br><br> By
     * issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br/> For example, the
     * <b>aspectHistogramContainer</b> in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating the <b>aspectFilter</b> fields with the values returned
     * in an <b>aspectHistogramContainer</b>, you can refine the item results returned by your new query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectFilter[]
     */
    public $aspectFilter;
    /**
     * The domainFilter
     * Meta informations extracted from the WSDL
     * - documentation: <b>As of October 2014, domains will be deprecated and "category" is used instead. </b>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\DomainFilter[]
     */
    public $domainFilter;
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an
     * invalid-category error message. To determine valid categories, use the Shopping API <b class="con">GetCategoryInfo</b> call. <br><br> Up to three (3) categories can be specified. <br><br> Category searches are not supported on the eBay Italy site
     * (global ID EBAY-IT) at this time.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $categoryId;
    /**
     * Constructor method for FindItemsIneBayStoresRequest
     * @uses FindItemsIneBayStoresRequest::setKeywords()
     * @uses FindItemsIneBayStoresRequest::setStoreName()
     * @uses FindItemsIneBayStoresRequest::setItemFilter()
     * @uses FindItemsIneBayStoresRequest::setOutputSelector()
     * @uses FindItemsIneBayStoresRequest::setAspectFilter()
     * @uses FindItemsIneBayStoresRequest::setDomainFilter()
     * @uses FindItemsIneBayStoresRequest::setCategoryId()
     * @param string $keywords
     * @param string $storeName
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param string[] $outputSelector
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     * @param string[] $categoryId
     */
    public function __construct($keywords = null, $storeName = null, array $itemFilter = array(), array $outputSelector = array(), array $aspectFilter = array(), array $domainFilter = array(), array $categoryId = array())
    {
        $this
            ->setKeywords($keywords)
            ->setStoreName($storeName)
            ->setItemFilter($itemFilter)
            ->setOutputSelector($outputSelector)
            ->setAspectFilter($aspectFilter)
            ->setDomainFilter($domainFilter)
            ->setCategoryId($categoryId);
    }
    /**
     * Get keywords value
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    /**
     * Set keywords value
     * @param string $keywords
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setKeywords($keywords = null)
    {
        // validation for constraint: string
        if (!is_null($keywords) && !is_string($keywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keywords)), __LINE__);
        }
        $this->keywords = $keywords;
        return $this;
    }
    /**
     * Get storeName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }
    /**
     * Set storeName value
     * @param string $storeName
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeName)), __LINE__);
        }
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Get itemFilter value
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter[]|null
     */
    public function getItemFilter()
    {
        return $this->itemFilter;
    }
    /**
     * Set itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findItemsIneBayStoresRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsIneBayStoresRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findItemsIneBayStoresRequestItemFilterItem) ? get_class($findItemsIneBayStoresRequestItemFilterItem) : gettype($findItemsIneBayStoresRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function addToItemFilter(\macropage\ebaysdk\finding\StructType\ItemFilter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
            throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->itemFilter[] = $item;
        return $this;
    }
    /**
     * Get outputSelector value
     * @return string[]|null
     */
    public function getOutputSelector()
    {
        return $this->outputSelector;
    }
    /**
     * Set outputSelector value
     * @uses \macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\OutputSelectorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $outputSelector
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findItemsIneBayStoresRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findItemsIneBayStoresRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findItemsIneBayStoresRequestOutputSelectorItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\finding\EnumType\OutputSelectorType::getValidValues())), __LINE__);
        }
        $this->outputSelector = $outputSelector;
        return $this;
    }
    /**
     * Add item to outputSelector value
     * @uses \macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\OutputSelectorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function addToOutputSelector($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\finding\EnumType\OutputSelectorType::getValidValues())), __LINE__);
        }
        $this->outputSelector[] = $item;
        return $this;
    }
    /**
     * Get aspectFilter value
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter[]|null
     */
    public function getAspectFilter()
    {
        return $this->aspectFilter;
    }
    /**
     * Set aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setAspectFilter(array $aspectFilter = array())
    {
        foreach ($aspectFilter as $findItemsIneBayStoresRequestAspectFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsIneBayStoresRequestAspectFilterItem instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
                throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($findItemsIneBayStoresRequestAspectFilterItem) ? get_class($findItemsIneBayStoresRequestAspectFilterItem) : gettype($findItemsIneBayStoresRequestAspectFilterItem)), __LINE__);
            }
        }
        $this->aspectFilter = $aspectFilter;
        return $this;
    }
    /**
     * Add item to aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function addToAspectFilter(\macropage\ebaysdk\finding\StructType\AspectFilter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
            throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->aspectFilter[] = $item;
        return $this;
    }
    /**
     * Get domainFilter value
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter[]|null
     */
    public function getDomainFilter()
    {
        return $this->domainFilter;
    }
    /**
     * Set domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setDomainFilter(array $domainFilter = array())
    {
        foreach ($domainFilter as $findItemsIneBayStoresRequestDomainFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsIneBayStoresRequestDomainFilterItem instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
                throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($findItemsIneBayStoresRequestDomainFilterItem) ? get_class($findItemsIneBayStoresRequestDomainFilterItem) : gettype($findItemsIneBayStoresRequestDomainFilterItem)), __LINE__);
            }
        }
        $this->domainFilter = $domainFilter;
        return $this;
    }
    /**
     * Add item to domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function addToDomainFilter(\macropage\ebaysdk\finding\StructType\DomainFilter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
            throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->domainFilter[] = $item;
        return $this;
    }
    /**
     * Get categoryId value
     * @return string[]|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @throws \InvalidArgumentException
     * @param string[] $categoryId
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function setCategoryId(array $categoryId = array())
    {
        foreach ($categoryId as $findItemsIneBayStoresRequestCategoryIdItem) {
            // validation for constraint: itemType
            if (!is_string($findItemsIneBayStoresRequestCategoryIdItem)) {
                throw new \InvalidArgumentException(sprintf('The categoryId property can only contain items of string, "%s" given', is_object($findItemsIneBayStoresRequestCategoryIdItem) ? get_class($findItemsIneBayStoresRequestCategoryIdItem) : gettype($findItemsIneBayStoresRequestCategoryIdItem)), __LINE__);
            }
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Add item to categoryId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
     */
    public function addToCategoryId($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The categoryId property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->categoryId[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest
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
