<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByKeywordsRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns items based on a keyword query and returns details for matching items. Item filters can be used to restrict search results. Aspect filters can be used to further refine results. Use the <b>outputSelector</b> to expand the
 * amount of data returned for each matching item.
 * @subpackage Structs
 */
class FindItemsByKeywordsRequest extends BaseFindingServiceRequest
{
    /**
     * The keywords
     * Meta informations extracted from the WSDL
     * - documentation: Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each
     * other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it
     * doesn't matter whether you use uppercase or lowercase letters. <br><br> You can incorporate wildcards in a multi-word search. For example, "ap*%20ip*" returns results for "apple ipod" among other matches. The words "and" and "or" are treated like any
     * other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those specific words.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $keywords;
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
     * The outputSelector
     * Meta informations extracted from the WSDL
     * - documentation: Specifies what item data to return in a response in addition to the default set of data. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use the <b>outputSelector</b> to include more item
     * information in the response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can
     * affect the call's performance (response time), as is the case with including seller feedback data.
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
     * Constructor method for FindItemsByKeywordsRequest
     * @uses FindItemsByKeywordsRequest::setKeywords()
     * @uses FindItemsByKeywordsRequest::setItemFilter()
     * @uses FindItemsByKeywordsRequest::setAspectFilter()
     * @uses FindItemsByKeywordsRequest::setOutputSelector()
     * @uses FindItemsByKeywordsRequest::setDomainFilter()
     * @param string $keywords
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @param string[] $outputSelector
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     */
    public function __construct($keywords = null, array $itemFilter = array(), array $aspectFilter = array(), array $outputSelector = array(), array $domainFilter = array())
    {
        $this
            ->setKeywords($keywords)
            ->setItemFilter($itemFilter)
            ->setAspectFilter($aspectFilter)
            ->setOutputSelector($outputSelector)
            ->setDomainFilter($domainFilter);
    }
    /**
     * Get keywords value
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    /**
     * Set keywords value
     * @param string $keywords
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findItemsByKeywordsRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByKeywordsRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findItemsByKeywordsRequestItemFilterItem) ? get_class($findItemsByKeywordsRequestItemFilterItem) : gettype($findItemsByKeywordsRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
     */
    public function setAspectFilter(array $aspectFilter = array())
    {
        foreach ($aspectFilter as $findItemsByKeywordsRequestAspectFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByKeywordsRequestAspectFilterItem instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
                throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($findItemsByKeywordsRequestAspectFilterItem) ? get_class($findItemsByKeywordsRequestAspectFilterItem) : gettype($findItemsByKeywordsRequestAspectFilterItem)), __LINE__);
            }
        }
        $this->aspectFilter = $aspectFilter;
        return $this;
    }
    /**
     * Add item to aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findItemsByKeywordsRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findItemsByKeywordsRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findItemsByKeywordsRequestOutputSelectorItem, true);
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
     */
    public function setDomainFilter(array $domainFilter = array())
    {
        foreach ($domainFilter as $findItemsByKeywordsRequestDomainFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByKeywordsRequestDomainFilterItem instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
                throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($findItemsByKeywordsRequestDomainFilterItem) ? get_class($findItemsByKeywordsRequestDomainFilterItem) : gettype($findItemsByKeywordsRequestDomainFilterItem)), __LINE__);
            }
        }
        $this->domainFilter = $domainFilter;
        return $this;
    }
    /**
     * Add item to domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest
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
