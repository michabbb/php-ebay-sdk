<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerPaisaPayPropertyTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Container for the PaisaPay alert types.
 * @subpackage Enumerations
 */
class SellingManagerPaisaPayPropertyTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PaisaPayAwaitingShipment'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay items awaiting shipment.
     * @return string 'PaisaPayAwaitingShipment'
     */
    const VALUE_PAISA_PAY_AWAITING_SHIPMENT = 'PaisaPayAwaitingShipment';
    /**
     * Constant for value 'PaisaPayTimeExtensionRequestDeclined'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay items for which time extension requests are rejected by the buyers.
     * @return string 'PaisaPayTimeExtensionRequestDeclined'
     */
    const VALUE_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED = 'PaisaPayTimeExtensionRequestDeclined';
    /**
     * Constant for value 'PaisaPayPendingReceived'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay items for which the item receipt has not yet been confirmed by the buyer or not yet been auto-confirmed by the system.
     * @return string 'PaisaPayPendingReceived'
     */
    const VALUE_PAISA_PAY_PENDING_RECEIVED = 'PaisaPayPendingReceived';
    /**
     * Constant for value 'PaisaPayRefundInitiated'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay items for which buyers have filed "Item not received".
     * @return string 'PaisaPayRefundInitiated'
     */
    const VALUE_PAISA_PAY_REFUND_INITIATED = 'PaisaPayRefundInitiated';
    /**
     * Constant for value 'PaisaPayTimeExtensionRequested'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay items for which the seller has requested a time extension to enter the shipping information.
     * @return string 'PaisaPayTimeExtensionRequested'
     */
    const VALUE_PAISA_PAY_TIME_EXTENSION_REQUESTED = 'PaisaPayTimeExtensionRequested';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAISA_PAY_AWAITING_SHIPMENT,
            self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED,
            self::VALUE_PAISA_PAY_PENDING_RECEIVED,
            self::VALUE_PAISA_PAY_REFUND_INITIATED,
            self::VALUE_PAISA_PAY_TIME_EXTENSION_REQUESTED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
