<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreColorSchemeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of eBay Store color schemes.
 * @subpackage Arrays
 */
class StoreColorSchemeArrayType extends AbstractStructArrayBase
{
    /**
     * The ColorScheme
     * Meta information extracted from the WSDL
     * - documentation: A Store color scheme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[]
     */
    protected ?array $ColorScheme = null;
    /**
     * Constructor method for StoreColorSchemeArrayType
     * @uses StoreColorSchemeArrayType::setColorScheme()
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[] $colorScheme
     */
    public function __construct(?array $colorScheme = null)
    {
        $this
            ->setColorScheme($colorScheme);
    }
    /**
     * Get ColorScheme value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[]
     */
    public function getColorScheme(): ?array
    {
        return $this->ColorScheme;
    }
    /**
     * This method is responsible for validating the values passed to the setColorScheme method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColorScheme method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColorSchemeForArrayConstraintsFromSetColorScheme(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeColorSchemeArrayTypeColorSchemeItem) {
            // validation for constraint: itemType
            if (!$storeColorSchemeArrayTypeColorSchemeItem instanceof \macropage\ebaysdk\trading\StructType\StoreColorSchemeType) {
                $invalidValues[] = is_object($storeColorSchemeArrayTypeColorSchemeItem) ? get_class($storeColorSchemeArrayTypeColorSchemeItem) : sprintf('%s(%s)', gettype($storeColorSchemeArrayTypeColorSchemeItem), var_export($storeColorSchemeArrayTypeColorSchemeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ColorScheme property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreColorSchemeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ColorScheme value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[] $colorScheme
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
     */
    public function setColorScheme(?array $colorScheme = null): self
    {
        // validation for constraint: array
        if ('' !== ($colorSchemeArrayErrorMessage = self::validateColorSchemeForArrayConstraintsFromSetColorScheme($colorScheme))) {
            throw new InvalidArgumentException($colorSchemeArrayErrorMessage, __LINE__);
        }
        $this->ColorScheme = $colorScheme;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreColorSchemeType) {
            throw new InvalidArgumentException(sprintf('The ColorScheme property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreColorSchemeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ColorScheme
     */
    public function getAttributeName(): string
    {
        return 'ColorScheme';
    }
}
