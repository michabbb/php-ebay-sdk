<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultipleItemsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves publicly available data for one or more listings. Use this call to retrieve much of the information that is visible on a listing's View Item page on the eBay Web site, such as title, prices, and basic shipping costs.
 * Provide an <b>ItemID</b> value for every listing for which you want information. This call returns the same minimal information that is returned by <b>GetSingleItem</b>. Use <b>GetShippingCosts</b> to retrieve more detailed shipping cost information
 * for a given item.
 * @subpackage Structs
 */
class GetMultipleItemsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The uniqe ID that identifies the listing for which to retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a URL request, there are two ways to handle specifying multiple item ID values. You can use
     * multiple <b>ItemID</b> fields, but each one must be specified as an indexed array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)= 300321408208& ItemID(2)=370214653822...</code>). <br><br> Alternatively, as a shortcut for URL requests, you can
     * specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...< code>&ItemID=130310421484,300321408208,370214653822...</code> ) for convenience. <br><br> You can determine an item's ID by calling findItemsAdvanced
     * (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site. Provide ItemID for every item for which you want information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The IncludeSelector
     * Meta informations extracted from the WSDL
     * - documentation: Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional
     * fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly
     * affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp;
     * TextDescription</p> <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the
     * response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p class="edef">Include Variations in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetSingleItem Samples" for an
     * example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
     * - minOccurs: 0
     * @var string
     */
    public $IncludeSelector;
    /**
     * Constructor method for GetMultipleItemsRequestType
     * @uses GetMultipleItemsRequestType::setItemID()
     * @uses GetMultipleItemsRequestType::setIncludeSelector()
     * @param string[] $itemID
     * @param string $includeSelector
     */
    public function __construct(array $itemID = array(), $includeSelector = null)
    {
        $this
            ->setItemID($itemID)
            ->setIncludeSelector($includeSelector);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType
     */
    public function setItemID(array $itemID = array())
    {
        foreach ($itemID as $getMultipleItemsRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($getMultipleItemsRequestTypeItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($getMultipleItemsRequestTypeItemIDItem) ? get_class($getMultipleItemsRequestTypeItemIDItem) : gettype($getMultipleItemsRequestTypeItemIDItem)), __LINE__);
            }
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType
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
