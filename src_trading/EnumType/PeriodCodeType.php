<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PeriodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the time periods used when evaluating the number of unpaid item strikes that a buyer has against their account. A seller can set up listing-level Buyer Requirements in an Add/Revise/Relist call that will block a buyer
 * if that buyer has a specified number of unpaid item strikes against their account during a specified time period.
 * @subpackage Enumerations
 */
class PeriodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_1'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the evaluation period is set back 30 days from the present date.
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_180'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the evaluation period is set back 180 days (approximately 6 months) from the present date.
     * @return string 'Days_180'
     */
    const VALUE_DAYS_180 = 'Days_180';
    /**
     * Constant for value 'Days_360'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the evaluation period is set back 360 days (approximately 12 months) from the present date.
     * @return string 'Days_360'
     */
    const VALUE_DAYS_360 = 'Days_360';
    /**
     * Constant for value 'Days_540'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'Days_540'
     */
    const VALUE_DAYS_540 = 'Days_540';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_180
     * @uses self::VALUE_DAYS_360
     * @uses self::VALUE_DAYS_540
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_180,
            self::VALUE_DAYS_360,
            self::VALUE_DAYS_540,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
