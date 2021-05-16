<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionItemSelectionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PromotionItemSelectionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Automatic'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MANUAL,
            self::VALUE_AUTOMATIC,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
