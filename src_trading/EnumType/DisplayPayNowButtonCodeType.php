<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisplayPayNowButtonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to control how the "Buy It Now" button is displayed on a listing. <br><br> <span class="tablenote"><b>Note:</b> Although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b>
 * and is returned in <b>GetUserPreferences</b>, this setting will not have any affect on any current or future listings. </span> <br>
 * @subpackage Enumerations
 */
class DisplayPayNowButtonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ShowPayNowButtonForAllPaymentMethods'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value was formerly used to display the "Pay Now" button regardless of the buyer's payment method.
     * @return string 'ShowPayNowButtonForAllPaymentMethods'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS = 'ShowPayNowButtonForAllPaymentMethods';
    /**
     * Constant for value 'ShowPayNowButtonForPayPalOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value was formerly used to display the "Pay Now" button only if the buyer was using PayPal as a payment method.
     * @return string 'ShowPayNowButtonForPayPalOnly'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY = 'ShowPayNowButtonForPayPalOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS,
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
