<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesMessageIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of up to 10 MessageID values.
 * @subpackage Arrays
 */
class MyMessagesMessageIDArrayType extends AbstractStructArrayBase
{
    /**
     * The MessageID
     * Meta informations extracted from the WSDL
     * - documentation: An ID that uniquely identifies a message for a given user. | Type defining the <b>MessageID</b> field used in <b>GetMyMessages</b>, <b>ReviseMyMessages</b>, and <b>DeleteMyMessages</b> to identify a specific eBay message to retrieve,
     * revise, or delete, respectively. Up to 10 <b>MessageID</b> values can be specified in one API call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $MessageID;
    /**
     * Constructor method for MyMessagesMessageIDArrayType
     * @uses MyMessagesMessageIDArrayType::setMessageID()
     * @param string[] $messageID
     */
    public function __construct(array $messageID = array())
    {
        $this
            ->setMessageID($messageID);
    }
    /**
     * Get MessageID value
     * @return string[]|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @throws \InvalidArgumentException
     * @param string[] $messageID
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
     */
    public function setMessageID(array $messageID = array())
    {
        foreach ($messageID as $myMessagesMessageIDArrayTypeMessageIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesMessageIDArrayTypeMessageIDItem)) {
                throw new \InvalidArgumentException(sprintf('The MessageID property can only contain items of string, "%s" given', is_object($myMessagesMessageIDArrayTypeMessageIDItem) ? get_class($myMessagesMessageIDArrayTypeMessageIDItem) : gettype($myMessagesMessageIDArrayTypeMessageIDItem)), __LINE__);
            }
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Add item to MessageID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
     */
    public function addToMessageID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The MessageID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MessageID[] = $item;
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
     * @return string MessageID
     */
    public function getAttributeName()
    {
        return 'MessageID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
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
