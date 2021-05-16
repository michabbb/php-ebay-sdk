<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderStatusFilterCodeType EnumType
 * @subpackage Enumerations
 */
class OrderStatusFilterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * Meta information extracted from the WSDL
     * - documentation: All applicable sold listings, regardless of their Paid or Shipped status.
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'AwaitingPayment'
     * Meta information extracted from the WSDL
     * - documentation: Sold listings that have not yet been marked as Paid in My eBay.
     * @return string 'AwaitingPayment'
     */
    const VALUE_AWAITING_PAYMENT = 'AwaitingPayment';
    /**
     * Constant for value 'AwaitingShipment'
     * Meta information extracted from the WSDL
     * - documentation: Sold listings that have not yet been marked as Shipped in My eBay.
     * @return string 'AwaitingShipment'
     */
    const VALUE_AWAITING_SHIPMENT = 'AwaitingShipment';
    /**
     * Constant for value 'PaidAndShipped'
     * Meta information extracted from the WSDL
     * - documentation: Sold listings that have been marked as Paid and Shipped in My eBay.
     * @return string 'PaidAndShipped'
     */
    const VALUE_PAID_AND_SHIPPED = 'PaidAndShipped';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_AWAITING_PAYMENT
     * @uses self::VALUE_AWAITING_SHIPMENT
     * @uses self::VALUE_PAID_AND_SHIPPED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL,
            self::VALUE_AWAITING_PAYMENT,
            self::VALUE_AWAITING_SHIPMENT,
            self::VALUE_PAID_AND_SHIPPED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
