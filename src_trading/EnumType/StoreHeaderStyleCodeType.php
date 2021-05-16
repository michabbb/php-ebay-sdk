<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreHeaderStyleCodeType EnumType
 * @subpackage Enumerations
 */
class StoreHeaderStyleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Full'
     * Meta information extracted from the WSDL
     * - documentation: The full Store header is used.
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'Minimized'
     * Meta information extracted from the WSDL
     * - documentation: A minimized Store header is used.
     * @return string 'Minimized'
     */
    const VALUE_MINIMIZED = 'Minimized';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FULL
     * @uses self::VALUE_MINIMIZED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FULL,
            self::VALUE_MINIMIZED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
