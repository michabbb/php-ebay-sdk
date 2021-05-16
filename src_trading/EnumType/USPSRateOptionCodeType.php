<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for USPSRateOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the rate types that United States Postal Service (USPS) can offer to sellers for shipping.
 * @subpackage Enumerations
 */
class USPSRateOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'USPSDiscounted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is currently receiving the USPS Discounted Rate for shipping items.
     * @return string 'USPSDiscounted'
     */
    const VALUE_USPSDISCOUNTED = 'USPSDiscounted';
    /**
     * Constant for value 'USPSRetail'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is currently receiving the USPS Retail Rate for shipping items.
     * @return string 'USPSRetail'
     */
    const VALUE_USPSRETAIL = 'USPSRetail';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_USPSDISCOUNTED
     * @uses self::VALUE_USPSRETAIL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USPSDISCOUNTED,
            self::VALUE_USPSRETAIL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
