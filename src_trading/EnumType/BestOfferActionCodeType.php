<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BestOfferActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values that can be passed in to the <b>Action</b> field in a <b>RespondToBestOffer</b> request.
 * @subpackage Enumerations
 */
class BestOfferActionCodeType
{
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
     * Constant for value 'Counter'
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
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
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DECLINE
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPT,
            self::VALUE_DECLINE,
            self::VALUE_COUNTER,
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
