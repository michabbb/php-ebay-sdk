<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreLogoArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store logos.
 * @subpackage Arrays
 */
class StoreLogoArrayType extends AbstractStructArrayBase
{
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: A Store logo.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreLogoType[]
     */
    protected array $Logo = [];
    /**
     * Constructor method for StoreLogoArrayType
     * @uses StoreLogoArrayType::setLogo()
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType[] $logo
     */
    public function __construct(array $logo = [])
    {
        $this
            ->setLogo($logo);
    }
    /**
     * Get Logo value
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType[]
     */
    public function getLogo(): array
    {
        return $this->Logo;
    }
    /**
     * This method is responsible for validating the values passed to the setLogo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogoForArrayConstraintsFromSetLogo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeLogoArrayTypeLogoItem) {
            // validation for constraint: itemType
            if (!$storeLogoArrayTypeLogoItem instanceof \macropage\ebaysdk\trading\StructType\StoreLogoType) {
                $invalidValues[] = is_object($storeLogoArrayTypeLogoItem) ? get_class($storeLogoArrayTypeLogoItem) : sprintf('%s(%s)', gettype($storeLogoArrayTypeLogoItem), var_export($storeLogoArrayTypeLogoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Logo property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreLogoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Logo value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType[] $logo
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
     */
    public function setLogo(array $logo = []): self
    {
        // validation for constraint: array
        if ('' !== ($logoArrayErrorMessage = self::validateLogoForArrayConstraintsFromSetLogo($logo))) {
            throw new InvalidArgumentException($logoArrayErrorMessage, __LINE__);
        }
        $this->Logo = $logo;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreLogoType) {
            throw new InvalidArgumentException(sprintf('The Logo property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreLogoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Logo
     */
    public function getAttributeName(): string
    {
        return 'Logo';
    }
}
