<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeSetArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class AttributeSetArrayType extends AbstractStructArrayBase
{
    /**
     * The AttributeSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeSetType[]
     */
    protected array $AttributeSet = [];
    /**
     * Constructor method for AttributeSetArrayType
     * @uses AttributeSetArrayType::setAttributeSet()
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType[] $attributeSet
     */
    public function __construct(array $attributeSet = [])
    {
        $this
            ->setAttributeSet($attributeSet);
    }
    /**
     * Get AttributeSet value
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType[]
     */
    public function getAttributeSet(): array
    {
        return $this->AttributeSet;
    }
    /**
     * This method is responsible for validating the values passed to the setAttributeSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributeSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeSetForArrayConstraintsFromSetAttributeSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeSetArrayTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$attributeSetArrayTypeAttributeSetItem instanceof \macropage\ebaysdk\trading\StructType\AttributeSetType) {
                $invalidValues[] = is_object($attributeSetArrayTypeAttributeSetItem) ? get_class($attributeSetArrayTypeAttributeSetItem) : sprintf('%s(%s)', gettype($attributeSetArrayTypeAttributeSetItem), var_export($attributeSetArrayTypeAttributeSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttributeSet property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AttributeSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType[] $attributeSet
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public function setAttributeSet(array $attributeSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($attributeSetArrayErrorMessage = self::validateAttributeSetForArrayConstraintsFromSetAttributeSet($attributeSet))) {
            throw new InvalidArgumentException($attributeSetArrayErrorMessage, __LINE__);
        }
        $this->AttributeSet = $attributeSet;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\AttributeSetType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\AttributeSetType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\AttributeSetType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\AttributeSetType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\AttributeSetType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeSetType) {
            throw new InvalidArgumentException(sprintf('The AttributeSet property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttributeSet
     */
    public function getAttributeName(): string
    {
        return 'AttributeSet';
    }
}
