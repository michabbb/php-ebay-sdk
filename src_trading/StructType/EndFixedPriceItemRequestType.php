<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndFixedPriceItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ends the specified fixed-price listing before the date and time at which it would normally end (per the listing duration).
 * @subpackage Structs
 */
class EndFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique item ID that identifies the listing that you want to end. <br><br> In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required. If both are passed in and they don't refer to the same listing, eBay
     * ignores <b>SKU</b> and considers only the lt;b>ItemID</b>. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The EndingReason
     * Meta informations extracted from the WSDL
     * - documentation: The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted<code> value, as this ending reason can only be used internally by eBay to administratively
     * end a listing due to the associated Catalog product being removed from the eBay Catalog.
     * - minOccurs: 0
     * @var string
     */
    public $EndingReason;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: The seller-defined SKU (stock keeping unit) value of the item in the listing being ended. The <b>SKU</b> field can only be used to end a listing if that listing was created or relisted with an <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> call, and the <b>Item.InventoryTrackingMethod</b> was included in the call and set to <code>SKU</code>. <br><br> In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required. If both are passed
     * in and they don't refer to the same listing, eBay ignores <b>SKU</b> and considers only the lt;b>ItemID</b>. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information
     * and rules, see the fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * Constructor method for EndFixedPriceItemRequestType
     * @uses EndFixedPriceItemRequestType::setItemID()
     * @uses EndFixedPriceItemRequestType::setEndingReason()
     * @uses EndFixedPriceItemRequestType::setSKU()
     * @param string $itemID
     * @param string $endingReason
     * @param string $sKU
     */
    public function __construct($itemID = null, $endingReason = null, $sKU = null)
    {
        $this
            ->setItemID($itemID)
            ->setEndingReason($endingReason)
            ->setSKU($sKU);
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
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
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
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason()
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $endingReason
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
     */
    public function setEndingReason($endingReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $endingReason, implode(', ', \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
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
