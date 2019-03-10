<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ends the specified item listing before the date and time at which it would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique item ID that identifies the listing that you want to end. | Type that represents the unique identifier for an eBay listing.
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
     * The SellerInventoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * Constructor method for EndItemRequestType
     * @uses EndItemRequestType::setItemID()
     * @uses EndItemRequestType::setEndingReason()
     * @uses EndItemRequestType::setSellerInventoryID()
     * @param string $itemID
     * @param string $endingReason
     * @param string $sellerInventoryID
     */
    public function __construct($itemID = null, $endingReason = null, $sellerInventoryID = null)
    {
        $this
            ->setItemID($itemID)
            ->setEndingReason($endingReason)
            ->setSellerInventoryID($sellerInventoryID);
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
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
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
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
