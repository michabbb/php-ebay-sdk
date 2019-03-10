<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ListingStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This
 * processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the
 * listing.
 * @subpackage Enumerations
 */
class ListingStatusCodeType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Ended'
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_ENDED
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_ENDED,
            self::VALUE_COMPLETED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_CUSTOM,
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
