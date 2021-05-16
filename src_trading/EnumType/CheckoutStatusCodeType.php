<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CheckoutStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the possible checkout states of an order line item.
 * @subpackage Enumerations
 */
class CheckoutStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CheckoutComplete'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has paid and checkout is complete.
     * @return string 'CheckoutComplete'
     */
    const VALUE_CHECKOUT_COMPLETE = 'CheckoutComplete';
    /**
     * Constant for value 'CheckoutIncomplete'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that checkout is incomplete, generally because the buyer has not paid yet.
     * @return string 'CheckoutIncomplete'
     */
    const VALUE_CHECKOUT_INCOMPLETE = 'CheckoutIncomplete';
    /**
     * Constant for value 'BuyerRequestsTotal'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer wants to confirm the total price of the order line item before making a payment.
     * @return string 'BuyerRequestsTotal'
     */
    const VALUE_BUYER_REQUESTS_TOTAL = 'BuyerRequestsTotal';
    /**
     * Constant for value 'SellerResponded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller has just responded to the buyer concerning the total price of the order line item.
     * @return string 'SellerResponded'
     */
    const VALUE_SELLER_RESPONDED = 'SellerResponded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CHECKOUT_COMPLETE
     * @uses self::VALUE_CHECKOUT_INCOMPLETE
     * @uses self::VALUE_BUYER_REQUESTS_TOTAL
     * @uses self::VALUE_SELLER_RESPONDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHECKOUT_COMPLETE,
            self::VALUE_CHECKOUT_INCOMPLETE,
            self::VALUE_BUYER_REQUESTS_TOTAL,
            self::VALUE_SELLER_RESPONDED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
