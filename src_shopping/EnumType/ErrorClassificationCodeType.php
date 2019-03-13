<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ErrorClassificationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the type of errors that may occur with an Shopping API call.
 * @subpackage Enumerations
 */
class ErrorClassificationCodeType
{
    /**
     * Constant for value 'RequestError'
     * @return string 'RequestError'
     */
    const VALUE_REQUEST_ERROR = 'RequestError';
    /**
     * Constant for value 'SystemError'
     * @return string 'SystemError'
     */
    const VALUE_SYSTEM_ERROR = 'SystemError';
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
     * @uses self::VALUE_REQUEST_ERROR
     * @uses self::VALUE_SYSTEM_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REQUEST_ERROR,
            self::VALUE_SYSTEM_ERROR,
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
