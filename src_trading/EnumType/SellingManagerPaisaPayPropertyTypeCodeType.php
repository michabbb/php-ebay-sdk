<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerPaisaPayPropertyTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the PaisaPay alert types. This type is only applicable to eBay India.
 * @subpackage Enumerations
 */
class SellingManagerPaisaPayPropertyTypeCodeType
{
    /**
     * Constant for value 'PaisaPayAwaitingShipment'
     * @return string 'PaisaPayAwaitingShipment'
     */
    const VALUE_PAISA_PAY_AWAITING_SHIPMENT = 'PaisaPayAwaitingShipment';
    /**
     * Constant for value 'PaisaPayTimeExtensionRequestDeclined'
     * @return string 'PaisaPayTimeExtensionRequestDeclined'
     */
    const VALUE_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED = 'PaisaPayTimeExtensionRequestDeclined';
    /**
     * Constant for value 'PaisaPayPendingReceived'
     * @return string 'PaisaPayPendingReceived'
     */
    const VALUE_PAISA_PAY_PENDING_RECEIVED = 'PaisaPayPendingReceived';
    /**
     * Constant for value 'PaisaPayRefundInitiated'
     * @return string 'PaisaPayRefundInitiated'
     */
    const VALUE_PAISA_PAY_REFUND_INITIATED = 'PaisaPayRefundInitiated';
    /**
     * Constant for value 'PaisaPayTimeExtensionRequested'
     * @return string 'PaisaPayTimeExtensionRequested'
     */
    const VALUE_PAISA_PAY_TIME_EXTENSION_REQUESTED = 'PaisaPayTimeExtensionRequested';
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
     * @uses self::VALUE_PAISA_PAY_AWAITING_SHIPMENT
     * @uses self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED
     * @uses self::VALUE_PAISA_PAY_PENDING_RECEIVED
     * @uses self::VALUE_PAISA_PAY_REFUND_INITIATED
     * @uses self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUESTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAISA_PAY_AWAITING_SHIPMENT,
            self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED,
            self::VALUE_PAISA_PAY_PENDING_RECEIVED,
            self::VALUE_PAISA_PAY_REFUND_INITIATED,
            self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUESTED,
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
