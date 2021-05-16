<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackSummaryPeriodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate the length of the time period for which Detailed Seller Ratings are evaluated under the <b>AverageRatingSummary</b> container returned in the <b>GetFeedback</b> call.
 * @subpackage Enumerations
 */
class FeedbackSummaryPeriodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ThirtyDays'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Detailed Seller Rating statistics shown under each <b>AverageRatingDetails</b> container were compiled over the last 30 days.
     * @return string 'ThirtyDays'
     */
    const VALUE_THIRTY_DAYS = 'ThirtyDays';
    /**
     * Constant for value 'FiftyTwoWeeks'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Detailed Seller Rating statistics shown under each <b>AverageRatingDetails</b> container were compiled over the last 52 weeks, or one year.
     * @return string 'FiftyTwoWeeks'
     */
    const VALUE_FIFTY_TWO_WEEKS = 'FiftyTwoWeeks';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_THIRTY_DAYS
     * @uses self::VALUE_FIFTY_TWO_WEEKS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_THIRTY_DAYS,
            self::VALUE_FIFTY_TWO_WEEKS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
