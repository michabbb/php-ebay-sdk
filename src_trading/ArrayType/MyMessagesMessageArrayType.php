<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesMessageArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>Messages</b> container that is returned in <b>GetMyMessages</b>. The <b>Messages</b> container consists of an array of one or more messages.
 * @subpackage Arrays
 */
class MyMessagesMessageArrayType extends AbstractStructArrayBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in
     * each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[]
     */
    public $Message;
    /**
     * Constructor method for MyMessagesMessageArrayType
     * @uses MyMessagesMessageArrayType::setMessage()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[] $message
     */
    public function __construct(array $message = array())
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[]|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[] $message
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
     */
    public function setMessage(array $message = array())
    {
        foreach ($message as $myMessagesMessageArrayTypeMessageItem) {
            // validation for constraint: itemType
            if (!$myMessagesMessageArrayTypeMessageItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesMessageType) {
                throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesMessageType, "%s" given', is_object($myMessagesMessageArrayTypeMessageItem) ? get_class($myMessagesMessageArrayTypeMessageItem) : gettype($myMessagesMessageArrayTypeMessageItem)), __LINE__);
            }
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Add item to Message value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
     */
    public function addToMessage(\macropage\ebaysdk\trading\StructType\MyMessagesMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesMessageType) {
            throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Message[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Message
     */
    public function getAttributeName()
    {
        return 'Message';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
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
