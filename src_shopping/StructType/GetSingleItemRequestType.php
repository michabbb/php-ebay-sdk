<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSingleItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves publicly available data for a single listing. Use this call to retrieve most of the information that is visible on a listing's View Item page on the eBay Web site, such as title, description, prices, basic seller and bidder
 * information, and other details about the listing. Also returns basic shipping cost information. For more information on shipping details, use <b>GetShippingCosts</b>.
 * @subpackage Structs
 */
class GetSingleItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The item ID that uniquely identifies the item listing for which to retrieve the data.<br> <br> You can determine an item's ID by calling <b>findItemsAdvanced</b>( <a
     * href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The VariationSKU
     * Meta informations extracted from the WSDL
     * - documentation: Variation-level SKU that uniquely identifies a variation within the listing identified by <b>ItemID</b>. Only applicable when the seller included variation-level SKU (<b>Variation.SKU</b>) values. Retrieves all the usual listing
     * fields, but limits the variations content to the specified variation. If not specified, the response includes all variations.
     * - minOccurs: 0
     * @var string
     */
    public $VariationSKU;
    /**
     * The VariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Name-value pairs that identify one or more variations within the listing identified by ItemID. Only applicable when the seller listed the item with variations. Retrieves all the usual Item fields, but limits the Variations content to
     * the specified variation(s). If the specified pairs do not match any variation, eBay returns all variations.<br> <br> To retrieve only one variation, specify the full set of name/value pairs that match all the name-value pairs of one variation. <br>
     * <br> To retrieve multiple variations (using a wildcard), specify one or more name/value pairs that partially match the desired variations. For example, if the listing contains variations for shirts in different colors and sizes, specify Color as Red
     * (and no other name/value pairs) to retrieve all the red shirts in all sizes (but no other colors).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public $VariationSpecifics;
    /**
     * The IncludeSelector
     * Meta informations extracted from the WSDL
     * - documentation: Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional
     * fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly
     * affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp;
     * TextDescription</p> <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p> <p class="edef">Include basic shipping costs in
     * the response. (Use GetShippingCosts to retrieve more details.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p
     * class="edef">Include Variations in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Compatibility</p> <p class="edef">Include Compatibility in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are
     * cumulative.) See "GetSingleItem Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
     * - minOccurs: 0
     * @var string
     */
    public $IncludeSelector;
    /**
     * Constructor method for GetSingleItemRequestType
     * @uses GetSingleItemRequestType::setItemID()
     * @uses GetSingleItemRequestType::setVariationSKU()
     * @uses GetSingleItemRequestType::setVariationSpecifics()
     * @uses GetSingleItemRequestType::setIncludeSelector()
     * @param string $itemID
     * @param string $variationSKU
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics
     * @param string $includeSelector
     */
    public function __construct($itemID = null, $variationSKU = null, \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics = null, $includeSelector = null)
    {
        $this
            ->setItemID($itemID)
            ->setVariationSKU($variationSKU)
            ->setVariationSpecifics($variationSpecifics)
            ->setIncludeSelector($includeSelector);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get VariationSKU value
     * @return string|null
     */
    public function getVariationSKU()
    {
        return $this->VariationSKU;
    }
    /**
     * Set VariationSKU value
     * @param string $variationSKU
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType
     */
    public function setVariationSKU($variationSKU = null)
    {
        // validation for constraint: string
        if (!is_null($variationSKU) && !is_string($variationSKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variationSKU)), __LINE__);
        }
        $this->VariationSKU = $variationSKU;
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType
     */
    public function setVariationSpecifics(\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this->VariationSpecifics = $variationSpecifics;
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
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType
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
