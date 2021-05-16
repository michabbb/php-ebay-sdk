<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerBusinessCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the type of eBay seller account types that are available.
 * @subpackage Enumerations
 */
class SellerBusinessCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Undefined'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the type of seller account is undefined, or cannot be determined.
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Private'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the type of seller account is a private seller account (or non-business account).
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Commercial'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the type of seller account is a commercial (or business seller account).
     * @return string 'Commercial'
     */
    const VALUE_COMMERCIAL = 'Commercial';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_COMMERCIAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNDEFINED,
            self::VALUE_PRIVATE,
            self::VALUE_COMMERCIAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
