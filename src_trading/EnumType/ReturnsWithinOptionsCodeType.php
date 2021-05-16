<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReturnsWithinOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller in an Add/Revise/Relist call to set the number of days (after the purchase date) that a buyer has to return an item (if the return policy states that
 * items can be returned) for a refund or an exchange. These same values are also returned in the <b>GeteBayDetails</b> call. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For
 * most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include
 * <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively. </span>
 * @subpackage Enumerations
 */
class ReturnsWithinOptionsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated. Listings created or revised with this value will be blocked.
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated. Listings created or revised with this value will be blocked.
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_10'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated. Listings created or revised with this value will be blocked.
     * @return string 'Days_10'
     */
    const VALUE_DAYS_10 = 'Days_10';
    /**
     * Constant for value 'Days_14'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to enable a 14-day return policy. A buyer must return an item within 14 days after purchase in order to receive a refund or an exchange/replacement item.
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to enable a 30-day return policy. A buyer must return an item within 30 days after purchase in order to receive a refund or an exchange/replacement item. <br/><br/> <span class="tablenote"><b>Note:
     * </b> To qualify as a Top-Rated Plus listing, a 30-day (or longer) return period must be set. </span>
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_60'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to enable a 60-day return policy. A buyer must return an item within 60 days after purchase in order to receive a refund or an exchange/replacement item.
     * @return string 'Days_60'
     */
    const VALUE_DAYS_60 = 'Days_60';
    /**
     * Constant for value 'Months_1'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to enable a one-month return policy. A buyer must return an item within one month after purchase in order to receive a refund or an exchange. <br/> <span class="tablenote"><b>Note: </b> This value,
     * historically only supported on the DE and AT sites, is scheduled to be deprecated, and DE and AT sellers may be blocked if they do use this value. Use <code>Days_30</code> instead. </span>
     * @return string 'Months_1'
     */
    const VALUE_MONTHS_1 = 'Months_1';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @uses self::VALUE_MONTHS_1
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
            self::VALUE_MONTHS_1,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
