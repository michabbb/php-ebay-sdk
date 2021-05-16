<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentHoldStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the list of possible values that can be returned in the PaymentHoldStatus container.
 * @subpackage Enumerations
 */
class PaymentHoldStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PaymentReview'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates a possible issue with a buyer. If this value is returned, the TransactionArray.Transaction.SellerPaidStatus field is returned as NotPaid in GetMyeBaySelling, and the TransactionArray.Transaction.BuyerPaidStatus
     * field is returned as PaidWithPayPal in GetMyeBayBuying.
     * @return string 'PaymentReview'
     */
    const VALUE_PAYMENT_REVIEW = 'PaymentReview';
    /**
     * Constant for value 'MerchantHold'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates a possible issue with a seller. If this value is returned, the TransactionArray.Transaction.SellerPaidStatus field is returned as PaidWithPayPal in GetMyeBaySelling, and the
     * TransactionArray.Transaction.BuyerPaidStatus field is returned as PaidWithPayPal in GetMyeBayBuying.
     * @return string 'MerchantHold'
     */
    const VALUE_MERCHANT_HOLD = 'MerchantHold';
    /**
     * Constant for value 'Released'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a payment hold on the item has been released.
     * @return string 'Released'
     */
    const VALUE_RELEASED = 'Released';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that there is no payment hold on the item.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'NewSellerHold'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that there is a "new seller hold" on the item. PayPal may hold payments to a new seller for up to 21 days. Sellers are considered "new" until they have met all three criteria below: <ul> <li>More than 90 days
     * have passed since first successful sale</li> <li>More than 25 domestic sales</li> <li>More than $250.00 in total sales</li> </ul>
     * @return string 'NewSellerHold'
     */
    const VALUE_NEW_SELLER_HOLD = 'NewSellerHold';
    /**
     * Constant for value 'PaymentHold'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that there is a payment hold on the item.
     * @return string 'PaymentHold'
     */
    const VALUE_PAYMENT_HOLD = 'PaymentHold';
    /**
     * Constant for value 'ReleasePending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the process for the release of funds for the order has been initiated.
     * @return string 'ReleasePending'
     */
    const VALUE_RELEASE_PENDING = 'ReleasePending';
    /**
     * Constant for value 'ReleaseConfirmed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the funds are available in the seller's PayPal account.
     * @return string 'ReleaseConfirmed'
     */
    const VALUE_RELEASE_CONFIRMED = 'ReleaseConfirmed';
    /**
     * Constant for value 'ReleaseFailed'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer used.
     * @return string 'ReleaseFailed'
     */
    const VALUE_RELEASE_FAILED = 'ReleaseFailed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYMENT_REVIEW
     * @uses self::VALUE_MERCHANT_HOLD
     * @uses self::VALUE_RELEASED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NEW_SELLER_HOLD
     * @uses self::VALUE_PAYMENT_HOLD
     * @uses self::VALUE_RELEASE_PENDING
     * @uses self::VALUE_RELEASE_CONFIRMED
     * @uses self::VALUE_RELEASE_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYMENT_REVIEW,
            self::VALUE_MERCHANT_HOLD,
            self::VALUE_RELEASED,
            self::VALUE_NONE,
            self::VALUE_NEW_SELLER_HOLD,
            self::VALUE_PAYMENT_HOLD,
            self::VALUE_RELEASE_PENDING,
            self::VALUE_RELEASE_CONFIRMED,
            self::VALUE_RELEASE_FAILED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
