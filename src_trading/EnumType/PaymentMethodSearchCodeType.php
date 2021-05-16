<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentMethodSearchCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> This enumerated type is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported. </span>
 * @subpackage Enumerations
 */
class PaymentMethodSearchCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the item may be purchased using PayPal as the payment method.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'PaisaPay'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is no longer a supported payment method, so this value is no longer applicable.
     * @return string 'PaisaPay'
     */
    const VALUE_PAISA_PAY = 'PaisaPay';
    /**
     * Constant for value 'PayPalOrPaisaPay'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is no longer a supported payment method, so this value is no longer applicable.
     * @return string 'PayPalOrPaisaPay'
     */
    const VALUE_PAY_PAL_OR_PAISA_PAY = 'PayPalOrPaisaPay';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'PaisaPayEscrowEMI'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is no longer a supported payment method, so this value is no longer applicable.
     * @return string 'PaisaPayEscrowEMI'
     */
    const VALUE_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';
    /**
     * Return allowed values
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_PAISA_PAY
     * @uses self::VALUE_PAY_PAL_OR_PAISA_PAY
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_PAISA_PAY_ESCROW_EMI
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAY_PAL,
            self::VALUE_PAISA_PAY,
            self::VALUE_PAY_PAL_OR_PAISA_PAY,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_PAISA_PAY_ESCROW_EMI,
        ];
    }
}
