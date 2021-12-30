<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about one or more order line items in a Global Shipping Program package.
 * @subpackage Structs
 */
class ShipmentLineItemType extends AbstractStructBase
{
    /**
     * The LineItem
     * Meta information extracted from the WSDL
     * - documentation: Contains information about one order line item in a Global Shipping Program package. The package can contain multiple units of a given order line item, and multiple order line items.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \macropage\ebaysdk\trading\StructType\LineItemType[]
     */
    protected array $LineItem;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShipmentLineItemType
     * @uses ShipmentLineItemType::setLineItem()
     * @uses ShipmentLineItemType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\LineItemType[] $lineItem
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $lineItem, $any = null)
    {
        $this
            ->setLineItem($lineItem)
            ->setAny($any);
    }
    /**
     * Get LineItem value
     * @return \macropage\ebaysdk\trading\StructType\LineItemType[]
     */
    public function getLineItem(): array
    {
        return $this->LineItem;
    }
    /**
     * This method is responsible for validating the values passed to the setLineItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLineItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineItemForArrayConstraintsFromSetLineItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentLineItemTypeLineItemItem) {
            // validation for constraint: itemType
            if (!$shipmentLineItemTypeLineItemItem instanceof \macropage\ebaysdk\trading\StructType\LineItemType) {
                $invalidValues[] = is_object($shipmentLineItemTypeLineItemItem) ? get_class($shipmentLineItemTypeLineItemItem) : sprintf('%s(%s)', gettype($shipmentLineItemTypeLineItemItem), var_export($shipmentLineItemTypeLineItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LineItem property can only contain items of type \macropage\ebaysdk\trading\StructType\LineItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LineItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LineItemType[] $lineItem
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public function setLineItem(array $lineItem): self
    {
        // validation for constraint: array
        if ('' !== ($lineItemArrayErrorMessage = self::validateLineItemForArrayConstraintsFromSetLineItem($lineItem))) {
            throw new InvalidArgumentException($lineItemArrayErrorMessage, __LINE__);
        }
        $this->LineItem = $lineItem;
        
        return $this;
    }
    /**
     * Add item to LineItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LineItemType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public function addToLineItem(\macropage\ebaysdk\trading\StructType\LineItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\LineItemType) {
            throw new InvalidArgumentException(sprintf('The LineItem property can only contain items of type \macropage\ebaysdk\trading\StructType\LineItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LineItem[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
