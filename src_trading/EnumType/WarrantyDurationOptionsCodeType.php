<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarrantyDurationOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyDurationOptionsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Months_1'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be one month from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the seller
     * may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Months_1'
     */
    const VALUE_MONTHS_1 = 'Months_1';
    /**
     * Constant for value 'Months_3'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be three months from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the
     * seller may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Months_3'
     */
    const VALUE_MONTHS_3 = 'Months_3';
    /**
     * Constant for value 'Months_6'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be six months from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the seller
     * may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Months_6'
     */
    const VALUE_MONTHS_6 = 'Months_6';
    /**
     * Constant for value 'Years_1'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be one year from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the seller
     * may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Years_1'
     */
    const VALUE_YEARS_1 = 'Years_1';
    /**
     * Constant for value 'Years_2'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be two years from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the seller
     * may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Years_2'
     */
    const VALUE_YEARS_2 = 'Years_2';
    /**
     * Constant for value 'Years_3'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty will be three years from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response, the
     * seller may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Years_3'
     */
    const VALUE_YEARS_3 = 'Years_3';
    /**
     * Constant for value 'Years_MoreThan3'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the duration of the warranty is longer than three years from time of purchase. If this value is returned in the <b>ReturnPolicyDetails.WarrantyDuration</b> container of the <b>GeteBayDetails</b> response,
     * the seller may offer this warranty duration to the buyer. The warranty duration value is specified through the <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API call.
     * @return string 'Years_MoreThan3'
     */
    const VALUE_YEARS_MORE_THAN_3 = 'Years_MoreThan3';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_MONTHS_1
     * @uses self::VALUE_MONTHS_3
     * @uses self::VALUE_MONTHS_6
     * @uses self::VALUE_YEARS_1
     * @uses self::VALUE_YEARS_2
     * @uses self::VALUE_YEARS_3
     * @uses self::VALUE_YEARS_MORE_THAN_3
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MONTHS_1,
            self::VALUE_MONTHS_3,
            self::VALUE_MONTHS_6,
            self::VALUE_YEARS_1,
            self::VALUE_YEARS_2,
            self::VALUE_YEARS_3,
            self::VALUE_YEARS_MORE_THAN_3,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
