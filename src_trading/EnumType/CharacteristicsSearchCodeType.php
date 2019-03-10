<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CharacteristicsSearchCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CharacteristicsSearchCodeType
{
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Multi'
     * @return string 'Multi'
     */
    const VALUE_MULTI = 'Multi';
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
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_MULTI
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_MULTI,
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
