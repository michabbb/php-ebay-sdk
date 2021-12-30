<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AverageRatingDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type has been deprecated.
 * @subpackage Arrays
 */
class AverageRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]
     */
    protected ?array $AverageRatingDetails = null;
    /**
     * Constructor method for AverageRatingDetailArrayType
     * @uses AverageRatingDetailArrayType::setAverageRatingDetails()
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     */
    public function __construct(?array $averageRatingDetails = null)
    {
        $this
            ->setAverageRatingDetails($averageRatingDetails);
    }
    /**
     * Get AverageRatingDetails value
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails(): ?array
    {
        return $this->AverageRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $averageRatingDetailArrayTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$averageRatingDetailArrayTypeAverageRatingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
                $invalidValues[] = is_object($averageRatingDetailArrayTypeAverageRatingDetailsItem) ? get_class($averageRatingDetailArrayTypeAverageRatingDetailsItem) : sprintf('%s(%s)', gettype($averageRatingDetailArrayTypeAverageRatingDetailsItem), var_export($averageRatingDetailArrayTypeAverageRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AverageRatingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \macropage\ebaysdk\trading\ArrayType\AverageRatingDetailArrayType
     */
    public function setAverageRatingDetails(?array $averageRatingDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($averageRatingDetailsArrayErrorMessage = self::validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails($averageRatingDetails))) {
            throw new InvalidArgumentException($averageRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AverageRatingDetailArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
            throw new InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingDetails
     */
    public function getAttributeName(): string
    {
        return 'AverageRatingDetails';
    }
}
