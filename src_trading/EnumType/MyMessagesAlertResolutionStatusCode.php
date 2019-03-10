<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MyMessagesAlertResolutionStatusCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MyMessagesAlertResolutionStatusCode
{
    /**
     * Constant for value 'Unresolved'
     * @return string 'Unresolved'
     */
    const VALUE_UNRESOLVED = 'Unresolved';
    /**
     * Constant for value 'ResolvedByAutoResolution'
     * @return string 'ResolvedByAutoResolution'
     */
    const VALUE_RESOLVED_BY_AUTO_RESOLUTION = 'ResolvedByAutoResolution';
    /**
     * Constant for value 'ResolvedByUser'
     * @return string 'ResolvedByUser'
     */
    const VALUE_RESOLVED_BY_USER = 'ResolvedByUser';
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
     * @uses self::VALUE_UNRESOLVED
     * @uses self::VALUE_RESOLVED_BY_AUTO_RESOLUTION
     * @uses self::VALUE_RESOLVED_BY_USER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNRESOLVED,
            self::VALUE_RESOLVED_BY_AUTO_RESOLUTION,
            self::VALUE_RESOLVED_BY_USER,
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
