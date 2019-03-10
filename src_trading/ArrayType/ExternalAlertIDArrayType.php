<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ExternalAlertIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ExternalAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ExternalAlertID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalAlertID;
    /**
     * Constructor method for ExternalAlertIDArrayType
     * @uses ExternalAlertIDArrayType::setExternalAlertID()
     * @param string[] $externalAlertID
     */
    public function __construct(array $externalAlertID = array())
    {
        $this
            ->setExternalAlertID($externalAlertID);
    }
    /**
     * Get ExternalAlertID value
     * @return string[]|null
     */
    public function getExternalAlertID()
    {
        return $this->ExternalAlertID;
    }
    /**
     * Set ExternalAlertID value
     * @throws \InvalidArgumentException
     * @param string[] $externalAlertID
     * @return \macropage\ebaysdk\trading\ArrayType\ExternalAlertIDArrayType
     */
    public function setExternalAlertID(array $externalAlertID = array())
    {
        foreach ($externalAlertID as $externalAlertIDArrayTypeExternalAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($externalAlertIDArrayTypeExternalAlertIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ExternalAlertID property can only contain items of string, "%s" given', is_object($externalAlertIDArrayTypeExternalAlertIDItem) ? get_class($externalAlertIDArrayTypeExternalAlertIDItem) : gettype($externalAlertIDArrayTypeExternalAlertIDItem)), __LINE__);
            }
        }
        $this->ExternalAlertID = $externalAlertID;
        return $this;
    }
    /**
     * Add item to ExternalAlertID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\ExternalAlertIDArrayType
     */
    public function addToExternalAlertID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExternalAlertID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExternalAlertID[] = $item;
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
     * @return string ExternalAlertID
     */
    public function getAttributeName()
    {
        return 'ExternalAlertID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\ExternalAlertIDArrayType
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
