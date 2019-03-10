<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCompletedItemsRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns items whose listings are completed and are no longer available for sale based on keyword and/or category and doesn't allow searching within item descriptions. <br><br> You can expect response times for this call to be longer
 * than other types of Finding Service requests. The call must search through historical databases rather than performing a quick lookup on currently listed items. There is a 5,000 limit on the number of findCompletedItems calls an application can make
 * in a single day (even if the application has completed an app check). <br><br> Be aware that it is possible to use this call in such a way as to violate the terms and conditions of your API License Agreement. Ensure that you do not store the results
 * retrieved from this call or use the results for market research purposes.
 * @subpackage Structs
 */
class FindCompletedItemsRequest extends BaseFindingServiceRequest
{
    /**
     * The keywords
     * Meta informations extracted from the WSDL
     * - documentation: Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each
     * other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it
     * doesn't matter whether you use uppercase or lowercase letters. <br><br> The words "and" and "or" are treated like any other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those
     * specific words. <br><br> findCompletedItems requires that you specify either keywords or a categoryId in the search criteria.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $keywords;
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an
     * invalid-category error message. To determine valid categories, use the Shopping API <b class="con">GetCategoryInfo</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $categoryId;
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
     * The aspectFilter
     * Meta informations extracted from the WSDL
     * - documentation: Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for <b>aspectFilter</b> fields from an <b>aspectHistogramContainer</b> returned in the response of a previous query. <br><br> By
     * issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br> For example, the
     * <b>aspectHistogramContainer</b> in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating <b>aspectFilter</b> fields with the values returned in
     * an <b>aspectHistogramContainer</b>, you can hone the item results returned by your new query. <br><br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectFilter[]
     */
    public $aspectFilter;
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
     * The domainFilter
     * Meta informations extracted from the WSDL
     * - documentation: <b>As of October 2014, domains will be deprecated and "category" is used instead. </b>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\DomainFilter[]
     */
    public $domainFilter;
    /**
     * The productId
     * Meta informations extracted from the WSDL
     * - documentation: Input ISBN, UPC, EAN, or ReferenceID (ePID) to specify the type of product for which you want to search. <br><br> For example, to search using an ISBN, specify <b>productID.type</b>=<code>ISBN</code> and set productID.value to an
     * ISBN value. To search using an eBay Product Reference ID, specify <b>productID.type</b>=<code>ReferenceID</code> and set productID.value to an ePID value (also known as an Bay Product Reference ID). If you do not know the ePID value for a product,
     * use <b class="con">FindProducts</b> in the eBay Shopping API to retrieve the desired ePID: <br><br> <a href=" http://developer.ebay.com/DevZone/shopping/docs/CallRef/FindProducts.html" > FindProducts</a>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ProductId
     */
    public $productId;
    /**
     * Constructor method for FindCompletedItemsRequest
     * @uses FindCompletedItemsRequest::setKeywords()
     * @uses FindCompletedItemsRequest::setCategoryId()
     * @uses FindCompletedItemsRequest::setItemFilter()
     * @uses FindCompletedItemsRequest::setAspectFilter()
     * @uses FindCompletedItemsRequest::setOutputSelector()
     * @uses FindCompletedItemsRequest::setDomainFilter()
     * @uses FindCompletedItemsRequest::setProductId()
     * @param string $keywords
     * @param string[] $categoryId
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @param string[] $outputSelector
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     */
    public function __construct($keywords = null, array $categoryId = array(), array $itemFilter = array(), array $aspectFilter = array(), array $outputSelector = array(), array $domainFilter = array(), \macropage\ebaysdk\finding\StructType\ProductId $productId = null)
    {
        $this
            ->setKeywords($keywords)
            ->setCategoryId($categoryId)
            ->setItemFilter($itemFilter)
            ->setAspectFilter($aspectFilter)
            ->setOutputSelector($outputSelector)
            ->setDomainFilter($domainFilter)
            ->setProductId($productId);
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setCategoryId(array $categoryId = array())
    {
        foreach ($categoryId as $findCompletedItemsRequestCategoryIdItem) {
            // validation for constraint: itemType
            if (!is_string($findCompletedItemsRequestCategoryIdItem)) {
                throw new \InvalidArgumentException(sprintf('The categoryId property can only contain items of string, "%s" given', is_object($findCompletedItemsRequestCategoryIdItem) ? get_class($findCompletedItemsRequestCategoryIdItem) : gettype($findCompletedItemsRequestCategoryIdItem)), __LINE__);
            }
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Add item to categoryId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findCompletedItemsRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findCompletedItemsRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findCompletedItemsRequestItemFilterItem) ? get_class($findCompletedItemsRequestItemFilterItem) : gettype($findCompletedItemsRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setAspectFilter(array $aspectFilter = array())
    {
        foreach ($aspectFilter as $findCompletedItemsRequestAspectFilterItem) {
            // validation for constraint: itemType
            if (!$findCompletedItemsRequestAspectFilterItem instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
                throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($findCompletedItemsRequestAspectFilterItem) ? get_class($findCompletedItemsRequestAspectFilterItem) : gettype($findCompletedItemsRequestAspectFilterItem)), __LINE__);
            }
        }
        $this->aspectFilter = $aspectFilter;
        return $this;
    }
    /**
     * Add item to aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findCompletedItemsRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findCompletedItemsRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findCompletedItemsRequestOutputSelectorItem, true);
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setDomainFilter(array $domainFilter = array())
    {
        foreach ($domainFilter as $findCompletedItemsRequestDomainFilterItem) {
            // validation for constraint: itemType
            if (!$findCompletedItemsRequestDomainFilterItem instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
                throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($findCompletedItemsRequestDomainFilterItem) ? get_class($findCompletedItemsRequestDomainFilterItem) : gettype($findCompletedItemsRequestDomainFilterItem)), __LINE__);
            }
        }
        $this->domainFilter = $domainFilter;
        return $this;
    }
    /**
     * Add item to domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
     * Get productId value
     * @return \macropage\ebaysdk\finding\StructType\ProductId|null
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * Set productId value
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
     */
    public function setProductId(\macropage\ebaysdk\finding\StructType\ProductId $productId = null)
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest
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
