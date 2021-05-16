<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndFixedPriceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ends the specified fixed-price listing before the date and time at which it would normally end (per the listing duration).
 * @subpackage Structs
 */
class EndFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the listing that you want to end. <br><br> In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> value is required. If both are passed in and they don't refer to the same listing, eBay
     * ignores <b>SKU</b> and considers only the <b>ItemID</b>. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The EndingReason
     * Meta information extracted from the WSDL
     * - documentation: The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively
     * end a listing due to the associated Catalog product being removed from the eBay Catalog.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndingReason = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: The seller-defined SKU (stock keeping unit) value of the item in the listing being ended. The <b>SKU</b> field can only be used to end a listing if that listing was created or relisted with an <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> call, and the <b>Item.InventoryTrackingMethod</b> was included in the call and set to <code>SKU</code>. <br><br> In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required. If both are passed
     * in and they don't refer to the same listing, eBay ignores <b>SKU</b> and considers only the lt;b>ItemID</b>. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information
     * and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * Constructor method for EndFixedPriceItemRequestType
     * @uses EndFixedPriceItemRequestType::setItemID()
     * @uses EndFixedPriceItemRequestType::setEndingReason()
     * @uses EndFixedPriceItemRequestType::setSKU()
     * @param string $itemID
     * @param string $endingReason
     * @param string $sKU
     */
    public function __construct(?string $itemID = null, ?string $endingReason = null, ?string $sKU = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason(): ?string
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $endingReason
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
     */
    public function setEndingReason(?string $endingReason = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EndReasonCodeType', is_array($endingReason) ? implode(', ', $endingReason) : var_export($endingReason, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
}
