<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for FeedbackRatingDetailCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. The FeedbackRatingDetailCodeType is the list of areas for detailed seller ratings. When buyers leave an overall Feedback rating (positive, neutral, or negative)
 * for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Enumerations
 */
class FeedbackRatingDetailCodeType
{
    /**
     * Constant for value 'ItemAsDescribed'
     * @return string 'ItemAsDescribed'
     */
    const VALUE_ITEM_AS_DESCRIBED = 'ItemAsDescribed';
    /**
     * Constant for value 'Communication'
     * @return string 'Communication'
     */
    const VALUE_COMMUNICATION = 'Communication';
    /**
     * Constant for value 'ShippingTime'
     * @return string 'ShippingTime'
     */
    const VALUE_SHIPPING_TIME = 'ShippingTime';
    /**
     * Constant for value 'ShippingAndHandlingCharges'
     * @return string 'ShippingAndHandlingCharges'
     */
    const VALUE_SHIPPING_AND_HANDLING_CHARGES = 'ShippingAndHandlingCharges';
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
     * @uses self::VALUE_ITEM_AS_DESCRIBED
     * @uses self::VALUE_COMMUNICATION
     * @uses self::VALUE_SHIPPING_TIME
     * @uses self::VALUE_SHIPPING_AND_HANDLING_CHARGES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_AS_DESCRIBED,
            self::VALUE_COMMUNICATION,
            self::VALUE_SHIPPING_TIME,
            self::VALUE_SHIPPING_AND_HANDLING_CHARGES,
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
