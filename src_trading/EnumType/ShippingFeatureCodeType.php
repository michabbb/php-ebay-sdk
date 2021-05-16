<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingFeatureCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Miscellaneous details of the shipment.
 * @subpackage Enumerations
 */
class ShippingFeatureCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DeliveryConfirmation'
     * Meta information extracted from the WSDL
     * - documentation: Confirmation requested.
     * @return string 'DeliveryConfirmation'
     */
    const VALUE_DELIVERY_CONFIRMATION = 'DeliveryConfirmation';
    /**
     * Constant for value 'SignatureConfirmation'
     * Meta information extracted from the WSDL
     * - documentation: Signature requested upon receipt.
     * @return string 'SignatureConfirmation'
     */
    const VALUE_SIGNATURE_CONFIRMATION = 'SignatureConfirmation';
    /**
     * Constant for value 'StealthPostage'
     * Meta information extracted from the WSDL
     * - documentation: Stealth postage.
     * @return string 'StealthPostage'
     */
    const VALUE_STEALTH_POSTAGE = 'StealthPostage';
    /**
     * Constant for value 'SaturdayDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Saturday delivery.
     * @return string 'SaturdayDelivery'
     */
    const VALUE_SATURDAY_DELIVERY = 'SaturdayDelivery';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Other.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'NotDefined'
     * Meta information extracted from the WSDL
     * - documentation: Not defined.
     * @return string 'NotDefined'
     */
    const VALUE_NOT_DEFINED = 'NotDefined';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DELIVERY_CONFIRMATION
     * @uses self::VALUE_SIGNATURE_CONFIRMATION
     * @uses self::VALUE_STEALTH_POSTAGE
     * @uses self::VALUE_SATURDAY_DELIVERY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_NOT_DEFINED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DELIVERY_CONFIRMATION,
            self::VALUE_SIGNATURE_CONFIRMATION,
            self::VALUE_STEALTH_POSTAGE,
            self::VALUE_SATURDAY_DELIVERY,
            self::VALUE_OTHER,
            self::VALUE_NOT_DEFINED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
