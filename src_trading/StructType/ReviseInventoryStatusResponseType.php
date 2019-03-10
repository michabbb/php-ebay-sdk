<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseInventoryStatusResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type for the <b>ReviseInventoryStatus</b> call. The response includes a <b>Fees</b> container and an <b>InventoryStatus</b> container for each item and/or item variation that was revised.
 * @subpackage Structs
 */
class ReviseInventoryStatusResponseType extends AbstractResponseType
{
    /**
     * The InventoryStatus
     * Meta informations extracted from the WSDL
     * - documentation: One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing,
     * the limit of items or item variations that can be modified with one call is four. <br> <br> Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an
     * empty tag if it is not defined for a single-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryStatusType[]
     */
    public $InventoryStatus;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is
     * identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that
     * these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     * <br> <br> Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within
     * the same multiple-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryFeesType[]
     */
    public $Fees;
    /**
     * Constructor method for ReviseInventoryStatusResponseType
     * @uses ReviseInventoryStatusResponseType::setInventoryStatus()
     * @uses ReviseInventoryStatusResponseType::setFees()
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType[] $fees
     */
    public function __construct(array $inventoryStatus = array(), array $fees = array())
    {
        $this
            ->setInventoryStatus($inventoryStatus)
            ->setFees($fees);
    }
    /**
     * Get InventoryStatus value
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType[]|null
     */
    public function getInventoryStatus()
    {
        return $this->InventoryStatus;
    }
    /**
     * Set InventoryStatus value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function setInventoryStatus(array $inventoryStatus = array())
    {
        foreach ($inventoryStatus as $reviseInventoryStatusResponseTypeInventoryStatusItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusResponseTypeInventoryStatusItem instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
                throw new \InvalidArgumentException(sprintf('The InventoryStatus property can only contain items of \macropage\ebaysdk\trading\StructType\InventoryStatusType, "%s" given', is_object($reviseInventoryStatusResponseTypeInventoryStatusItem) ? get_class($reviseInventoryStatusResponseTypeInventoryStatusItem) : gettype($reviseInventoryStatusResponseTypeInventoryStatusItem)), __LINE__);
            }
        }
        $this->InventoryStatus = $inventoryStatus;
        return $this;
    }
    /**
     * Add item to InventoryStatus value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function addToInventoryStatus(\macropage\ebaysdk\trading\StructType\InventoryStatusType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
            throw new \InvalidArgumentException(sprintf('The InventoryStatus property can only contain items of \macropage\ebaysdk\trading\StructType\InventoryStatusType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InventoryStatus[] = $item;
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType[]|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType[] $fees
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function setFees(array $fees = array())
    {
        foreach ($fees as $reviseInventoryStatusResponseTypeFeesItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusResponseTypeFeesItem instanceof \macropage\ebaysdk\trading\StructType\InventoryFeesType) {
                throw new \InvalidArgumentException(sprintf('The Fees property can only contain items of \macropage\ebaysdk\trading\StructType\InventoryFeesType, "%s" given', is_object($reviseInventoryStatusResponseTypeFeesItem) ? get_class($reviseInventoryStatusResponseTypeFeesItem) : gettype($reviseInventoryStatusResponseTypeFeesItem)), __LINE__);
            }
        }
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Add item to Fees value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryFeesType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
     */
    public function addToFees(\macropage\ebaysdk\trading\StructType\InventoryFeesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InventoryFeesType) {
            throw new \InvalidArgumentException(sprintf('The Fees property can only contain items of \macropage\ebaysdk\trading\StructType\InventoryFeesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fees[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType
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
