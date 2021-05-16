<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the different states of an eBay user account.
 * @subpackage Enumerations
 */
class UserStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the current state of the eBay user account is unknown. This value should seldom, if ever, be returned and typically represents a problem.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Suspended'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user account is currently suspended. This may be because the eBay user has violated eBay's user agreement.
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Confirmed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the current state of the eBay user account is confirmed and active. This is the most commonly returned value.
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Unconfirmed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the current state of the eBay user account is unconfirmed. This value may be returned for a newly created acount, where the registration process is still ongoing.
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Ghost'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is rare, but may get returned for users who registered quite a long time ago, but never re-registered as required.
     * @return string 'Ghost'
     */
    const VALUE_GHOST = 'Ghost';
    /**
     * Constant for value 'InMaintenance'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is currently making changes to the eBay user account. This value is also rarely returned.
     * @return string 'InMaintenance'
     */
    const VALUE_IN_MAINTENANCE = 'InMaintenance';
    /**
     * Constant for value 'Deleted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay has deleted the user's account.
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'CreditCardVerify'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the new account has been created, but eBay is in the process of verifying credit card information for the user.
     * @return string 'CreditCardVerify'
     */
    const VALUE_CREDIT_CARD_VERIFY = 'CreditCardVerify';
    /**
     * Constant for value 'AccountOnHold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's account is on hold, possibly for non-payment of eBay seller fees.
     * @return string 'AccountOnHold'
     */
    const VALUE_ACCOUNT_ON_HOLD = 'AccountOnHold';
    /**
     * Constant for value 'Merged'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user has more than one account, and these accounts are in the process of getting merged.
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'RegistrationCodeMailOut'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that registration of the new account is pending the new user responding to the confirmation email.
     * @return string 'RegistrationCodeMailOut'
     */
    const VALUE_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';
    /**
     * Constant for value 'TermPending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user account has been scheduled for account closure (typically when a user has requested to have their account closed).
     * @return string 'TermPending'
     */
    const VALUE_TERM_PENDING = 'TermPending';
    /**
     * Constant for value 'UnconfirmedHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the Half.com site has been shut down.
     * @return string 'UnconfirmedHalfOptIn'
     */
    const VALUE_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';
    /**
     * Constant for value 'CreditCardVerifyHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the Half.com site has been shut down.
     * @return string 'CreditCardVerifyHalfOptIn'
     */
    const VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';
    /**
     * Constant for value 'UnconfirmedExpress'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as eBay Express listings no longer exist.
     * @return string 'UnconfirmedExpress'
     */
    const VALUE_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_UNCONFIRMED_EXPRESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
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
            self::VALUE_UNCONFIRMED_EXPRESS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
