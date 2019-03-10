<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductSpecificsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a Selling Manager Template
 * @subpackage Structs
 */
class SellingManagerProductSpecificsType extends AbstractStructBase
{
    /**
     * The PrimaryCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Category ID for a product with variations. Only applicable (and required on input) when Variations and/or ItemSpecifics is specified in the request or returned in a response.
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryCategoryID;
    /**
     * The Variations
     * Meta informations extracted from the WSDL
     * - documentation: Variations are multiple similar (but not identical) versions of the same product. For example, two shirt variations could have the same brand and sleeve style, but could vary by color and size (like "Blue, Large" and "Black,
     * Medium"). On eBay, a single fixed-price listing can include multiple variations. Each variation can have its own quantity and price. To determine which categories support variations, use GetCategoryFeatures.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public $Variations;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: A list of custom Item Specifics for the product. Custom Item Specifics give sellers a structured way to describe details of their items in a name-value format. For example, a book could have Item Specifics like Author=J.K. Rowling
     * and Format=Hardcover. To determine which categories support custom Item Specifics, use GetCategoryFeatures.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductSpecificsType
     * @uses SellingManagerProductSpecificsType::setPrimaryCategoryID()
     * @uses SellingManagerProductSpecificsType::setVariations()
     * @uses SellingManagerProductSpecificsType::setItemSpecifics()
     * @uses SellingManagerProductSpecificsType::setAny()
     * @param string $primaryCategoryID
     * @param \macropage\ebaysdk\trading\StructType\VariationsType $variations
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @param \DOMDocument $any
     */
    public function __construct($primaryCategoryID = null, \macropage\ebaysdk\trading\StructType\VariationsType $variations = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setPrimaryCategoryID($primaryCategoryID)
            ->setVariations($variations)
            ->setItemSpecifics($itemSpecifics)
            ->setAny($any);
    }
    /**
     * Get PrimaryCategoryID value
     * @return string|null
     */
    public function getPrimaryCategoryID()
    {
        return $this->PrimaryCategoryID;
    }
    /**
     * Set PrimaryCategoryID value
     * @param string $primaryCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public function setPrimaryCategoryID($primaryCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryCategoryID) && !is_string($primaryCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryCategoryID)), __LINE__);
        }
        $this->PrimaryCategoryID = $primaryCategoryID;
        return $this;
    }
    /**
     * Get Variations value
     * @return \macropage\ebaysdk\trading\StructType\VariationsType|null
     */
    public function getVariations()
    {
        return $this->Variations;
    }
    /**
     * Set Variations value
     * @param \macropage\ebaysdk\trading\StructType\VariationsType $variations
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public function setVariations(\macropage\ebaysdk\trading\StructType\VariationsType $variations = null)
    {
        $this->Variations = $variations;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public function setItemSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
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
