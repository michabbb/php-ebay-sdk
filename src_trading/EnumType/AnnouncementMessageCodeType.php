<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AnnouncementMessageCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Part of the mechanism for eBay to control which announcement messages are to be made available to the user.
 * @subpackage Enumerations
 */
class AnnouncementMessageCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Deprecation'
     * @return string 'Deprecation'
     */
    const VALUE_DEPRECATION = 'Deprecation';
    /**
     * Constant for value 'Mapping'
     * @return string 'Mapping'
     */
    const VALUE_MAPPING = 'Mapping';
    /**
     * Constant for value 'DeprecationAndMapping'
     * @return string 'DeprecationAndMapping'
     */
    const VALUE_DEPRECATION_AND_MAPPING = 'DeprecationAndMapping';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DEPRECATION
     * @uses self::VALUE_MAPPING
     * @uses self::VALUE_DEPRECATION_AND_MAPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DEPRECATION,
            self::VALUE_MAPPING,
            self::VALUE_DEPRECATION_AND_MAPPING,
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
