<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIDArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>PromotionalSaleItemIDArray</b> container, which consists of an array of listings to which a Promotional Sale applies.
 * @subpackage Structs
 */
class ItemIDArrayType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an item listing. <br/><br/> For <b>SetPromotionalSaleListings</b>, the seller passes in the <b>ItemID</b> value for each listing that he/she wishes to become part of the Promotional Sale identified by the
     * <b>PromotionalSaleID</b> value. <br/><br/> For <b>GetPromotionalSaleDetails</b>, each listing returned in the response is a part of the Promotional Sale identified by the <b>PromotionalSaleID</b> value. | Type that represents the unique identifier
     * for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ItemID = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemIDArrayType
     * @uses ItemIDArrayType::setItemID()
     * @uses ItemIDArrayType::setAny()
     * @param string[] $itemID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $itemID = [], $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string[]
     */
    public function getItemID(): array
    {
        return $this->ItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIDForArrayConstraintsFromSetItemID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemIDArrayTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($itemIDArrayTypeItemIDItem)) {
                $invalidValues[] = is_object($itemIDArrayTypeItemIDItem) ? get_class($itemIDArrayTypeItemIDItem) : sprintf('%s(%s)', gettype($itemIDArrayTypeItemIDItem), var_export($itemIDArrayTypeItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemID value
     * @throws InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public function setItemID(array $itemID = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIDArrayErrorMessage = self::validateItemIDForArrayConstraintsFromSetItemID($itemID))) {
            throw new InvalidArgumentException($itemIDArrayErrorMessage, __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public function addToItemID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
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
