<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnsAcceptedOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specified whether returns are accepted.
 * @subpackage Enumerations
 */
class ReturnsAcceptedOptionsCodeType
{
    /**
     * Constant for value 'ReturnsAccepted'
     * @return string 'ReturnsAccepted'
     */
    const VALUE_RETURNS_ACCEPTED = 'ReturnsAccepted';
    /**
     * Constant for value 'ReturnsNotAccepted'
     * @return string 'ReturnsNotAccepted'
     */
    const VALUE_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';
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
     * @uses self::VALUE_RETURNS_ACCEPTED
     * @uses self::VALUE_RETURNS_NOT_ACCEPTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURNS_ACCEPTED,
            self::VALUE_RETURNS_NOT_ACCEPTED,
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
