<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerSatisfactionStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of possible Buyer Satisfaction ratings for a seller.
 * @subpackage Enumerations
 */
class BuyerSatisfactionStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Excellent'
     * Meta information extracted from the WSDL
     * - documentation: You are doing an excellent job as an eBay seller. Be sure to continue providing members with a positive buying experience. A buyer satisfaction rating of Excellent ensures that you are eligible for eBay incentives.
     * @return string 'Excellent'
     */
    const VALUE_EXCELLENT = 'Excellent';
    /**
     * Constant for value 'Good'
     * Meta information extracted from the WSDL
     * - documentation: You are doing a good job as an eBay seller. Buyers have been satisfied with your customer service. Be sure to continue providing members with a positive buying experience. A buyer satisfaction rating of Good ensures that you are
     * eligible for eBay incentives.
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'NeedsWork'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'NeedsWork'
     */
    const VALUE_NEEDS_WORK = 'NeedsWork';
    /**
     * Constant for value 'Poor'
     * Meta information extracted from the WSDL
     * - documentation: You are not doing a good job as an eBay seller. Some of your buyers have not been satisfied with your service. Improve your customer service to earn a higher buyer satisfaction rating. If your customer service continues to receive
     * poor responses from customers, your buyer satisfaction rating can drop and could put your eBay seller's account at risk.
     * @return string 'Poor'
     */
    const VALUE_POOR = 'Poor';
    /**
     * Constant for value 'VeryPoor'
     * Meta information extracted from the WSDL
     * - documentation: You are doing a very poor job as an eBay seller. You need to improve your selling practices immediately. Too many of your customers have not been satisfied with your customer service and you are at risk of losing your eBay account.
     * @return string 'VeryPoor'
     */
    const VALUE_VERY_POOR = 'VeryPoor';
    /**
     * Constant for value 'Unacceptable'
     * Meta information extracted from the WSDL
     * - documentation: You are doing an unacceptable job as an eBay seller. Improve your selling practices immediately. Your account may be suspended because of your unacceptable customer service.
     * @return string 'Unacceptable'
     */
    const VALUE_UNACCEPTABLE = 'Unacceptable';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EXCELLENT
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_NEEDS_WORK
     * @uses self::VALUE_POOR
     * @uses self::VALUE_VERY_POOR
     * @uses self::VALUE_UNACCEPTABLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXCELLENT,
            self::VALUE_GOOD,
            self::VALUE_NEEDS_WORK,
            self::VALUE_POOR,
            self::VALUE_VERY_POOR,
            self::VALUE_UNACCEPTABLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
