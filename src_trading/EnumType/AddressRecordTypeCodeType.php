<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressRecordTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class AddressRecordTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Residential'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Residential'
     */
    const VALUE_RESIDENTIAL = 'Residential';
    /**
     * Constant for value 'Business'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RESIDENTIAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RESIDENTIAL,
            self::VALUE_BUSINESS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
