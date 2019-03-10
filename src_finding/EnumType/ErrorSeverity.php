<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for ErrorSeverity EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether the error is a fatal error (causing the request to fail) or a less severe error (a warning) that should be communicated to the user.
 * @subpackage Enumerations
 */
class ErrorSeverity
{
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Warning'
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
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
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_WARNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ERROR,
            self::VALUE_WARNING,
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
