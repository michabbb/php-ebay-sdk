<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CharacteristicsSearchCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CharacteristicsSearchCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Single'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Multi'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Multi'
     */
    const VALUE_MULTI = 'Multi';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_MULTI
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SINGLE,
            self::VALUE_MULTI,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
