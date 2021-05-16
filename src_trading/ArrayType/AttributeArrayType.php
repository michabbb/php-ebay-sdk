<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * @subpackage Arrays
 */
class AttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    protected array $Attribute = [];
    /**
     * Constructor method for AttributeArrayType
     * @uses AttributeArrayType::setAttribute()
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     */
    public function __construct(array $attribute = [])
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    public function getAttribute(): array
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeArrayTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeArrayTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
                $invalidValues[] = is_object($attributeArrayTypeAttributeItem) ? get_class($attributeArrayTypeAttributeItem) : sprintf('%s(%s)', gettype($attributeArrayTypeAttributeItem), var_export($attributeArrayTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
     */
    public function setAttribute(array $attribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\AttributeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\AttributeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\AttributeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\AttributeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\AttributeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
            throw new InvalidArgumentException(sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attribute
     */
    public function getAttributeName(): string
    {
        return 'Attribute';
    }
}
