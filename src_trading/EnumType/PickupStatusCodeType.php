<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PickupStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Simple type defining all possible states for an In-Store Pickup order. The value of the <strong>PickupStatus</strong> field (returned under the <strong>PickupMethodSelected</strong> container) can change during the lifecycle of the
 * order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to
 * large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Enumerations
 */
class PickupStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the current status value of the In-Store Pickup order is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the current status value of the In-Store Pickup order is not applicable.
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'PendingMerchantConfirmation'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has yet to be acknowledged by the merchant. This is typically the state before the merchant sends the <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay through the
     * <strong>Inbound Notifications API</strong>.
     * @return string 'PendingMerchantConfirmation'
     */
    const VALUE_PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';
    /**
     * Constant for value 'ReadyToPickup'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order is ready to be picked up by the buyer. This state occurs after the merchant sends the <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay through the <strong>Inbound
     * Notifications API</strong>.
     * @return string 'ReadyToPickup'
     */
    const VALUE_READY_TO_PICKUP = 'ReadyToPickup';
    /**
     * Constant for value 'Pickedup'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has been picked up by the buyer. This state occurs after the merchant sends the <strong>ORDER.PICKEDUP</strong> notification to eBay through the <strong>Inbound Notifications
     * API</strong>.
     * @return string 'Pickedup'
     */
    const VALUE_PICKEDUP = 'Pickedup';
    /**
     * Constant for value 'PickupCancelledOutOfStock'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the product was out of stock. This state occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong> notification (with
     * the <strong>CANCEL_TYPE</strong> parameter in the notification payload set to "OUT_OF_STOCK") to eBay through the <strong>Inbound Notifications API</strong>.
     * @return string 'PickupCancelledOutOfStock'
     */
    const VALUE_PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';
    /**
     * Constant for value 'PickupCancelledBuyerRejected'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the buyer rejected the item. This state occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong> notification (with
     * the <strong>CANCEL_TYPE</strong> parameter in the notification payload set to "BUYER_REJECTED") to eBay through the <strong>Inbound Notifications API</strong>.
     * @return string 'PickupCancelledBuyerRejected'
     */
    const VALUE_PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';
    /**
     * Constant for value 'PickupCancelledBuyerNoShow'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the buyer never showed up to pick up the item. This state occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong>
     * notification (with the <strong>CANCEL_TYPE</strong> parameter in the notification payload set to "BUYER_NO_SHOW") to eBay through the <strong>Inbound Notifications API</strong>.
     * @return string 'PickupCancelledBuyerNoShow'
     */
    const VALUE_PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';
    /**
     * Constant for value 'PickupCancelled'
     * Meta information extracted from the WSDL
     * - documentation: This status indicates that the In-Store Pickup order has been cancelled, and the exact reason is not available.
     * @return string 'PickupCancelled'
     */
    const VALUE_PICKUP_CANCELLED = 'PickupCancelled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_NOT_APPLICABLE
     * @uses self::VALUE_PENDING_MERCHANT_CONFIRMATION
     * @uses self::VALUE_READY_TO_PICKUP
     * @uses self::VALUE_PICKEDUP
     * @uses self::VALUE_PICKUP_CANCELLED_OUT_OF_STOCK
     * @uses self::VALUE_PICKUP_CANCELLED_BUYER_REJECTED
     * @uses self::VALUE_PICKUP_CANCELLED_BUYER_NO_SHOW
     * @uses self::VALUE_PICKUP_CANCELLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVALID,
            self::VALUE_NOT_APPLICABLE,
            self::VALUE_PENDING_MERCHANT_CONFIRMATION,
            self::VALUE_READY_TO_PICKUP,
            self::VALUE_PICKEDUP,
            self::VALUE_PICKUP_CANCELLED_OUT_OF_STOCK,
            self::VALUE_PICKUP_CANCELLED_BUYER_REJECTED,
            self::VALUE_PICKUP_CANCELLED_BUYER_NO_SHOW,
            self::VALUE_PICKUP_CANCELLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
