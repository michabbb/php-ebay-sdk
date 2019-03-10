<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BidActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type lists the possible actions that can be made on a listing or Best Offer and the possible states of a bid or Best Offer.
 * @subpackage Enumerations
 */
class BidActionCodeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Bid'
     * @return string 'Bid'
     */
    const VALUE_BID = 'Bid';
    /**
     * Constant for value 'NotUsed'
     * @return string 'NotUsed'
     */
    const VALUE_NOT_USED = 'NotUsed';
    /**
     * Constant for value 'Retraction'
     * @return string 'Retraction'
     */
    const VALUE_RETRACTION = 'Retraction';
    /**
     * Constant for value 'AutoRetraction'
     * @return string 'AutoRetraction'
     */
    const VALUE_AUTO_RETRACTION = 'AutoRetraction';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'AutoCancel'
     * @return string 'AutoCancel'
     */
    const VALUE_AUTO_CANCEL = 'AutoCancel';
    /**
     * Constant for value 'Absentee'
     * @return string 'Absentee'
     */
    const VALUE_ABSENTEE = 'Absentee';
    /**
     * Constant for value 'BuyItNow'
     * @return string 'BuyItNow'
     */
    const VALUE_BUY_IT_NOW = 'BuyItNow';
    /**
     * Constant for value 'Purchase'
     * @return string 'Purchase'
     */
    const VALUE_PURCHASE = 'Purchase';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Offer'
     * @return string 'Offer'
     */
    const VALUE_OFFER = 'Offer';
    /**
     * Constant for value 'Counter'
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
    /**
     * Constant for value 'Accept'
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Decline'
     * @return string 'Decline'
     */
    const VALUE_DECLINE = 'Decline';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_BID
     * @uses self::VALUE_NOT_USED
     * @uses self::VALUE_RETRACTION
     * @uses self::VALUE_AUTO_RETRACTION
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_AUTO_CANCEL
     * @uses self::VALUE_ABSENTEE
     * @uses self::VALUE_BUY_IT_NOW
     * @uses self::VALUE_PURCHASE
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_OFFER
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DECLINE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_BID,
            self::VALUE_NOT_USED,
            self::VALUE_RETRACTION,
            self::VALUE_AUTO_RETRACTION,
            self::VALUE_CANCELLED,
            self::VALUE_AUTO_CANCEL,
            self::VALUE_ABSENTEE,
            self::VALUE_BUY_IT_NOW,
            self::VALUE_PURCHASE,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_OFFER,
            self::VALUE_COUNTER,
            self::VALUE_ACCEPT,
            self::VALUE_DECLINE,
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
