<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemCompatibilityEnabledCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate whether the parts compatibility feature is enabled for a category.
 * @subpackage Enumerations
 */
class ItemCompatibilityEnabledCodeType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'ByApplication'
     * @return string 'ByApplication'
     */
    const VALUE_BY_APPLICATION = 'ByApplication';
    /**
     * Constant for value 'BySpecification'
     * @return string 'BySpecification'
     */
    const VALUE_BY_SPECIFICATION = 'BySpecification';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_BY_APPLICATION
     * @uses self::VALUE_BY_SPECIFICATION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_BY_APPLICATION,
            self::VALUE_BY_SPECIFICATION,
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
