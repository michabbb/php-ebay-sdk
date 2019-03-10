<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for LogoTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class LogoTypeCodeType
{
    /**
     * Constant for value 'WinningBidderNotice'
     * @return string 'WinningBidderNotice'
     */
    const VALUE_WINNING_BIDDER_NOTICE = 'WinningBidderNotice';
    /**
     * Constant for value 'Store'
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
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
     * @uses self::VALUE_WINNING_BIDDER_NOTICE
     * @uses self::VALUE_STORE
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WINNING_BIDDER_NOTICE,
            self::VALUE_STORE,
            self::VALUE_CUSTOM,
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
