<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CategoryFeatureDetailLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated. Use <b>DetailLevelCodeType</b> instead.
 * @subpackage Enumerations
 */
class CategoryFeatureDetailLevelCodeType
{
    /**
     * Constant for value 'ReturnAll'
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ReturnFeatureDefinitions'
     * @return string 'ReturnFeatureDefinitions'
     */
    const VALUE_RETURN_FEATURE_DEFINITIONS = 'ReturnFeatureDefinitions';
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
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_RETURN_FEATURE_DEFINITIONS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURN_ALL,
            self::VALUE_RETURN_FEATURE_DEFINITIONS,
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
