<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeliveryMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the possible delivery methods of a digital gift card. Currently, the only supported delivery method is by email.
 * @subpackage Enumerations
 */
class DeliveryMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Email'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the link to download the digital gift card will be delivered to the recipient by email.
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMAIL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
