<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertArrayType extends AbstractStructArrayBase
{
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[]
     */
    public $Alert;
    /**
     * Constructor method for MyMessagesAlertArrayType
     * @uses MyMessagesAlertArrayType::setAlert()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[] $alert
     */
    public function __construct(array $alert = array())
    {
        $this
            ->setAlert($alert);
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType[] $alert
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
     */
    public function setAlert(array $alert = array())
    {
        foreach ($alert as $myMessagesAlertArrayTypeAlertItem) {
            // validation for constraint: itemType
            if (!$myMessagesAlertArrayTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesAlertType) {
                throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesAlertType, "%s" given', is_object($myMessagesAlertArrayTypeAlertItem) ? get_class($myMessagesAlertArrayTypeAlertItem) : gettype($myMessagesAlertArrayTypeAlertItem)), __LINE__);
            }
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesAlertType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\MyMessagesAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesAlertType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Alert[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Alert
     */
    public function getAttributeName()
    {
        return 'Alert';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
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
