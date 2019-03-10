<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PickupStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Simple type defining all possible states for an In-Store Pickup order. The value of the <strong>PickupStatus</strong> field (returned under the <strong>PickupMethodSelected</strong> container) can change during the lifecycle of the
 * order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to
 * large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Enumerations
 */
class PickupStatusCodeType
{
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'PendingMerchantConfirmation'
     * @return string 'PendingMerchantConfirmation'
     */
    const VALUE_PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';
    /**
     * Constant for value 'ReadyToPickup'
     * @return string 'ReadyToPickup'
     */
    const VALUE_READY_TO_PICKUP = 'ReadyToPickup';
    /**
     * Constant for value 'Pickedup'
     * @return string 'Pickedup'
     */
    const VALUE_PICKEDUP = 'Pickedup';
    /**
     * Constant for value 'PickupCancelledOutOfStock'
     * @return string 'PickupCancelledOutOfStock'
     */
    const VALUE_PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';
    /**
     * Constant for value 'PickupCancelledBuyerRejected'
     * @return string 'PickupCancelledBuyerRejected'
     */
    const VALUE_PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';
    /**
     * Constant for value 'PickupCancelledBuyerNoShow'
     * @return string 'PickupCancelledBuyerNoShow'
     */
    const VALUE_PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';
    /**
     * Constant for value 'PickupCancelled'
     * @return string 'PickupCancelled'
     */
    const VALUE_PICKUP_CANCELLED = 'PickupCancelled';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
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
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
