<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PickupMethodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Simple type defining all possible local pickup methods for buyers. A <strong>PickupMethodCodeType</strong> value is always returned under the <strong>PickupOptions</strong> and <strong>PickupMethodSelected</strong> containers.
 * @subpackage Enumerations
 */
class PickupMethodCodeType
{
    /**
     * Constant for value 'InStorePickup'
     * @return string 'InStorePickup'
     */
    const VALUE_IN_STORE_PICKUP = 'InStorePickup';
    /**
     * Constant for value 'PickUpDropOff'
     * @return string 'PickUpDropOff'
     */
    const VALUE_PICK_UP_DROP_OFF = 'PickUpDropOff';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_IN_STORE_PICKUP
     * @uses self::VALUE_PICK_UP_DROP_OFF
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_STORE_PICKUP,
            self::VALUE_PICK_UP_DROP_OFF,
            self::VALUE_CUSTOM_CODE,
        );
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
