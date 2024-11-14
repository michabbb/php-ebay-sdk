<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ends the specified item listing before the date and time at which it would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique item ID that identifies the listing that you want to end. | Type that represents the unique identifier for an eBay listing.
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
     * Constructor method for EndItemRequestType
     * @uses EndItemRequestType::setItemID()
     * @uses EndItemRequestType::setEndingReason()
     * @param string $itemID
     * @param string $endingReason
     */
    public function __construct(?string $itemID = null, ?string $endingReason = null)
    {
        $this
            ->setItemID($itemID)
            ->setEndingReason($endingReason);
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestType
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
}
