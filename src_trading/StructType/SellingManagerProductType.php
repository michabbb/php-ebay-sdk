<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductType extends AbstractStructBase
{
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The SellingManagerTemplateDetailsArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains the list of the seller's templates contained in the product, one SellingManagerTemplateType object per template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public $SellingManagerTemplateDetailsArray;
    /**
     * The SellingManagerProductInventoryStatus
     * Meta informations extracted from the WSDL
     * - documentation: Container for statistics about the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public $SellingManagerProductInventoryStatus;
    /**
     * The SellingManagerProductSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multivariation listings).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public $SellingManagerProductSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductType
     * @uses SellingManagerProductType::setSellingManagerProductDetails()
     * @uses SellingManagerProductType::setSellingManagerTemplateDetailsArray()
     * @uses SellingManagerProductType::setSellingManagerProductInventoryStatus()
     * @uses SellingManagerProductType::setSellingManagerProductSpecifics()
     * @uses SellingManagerProductType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null, \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null, \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setSellingManagerTemplateDetailsArray($sellingManagerTemplateDetailsArray)
            ->setSellingManagerProductInventoryStatus($sellingManagerProductInventoryStatus)
            ->setSellingManagerProductSpecifics($sellingManagerProductSpecifics)
            ->setAny($any);
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get SellingManagerTemplateDetailsArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->SellingManagerTemplateDetailsArray;
    }
    /**
     * Set SellingManagerTemplateDetailsArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerTemplateDetailsArray(\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null)
    {
        $this->SellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        return $this;
    }
    /**
     * Get SellingManagerProductInventoryStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType|null
     */
    public function getSellingManagerProductInventoryStatus()
    {
        return $this->SellingManagerProductInventoryStatus;
    }
    /**
     * Set SellingManagerProductInventoryStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductInventoryStatus(\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null)
    {
        $this->SellingManagerProductInventoryStatus = $sellingManagerProductInventoryStatus;
        return $this;
    }
    /**
     * Get SellingManagerProductSpecifics value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->SellingManagerProductSpecifics;
    }
    /**
     * Set SellingManagerProductSpecifics value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductSpecifics(\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerProductType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
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
