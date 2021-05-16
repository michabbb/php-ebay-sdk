<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackRatingDetailCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. The FeedbackRatingDetailCodeType is the list of areas for detailed seller ratings. When buyers leave an overall Feedback rating (positive, neutral, or negative)
 * for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Enumerations
 */
class FeedbackRatingDetailCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemAsDescribed'
     * Meta information extracted from the WSDL
     * - documentation: Detailed seller rating in the area of "item as described."
     * @return string 'ItemAsDescribed'
     */
    const VALUE_ITEM_AS_DESCRIBED = 'ItemAsDescribed';
    /**
     * Constant for value 'Communication'
     * Meta information extracted from the WSDL
     * - documentation: Detailed seller rating in the area of "communication."
     * @return string 'Communication'
     */
    const VALUE_COMMUNICATION = 'Communication';
    /**
     * Constant for value 'ShippingTime'
     * Meta information extracted from the WSDL
     * - documentation: Detailed seller rating in the area of "shipping time." Inapplicable to motor vehicle items.
     * @return string 'ShippingTime'
     */
    const VALUE_SHIPPING_TIME = 'ShippingTime';
    /**
     * Constant for value 'ShippingAndHandlingCharges'
     * Meta information extracted from the WSDL
     * - documentation: Detailed seller rating in the area of "charges for shipping and handling." Inapplicable to motor vehicle items.
     * @return string 'ShippingAndHandlingCharges'
     */
    const VALUE_SHIPPING_AND_HANDLING_CHARGES = 'ShippingAndHandlingCharges';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_AS_DESCRIBED
     * @uses self::VALUE_COMMUNICATION
     * @uses self::VALUE_SHIPPING_TIME
     * @uses self::VALUE_SHIPPING_AND_HANDLING_CHARGES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITEM_AS_DESCRIBED,
            self::VALUE_COMMUNICATION,
            self::VALUE_SHIPPING_TIME,
            self::VALUE_SHIPPING_AND_HANDLING_CHARGES,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
