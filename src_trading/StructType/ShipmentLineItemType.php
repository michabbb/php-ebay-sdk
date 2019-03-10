<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLineItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about one or more order line items in a Global Shipping Program package.
 * @subpackage Structs
 */
class ShipmentLineItemType extends AbstractStructBase
{
    /**
     * The LineItem
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about one order line item in a Global Shipping Program package. The package can contain multiple units of a given order line item, and multiple order line items.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \macropage\ebaysdk\trading\StructType\LineItemType[]
     */
    public $LineItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipmentLineItemType
     * @uses ShipmentLineItemType::setLineItem()
     * @uses ShipmentLineItemType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\LineItemType[] $lineItem
     * @param \DOMDocument $any
     */
    public function __construct(array $lineItem = array(), \DOMDocument $any = null)
    {
        $this
            ->setLineItem($lineItem)
            ->setAny($any);
    }
    /**
     * Get LineItem value
     * @return \macropage\ebaysdk\trading\StructType\LineItemType[]
     */
    public function getLineItem()
    {
        return $this->LineItem;
    }
    /**
     * Set LineItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LineItemType[] $lineItem
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public function setLineItem(array $lineItem = array())
    {
        foreach ($lineItem as $shipmentLineItemTypeLineItemItem) {
            // validation for constraint: itemType
            if (!$shipmentLineItemTypeLineItemItem instanceof \macropage\ebaysdk\trading\StructType\LineItemType) {
                throw new \InvalidArgumentException(sprintf('The LineItem property can only contain items of \macropage\ebaysdk\trading\StructType\LineItemType, "%s" given', is_object($shipmentLineItemTypeLineItemItem) ? get_class($shipmentLineItemTypeLineItemItem) : gettype($shipmentLineItemTypeLineItemItem)), __LINE__);
            }
        }
        $this->LineItem = $lineItem;
        return $this;
    }
    /**
     * Add item to LineItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LineItemType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public function addToLineItem(\macropage\ebaysdk\trading\StructType\LineItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\LineItemType) {
            throw new \InvalidArgumentException(sprintf('The LineItem property can only contain items of \macropage\ebaysdk\trading\StructType\LineItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineItem[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShipmentLineItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
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
