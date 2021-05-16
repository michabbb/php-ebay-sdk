<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetItemStatus</b> call, which is a call that is used to retrieve the current status of up to 20 eBay listings.
 * @subpackage Structs
 */
class GetItemStatusResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType[]
     */
    protected array $Item = [];
    /**
     * Constructor method for GetItemStatusResponseType
     * @uses GetItemStatusResponseType::setItem()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     */
    public function __construct(array $item = [])
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType[]
     */
    public function getItem(): array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getItemStatusResponseTypeItemItem) {
            // validation for constraint: itemType
            if (!$getItemStatusResponseTypeItemItem instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
                $invalidValues[] = is_object($getItemStatusResponseTypeItemItem) ? get_class($getItemStatusResponseTypeItemItem) : sprintf('%s(%s)', gettype($getItemStatusResponseTypeItemItem), var_export($getItemStatusResponseTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \macropage\ebaysdk\shopping\StructType\SimpleItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType
     */
    public function setItem(array $item = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType
     */
    public function addToItem(\macropage\ebaysdk\shopping\StructType\SimpleItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \macropage\ebaysdk\shopping\StructType\SimpleItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
