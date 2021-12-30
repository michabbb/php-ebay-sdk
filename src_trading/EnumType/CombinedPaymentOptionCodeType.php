<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CombinedPaymentOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the seller's preference for allowing <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders that pass
 * on a shipping discounts to the buyer.
 * @subpackage Enumerations
 */
class CombinedPaymentOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoCombinedPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller does not allow Combined Invoice orders. In other words, the buyer must pay for each order line item separately, and cannot combine multiple single line item orders into one Combined Invoice order
     * and make one payment for that order.
     * @return string 'NoCombinedPayment'
     */
    const VALUE_NO_COMBINED_PAYMENT = 'NoCombinedPayment';
    /**
     * Constant for value 'DiscountSpecified'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller allows Combined Invoice orders, and that the seller has one or more shipping discount rules (Flat, Calculated, or Promotional) that can be applied at the listing level.
     * @return string 'DiscountSpecified'
     */
    const VALUE_DISCOUNT_SPECIFIED = 'DiscountSpecified';
    /**
     * Constant for value 'SpecifyDiscountLater'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller allows Combined Invoice orders, and that the seller will apply any shipping discounts after the creation of the Combined Invoice order.
     * @return string 'SpecifyDiscountLater'
     */
    const VALUE_SPECIFY_DISCOUNT_LATER = 'SpecifyDiscountLater';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_COMBINED_PAYMENT
     * @uses self::VALUE_DISCOUNT_SPECIFIED
     * @uses self::VALUE_SPECIFY_DISCOUNT_LATER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_COMBINED_PAYMENT,
            self::VALUE_DISCOUNT_SPECIFIED,
            self::VALUE_SPECIFY_DISCOUNT_LATER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
