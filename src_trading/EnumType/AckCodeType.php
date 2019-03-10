<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AckCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type identifies the possible values that can be returned in the <b>Ack</b> field in call responses. The <b>Ack</b> value will indicate if the call was completely successful, if the called failed, or if the call was
 * partially successful, but with minor errors or warnings.
 * @subpackage Enumerations
 */
class AckCodeType
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_PARTIAL_FAILURE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_FAILURE,
            self::VALUE_WARNING,
            self::VALUE_PARTIAL_FAILURE,
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
