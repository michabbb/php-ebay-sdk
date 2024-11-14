<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CountryPoliciesArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * @subpackage Arrays
 */
class CountryPoliciesArrayType extends AbstractStructArrayBase
{
    /**
     * The CountryPolicies
     * Meta information extracted from the WSDL
     * - documentation: Contains a country and the custom policy/policies for that country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CountryPoliciesType[]
     */
    protected ?array $CountryPolicies = null;
    /**
     * Constructor method for CountryPoliciesArrayType
     * @uses CountryPoliciesArrayType::setCountryPolicies()
     * @param \macropage\ebaysdk\trading\StructType\CountryPoliciesType[] $countryPolicies
     */
    public function __construct(?array $countryPolicies = null)
    {
        $this
            ->setCountryPolicies($countryPolicies);
    }
    /**
     * Get CountryPolicies value
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType[]
     */
    public function getCountryPolicies(): ?array
    {
        return $this->CountryPolicies;
    }
    /**
     * This method is responsible for validating the values passed to the setCountryPolicies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryPolicies method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryPoliciesForArrayConstraintsFromSetCountryPolicies(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $countryPoliciesArrayTypeCountryPoliciesItem) {
            // validation for constraint: itemType
            if (!$countryPoliciesArrayTypeCountryPoliciesItem instanceof \macropage\ebaysdk\trading\StructType\CountryPoliciesType) {
                $invalidValues[] = is_object($countryPoliciesArrayTypeCountryPoliciesItem) ? get_class($countryPoliciesArrayTypeCountryPoliciesItem) : sprintf('%s(%s)', gettype($countryPoliciesArrayTypeCountryPoliciesItem), var_export($countryPoliciesArrayTypeCountryPoliciesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryPolicies property can only contain items of type \macropage\ebaysdk\trading\StructType\CountryPoliciesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CountryPolicies value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryPoliciesType[] $countryPolicies
     * @return \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType
     */
    public function setCountryPolicies(?array $countryPolicies = null): self
    {
        // validation for constraint: array
        if ('' !== ($countryPoliciesArrayErrorMessage = self::validateCountryPoliciesForArrayConstraintsFromSetCountryPolicies($countryPolicies))) {
            throw new InvalidArgumentException($countryPoliciesArrayErrorMessage, __LINE__);
        }
        $this->CountryPolicies = $countryPolicies;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\CountryPoliciesType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\CountryPoliciesType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\CountryPoliciesType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\CountryPoliciesType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\CountryPoliciesType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryPoliciesType $item
     * @return \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CountryPoliciesType) {
            throw new InvalidArgumentException(sprintf('The CountryPolicies property can only contain items of type \macropage\ebaysdk\trading\StructType\CountryPoliciesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CountryPolicies
     */
    public function getAttributeName(): string
    {
        return 'CountryPolicies';
    }
}
