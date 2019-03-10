<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerAutomationPropertyTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the filters for Selling Manager automation listings.
 * @subpackage Enumerations
 */
class SellingManagerAutomationPropertyTypeCodeType
{
    /**
     * Constant for value 'ItemListFailedAutomationRules'
     * @return string 'ItemListFailedAutomationRules'
     */
    const VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES = 'ItemListFailedAutomationRules';
    /**
     * Constant for value 'ItemRelistFailedAutomationRules'
     * @return string 'ItemRelistFailedAutomationRules'
     */
    const VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES = 'ItemRelistFailedAutomationRules';
    /**
     * Constant for value 'ItemListFailedSecondChanceOfferAutoRules'
     * @return string 'ItemListFailedSecondChanceOfferAutoRules'
     */
    const VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES = 'ItemListFailedSecondChanceOfferAutoRules';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES
     * @uses self::VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES
     * @uses self::VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_LIST_FAILED_AUTOMATION_RULES,
            self::VALUE_ITEM_RELIST_FAILED_AUTOMATION_RULES,
            self::VALUE_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
