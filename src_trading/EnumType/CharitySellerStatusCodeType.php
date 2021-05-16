<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CharitySellerStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type defining the possible states for a seller's charity seller account.
 * @subpackage Enumerations
 */
class CharitySellerStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Suspended'
     * Meta information extracted from the WSDL
     * - documentation: The seller's charity seller account is suspended.
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Registered'
     * Meta information extracted from the WSDL
     * - documentation: The seller is a registered charity seller.
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'Closed'
     * Meta information extracted from the WSDL
     * - documentation: The seller is no longer a registered charity seller. The account with the PayPal Giving Fund is closed.
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'CreditCardExpired'
     * Meta information extracted from the WSDL
     * - documentation: The credit card associated with a seller's charity seller account has expired.
     * @return string 'CreditCardExpired'
     */
    const VALUE_CREDIT_CARD_EXPIRED = 'CreditCardExpired';
    /**
     * Constant for value 'TokenExpired'
     * Meta information extracted from the WSDL
     * - documentation: The token associated with a seller's charity seller account has expired.
     * @return string 'TokenExpired'
     */
    const VALUE_TOKEN_EXPIRED = 'TokenExpired';
    /**
     * Constant for value 'CreditCardAboutToExpire'
     * Meta information extracted from the WSDL
     * - documentation: The credit card associated with a seller's charity seller account will expire in 15 (or fewer) days.
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
     * Meta information extracted from the WSDL
     * - documentation: The seller is no longer a registered charity seller and has lost direct seller status.
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
     * Meta information extracted from the WSDL
     * - documentation: The seller is a registered direct seller, but has no credit card associated with the charity seller account.
     * @return string 'RegisteredDirectSeller'
     */
    const VALUE_REGISTERED_DIRECT_SELLER = 'RegisteredDirectSeller';
    /**
     * Constant for value 'RegisteredNoPaymentMethod'
     * Meta information extracted from the WSDL
     * - documentation: The seller is a registered charity seller with no donation payment method on file.
     * @return string 'RegisteredNoPaymentMethod'
     */
    const VALUE_REGISTERED_NO_PAYMENT_METHOD = 'RegisteredNoPaymentMethod';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
