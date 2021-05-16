<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CombinedPaymentPeriodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the number of days after item purchase that an unpaid order can be combined with one or more other mutual (same buyer and same seller) unpaid
 * orders into one <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> order. Either the buyer or the seller can initiate the Combined Invoice process.
 * Sellers can offer buyers shipping discounts through Combined Invoice orders, and buyers only have to make one payment for multiple orders as opposed to a payment for each order.
 * @subpackage Enumerations
 */
class CombinedPaymentPeriodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an unpaid order can be combined into a Combined Invoice order within three days after purchase (creation of order).
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_5'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an unpaid order can be combined into a Combined Invoice order within five days after purchase (creation of order).
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an unpaid order can be combined into a Combined Invoice order within seven days after purchase (creation of order).
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_14'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an unpaid order can be combined into a Combined Invoice order within 14 days after purchase (creation of order).
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an unpaid order can be combined into a Combined Invoice order within 30 days after purchase (creation of order).
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Ineligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that an order is not eligible to be combined into a Combined Payment order.
     * @return string 'Ineligible'
     */
    const VALUE_INELIGIBLE = 'Ineligible';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_INELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_30,
            self::VALUE_INELIGIBLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
