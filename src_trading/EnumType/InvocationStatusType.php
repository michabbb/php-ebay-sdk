<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for InvocationStatusType EnumType
 * @subpackage Enumerations
 */
class InvocationStatusType
{
    /**
     * Constant for value 'InProgress'
     * @return string 'InProgress'
     */
    const VALUE_IN_PROGRESS = 'InProgress';
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
     * @uses self::VALUE_IN_PROGRESS
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_PROGRESS,
            self::VALUE_SUCCESS,
            self::VALUE_FAILURE,
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
