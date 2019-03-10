<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UserStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These codes indicate the current state or status of an eBay user account.
 * @subpackage Enumerations
 */
class UserStatusCodeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Suspended'
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Unconfirmed'
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Ghost'
     * @return string 'Ghost'
     */
    const VALUE_GHOST = 'Ghost';
    /**
     * Constant for value 'InMaintenance'
     * @return string 'InMaintenance'
     */
    const VALUE_IN_MAINTENANCE = 'InMaintenance';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'CreditCardVerify'
     * @return string 'CreditCardVerify'
     */
    const VALUE_CREDIT_CARD_VERIFY = 'CreditCardVerify';
    /**
     * Constant for value 'AccountOnHold'
     * @return string 'AccountOnHold'
     */
    const VALUE_ACCOUNT_ON_HOLD = 'AccountOnHold';
    /**
     * Constant for value 'Merged'
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'RegistrationCodeMailOut'
     * @return string 'RegistrationCodeMailOut'
     */
    const VALUE_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';
    /**
     * Constant for value 'TermPending'
     * @return string 'TermPending'
     */
    const VALUE_TERM_PENDING = 'TermPending';
    /**
     * Constant for value 'UnconfirmedHalfOptIn'
     * @return string 'UnconfirmedHalfOptIn'
     */
    const VALUE_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';
    /**
     * Constant for value 'CreditCardVerifyHalfOptIn'
     * @return string 'CreditCardVerifyHalfOptIn'
     */
    const VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';
    /**
     * Constant for value 'UnconfirmedPassport'
     * @return string 'UnconfirmedPassport'
     */
    const VALUE_UNCONFIRMED_PASSPORT = 'UnconfirmedPassport';
    /**
     * Constant for value 'CreditCardVerifyPassport'
     * @return string 'CreditCardVerifyPassport'
     */
    const VALUE_CREDIT_CARD_VERIFY_PASSPORT = 'CreditCardVerifyPassport';
    /**
     * Constant for value 'UnconfirmedExpress'
     * @return string 'UnconfirmedExpress'
     */
    const VALUE_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';
    /**
     * Constant for value 'Guest'
     * @return string 'Guest'
     */
    const VALUE_GUEST = 'Guest';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_UNCONFIRMED
     * @uses self::VALUE_GHOST
     * @uses self::VALUE_IN_MAINTENANCE
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_CREDIT_CARD_VERIFY
     * @uses self::VALUE_ACCOUNT_ON_HOLD
     * @uses self::VALUE_MERGED
     * @uses self::VALUE_REGISTRATION_CODE_MAIL_OUT
     * @uses self::VALUE_TERM_PENDING
     * @uses self::VALUE_UNCONFIRMED_HALF_OPT_IN
     * @uses self::VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN
     * @uses self::VALUE_UNCONFIRMED_PASSPORT
     * @uses self::VALUE_CREDIT_CARD_VERIFY_PASSPORT
     * @uses self::VALUE_UNCONFIRMED_EXPRESS
     * @uses self::VALUE_GUEST
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_SUSPENDED,
            self::VALUE_CONFIRMED,
            self::VALUE_UNCONFIRMED,
            self::VALUE_GHOST,
            self::VALUE_IN_MAINTENANCE,
            self::VALUE_DELETED,
            self::VALUE_CREDIT_CARD_VERIFY,
            self::VALUE_ACCOUNT_ON_HOLD,
            self::VALUE_MERGED,
            self::VALUE_REGISTRATION_CODE_MAIL_OUT,
            self::VALUE_TERM_PENDING,
            self::VALUE_UNCONFIRMED_HALF_OPT_IN,
            self::VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN,
            self::VALUE_UNCONFIRMED_PASSPORT,
            self::VALUE_CREDIT_CARD_VERIFY_PASSPORT,
            self::VALUE_UNCONFIRMED_EXPRESS,
            self::VALUE_GUEST,
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
