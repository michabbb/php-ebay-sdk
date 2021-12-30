<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for LookupAttributeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class LookupAttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The LookupAttribute
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LookupAttributeType[]
     */
    protected ?array $LookupAttribute = null;
    /**
     * Constructor method for LookupAttributeArrayType
     * @uses LookupAttributeArrayType::setLookupAttribute()
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType[] $lookupAttribute
     */
    public function __construct(?array $lookupAttribute = null)
    {
        $this
            ->setLookupAttribute($lookupAttribute);
    }
    /**
     * Get LookupAttribute value
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType[]
     */
    public function getLookupAttribute(): ?array
    {
        return $this->LookupAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setLookupAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLookupAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLookupAttributeForArrayConstraintsFromSetLookupAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lookupAttributeArrayTypeLookupAttributeItem) {
            // validation for constraint: itemType
            if (!$lookupAttributeArrayTypeLookupAttributeItem instanceof \macropage\ebaysdk\trading\StructType\LookupAttributeType) {
                $invalidValues[] = is_object($lookupAttributeArrayTypeLookupAttributeItem) ? get_class($lookupAttributeArrayTypeLookupAttributeItem) : sprintf('%s(%s)', gettype($lookupAttributeArrayTypeLookupAttributeItem), var_export($lookupAttributeArrayTypeLookupAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LookupAttribute property can only contain items of type \macropage\ebaysdk\trading\StructType\LookupAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LookupAttribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType[] $lookupAttribute
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
     */
    public function setLookupAttribute(?array $lookupAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($lookupAttributeArrayErrorMessage = self::validateLookupAttributeForArrayConstraintsFromSetLookupAttribute($lookupAttribute))) {
            throw new InvalidArgumentException($lookupAttributeArrayErrorMessage, __LINE__);
        }
        $this->LookupAttribute = $lookupAttribute;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\LookupAttributeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\LookupAttributeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\LookupAttributeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\LookupAttributeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\LookupAttributeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\LookupAttributeType) {
            throw new InvalidArgumentException(sprintf('The LookupAttribute property can only contain items of type \macropage\ebaysdk\trading\StructType\LookupAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LookupAttribute
     */
    public function getAttributeName(): string
    {
        return 'LookupAttribute';
    }
}
