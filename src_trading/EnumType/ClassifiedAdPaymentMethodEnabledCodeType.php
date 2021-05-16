<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClassifiedAdPaymentMethodEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Used to indicate whether the payment method will be displayed for a category belonging to the Lead Generation Format.
 * @subpackage Enumerations
 */
class ClassifiedAdPaymentMethodEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EnabledWithCheckout'
     * Meta information extracted from the WSDL
     * - documentation: Display the payment method and permit checkout.
     * @return string 'EnabledWithCheckout'
     */
    const VALUE_ENABLED_WITH_CHECKOUT = 'EnabledWithCheckout';
    /**
     * Constant for value 'EnabledWithoutCheckout'
     * Meta information extracted from the WSDL
     * - documentation: Display the payment method and suppress checkout.
     * @return string 'EnabledWithoutCheckout'
     */
    const VALUE_ENABLED_WITHOUT_CHECKOUT = 'EnabledWithoutCheckout';
    /**
     * Constant for value 'NotSupported'
     * Meta information extracted from the WSDL
     * - documentation: Do not display the payment method.
     * @return string 'NotSupported'
     */
    const VALUE_NOT_SUPPORTED = 'NotSupported';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ENABLED_WITH_CHECKOUT
     * @uses self::VALUE_ENABLED_WITHOUT_CHECKOUT
     * @uses self::VALUE_NOT_SUPPORTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENABLED_WITH_CHECKOUT,
            self::VALUE_ENABLED_WITHOUT_CHECKOUT,
            self::VALUE_NOT_SUPPORTED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
