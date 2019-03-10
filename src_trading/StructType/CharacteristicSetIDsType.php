<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicSetIDsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicSetIDsType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ID;
    /**
     * Constructor method for CharacteristicSetIDsType
     * @uses CharacteristicSetIDsType::setID()
     * @param string[] $iD
     */
    public function __construct(array $iD = array())
    {
        $this
            ->setID($iD);
    }
    /**
     * Get ID value
     * @return string[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param string[] $iD
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
     */
    public function setID(array $iD = array())
    {
        foreach ($iD as $characteristicSetIDsTypeIDItem) {
            // validation for constraint: itemType
            if (!is_string($characteristicSetIDsTypeIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ID property can only contain items of string, "%s" given', is_object($characteristicSetIDsTypeIDItem) ? get_class($characteristicSetIDsTypeIDItem) : gettype($characteristicSetIDsTypeIDItem)), __LINE__);
            }
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
     */
    public function addToID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
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
