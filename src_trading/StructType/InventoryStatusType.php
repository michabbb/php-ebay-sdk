<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ReviseInventoryStatus</b> call to update the price and/or quantity of an item or an item variation within a single-variation or multiple-variation, fixed-price listing.
 * @subpackage Structs
 */
class InventoryStatusType extends AbstractStructBase
{
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: This value is the seller-defined SKU value of the item being revised. <br> <br> For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to
     * use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is
     * <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> call. <br> <br> For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the
     * <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note
     * that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU. <br> <br> The <b>SKU</b> field is always returned in the response, and if a
     * SKU value doesn't exist for a single-variation listing, it is returned as an empty tag. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the
     * fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing being revised. <br> <br> For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on
     * the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b>
     * field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call. <br> <br> For
     * a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>.
     * However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller
     * creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU. <br> <br> Please note that the same <b>ItemID</b> value can be used multiple times in the same call if you revise several item variations
     * from the same multiple-variation listing. <br> <br> The <b>ItemID</b> field is always returned in the response, even if an <b>ItemID</b> value was not included in the request. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to set the revised price of the listing (or of a variation within a multiple-variation listing). <br> <br> In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are
     * required. <br> <br> The <b>StartPrice</b> field is always returned in the response and reveals the current price of the item or item variation, regardless of whether the price was changed or not through a <b>StartPrice</b> field in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to set the revised quantity of the listing (or of a variation within a multiple-variation listing). <br> <br> In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are
     * required. <br> <br> The <b>Quantity</b> field is always returned in the response, regardless of whether the quantity was changed or not through a <b>Quantity</b> field in the call request. However, the <b>Quantity</b> field in the response is
     * actually a total of the quantity available for sale plus the quantity already sold for the item or item variation. For example, suppose the item or item variation originally had a quantity of 10, and then a quantity of 8 was sold. Now, you restock
     * your inventory, and you pass in a quantity of 10 in the <b>ReviseInventoryStatus</b> request. In this case, the response of this <b>ReviseInventoryStatus</b> call would show a quantity of 18 (10 available + 8 sold). To determine the quantity
     * available, use the <b>GetItem</b> or <b>GetSellerList</b> call, and subtract the <b>SellingStatus.QuantitySold</b> value from the <b>Quantity</b> value. Or, you can also use the <b>GetMyeBaySelling</b> call, search for the correct item or item
     * variation in the response by <b>ItemID</b> or <b>SKU</b> value, and then look at the <b>QuantityAvailable</b> field for that item or item variation. <br> <br> It is a good idea to maintain an adequate quantity available for fixed-price GTC listings
     * to prevent the search rankings from dropping. Best Match search ranking is based on buyer activity, and one of the factors affecting search ranking for fixed-price listings is the recent sales score. Fixed-price items that are selling the fastest are
     * given a relative lift in search results.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InventoryStatusType
     * @uses InventoryStatusType::setSKU()
     * @uses InventoryStatusType::setItemID()
     * @uses InventoryStatusType::setStartPrice()
     * @uses InventoryStatusType::setQuantity()
     * @uses InventoryStatusType::setAny()
     * @param string $sKU
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @param int $quantity
     * @param \DOMDocument $any
     */
    public function __construct($sKU = null, $itemID = null, \macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, $quantity = null, \DOMDocument $any = null)
    {
        $this
            ->setSKU($sKU)
            ->setItemID($itemID)
            ->setStartPrice($startPrice)
            ->setQuantity($quantity)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
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
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
     */
    public function setStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\InventoryStatusType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryStatusType
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
