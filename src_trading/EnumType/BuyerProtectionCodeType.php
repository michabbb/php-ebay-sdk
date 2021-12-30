<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerProtectionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type indicates the item's eligibility status for eBay's Money Back Guarantee program.
 * @subpackage Enumerations
 */
class BuyerProtectionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemIneligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the item is ineligible for buyer protection. In many cases, the item is ineligible for buyer protection due to the listing category.
     * @return string 'ItemIneligible'
     */
    const VALUE_ITEM_INELIGIBLE = 'ItemIneligible';
    /**
     * Constant for value 'ItemEligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the item is eligible for buyer protection.
     * @return string 'ItemEligible'
     */
    const VALUE_ITEM_ELIGIBLE = 'ItemEligible';
    /**
     * Constant for value 'ItemMarkedIneligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that customer support has marked the item as ineligible per special criteria (e.g., seller's account closed).
     * @return string 'ItemMarkedIneligible'
     */
    const VALUE_ITEM_MARKED_INELIGIBLE = 'ItemMarkedIneligible';
    /**
     * Constant for value 'ItemMarkedEligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that customer support has marked the item as eligible per special criteria.
     * @return string 'ItemMarkedEligible'
     */
    const VALUE_ITEM_MARKED_ELIGIBLE = 'ItemMarkedEligible';
    /**
     * Constant for value 'NoCoverage'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the item is ineligible for coverage under any buyer protection program.
     * @return string 'NoCoverage'
     */
    const VALUE_NO_COVERAGE = 'NoCoverage';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_INELIGIBLE
     * @uses self::VALUE_ITEM_ELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_INELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_ELIGIBLE
     * @uses self::VALUE_NO_COVERAGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITEM_INELIGIBLE,
            self::VALUE_ITEM_ELIGIBLE,
            self::VALUE_ITEM_MARKED_INELIGIBLE,
            self::VALUE_ITEM_MARKED_ELIGIBLE,
            self::VALUE_NO_COVERAGE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
