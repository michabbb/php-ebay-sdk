<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerBusinessCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of seller account. This value is returned if the user is a business seller with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 0 (US Motors).
 * @subpackage Enumerations
 */
class SellerBusinessCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Undefined'
     * Meta information extracted from the WSDL
     * - documentation: Type of seller account not defined.
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Private'
     * Meta information extracted from the WSDL
     * - documentation: Private seller account.
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Commercial'
     * Meta information extracted from the WSDL
     * - documentation: Commercial seller account.
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
