<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SupportedEventTypesArrayType ArrayType
 * @subpackage Arrays
 */
class SupportedEventTypesArrayType extends AbstractStructArrayBase
{
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $EventType;
    /**
     * Constructor method for SupportedEventTypesArrayType
     * @uses SupportedEventTypesArrayType::setEventType()
     * @param string[] $eventType
     */
    public function __construct(array $eventType = array())
    {
        $this
            ->setEventType($eventType);
    }
    /**
     * Get EventType value
     * @return string[]|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $eventType
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public function setEventType(array $eventType = array())
    {
        $invalidValues = array();
        foreach ($eventType as $supportedEventTypesArrayTypeEventTypeItem) {
            if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($supportedEventTypesArrayTypeEventTypeItem)) {
                $invalidValues[] = var_export($supportedEventTypesArrayTypeEventTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Add item to EventType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public function addToEventType($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public function add($item)
    {
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventType
     */
    public function getAttributeName()
    {
        return 'EventType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\SupportedEventTypesArrayType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
