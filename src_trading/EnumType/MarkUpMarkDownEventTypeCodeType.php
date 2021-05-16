<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MarkUpMarkDownEventTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Valid application status codes, either MarkUp (application was marked up, communication is restored) or MarkDown (application was marked down, no communication).
 * @subpackage Enumerations
 */
class MarkUpMarkDownEventTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MarkUp'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the application was or is marked up.
     * @return string 'MarkUp'
     */
    const VALUE_MARK_UP = 'MarkUp';
    /**
     * Constant for value 'MarkDown'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the application was marked down.
     * @return string 'MarkDown'
     */
    const VALUE_MARK_DOWN = 'MarkDown';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future internal or external use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_MARK_UP
     * @uses self::VALUE_MARK_DOWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MARK_UP,
            self::VALUE_MARK_DOWN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
