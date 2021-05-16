<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerAutoSecondChanceOfferTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SellingManagerAutoSecondChanceOfferTypeCodeType - Specifies the type of Second Chance Offer automation rule that will be added to an item.
 * @subpackage Enumerations
 */
class SellingManagerAutoSecondChanceOfferTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BidsGreaterThanAmount'
     * Meta information extracted from the WSDL
     * - documentation: Sends a Second Chance Offer to all bidders who bid more than a specific amount.
     * @return string 'BidsGreaterThanAmount'
     */
    const VALUE_BIDS_GREATER_THAN_AMOUNT = 'BidsGreaterThanAmount';
    /**
     * Constant for value 'BidsGreaterThanCostPlusAmount'
     * Meta information extracted from the WSDL
     * - documentation: Sends a Second Chance Offer to all bidders who bid more than the cost plus a specific amount.
     * @return string 'BidsGreaterThanCostPlusAmount'
     */
    const VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT = 'BidsGreaterThanCostPlusAmount';
    /**
     * Constant for value 'BidsGreaterThanCostPlusPercentage'
     * Meta information extracted from the WSDL
     * - documentation: Sends a Second Chance Offer to all bidders who bid more than the cost plus a specific percentage.
     * @return string 'BidsGreaterThanCostPlusPercentage'
     */
    const VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE = 'BidsGreaterThanCostPlusPercentage';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BIDS_GREATER_THAN_AMOUNT
     * @uses self::VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT
     * @uses self::VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BIDS_GREATER_THAN_AMOUNT,
            self::VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT,
            self::VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
