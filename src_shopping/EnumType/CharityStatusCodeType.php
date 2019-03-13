<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for CharityStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type defining the possible states for a nonprofit charity organization registered with the PayPal Giving Fund.
 * @subpackage Enumerations
 */
class CharityStatusCodeType
{
    /**
     * Constant for value 'Valid'
     * @return string 'Valid'
     */
    const VALUE_VALID = 'Valid';
    /**
     * Constant for value 'NoLongerValid'
     * @return string 'NoLongerValid'
     */
    const VALUE_NO_LONGER_VALID = 'NoLongerValid';
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
     * @uses self::VALUE_VALID
     * @uses self::VALUE_NO_LONGER_VALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VALID,
            self::VALUE_NO_LONGER_VALID,
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
