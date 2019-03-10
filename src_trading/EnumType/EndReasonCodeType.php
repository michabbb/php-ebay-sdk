<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for EndReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the reasons that a seller can end an item listing early. This value is required if the seller ends a listing early. This can be on an item that hasn't sold and has no bids or on an item that has bids and the seller
 * wants to sell the item to the high bidder now.
 * @subpackage Enumerations
 */
class EndReasonCodeType
{
    /**
     * Constant for value 'LostOrBroken'
     * @return string 'LostOrBroken'
     */
    const VALUE_LOST_OR_BROKEN = 'LostOrBroken';
    /**
     * Constant for value 'NotAvailable'
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'Incorrect'
     * @return string 'Incorrect'
     */
    const VALUE_INCORRECT = 'Incorrect';
    /**
     * Constant for value 'OtherListingError'
     * @return string 'OtherListingError'
     */
    const VALUE_OTHER_LISTING_ERROR = 'OtherListingError';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'SellToHighBidder'
     * @return string 'SellToHighBidder'
     */
    const VALUE_SELL_TO_HIGH_BIDDER = 'SellToHighBidder';
    /**
     * Constant for value 'Sold'
     * @return string 'Sold'
     */
    const VALUE_SOLD = 'Sold';
    /**
     * Constant for value 'ProductDeleted'
     * @return string 'ProductDeleted'
     */
    const VALUE_PRODUCT_DELETED = 'ProductDeleted';
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
     * @uses self::VALUE_LOST_OR_BROKEN
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_INCORRECT
     * @uses self::VALUE_OTHER_LISTING_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_SELL_TO_HIGH_BIDDER
     * @uses self::VALUE_SOLD
     * @uses self::VALUE_PRODUCT_DELETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOST_OR_BROKEN,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_INCORRECT,
            self::VALUE_OTHER_LISTING_ERROR,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_SELL_TO_HIGH_BIDDER,
            self::VALUE_SOLD,
            self::VALUE_PRODUCT_DELETED,
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
