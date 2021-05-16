<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseInventoryStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>ReviseInventoryStatus</b> call. The response includes a <b>Fees</b> container and an <b>InventoryStatus</b> container for each item and/or item variation that was revised.
 * @subpackage Structs
 */
class ReviseInventoryStatusResponseType extends AbstractResponseType
{
    /**
     * The InventoryStatus
     * Meta information extracted from the WSDL
     * - documentation: One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing,
     * the limit of items or item variations that can be modified with one call is four. <br> <br> Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an
     * empty tag if it is not defined for a single-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryStatusType[]
     */
    protected array $InventoryStatus = [];
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is
     * identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that
     * these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     * <br> <br> Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within
     * the same multiple-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryFeesType[]
     */
    protected array $Fees = [];
    /**
     * Constructor method for ReviseInventoryStatusResponseType
     * @uses ReviseInventoryStatusResponseType::setInventoryStatus()
     * @uses ReviseInventoryStatusResponseType::setFees()
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType[] $fees
     */
    public function __construct(array $inventoryStatus = [], array $fees = [])
    {
        $this
            ->setInventoryStatus($inventoryStatus)
            ->setFees($fees);
    }
    /**
     * Get InventoryStatus value
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType[]
     */
    public function getInventoryStatus(): array
    {
        return $this->InventoryStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setInventoryStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInventoryStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInventoryStatusForArrayConstraintsFromSetInventoryStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseInventoryStatusResponseTypeInventoryStatusItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusResponseTypeInventoryStatusItem instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
                $invalidValues[] = is_object($reviseInventoryStatusResponseTypeInventoryStatusItem) ? get_class($reviseInventoryStatusResponseTypeInventoryStatusItem) : sprintf('%s(%s)', gettype($reviseInventoryStatusResponseTypeInventoryStatusItem), var_export($reviseInventoryStatusResponseTypeInventoryStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InventoryStatus property can only contain items of type \macropage\ebaysdk\trading\StructType\InventoryStatusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InventoryStatus value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function setInventoryStatus(array $inventoryStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($inventoryStatusArrayErrorMessage = self::validateInventoryStatusForArrayConstraintsFromSetInventoryStatus($inventoryStatus))) {
            throw new InvalidArgumentException($inventoryStatusArrayErrorMessage, __LINE__);
        }
        $this->InventoryStatus = $inventoryStatus;
        
        return $this;
    }
    /**
     * Add item to InventoryStatus value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function addToInventoryStatus(\macropage\ebaysdk\trading\StructType\InventoryStatusType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
            throw new InvalidArgumentException(sprintf('The InventoryStatus property can only contain items of type \macropage\ebaysdk\trading\StructType\InventoryStatusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InventoryStatus[] = $item;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType[]
     */
    public function getFees(): array
    {
        return $this->Fees;
    }
    /**
     * This method is responsible for validating the values passed to the setFees method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFees method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeesForArrayConstraintsFromSetFees(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseInventoryStatusResponseTypeFeesItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusResponseTypeFeesItem instanceof \macropage\ebaysdk\trading\StructType\InventoryFeesType) {
                $invalidValues[] = is_object($reviseInventoryStatusResponseTypeFeesItem) ? get_class($reviseInventoryStatusResponseTypeFeesItem) : sprintf('%s(%s)', gettype($reviseInventoryStatusResponseTypeFeesItem), var_export($reviseInventoryStatusResponseTypeFeesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fees property can only contain items of type \macropage\ebaysdk\trading\StructType\InventoryFeesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Fees value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType[] $fees
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function setFees(array $fees = []): self
    {
        // validation for constraint: array
        if ('' !== ($feesArrayErrorMessage = self::validateFeesForArrayConstraintsFromSetFees($fees))) {
            throw new InvalidArgumentException($feesArrayErrorMessage, __LINE__);
        }
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Add item to Fees value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function addToFees(\macropage\ebaysdk\trading\StructType\InventoryFeesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InventoryFeesType) {
            throw new InvalidArgumentException(sprintf('The Fees property can only contain items of type \macropage\ebaysdk\trading\StructType\InventoryFeesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fees[] = $item;
        
        return $this;
    }
}
