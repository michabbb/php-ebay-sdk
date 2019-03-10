<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreCustomListingHeaderDisplayCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how the custom listing header will be displayed.
 * @subpackage Enumerations
 */
class StoreCustomListingHeaderDisplayCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'FullAndLeftNavigationBar'
     * @return string 'FullAndLeftNavigationBar'
     */
    const VALUE_FULL_AND_LEFT_NAVIGATION_BAR = 'FullAndLeftNavigationBar';
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
     * @uses self::VALUE_FULL
     * @uses self::VALUE_FULL_AND_LEFT_NAVIGATION_BAR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FULL,
            self::VALUE_FULL_AND_LEFT_NAVIGATION_BAR,
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
