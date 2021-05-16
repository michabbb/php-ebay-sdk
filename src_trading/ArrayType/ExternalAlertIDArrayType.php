<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ExternalAlertIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ExternalAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ExternalAlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ExternalAlertID = [];
    /**
     * Constructor method for ExternalAlertIDArrayType
     * @uses ExternalAlertIDArrayType::setExternalAlertID()
     * @param string[] $externalAlertID
     */
    public function __construct(array $externalAlertID = [])
    {
        $this
            ->setExternalAlertID($externalAlertID);
    }
    /**
     * Get ExternalAlertID value
     * @return string[]
     */
    public function getExternalAlertID(): array
    {
        return $this->ExternalAlertID;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalAlertID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalAlertID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalAlertIDForArrayConstraintsFromSetExternalAlertID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalAlertIDArrayTypeExternalAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($externalAlertIDArrayTypeExternalAlertIDItem)) {
                $invalidValues[] = is_object($externalAlertIDArrayTypeExternalAlertIDItem) ? get_class($externalAlertIDArrayTypeExternalAlertIDItem) : sprintf('%s(%s)', gettype($externalAlertIDArrayTypeExternalAlertIDItem), var_export($externalAlertIDArrayTypeExternalAlertIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalAlertID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalAlertID value
     * @throws InvalidArgumentException
     * @param string[] $externalAlertID
     * @return \macropage\ebaysdk\trading\ArrayType\ExternalAlertIDArrayType
     */
    public function setExternalAlertID(array $externalAlertID = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalAlertIDArrayErrorMessage = self::validateExternalAlertIDForArrayConstraintsFromSetExternalAlertID($externalAlertID))) {
            throw new InvalidArgumentException($externalAlertIDArrayErrorMessage, __LINE__);
        }
        $this->ExternalAlertID = $externalAlertID;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExternalAlertID
     */
    public function getAttributeName(): string
    {
        return 'ExternalAlertID';
    }
}
