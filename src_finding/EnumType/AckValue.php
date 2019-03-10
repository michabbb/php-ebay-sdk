<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for AckValue EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether the error is a fatal error (causing the request to fail) or a less severe error (a warning) that should be communicated to the user.
 * @subpackage Enumerations
 */
class AckValue
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Failure'
     * @return string 'Failure'
     */
    const VALUE_FAILURE = 'Failure';
    /**
     * Constant for value 'Warning'
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'PartialFailure'
     * @return string 'PartialFailure'
     */
    const VALUE_PARTIAL_FAILURE = 'PartialFailure';
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_PARTIAL_FAILURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_FAILURE,
            self::VALUE_WARNING,
            self::VALUE_PARTIAL_FAILURE,
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
