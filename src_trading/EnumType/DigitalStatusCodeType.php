<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DigitalStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type lists the possible states of a purchased digital delivery card.
 * @subpackage Enumerations
 */
class DigitalStatusCodeType
{
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Activated'
     * @return string 'Activated'
     */
    const VALUE_ACTIVATED = 'Activated';
    /**
     * Constant for value 'Downloaded'
     * @return string 'Downloaded'
     */
    const VALUE_DOWNLOADED = 'Downloaded';
    /**
     * Constant for value 'Deactivated'
     * @return string 'Deactivated'
     */
    const VALUE_DEACTIVATED = 'Deactivated';
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
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_ACTIVATED
     * @uses self::VALUE_DOWNLOADED
     * @uses self::VALUE_DEACTIVATED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INACTIVE,
            self::VALUE_ACTIVATED,
            self::VALUE_DOWNLOADED,
            self::VALUE_DEACTIVATED,
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
