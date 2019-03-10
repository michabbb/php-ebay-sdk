<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ValueFormatCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the date format that is used for a date-related field that is returned in the <b>GetCategorySpecifics</b> call. on which are enforceable for validation purposes
 * @subpackage Enumerations
 */
class ValueFormatCodeType
{
    /**
     * Constant for value 'FullDate'
     * @return string 'FullDate'
     */
    const VALUE_FULL_DATE = 'FullDate';
    /**
     * Constant for value 'PartialDate'
     * @return string 'PartialDate'
     */
    const VALUE_PARTIAL_DATE = 'PartialDate';
    /**
     * Constant for value 'Year'
     * @return string 'Year'
     */
    const VALUE_YEAR = 'Year';
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
     * @uses self::VALUE_FULL_DATE
     * @uses self::VALUE_PARTIAL_DATE
     * @uses self::VALUE_YEAR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL_DATE,
            self::VALUE_PARTIAL_DATE,
            self::VALUE_YEAR,
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
