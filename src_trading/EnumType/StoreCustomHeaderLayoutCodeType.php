<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreCustomHeaderLayoutCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies whether the Store has a custom header.
 * @subpackage Enumerations
 */
class StoreCustomHeaderLayoutCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoHeader'
     * Meta information extracted from the WSDL
     * - documentation: Specifies that the Store does not have a custom header.
     * @return string 'NoHeader'
     */
    const VALUE_NO_HEADER = 'NoHeader';
    /**
     * Constant for value 'CustomHeaderShown'
     * Meta information extracted from the WSDL
     * - documentation: Specifies that the Store does have a custom header.
     * @return string 'CustomHeaderShown'
     */
    const VALUE_CUSTOM_HEADER_SHOWN = 'CustomHeaderShown';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_HEADER
     * @uses self::VALUE_CUSTOM_HEADER_SHOWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_HEADER,
            self::VALUE_CUSTOM_HEADER_SHOWN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
