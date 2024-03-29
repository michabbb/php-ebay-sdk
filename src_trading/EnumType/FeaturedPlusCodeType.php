<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FeaturedPlusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that indicates if the Featured Plus listing upgrade is enabled for the specified site, and whether it is restricted to a specific seller level.
 * @subpackage Enumerations
 */
class FeaturedPlusCodeType
{
    /**
     * Constant for value 'Enabled'
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'PowerSellerOnly'
     * @return string 'PowerSellerOnly'
     */
    const VALUE_POWER_SELLER_ONLY = 'PowerSellerOnly';
    /**
     * Constant for value 'TopRatedSellerOnly'
     * @return string 'TopRatedSellerOnly'
     */
    const VALUE_TOP_RATED_SELLER_ONLY = 'TopRatedSellerOnly';
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
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_POWER_SELLER_ONLY
     * @uses self::VALUE_TOP_RATED_SELLER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_POWER_SELLER_ONLY,
            self::VALUE_TOP_RATED_SELLER_ONLY,
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
