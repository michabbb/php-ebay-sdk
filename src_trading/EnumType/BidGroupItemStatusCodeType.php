<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BidGroupItemStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidGroupItemStatusCodeType
{
    /**
     * Constant for value 'CurrentBid'
     * @return string 'CurrentBid'
     */
    const VALUE_CURRENT_BID = 'CurrentBid';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Skipped'
     * @return string 'Skipped'
     */
    const VALUE_SKIPPED = 'Skipped';
    /**
     * Constant for value 'Ended'
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Won'
     * @return string 'Won'
     */
    const VALUE_WON = 'Won';
    /**
     * Constant for value 'GroupClosed'
     * @return string 'GroupClosed'
     */
    const VALUE_GROUP_CLOSED = 'GroupClosed';
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
     * @uses self::VALUE_CURRENT_BID
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_SKIPPED
     * @uses self::VALUE_ENDED
     * @uses self::VALUE_WON
     * @uses self::VALUE_GROUP_CLOSED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CURRENT_BID,
            self::VALUE_CANCELLED,
            self::VALUE_PENDING,
            self::VALUE_SKIPPED,
            self::VALUE_ENDED,
            self::VALUE_WON,
            self::VALUE_GROUP_CLOSED,
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
