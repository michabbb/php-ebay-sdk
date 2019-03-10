<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreSubscriptionLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: User's eBay Store subscription level.
 * @subpackage Enumerations
 */
class StoreSubscriptionLevelCodeType
{
    /**
     * Constant for value 'Close'
     * @return string 'Close'
     */
    const VALUE_CLOSE = 'Close';
    /**
     * Constant for value 'Basic'
     * @return string 'Basic'
     */
    const VALUE_BASIC = 'Basic';
    /**
     * Constant for value 'Featured'
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Anchor'
     * @return string 'Anchor'
     */
    const VALUE_ANCHOR = 'Anchor';
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
     * @uses self::VALUE_CLOSE
     * @uses self::VALUE_BASIC
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_ANCHOR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLOSE,
            self::VALUE_BASIC,
            self::VALUE_FEATURED,
            self::VALUE_ANCHOR,
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
