<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryFeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is used in the <b>ReviseInventoryStatus</b> response to provide the set of fees associated with each unique <b>ItemID</b>.
 * @subpackage Structs
 */
class InventoryFeesType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing being changed. <br> <br> The <b>ReviseInventoryStatus</b> response includes a separate set of fees for each item that was successfully revised.<br> <br> Use the <b>ItemID</b> to correlate the Fees
     * data with the Inventory Status data in the response. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data for one fee (such as name and amount).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    public $Fee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InventoryFeesType
     * @uses InventoryFeesType::setItemID()
     * @uses InventoryFeesType::setFee()
     * @uses InventoryFeesType::setAny()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, array $fee = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setFee($fee)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
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
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\FeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $inventoryFeesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$inventoryFeesTypeFeeItem instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \macropage\ebaysdk\trading\StructType\FeeType, "%s" given', is_object($inventoryFeesTypeFeeItem) ? get_class($inventoryFeesTypeFeeItem) : gettype($inventoryFeesTypeFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType $item
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
     */
    public function addToFee(\macropage\ebaysdk\trading\StructType\FeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \macropage\ebaysdk\trading\StructType\FeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\InventoryFeesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
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
