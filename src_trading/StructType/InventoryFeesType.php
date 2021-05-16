<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryFeesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is used in the <b>ReviseInventoryStatus</b> response to provide the set of fees associated with each unique <b>ItemID</b>.
 * @subpackage Structs
 */
class InventoryFeesType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing being changed. <br> <br> The <b>ReviseInventoryStatus</b> response includes a separate set of fees for each item that was successfully revised.<br> <br> Use the <b>ItemID</b> to correlate the Fees
     * data with the Inventory Status data in the response. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Contains the data for one fee (such as name and amount).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    protected array $Fee = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for InventoryFeesType
     * @uses InventoryFeesType::setItemID()
     * @uses InventoryFeesType::setFee()
     * @uses InventoryFeesType::setAny()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, array $fee = [], $any = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
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
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    public function getFee(): array
    {
        return $this->Fee;
    }
    /**
     * This method is responsible for validating the values passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintsFromSetFee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $inventoryFeesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$inventoryFeesTypeFeeItem instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
                $invalidValues[] = is_object($inventoryFeesTypeFeeItem) ? get_class($inventoryFeesTypeFeeItem) : sprintf('%s(%s)', gettype($inventoryFeesTypeFeeItem), var_export($inventoryFeesTypeFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fee property can only contain items of type \macropage\ebaysdk\trading\StructType\FeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Fee value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
     */
    public function setFee(array $fee = []): self
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintsFromSetFee($fee))) {
            throw new InvalidArgumentException($feeArrayErrorMessage, __LINE__);
        }
        $this->Fee = $fee;
        
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType $item
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
     */
    public function addToFee(\macropage\ebaysdk\trading\StructType\FeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
            throw new InvalidArgumentException(sprintf('The Fee property can only contain items of type \macropage\ebaysdk\trading\StructType\FeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fee[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\InventoryFeesType
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
