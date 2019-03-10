<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for ErrorCategory EnumType
 * Meta informations extracted from the WSDL
 * - documentation: There are three categories of error: request errors, application errors, and system errors. Request and application errors are often caused by passing invalid data in the request. System errors are primarily caused by application
 * failures and cannot be corrected by changing request values.
 * @subpackage Enumerations
 */
class ErrorCategory
{
    /**
     * Constant for value 'System'
     * @return string 'System'
     */
    const VALUE_SYSTEM = 'System';
    /**
     * Constant for value 'Application'
     * @return string 'Application'
     */
    const VALUE_APPLICATION = 'Application';
    /**
     * Constant for value 'Request'
     * @return string 'Request'
     */
    const VALUE_REQUEST = 'Request';
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
     * @uses self::VALUE_SYSTEM
     * @uses self::VALUE_APPLICATION
     * @uses self::VALUE_REQUEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SYSTEM,
            self::VALUE_APPLICATION,
            self::VALUE_REQUEST,
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
