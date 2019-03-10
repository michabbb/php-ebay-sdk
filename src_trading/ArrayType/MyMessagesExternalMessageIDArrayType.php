<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesExternalMessageIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of up to 10 external message IDs.
 * @subpackage Arrays
 */
class MyMessagesExternalMessageIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ExternalMessageID
     * Meta informations extracted from the WSDL
     * - documentation: Currently available on the US site. A message ID that uniquely identifies a message for a given user. If provided at the time of message creation, this ID can be used to retrieve messages, and will take precedence over the message
     * ID. A total of 10 message IDs can be specified. | Type defining the <b>ExternalMessageID</b> field used in <b>GetMyMessages</b> to identify a specific eBay message to retrieve. Up to 10 <b>ExternalMessageID</b> values can be specified in one API
     * call. The <b>ExternalMessageIDs</b> container is only available for use on the eBay US site (SiteID 0).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalMessageID;
    /**
     * Constructor method for MyMessagesExternalMessageIDArrayType
     * @uses MyMessagesExternalMessageIDArrayType::setExternalMessageID()
     * @param string[] $externalMessageID
     */
    public function __construct(array $externalMessageID = array())
    {
        $this
            ->setExternalMessageID($externalMessageID);
    }
    /**
     * Get ExternalMessageID value
     * @return string[]|null
     */
    public function getExternalMessageID()
    {
        return $this->ExternalMessageID;
    }
    /**
     * Set ExternalMessageID value
     * @throws \InvalidArgumentException
     * @param string[] $externalMessageID
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
     */
    public function setExternalMessageID(array $externalMessageID = array())
    {
        foreach ($externalMessageID as $myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ExternalMessageID property can only contain items of string, "%s" given', is_object($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) ? get_class($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) : gettype($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem)), __LINE__);
            }
        }
        $this->ExternalMessageID = $externalMessageID;
        return $this;
    }
    /**
     * Add item to ExternalMessageID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
     */
    public function addToExternalMessageID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExternalMessageID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExternalMessageID[] = $item;
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
     * @return string ExternalMessageID
     */
    public function getAttributeName()
    {
        return 'ExternalMessageID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
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
