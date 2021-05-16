<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerAutomationPropertyTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the filters for Selling Manager automation listings.
 * @subpackage Enumerations
 */
class SellingManagerAutomationPropertyTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemListFailedAutomationRules'
     * Meta information extracted from the WSDL
     * - documentation: Item failed to be listed using automation rules.
     * @return string 'ItemListFailedAutomationRules'
     */
    const VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES = 'ItemListFailedAutomationRules';
    /**
     * Constant for value 'ItemRelistFailedAutomationRules'
     * Meta information extracted from the WSDL
     * - documentation: Relist item automation rule failed.
     * @return string 'ItemRelistFailedAutomationRules'
     */
    const VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES = 'ItemRelistFailedAutomationRules';
    /**
     * Constant for value 'ItemListFailedSecondChanceOfferAutoRules'
     * Meta information extracted from the WSDL
     * - documentation: Item failed to be listed with Second Chance offer automation rule.
     * @return string 'ItemListFailedSecondChanceOfferAutoRules'
     */
    const VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES = 'ItemListFailedSecondChanceOfferAutoRules';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES
     * @uses self::VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES
     * @uses self::VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES,
            self::VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES,
            self::VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
