<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TaxIdentifierAttributeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be returned in the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field. Currently, this type only contains one enumeration value, but in the future, other
 * attributes related to the tax ID may be created for this type.
 * @subpackage Enumerations
 */
class TaxIdentifierAttributeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IssuingCountry'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the value returned in the <b>BuyerTaxIdentifier.Attribute</b> field is the country that issued the buyer tax ID.
     * @return string 'IssuingCountry'
     */
    const VALUE_ISSUING_COUNTRY = 'IssuingCountry';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ISSUING_COUNTRY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISSUING_COUNTRY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
