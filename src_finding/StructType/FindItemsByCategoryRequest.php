<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByCategoryRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns items in one or more specified categories. Filters can be used to restrict the results.
 * @subpackage Structs
 */
class FindItemsByCategoryRequest extends BaseFindingServiceRequest
{
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an
     * invalid-category error message. To determine valid categories, use the Shopping API <b class="con">GetCategoryInfo</b> call. <br><br> Up to three (3) categories can be specified. <br><br> Category searches are not supported on the eBay Italy site
     * (global ID EBAY-IT) at this time.
     * - maxOccurs: unbounded
     * - minOccurs: 1
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
     * - documentation: Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for the <b>aspectFilter</b> fields from an <b>aspectHistogramContainer</b> returned in the response of a previous query. <br><br> By
     * issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br> For example, the
     * <b>aspectHistogramContainer</b> in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating <b>aspectFilter</b> fields with the values returned in
     * an <b>aspectHistogramContainer</b>, you can refine the item results returned by your new query.
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
     * Constructor method for FindItemsByCategoryRequest
     * @uses FindItemsByCategoryRequest::setCategoryId()
     * @uses FindItemsByCategoryRequest::setItemFilter()
     * @uses FindItemsByCategoryRequest::setAspectFilter()
     * @uses FindItemsByCategoryRequest::setOutputSelector()
     * @uses FindItemsByCategoryRequest::setDomainFilter()
     * @param string[] $categoryId
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @param string[] $outputSelector
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     */
    public function __construct(array $categoryId = array(), array $itemFilter = array(), array $aspectFilter = array(), array $outputSelector = array(), array $domainFilter = array())
    {
        $this
            ->setCategoryId($categoryId)
            ->setItemFilter($itemFilter)
            ->setAspectFilter($aspectFilter)
            ->setOutputSelector($outputSelector)
            ->setDomainFilter($domainFilter);
    }
    /**
     * Get categoryId value
     * @return string[]
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @throws \InvalidArgumentException
     * @param string[] $categoryId
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
     */
    public function setCategoryId(array $categoryId = array())
    {
        foreach ($categoryId as $findItemsByCategoryRequestCategoryIdItem) {
            // validation for constraint: itemType
            if (!is_string($findItemsByCategoryRequestCategoryIdItem)) {
                throw new \InvalidArgumentException(sprintf('The categoryId property can only contain items of string, "%s" given', is_object($findItemsByCategoryRequestCategoryIdItem) ? get_class($findItemsByCategoryRequestCategoryIdItem) : gettype($findItemsByCategoryRequestCategoryIdItem)), __LINE__);
            }
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Add item to categoryId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findItemsByCategoryRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByCategoryRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findItemsByCategoryRequestItemFilterItem) ? get_class($findItemsByCategoryRequestItemFilterItem) : gettype($findItemsByCategoryRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
     */
    public function setAspectFilter(array $aspectFilter = array())
    {
        foreach ($aspectFilter as $findItemsByCategoryRequestAspectFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByCategoryRequestAspectFilterItem instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
                throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($findItemsByCategoryRequestAspectFilterItem) ? get_class($findItemsByCategoryRequestAspectFilterItem) : gettype($findItemsByCategoryRequestAspectFilterItem)), __LINE__);
            }
        }
        $this->aspectFilter = $aspectFilter;
        return $this;
    }
    /**
     * Add item to aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findItemsByCategoryRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findItemsByCategoryRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findItemsByCategoryRequestOutputSelectorItem, true);
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
     */
    public function setDomainFilter(array $domainFilter = array())
    {
        foreach ($domainFilter as $findItemsByCategoryRequestDomainFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByCategoryRequestDomainFilterItem instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
                throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($findItemsByCategoryRequestDomainFilterItem) ? get_class($findItemsByCategoryRequestDomainFilterItem) : gettype($findItemsByCategoryRequestDomainFilterItem)), __LINE__);
            }
        }
        $this->domainFilter = $domainFilter;
        return $this;
    }
    /**
     * Add item to domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest
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
