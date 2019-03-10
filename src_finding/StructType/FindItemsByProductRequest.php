<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByProductRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns items based on a product base on ISBN, UPC, EAN, or ePID (eBay Product Reference ID).
 * @subpackage Structs
 */
class FindItemsByProductRequest extends BaseFindingServiceRequest
{
    /**
     * The productId
     * Meta informations extracted from the WSDL
     * - documentation: Input ISBN, UPC, EAN, or ReferenceID (ePID) to specify the type of product for which you want to search. <br><br> For example, to search using an ISBN, specify productID.type=ISBN and set productID.value to an ISBN value. To search
     * using an eBay Product Reference ID, set <b class="con">productId.type</b> to "ReferenceID" and set <b class="con">productId.value</b> to an ePID value (also known as an Bay Product Reference ID). If you do not know the ePID value for a product, use
     * <b class="con">FindProducts</b> in the eBay Shopping API to retrieve the desired ePID.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \macropage\ebaysdk\finding\StructType\ProductId
     */
    public $productId;
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
     * Constructor method for FindItemsByProductRequest
     * @uses FindItemsByProductRequest::setProductId()
     * @uses FindItemsByProductRequest::setItemFilter()
     * @uses FindItemsByProductRequest::setOutputSelector()
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter[] $itemFilter
     * @param string[] $outputSelector
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\ProductId $productId = null, array $itemFilter = array(), array $outputSelector = array())
    {
        $this
            ->setProductId($productId)
            ->setItemFilter($itemFilter)
            ->setOutputSelector($outputSelector);
    }
    /**
     * Get productId value
     * @return \macropage\ebaysdk\finding\StructType\ProductId
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * Set productId value
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
     */
    public function setProductId(\macropage\ebaysdk\finding\StructType\ProductId $productId = null)
    {
        $this->productId = $productId;
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
     */
    public function setItemFilter(array $itemFilter = array())
    {
        foreach ($itemFilter as $findItemsByProductRequestItemFilterItem) {
            // validation for constraint: itemType
            if (!$findItemsByProductRequestItemFilterItem instanceof \macropage\ebaysdk\finding\StructType\ItemFilter) {
                throw new \InvalidArgumentException(sprintf('The itemFilter property can only contain items of \macropage\ebaysdk\finding\StructType\ItemFilter, "%s" given', is_object($findItemsByProductRequestItemFilterItem) ? get_class($findItemsByProductRequestItemFilterItem) : gettype($findItemsByProductRequestItemFilterItem)), __LINE__);
            }
        }
        $this->itemFilter = $itemFilter;
        return $this;
    }
    /**
     * Add item to itemFilter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemFilter $item
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
     */
    public function setOutputSelector(array $outputSelector = array())
    {
        $invalidValues = array();
        foreach ($outputSelector as $findItemsByProductRequestOutputSelectorItem) {
            if (!\macropage\ebaysdk\finding\EnumType\OutputSelectorType::valueIsValid($findItemsByProductRequestOutputSelectorItem)) {
                $invalidValues[] = var_export($findItemsByProductRequestOutputSelectorItem, true);
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest
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
