<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomPageArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store custom pages.
 * @subpackage Arrays
 */
class StoreCustomPageArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: A Store custom page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType[]
     */
    protected array $CustomPage = [];
    /**
     * Constructor method for StoreCustomPageArrayType
     * @uses StoreCustomPageArrayType::setCustomPage()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType[] $customPage
     */
    public function __construct(array $customPage = [])
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType[]
     */
    public function getCustomPage(): array
    {
        return $this->CustomPage;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomPage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomPage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomPageForArrayConstraintsFromSetCustomPage(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomPageArrayTypeCustomPageItem) {
            // validation for constraint: itemType
            if (!$storeCustomPageArrayTypeCustomPageItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomPageType) {
                $invalidValues[] = is_object($storeCustomPageArrayTypeCustomPageItem) ? get_class($storeCustomPageArrayTypeCustomPageItem) : sprintf('%s(%s)', gettype($storeCustomPageArrayTypeCustomPageItem), var_export($storeCustomPageArrayTypeCustomPageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomPage property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomPageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomPage value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType[] $customPage
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
     */
    public function setCustomPage(array $customPage = []): self
    {
        // validation for constraint: array
        if ('' !== ($customPageArrayErrorMessage = self::validateCustomPageForArrayConstraintsFromSetCustomPage($customPage))) {
            throw new InvalidArgumentException($customPageArrayErrorMessage, __LINE__);
        }
        $this->CustomPage = $customPage;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomPageType) {
            throw new InvalidArgumentException(sprintf('The CustomPage property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomPageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomPage
     */
    public function getAttributeName(): string
    {
        return 'CustomPage';
    }
}
