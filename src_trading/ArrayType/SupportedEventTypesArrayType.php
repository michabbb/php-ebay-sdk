<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SupportedEventTypesArrayType ArrayType
 * @subpackage Arrays
 */
class SupportedEventTypesArrayType extends AbstractStructArrayBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $EventType = null;
    /**
     * Constructor method for SupportedEventTypesArrayType
     * @uses SupportedEventTypesArrayType::setEventType()
     * @param string[] $eventType
     */
    public function __construct(?array $eventType = null)
    {
        $this
            ->setEventType($eventType);
    }
    /**
     * Get EventType value
     * @return string[]
     */
    public function getEventType(): ?array
    {
        return $this->EventType;
    }
    /**
     * This method is responsible for validating the values passed to the setEventType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventTypeForArrayConstraintsFromSetEventType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $supportedEventTypesArrayTypeEventTypeItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($supportedEventTypesArrayTypeEventTypeItem)) {
                $invalidValues[] = is_object($supportedEventTypesArrayTypeEventTypeItem) ? get_class($supportedEventTypesArrayTypeEventTypeItem) : sprintf('%s(%s)', gettype($supportedEventTypesArrayTypeEventTypeItem), var_export($supportedEventTypesArrayTypeEventTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EventType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $eventType
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public function setEventType(?array $eventType = null): self
    {
        // validation for constraint: array
        if ('' !== ($eventTypeArrayErrorMessage = self::validateEventTypeForArrayConstraintsFromSetEventType($eventType))) {
            throw new InvalidArgumentException($eventTypeArrayErrorMessage, __LINE__);
        }
        $this->EventType = $eventType;
        
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
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventType
     */
    public function getAttributeName(): string
    {
        return 'EventType';
    }
}
