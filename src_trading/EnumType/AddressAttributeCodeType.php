<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressAttributeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be returned in the <b>type</b> attribute of the <b>AddressAttribute</b> field. Currently, this type only contains one enumeration value, but in the future, other address
 * attributes may be created for this type.
 * @subpackage Enumerations
 */
class AddressAttributeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReferenceNumber'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the value returned in the <b>AddressAttribute</b> field is the reference ID for a "Click and Collect" order.
     * @return string 'ReferenceNumber'
     */
    const VALUE_REFERENCE_NUMBER = 'ReferenceNumber';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REFERENCE_NUMBER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REFERENCE_NUMBER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
