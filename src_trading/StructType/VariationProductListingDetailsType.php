<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationProductListingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>VariationProductListingDetails</b> container that is used to specify an EAN, an ISBN, a UPC value, or an ePID to identify a specific product variation in a multiple-variation listing. For multiple-variation
 * listings, the same GTIN type(s) must be used for all product variations within the listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values. <br/><br/> <span class="tablenote"><b>Note: </b> The
 * <b>ProductReferenceID</b> field can only be used when listing in categories that are enabled with the Product-Based Shopping Experience. If this field is provided when listing in a category that doesn't support PBSE, the listing will be blocked.
 * </span>
 * @subpackage Structs
 */
class VariationProductListingDetailsType extends AbstractStructBase
{
    /**
     * The ISBN
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multi-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and
     * 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for
     * a category. <br/><br/> This field is only applicable for multiple-variation listings. For a single-variation listing, if the category/product requires an ISBN value, this value should be passed into the <b>Item.ProductListingDetails.ISBN</b> field
     * instead. Unlike single-variation listings, an eBay catalog product cannot be used to prefill product details for a multiple-variation listing. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects
     * ISBN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b>
     * container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ISBN;
    /**
     * The UPC
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different
     * products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category. <br/><br/> This field is only applicable for multiple-variation listings. For a single-variation
     * listing, if the category/product requires a UPC value, this value should be passed into the <b>Item.ProductListingDetails.UPC</b> field instead. Unlike single-variation listings, an eBay catalog product cannot be used to prefill product details for a
     * multiple-variation listing. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects UPC values, but one doesn't exist for the product, the seller must pass in the text that can be found in the
     * <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a
     * <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $UPC;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many
     * industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category. <br/><br/> This field is only applicable for
     * multiple-variation listings. For a single-variation listing, if the category/product requires an EAN value, this value should be passed into the <b>Item.ProductListingDetails.EAN</b> field instead. Unlike single-variation listings, an eBay catalog
     * product cannot be used to prefill product details for a multiple-variation listing. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects EAN values, but one doesn't exist for the product, the
     * seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response,
     * <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EAN;
    /**
     * The ProductReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an eBay Product ID (ePID). An ePID is a unique identifier of an eBay Catalog product. The seller can
     * use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ePID is supported/required for a category. Each variation within the listing must use a unique ePID or an error will occur. <br/><br/> <span
     * class="tablenote"><b>Note: </b> The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part of the Product-Based Shopping Experience mandate. If an ePID is supplied for another eBay Catalog product
     * that is not a part of the Product-Based Shopping Experience mandate, the listing may be blocked. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page. </span>
     * This field is also returned in <b>GetItem</b> if the product variations within the listing are associated with eBay Catalog products. <br>
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The NameValueList
     * Meta informations extracted from the WSDL
     * - documentation: This container is for future use. If it used, it will be ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationProductListingDetailsType
     * @uses VariationProductListingDetailsType::setISBN()
     * @uses VariationProductListingDetailsType::setUPC()
     * @uses VariationProductListingDetailsType::setEAN()
     * @uses VariationProductListingDetailsType::setProductReferenceID()
     * @uses VariationProductListingDetailsType::setNameValueList()
     * @uses VariationProductListingDetailsType::setAny()
     * @param string $iSBN
     * @param string $uPC
     * @param string $eAN
     * @param string $productReferenceID
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @param \DOMDocument $any
     */
    public function __construct($iSBN = null, $uPC = null, $eAN = null, $productReferenceID = null, array $nameValueList = array(), \DOMDocument $any = null)
    {
        $this
            ->setISBN($iSBN)
            ->setUPC($uPC)
            ->setEAN($eAN)
            ->setProductReferenceID($productReferenceID)
            ->setNameValueList($nameValueList)
            ->setAny($any);
    }
    /**
     * Get ISBN value
     * @return string|null
     */
    public function getISBN()
    {
        return $this->ISBN;
    }
    /**
     * Set ISBN value
     * @param string $iSBN
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setISBN($iSBN = null)
    {
        // validation for constraint: string
        if (!is_null($iSBN) && !is_string($iSBN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSBN)), __LINE__);
        }
        $this->ISBN = $iSBN;
        return $this;
    }
    /**
     * Get UPC value
     * @return string|null
     */
    public function getUPC()
    {
        return $this->UPC;
    }
    /**
     * Set UPC value
     * @param string $uPC
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setUPC($uPC = null)
    {
        // validation for constraint: string
        if (!is_null($uPC) && !is_string($uPC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uPC)), __LINE__);
        }
        $this->UPC = $uPC;
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        foreach ($nameValueList as $variationProductListingDetailsTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$variationProductListingDetailsTypeNameValueListItem instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
                throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($variationProductListingDetailsTypeNameValueListItem) ? get_class($variationProductListingDetailsTypeNameValueListItem) : gettype($variationProductListingDetailsTypeNameValueListItem)), __LINE__);
            }
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function addToNameValueList(\macropage\ebaysdk\trading\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
