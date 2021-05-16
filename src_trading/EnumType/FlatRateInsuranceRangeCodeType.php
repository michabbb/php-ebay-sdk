<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FlatRateInsuranceRangeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class FlatRateInsuranceRangeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FlatRateInsuranceRange1'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange1'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_1 = 'FlatRateInsuranceRange1';
    /**
     * Constant for value 'FlatRateInsuranceRange2'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange2'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_2 = 'FlatRateInsuranceRange2';
    /**
     * Constant for value 'FlatRateInsuranceRange3'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange3'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_3 = 'FlatRateInsuranceRange3';
    /**
     * Constant for value 'FlatRateInsuranceRange4'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange4'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_4 = 'FlatRateInsuranceRange4';
    /**
     * Constant for value 'FlatRateInsuranceRange5'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange5'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_5 = 'FlatRateInsuranceRange5';
    /**
     * Constant for value 'FlatRateInsuranceRange6'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'FlatRateInsuranceRange6'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_6 = 'FlatRateInsuranceRange6';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_1
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_2
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_3
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_4
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_5
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_6
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_1,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_2,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_3,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_4,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_5,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_6,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
