<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseInventoryStatusRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to change the price and/or quantity of one to four active, fixed-price listings. The fixed-price listing to modify is identified with the <b>ItemID</b> of the listing and/or the <b>SKU</b> value of the item (if a
 * seller-defined SKU value exists for the listing). If the seller is modifying one or more variations within a multiple-variation listing, the <b>ItemID</b> and <b>SKU</b> fields in the <b>InventoryStatus</b> container become required, with the
 * <b>ItemID</b> value identifying the listing, and the <b>SKU</b> value identifying the specific product variation within that multiple-variation listing. Each variation within a multiple-variation listing requires a seller-defined SKU value.
 * <br/><br/> Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
 * @subpackage Structs
 */
class ReviseInventoryStatusRequestType extends AbstractRequestType
{
    /**
     * The InventoryStatus
     * Meta information extracted from the WSDL
     * - documentation: One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation
     * listing, the limit of items or item variations that can be modified with one call is four.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryStatusType[]
     */
    protected array $InventoryStatus = [];
    /**
     * Constructor method for ReviseInventoryStatusRequestType
     * @uses ReviseInventoryStatusRequestType::setInventoryStatus()
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     */
    public function __construct(array $inventoryStatus = [])
    {
        $this
            ->setInventoryStatus($inventoryStatus);
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
        foreach ($values as $reviseInventoryStatusRequestTypeInventoryStatusItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusRequestTypeInventoryStatusItem instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
                $invalidValues[] = is_object($reviseInventoryStatusRequestTypeInventoryStatusItem) ? get_class($reviseInventoryStatusRequestTypeInventoryStatusItem) : sprintf('%s(%s)', gettype($reviseInventoryStatusRequestTypeInventoryStatusItem), var_export($reviseInventoryStatusRequestTypeInventoryStatusItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
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
}
