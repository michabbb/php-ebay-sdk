<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeliveryStatusEmailCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the possible delivery status values of a digital gift card. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital gift card has been sent
 * to the recipient by email.
 * @subpackage Enumerations
 */
class DeliveryStatusEmailCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Notified'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the link to download the digital gift card has been sent to the recipient by email.
     * @return string 'Notified'
     */
    const VALUE_NOTIFIED = 'Notified';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NOTIFIED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOTIFIED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
