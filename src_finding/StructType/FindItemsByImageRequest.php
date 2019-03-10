<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByImageRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>This call is deprecated.</b>
 * @subpackage Structs
 */
class FindItemsByImageRequest extends BestMatchFindingServiceRequest
{
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the item that the customer wants to use for retrieving more listings with similar images. The item must active and it must be listed in a Clothing, Shoes & Accessories category (parent category ID 11450 on the eBay US
     * site). In addition, the item ID you specify must exist on either the US, UK, or DE the sites.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $itemId;
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the leaf category from which you want to retrieve item listings with similar images. If no category is specified, search results can come from any Clothing, Shoes & Accessories leaf category. This field can be repeated (up
     * to 3 times) to include multiple categories. <br><br> Image similarity searches are only supported in Clothing, Shoes & Accessories leaf categories on the eBay US, UK, and Germany sites. <br><br> If a specified category ID doesn't match an existing
     * category for the site, eBay returns an invalid-category error message. To determine valid leaf categories, use the Shopping API <b class="con">GetCategoryInfo</b> call.
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
     * The domainFilter
     * Meta informations extracted from the WSDL
     * - documentation: <b>As of October 2014, domains will be deprecated and "category" is used instead. </b>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\DomainFilter[]
     */
    public $domainFilter;
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
     * Constructor method for FindItemsByImageRequest
     * @uses FindItemsByImageRequest::setItemId()
     * @uses FindItemsByImageRequest::setCategoryId()
     * @uses FindItemsByImageRequest::setItemFilter()
     * @uses FindItemsByImageRequest::setAspectFilter()
     * @uses FindItemsByImageRequest::setDomainFilter()
     * @uses FindItemsByImageRequest::setOutputSelector()
     * @param string $itemId
     * @param string[] $categoryId
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter[] $aspectFilter
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter[] $domainFilter
     * @param string[] $outputSelector
     */
    public function __construct($itemId = null, array $categoryId = array(), array $itemFilter = array(), array $aspectFilter = array(), array $domainFilter = array(), array $outputSelector = array())
    {
        $this
            ->setItemId($itemId)
            ->setCategoryId($categoryId)
            ->setItemFilter($itemFilter)
            ->setAspectFilter($aspectFilter)
            ->setDomainFilter($domainFilter)
            ->setOutputSelector($outputSelector);
    }
    /**
     * Get itemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param string $itemId
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setCategoryId(array $categoryId = array())
    {
        foreach ($categoryId as $findItemsByImageRequestCategoryIdItem) {
            // validation for constraint: itemType
            if (!is_string($findItemsByImageRequestCategoryIdItem)) {
                throw new \InvalidArgumentException(sprintf('The categoryId property can only contain items of string, "%s" given', is_object($findItemsByImageRequestCategoryIdItem) ? get_class($findItemsByImageRequestCategoryIdItem) : gettype($findItemsByImageRequestCategoryIdItem)), __LINE__);
            }
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Add item to categoryId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findItemsByImageRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByImageRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findItemsByImageRequestItemFilterItem) ? get_class($findItemsByImageRequestItemFilterItem) : gettype($findItemsByImageRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setAspectFilter(array $aspectFilter = array())
    {
        foreach ($aspectFilter as $findItemsByImageRequestAspectFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByImageRequestAspectFilterItem instanceof \macropage\ebaysdk\finding\StructType\AspectFilter) {
                throw new \InvalidArgumentException(sprintf('The aspectFilter property can only contain items of \macropage\ebaysdk\finding\StructType\AspectFilter, "%s" given', is_object($findItemsByImageRequestAspectFilterItem) ? get_class($findItemsByImageRequestAspectFilterItem) : gettype($findItemsByImageRequestAspectFilterItem)), __LINE__);
            }
        }
        $this->aspectFilter = $aspectFilter;
        return $this;
    }
    /**
     * Add item to aspectFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setDomainFilter(array $domainFilter = array())
    {
        foreach ($domainFilter as $findItemsByImageRequestDomainFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByImageRequestDomainFilterItem instanceof \macropage\ebaysdk\finding\StructType\DomainFilter) {
                throw new \InvalidArgumentException(sprintf('The domainFilter property can only contain items of \macropage\ebaysdk\finding\StructType\DomainFilter, "%s" given', is_object($findItemsByImageRequestDomainFilterItem) ? get_class($findItemsByImageRequestDomainFilterItem) : gettype($findItemsByImageRequestDomainFilterItem)), __LINE__);
            }
        }
        $this->domainFilter = $domainFilter;
        return $this;
    }
    /**
     * Add item to domainFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\DomainFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findItemsByImageRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findItemsByImageRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findItemsByImageRequestOutputSelectorItem, true);
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest
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
