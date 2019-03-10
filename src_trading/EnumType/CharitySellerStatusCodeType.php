<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CharitySellerStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type defining the possible states for a seller's charity seller account.
 * @subpackage Enumerations
 */
class CharitySellerStatusCodeType
{
    /**
     * Constant for value 'Suspended'
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Registered'
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'CreditCardExpired'
     * @return string 'CreditCardExpired'
     */
    const VALUE_CREDIT_CARD_EXPIRED = 'CreditCardExpired';
    /**
     * Constant for value 'TokenExpired'
     * @return string 'TokenExpired'
     */
    const VALUE_TOKEN_EXPIRED = 'TokenExpired';
    /**
     * Constant for value 'CreditCardAboutToExpire'
     * @return string 'CreditCardAboutToExpire'
     */
    const VALUE_CREDIT_CARD_ABOUT_TO_EXPIRE = 'CreditCardAboutToExpire';
    /**
     * Constant for value 'RegisteredNoCreditCard'
     * @return string 'RegisteredNoCreditCard'
     */
    const VALUE_REGISTERED_NO_CREDIT_CARD = 'RegisteredNoCreditCard';
    /**
     * Constant for value 'NotRegisteredLostDirectSellerStatus'
     * @return string 'NotRegisteredLostDirectSellerStatus'
     */
    const VALUE_NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS = 'NotRegisteredLostDirectSellerStatus';
    /**
     * Constant for value 'DirectDebitRejected'
     * @return string 'DirectDebitRejected'
     */
    const VALUE_DIRECT_DEBIT_REJECTED = 'DirectDebitRejected';
    /**
     * Constant for value 'RegisteredDirectSeller'
     * @return string 'RegisteredDirectSeller'
     */
    const VALUE_REGISTERED_DIRECT_SELLER = 'RegisteredDirectSeller';
    /**
     * Constant for value 'RegisteredNoPaymentMethod'
     * @return string 'RegisteredNoPaymentMethod'
     */
    const VALUE_REGISTERED_NO_PAYMENT_METHOD = 'RegisteredNoPaymentMethod';
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
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_CREDIT_CARD_EXPIRED
     * @uses self::VALUE_TOKEN_EXPIRED
     * @uses self::VALUE_CREDIT_CARD_ABOUT_TO_EXPIRE
     * @uses self::VALUE_REGISTERED_NO_CREDIT_CARD
     * @uses self::VALUE_NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS
     * @uses self::VALUE_DIRECT_DEBIT_REJECTED
     * @uses self::VALUE_REGISTERED_DIRECT_SELLER
     * @uses self::VALUE_REGISTERED_NO_PAYMENT_METHOD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUSPENDED,
            self::VALUE_REGISTERED,
            self::VALUE_CLOSED,
            self::VALUE_CREDIT_CARD_EXPIRED,
            self::VALUE_TOKEN_EXPIRED,
            self::VALUE_CREDIT_CARD_ABOUT_TO_EXPIRE,
            self::VALUE_REGISTERED_NO_CREDIT_CARD,
            self::VALUE_NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS,
            self::VALUE_DIRECT_DEBIT_REJECTED,
            self::VALUE_REGISTERED_DIRECT_SELLER,
            self::VALUE_REGISTERED_NO_PAYMENT_METHOD,
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
