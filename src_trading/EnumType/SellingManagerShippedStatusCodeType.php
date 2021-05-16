<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerShippedStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Contains values for shipped status.
 * @subpackage Enumerations
 */
class SellingManagerShippedStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Shipped'
     * Meta information extracted from the WSDL
     * - documentation: The shipped status is "shipped."
     * @return string 'Shipped'
     */
    const VALUE_SHIPPED = 'Shipped';
    /**
     * Constant for value 'Unshipped'
     * Meta information extracted from the WSDL
     * - documentation: The shipped status is "unshipped."
     * @return string 'Unshipped'
     */
    const VALUE_UNSHIPPED = 'Unshipped';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SHIPPED
     * @uses self::VALUE_UNSHIPPED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHIPPED,
            self::VALUE_UNSHIPPED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
