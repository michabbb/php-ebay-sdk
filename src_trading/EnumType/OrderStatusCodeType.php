<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values for order states. Some of these values can be used as <b>OrderStatus</b> filters in the <b>GetOrders</b> request payload, and some of these values may be returned in any of the order
 * management calls under the <b>OrderStatus</b> field. See the individual value descriptions for more information on how they are used and/or when they are returned.
 * @subpackage Enumerations
 */
class OrderStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order is not yet complete. An order in the <code>Active</code> state means that the buyer has not initiated payment for the order. While an order is in this state, it can be combined into a <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a>, a buyer can request a cancellation, and/or a seller can update payment details (including a change in
     * order price) or shipping details (including shipping cost and shipping service). <br><br> This value can be used a filter value in the <b>OrderStatus</b> field of the <b>GetOrders</b> request payload, and it can also be returned in any of the order
     * management calls.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used a filter value in the <b>OrderStatus</b> field, and if used, all inactive orders will be returned.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Completed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order is paid for and complete. An order in the <code>Completed</code> state means that no other changes to the order can be made. <br><br> This value can be used a filter value in the <b>OrderStatus</b>
     * field of the <b>GetOrders</b> request payload, and it can also be returned in any of the order management calls.
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Cancelled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order has been cancelled. Depending on whether payment was made or not, the seller may also need to refund the buyer after an order is cancelled. <br><br> This value can be used a filter value in the
     * <b>OrderStatus</b> field of the <b>GetOrders</b> request payload, and it can also be returned in any of the order management calls.
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Shipped'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value was only used for the deprecated Half.com site, so is no longer applicable and should not be used as an <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     * @return string 'Shipped'
     */
    const VALUE_SHIPPED = 'Shipped';
    /**
     * Constant for value 'Default'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Authenticated'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable and should not be used as an <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     * @return string 'Authenticated'
     */
    const VALUE_AUTHENTICATED = 'Authenticated';
    /**
     * Constant for value 'InProcess'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the order is currently in the state of being processed, but is not yet complete. <br><br> This value is not supported by the <b>OrderStatus</b> field of the <b>GetOrders</b> request payload, but
     * it can be returned in any of the order management calls.
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable and should not be used as an <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'All'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is passed into the <b>OrderStatus</b> of <b>GetOrders</b> to retrieve orders in all states. This is the default value. This value is not applicable to the response payloads of the order management calls.
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'CancelPending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a buyer has initiated a cancellation request on the order. If a seller sees an order in this state, that seller must either approve or reject the cancellation request through My eBay Web flows or through the
     * Post-Order API cancellation calls. <br/><br/> This enumeration value cannot be used as an <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     * @return string 'CancelPending'
     */
    const VALUE_CANCEL_PENDING = 'CancelPending';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_SHIPPED
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_AUTHENTICATED
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CANCEL_PENDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELLED,
            self::VALUE_SHIPPED,
            self::VALUE_DEFAULT,
            self::VALUE_AUTHENTICATED,
            self::VALUE_IN_PROCESS,
            self::VALUE_INVALID,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_ALL,
            self::VALUE_CANCEL_PENDING,
        ];
    }
}
