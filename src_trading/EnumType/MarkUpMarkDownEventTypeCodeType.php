<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MarkUpMarkDownEventTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Valid application status codes, either MarkUp (application was marked up, communication is restored) or MarkDown (application was marked down, no communication).
 * @subpackage Enumerations
 */
class MarkUpMarkDownEventTypeCodeType
{
    /**
     * Constant for value 'MarkUp'
     * @return string 'MarkUp'
     */
    const VALUE_MARK_UP = 'MarkUp';
    /**
     * Constant for value 'MarkDown'
     * @return string 'MarkDown'
     */
    const VALUE_MARK_DOWN = 'MarkDown';
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
     * @uses self::VALUE_MARK_UP
     * @uses self::VALUE_MARK_DOWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MARK_UP,
            self::VALUE_MARK_DOWN,
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
