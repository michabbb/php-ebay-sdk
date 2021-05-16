<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchStandingStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The Search standing that you have earned.
 * @subpackage Enumerations
 */
class SearchStandingStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Raised'
     * Meta information extracted from the WSDL
     * - documentation: Your listings may receive higher placement in search results that are sorted by Best Match. You earn this standing when you provide excellent customer service to eBay buyers (such as good BuyerSatisfaction.Status and high detailed
     * seller ratings). If you already have a raised search standing, you can still boost your ratings and increase the visibility of your items by maintaining or improving your customer service.
     * @return string 'Raised'
     */
    const VALUE_RAISED = 'Raised';
    /**
     * Constant for value 'Standard'
     * Meta information extracted from the WSDL
     * - documentation: Listings recieve standard placement in search results that are sorted by Best Match.
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Lowered'
     * Meta information extracted from the WSDL
     * - documentation: Your listings may receive lower placement in search results that are sorted by Best Match. You earn this standing when you have not been successful in providing eBay buyers with the customer service they expect. You can still take
     * positive steps to improve your customer service and increase your ratings.
     * @return string 'Lowered'
     */
    const VALUE_LOWERED = 'Lowered';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RAISED
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_LOWERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RAISED,
            self::VALUE_STANDARD,
            self::VALUE_LOWERED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
