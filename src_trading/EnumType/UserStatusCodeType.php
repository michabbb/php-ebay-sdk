<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: These codes indicate the current state or status of an eBay user account.
 * @subpackage Enumerations
 */
class UserStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the status of the user's eBay account is unknown. This value should seldom, if ever, be returned and typically represents a problem.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Suspended'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is suspended. A user with a suspended account cannot participate in buying or selling activity.
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Confirmed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is a confirmed, active account.
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Unconfirmed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay User has completed online registration, but has either not responded to confirmation email or has not yet been sent the confirmation email. Or, if this user began registration as a seller but did
     * not complete it, the user will have this status. A seller with this status can begin to list an item but cannot complete the listing until the seller completes seller registration.
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Ghost'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user originally registered on AuctionWeb (pre-eBay), but that user never re-registered on eBay. Note that there are very few (if any) eBay accounts in the 'Ghost' state.
     * @return string 'Ghost'
     */
    const VALUE_GHOST = 'Ghost';
    /**
     * Constant for value 'InMaintenance'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is in maintenance mode.
     * @return string 'InMaintenance'
     */
    const VALUE_IN_MAINTENANCE = 'InMaintenance';
    /**
     * Constant for value 'Deleted'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account has been deleted.
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'CreditCardVerify'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has completed the registration and confirmation process, but needs to complete verification of credit card information. A user has this status if this user began registration as a seller but did not
     * complete it. A seller with this status can begin to list an item but cannot complete the listing until the seller completes seller registration.
     * @return string 'CreditCardVerify'
     */
    const VALUE_CREDIT_CARD_VERIFY = 'CreditCardVerify';
    /**
     * Constant for value 'AccountOnHold'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is currently on hold. A common reason for a user's account to go on hold is a non-payment of the monthly eBay invoice. A user cannot sell or buy items if their account is on hold.
     * @return string 'AccountOnHold'
     */
    const VALUE_ACCOUNT_ON_HOLD = 'AccountOnHold';
    /**
     * Constant for value 'Merged'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user record has been merged with another account record for the same user
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'RegistrationCodeMailOut'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay User has completed online registration, and eBay has just sent the user a registration code in a confirmation email. The eBay user will have to respond to the confirmation email to get their account
     * confirmed.
     * @return string 'RegistrationCodeMailOut'
     */
    const VALUE_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';
    /**
     * Constant for value 'TermPending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has scheduled an account closure but eBay has yet to process the closure request.
     * @return string 'TermPending'
     */
    const VALUE_TERM_PENDING = 'TermPending';
    /**
     * Constant for value 'UnconfirmedHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> The Half.com site has been shut down, so this value is no longer applicable. </span> User has completed the registration for Half.com and opted to automatically also be registered with eBay, but
     * the registration confirmation is still pending
     * @return string 'UnconfirmedHalfOptIn'
     */
    const VALUE_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';
    /**
     * Constant for value 'CreditCardVerifyHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> The Half.com site has been shut down, so this value is no longer applicable. </span> User has completed the registration for Half.com and opted to automatically also be registered with eBay, but
     * the user needs to complete verification of credit card information. A user has this status on eBay if this user began registration as a seller but did not complete it. A seller with this status can begin to list an item but cannot complete the
     * listing until the seller completes seller registration.
     * @return string 'CreditCardVerifyHalfOptIn'
     */
    const VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';
    /**
     * Constant for value 'UnconfirmedPassport'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'UnconfirmedPassport'
     */
    const VALUE_UNCONFIRMED_PASSPORT = 'UnconfirmedPassport';
    /**
     * Constant for value 'CreditCardVerifyPassport'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'CreditCardVerifyPassport'
     */
    const VALUE_CREDIT_CARD_VERIFY_PASSPORT = 'CreditCardVerifyPassport';
    /**
     * Constant for value 'UnconfirmedExpress'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'UnconfirmedExpress'
     */
    const VALUE_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';
    /**
     * Constant for value 'Guest'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user is a guest user. The user has not added a password and has not confirmed an email address. The user has not signed up as a regular user, but has agreed to the User Agreement and Privacy Policy. The
     * user has been through the buying flow for a guest; the user has been through checkout using the streamlined Buy-It-Now flow.
     * @return string 'Guest'
     */
    const VALUE_GUEST = 'Guest';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
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
     * @uses self::VALUE_UNCONFIRMED_PASSPORT
     * @uses self::VALUE_CREDIT_CARD_VERIFY_PASSPORT
     * @uses self::VALUE_UNCONFIRMED_EXPRESS
     * @uses self::VALUE_GUEST
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
            self::VALUE_UNCONFIRMED_PASSPORT,
            self::VALUE_CREDIT_CARD_VERIFY_PASSPORT,
            self::VALUE_UNCONFIRMED_EXPRESS,
            self::VALUE_GUEST,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
