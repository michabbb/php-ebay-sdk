<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CalculatedShippingChargeOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CalculatedShippingChargeOptionCodeType
{
    /**
     * Constant for value 'ChargeEachItem'
     * @return string 'ChargeEachItem'
     */
    const VALUE_CHARGE_EACH_ITEM = 'ChargeEachItem';
    /**
     * Constant for value 'ChargeEntireOrder'
     * @return string 'ChargeEntireOrder'
     */
    const VALUE_CHARGE_ENTIRE_ORDER = 'ChargeEntireOrder';
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
     * @uses self::VALUE_CHARGE_EACH_ITEM
     * @uses self::VALUE_CHARGE_ENTIRE_ORDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHARGE_EACH_ITEM,
            self::VALUE_CHARGE_ENTIRE_ORDER,
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
