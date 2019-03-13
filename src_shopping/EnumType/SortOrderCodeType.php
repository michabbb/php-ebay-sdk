<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for SortOrderCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the order of sorting.
 * @subpackage Enumerations
 */
class SortOrderCodeType
{
    /**
     * Constant for value 'Ascending'
     * @return string 'Ascending'
     */
    const VALUE_ASCENDING = 'Ascending';
    /**
     * Constant for value 'Descending'
     * @return string 'Descending'
     */
    const VALUE_DESCENDING = 'Descending';
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
     * @uses self::VALUE_ASCENDING
     * @uses self::VALUE_DESCENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASCENDING,
            self::VALUE_DESCENDING,
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
