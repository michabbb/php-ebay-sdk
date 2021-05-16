<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
 * @subpackage Structs
 */
class ItemBestOffersArrayType extends AbstractStructBase
{
    /**
     * The ItemBestOffers
     * Meta information extracted from the WSDL
     * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemBestOffersType[]
     */
    protected array $ItemBestOffers = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemBestOffersArrayType
     * @uses ItemBestOffersArrayType::setItemBestOffers()
     * @uses ItemBestOffersArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType[] $itemBestOffers
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $itemBestOffers = [], $any = null)
    {
        $this
            ->setItemBestOffers($itemBestOffers)
            ->setAny($any);
    }
    /**
     * Get ItemBestOffers value
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType[]
     */
    public function getItemBestOffers(): array
    {
        return $this->ItemBestOffers;
    }
    /**
     * This method is responsible for validating the values passed to the setItemBestOffers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemBestOffers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemBestOffersForArrayConstraintsFromSetItemBestOffers(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemBestOffersArrayTypeItemBestOffersItem) {
            // validation for constraint: itemType
            if (!$itemBestOffersArrayTypeItemBestOffersItem instanceof \macropage\ebaysdk\trading\StructType\ItemBestOffersType) {
                $invalidValues[] = is_object($itemBestOffersArrayTypeItemBestOffersItem) ? get_class($itemBestOffersArrayTypeItemBestOffersItem) : sprintf('%s(%s)', gettype($itemBestOffersArrayTypeItemBestOffersItem), var_export($itemBestOffersArrayTypeItemBestOffersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemBestOffers property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemBestOffersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemBestOffers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType[] $itemBestOffers
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
     */
    public function setItemBestOffers(array $itemBestOffers = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemBestOffersArrayErrorMessage = self::validateItemBestOffersForArrayConstraintsFromSetItemBestOffers($itemBestOffers))) {
            throw new InvalidArgumentException($itemBestOffersArrayErrorMessage, __LINE__);
        }
        $this->ItemBestOffers = $itemBestOffers;
        
        return $this;
    }
    /**
     * Add item to ItemBestOffers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
     */
    public function addToItemBestOffers(\macropage\ebaysdk\trading\StructType\ItemBestOffersType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemBestOffersType) {
            throw new InvalidArgumentException(sprintf('The ItemBestOffers property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemBestOffersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemBestOffers[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
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
