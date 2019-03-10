<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for QuantityOperatorCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type used by the <b>QuantityOperator</b> field that is returned under the <b>FavoriteSearch</b> container in a <b>GetMyeBayBuying</b> call. The values in this type indicate how the quantity of the item that the prospective
 * desires compares to the quantity available.
 * @subpackage Enumerations
 */
class QuantityOperatorCodeType
{
    /**
     * Constant for value 'LessThan'
     * @return string 'LessThan'
     */
    const VALUE_LESS_THAN = 'LessThan';
    /**
     * Constant for value 'LessThanOrEqual'
     * @return string 'LessThanOrEqual'
     */
    const VALUE_LESS_THAN_OR_EQUAL = 'LessThanOrEqual';
    /**
     * Constant for value 'Equal'
     * @return string 'Equal'
     */
    const VALUE_EQUAL = 'Equal';
    /**
     * Constant for value 'GreaterThan'
     * @return string 'GreaterThan'
     */
    const VALUE_GREATER_THAN = 'GreaterThan';
    /**
     * Constant for value 'GreaterThanOrEqual'
     * @return string 'GreaterThanOrEqual'
     */
    const VALUE_GREATER_THAN_OR_EQUAL = 'GreaterThanOrEqual';
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
     * @uses self::VALUE_LESS_THAN
     * @uses self::VALUE_LESS_THAN_OR_EQUAL
     * @uses self::VALUE_EQUAL
     * @uses self::VALUE_GREATER_THAN
     * @uses self::VALUE_GREATER_THAN_OR_EQUAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LESS_THAN,
            self::VALUE_LESS_THAN_OR_EQUAL,
            self::VALUE_EQUAL,
            self::VALUE_GREATER_THAN,
            self::VALUE_GREATER_THAN_OR_EQUAL,
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
