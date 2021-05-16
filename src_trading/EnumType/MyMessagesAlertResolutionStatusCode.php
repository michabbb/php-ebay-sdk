<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MyMessagesAlertResolutionStatusCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MyMessagesAlertResolutionStatusCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unresolved'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'Unresolved'
     */
    const VALUE_UNRESOLVED = 'Unresolved';
    /**
     * Constant for value 'ResolvedByAutoResolution'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'ResolvedByAutoResolution'
     */
    const VALUE_RESOLVED_BY_AUTO_RESOLUTION = 'ResolvedByAutoResolution';
    /**
     * Constant for value 'ResolvedByUser'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'ResolvedByUser'
     */
    const VALUE_RESOLVED_BY_USER = 'ResolvedByUser';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNRESOLVED
     * @uses self::VALUE_RESOLVED_BY_AUTO_RESOLUTION
     * @uses self::VALUE_RESOLVED_BY_USER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNRESOLVED,
            self::VALUE_RESOLVED_BY_AUTO_RESOLUTION,
            self::VALUE_RESOLVED_BY_USER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
