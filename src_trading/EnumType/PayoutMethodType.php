<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PayoutMethodType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PayoutMethodType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PAYPAL'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PAYPAL'
     */
    const VALUE_PAYPAL = 'PAYPAL';
    /**
     * Constant for value 'EFT'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'EFT'
     */
    const VALUE_EFT = 'EFT';
    /**
     * Constant for value 'MONEYBOOKERS'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'MONEYBOOKERS'
     */
    const VALUE_MONEYBOOKERS = 'MONEYBOOKERS';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYPAL
     * @uses self::VALUE_EFT
     * @uses self::VALUE_MONEYBOOKERS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYPAL,
            self::VALUE_EFT,
            self::VALUE_MONEYBOOKERS,
        ];
    }
}
