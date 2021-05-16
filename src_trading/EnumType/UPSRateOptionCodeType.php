<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UPSRateOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the rate types that United Parcel Service (UPS) can offer to sellers for shipping.
 * @subpackage Enumerations
 */
class UPSRateOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UPSDailyRates'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is currently receiving the UPS Daily Rate for shipping items.
     * @return string 'UPSDailyRates'
     */
    const VALUE_UPSDAILY_RATES = 'UPSDailyRates';
    /**
     * Constant for value 'UPSOnDemandRates'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is currently receiving the UPS On-Demand Rate for shipping items.
     * @return string 'UPSOnDemandRates'
     */
    const VALUE_UPSON_DEMAND_RATES = 'UPSOnDemandRates';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UPSDAILY_RATES
     * @uses self::VALUE_UPSON_DEMAND_RATES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPSDAILY_RATES,
            self::VALUE_UPSON_DEMAND_RATES,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
