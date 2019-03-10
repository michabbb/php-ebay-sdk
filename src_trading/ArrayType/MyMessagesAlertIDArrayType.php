<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The AlertID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | This type is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AlertID;
    /**
     * Constructor method for MyMessagesAlertIDArrayType
     * @uses MyMessagesAlertIDArrayType::setAlertID()
     * @param string[] $alertID
     */
    public function __construct(array $alertID = array())
    {
        $this
            ->setAlertID($alertID);
    }
    /**
     * Get AlertID value
     * @return string[]|null
     */
    public function getAlertID()
    {
        return $this->AlertID;
    }
    /**
     * Set AlertID value
     * @throws \InvalidArgumentException
     * @param string[] $alertID
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public function setAlertID(array $alertID = array())
    {
        foreach ($alertID as $myMessagesAlertIDArrayTypeAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesAlertIDArrayTypeAlertIDItem)) {
                throw new \InvalidArgumentException(sprintf('The AlertID property can only contain items of string, "%s" given', is_object($myMessagesAlertIDArrayTypeAlertIDItem) ? get_class($myMessagesAlertIDArrayTypeAlertIDItem) : gettype($myMessagesAlertIDArrayTypeAlertIDItem)), __LINE__);
            }
        }
        $this->AlertID = $alertID;
        return $this;
    }
    /**
     * Add item to AlertID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public function addToAlertID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AlertID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AlertID[] = $item;
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
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AlertID
     */
    public function getAttributeName()
    {
        return 'AlertID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
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
