<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MerchandizingPrefCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MerchandizingPrefCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OptIn'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'OptIn'
     */
    const VALUE_OPT_IN = 'OptIn';
    /**
     * Constant for value 'OptOut'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'OptOut'
     */
    const VALUE_OPT_OUT = 'OptOut';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPT_IN
     * @uses self::VALUE_OPT_OUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPT_IN,
            self::VALUE_OPT_OUT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
