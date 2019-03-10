<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SMSSubscriptionErrorCodeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type of SMS subscription error.
 * @subpackage Enumerations
 */
class SMSSubscriptionErrorCodeCodeType
{
    /**
     * Constant for value 'SMSAggregatorNotAvailable'
     * @return string 'SMSAggregatorNotAvailable'
     */
    const VALUE_SMSAGGREGATOR_NOT_AVAILABLE = 'SMSAggregatorNotAvailable';
    /**
     * Constant for value 'PhoneNumberInvalid'
     * @return string 'PhoneNumberInvalid'
     */
    const VALUE_PHONE_NUMBER_INVALID = 'PhoneNumberInvalid';
    /**
     * Constant for value 'PhoneNumberChanged'
     * @return string 'PhoneNumberChanged'
     */
    const VALUE_PHONE_NUMBER_CHANGED = 'PhoneNumberChanged';
    /**
     * Constant for value 'PhoneNumberCarrierChanged'
     * @return string 'PhoneNumberCarrierChanged'
     */
    const VALUE_PHONE_NUMBER_CARRIER_CHANGED = 'PhoneNumberCarrierChanged';
    /**
     * Constant for value 'UserRequestedUnregistration'
     * @return string 'UserRequestedUnregistration'
     */
    const VALUE_USER_REQUESTED_UNREGISTRATION = 'UserRequestedUnregistration';
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
     * @uses self::VALUE_SMSAGGREGATOR_NOT_AVAILABLE
     * @uses self::VALUE_PHONE_NUMBER_INVALID
     * @uses self::VALUE_PHONE_NUMBER_CHANGED
     * @uses self::VALUE_PHONE_NUMBER_CARRIER_CHANGED
     * @uses self::VALUE_USER_REQUESTED_UNREGISTRATION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMSAGGREGATOR_NOT_AVAILABLE,
            self::VALUE_PHONE_NUMBER_INVALID,
            self::VALUE_PHONE_NUMBER_CHANGED,
            self::VALUE_PHONE_NUMBER_CARRIER_CHANGED,
            self::VALUE_USER_REQUESTED_UNREGISTRATION,
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
