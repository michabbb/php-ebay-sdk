<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerShippedStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Contains values for shipped status.
 * @subpackage Enumerations
 */
class SellingManagerShippedStatusCodeType
{
    /**
     * Constant for value 'Shipped'
     * @return string 'Shipped'
     */
    const VALUE_SHIPPED = 'Shipped';
    /**
     * Constant for value 'Unshipped'
     * @return string 'Unshipped'
     */
    const VALUE_UNSHIPPED = 'Unshipped';
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
     * @uses self::VALUE_SHIPPED
     * @uses self::VALUE_UNSHIPPED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPPED,
            self::VALUE_UNSHIPPED,
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
