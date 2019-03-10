<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for EndOfAuctionLogoTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type is used to indicate the type of logo that will be included in the customized email that will be sent by the seller to the winning bidder in an auction listing.
 * @subpackage Enumerations
 */
class EndOfAuctionLogoTypeCodeType
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
     * Constant for value 'Customized'
     * @return string 'Customized'
     */
    const VALUE_CUSTOMIZED = 'Customized';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_CUSTOMIZED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WINNING_BIDDER_NOTICE,
            self::VALUE_STORE,
            self::VALUE_CUSTOMIZED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_NONE,
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
