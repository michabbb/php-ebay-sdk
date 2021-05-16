<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SMSSubscriptionErrorCodeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of SMS subscription error.
 * @subpackage Enumerations
 */
class SMSSubscriptionErrorCodeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SMSAggregatorNotAvailable'
     * Meta information extracted from the WSDL
     * - documentation: Aggregator not available.
     * @return string 'SMSAggregatorNotAvailable'
     */
    const VALUE_SMSAGGREGATOR_NOT_AVAILABLE = 'SMSAggregatorNotAvailable';
    /**
     * Constant for value 'PhoneNumberInvalid'
     * Meta information extracted from the WSDL
     * - documentation: Phone number invalid.
     * @return string 'PhoneNumberInvalid'
     */
    const VALUE_PHONE_NUMBER_INVALID = 'PhoneNumberInvalid';
    /**
     * Constant for value 'PhoneNumberChanged'
     * Meta information extracted from the WSDL
     * - documentation: Phone number has changed.
     * @return string 'PhoneNumberChanged'
     */
    const VALUE_PHONE_NUMBER_CHANGED = 'PhoneNumberChanged';
    /**
     * Constant for value 'PhoneNumberCarrierChanged'
     * Meta information extracted from the WSDL
     * - documentation: The carrier has changed.
     * @return string 'PhoneNumberCarrierChanged'
     */
    const VALUE_PHONE_NUMBER_CARRIER_CHANGED = 'PhoneNumberCarrierChanged';
    /**
     * Constant for value 'UserRequestedUnregistration'
     * Meta information extracted from the WSDL
     * - documentation: The user has requested to be unregistered.
     * @return string 'UserRequestedUnregistration'
     */
    const VALUE_USER_REQUESTED_UNREGISTRATION = 'UserRequestedUnregistration';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMSAGGREGATOR_NOT_AVAILABLE,
            self::VALUE_PHONE_NUMBER_INVALID,
            self::VALUE_PHONE_NUMBER_CHANGED,
            self::VALUE_PHONE_NUMBER_CARRIER_CHANGED,
            self::VALUE_USER_REQUESTED_UNREGISTRATION,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
