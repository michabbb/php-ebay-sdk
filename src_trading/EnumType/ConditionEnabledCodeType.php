<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ConditionEnabledCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the values used to indicate whether Condition IDs are enabled/disabled for all/most of a site's categories (<b>SiteDefaults.ConditionEnabled</b>), or enabled/required/disabled for a specific eBay category
 * (<b>Category.ConditionEnabled</b>).
 * @subpackage Enumerations
 */
class ConditionEnabledCodeType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
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
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_REQUIRED,
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
