<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseInventoryStatusRequestType StructType
 * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - documentation: One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation
     * listing, the limit of items or item variations that can be modified with one call is four.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InventoryStatusType[]
     */
    public $InventoryStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReviseInventoryStatusRequestType
     * @uses ReviseInventoryStatusRequestType::setInventoryStatus()
     * @uses ReviseInventoryStatusRequestType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType[] $inventoryStatus
     * @param \DOMDocument $any
     */
    public function __construct(array $inventoryStatus = array(), \DOMDocument $any = null)
    {
        $this
            ->setInventoryStatus($inventoryStatus)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
     */
    public function setInventoryStatus(array $inventoryStatus = array())
    {
        foreach ($inventoryStatus as $reviseInventoryStatusRequestTypeInventoryStatusItem) {
            // validation for constraint: itemType
            if (!$reviseInventoryStatusRequestTypeInventoryStatusItem instanceof \macropage\ebaysdk\trading\StructType\InventoryStatusType) {
                throw new \InvalidArgumentException(sprintf('The InventoryStatus property can only contain items of \macropage\ebaysdk\trading\StructType\InventoryStatusType, "%s" given', is_object($reviseInventoryStatusRequestTypeInventoryStatusItem) ? get_class($reviseInventoryStatusRequestTypeInventoryStatusItem) : gettype($reviseInventoryStatusRequestTypeInventoryStatusItem)), __LINE__);
            }
        }
        $this->InventoryStatus = $inventoryStatus;
        return $this;
    }
    /**
     * Add item to InventoryStatus value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InventoryStatusType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType
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
