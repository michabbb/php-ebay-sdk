<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertArrayType extends AbstractStructArrayBase
{
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[]
     */
    protected ?array $Alert = null;
    /**
     * Constructor method for MyMessagesAlertArrayType
     * @uses MyMessagesAlertArrayType::setAlert()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[] $alert
     */
    public function __construct(?array $alert = null)
    {
        $this
            ->setAlert($alert);
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[]
     */
    public function getAlert(): ?array
    {
        return $this->Alert;
    }
    /**
     * This method is responsible for validating the values passed to the setAlert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertForArrayConstraintsFromSetAlert(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesAlertArrayTypeAlertItem) {
            // validation for constraint: itemType
            if (!$myMessagesAlertArrayTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesAlertType) {
                $invalidValues[] = is_object($myMessagesAlertArrayTypeAlertItem) ? get_class($myMessagesAlertArrayTypeAlertItem) : sprintf('%s(%s)', gettype($myMessagesAlertArrayTypeAlertItem), var_export($myMessagesAlertArrayTypeAlertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesAlertType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Alert value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[] $alert
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
     */
    public function setAlert(?array $alert = null): self
    {
        // validation for constraint: array
        if ('' !== ($alertArrayErrorMessage = self::validateAlertForArrayConstraintsFromSetAlert($alert))) {
            throw new InvalidArgumentException($alertArrayErrorMessage, __LINE__);
        }
        $this->Alert = $alert;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\MyMessagesAlertType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\MyMessagesAlertType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\MyMessagesAlertType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\MyMessagesAlertType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\MyMessagesAlertType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesAlertType) {
            throw new InvalidArgumentException(sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesAlertType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Alert
     */
    public function getAttributeName(): string
    {
        return 'Alert';
    }
}
