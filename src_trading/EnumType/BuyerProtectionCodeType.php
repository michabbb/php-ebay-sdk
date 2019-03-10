<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BuyerProtectionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type indicates the item's eligibility status for PayPal's buyer protection program or eBay's Money Back Guarantee program.
 * @subpackage Enumerations
 */
class BuyerProtectionCodeType
{
    /**
     * Constant for value 'ItemIneligible'
     * @return string 'ItemIneligible'
     */
    const VALUE_ITEM_INELIGIBLE = 'ItemIneligible';
    /**
     * Constant for value 'ItemEligible'
     * @return string 'ItemEligible'
     */
    const VALUE_ITEM_ELIGIBLE = 'ItemEligible';
    /**
     * Constant for value 'ItemMarkedIneligible'
     * @return string 'ItemMarkedIneligible'
     */
    const VALUE_ITEM_MARKED_INELIGIBLE = 'ItemMarkedIneligible';
    /**
     * Constant for value 'ItemMarkedEligible'
     * @return string 'ItemMarkedEligible'
     */
    const VALUE_ITEM_MARKED_ELIGIBLE = 'ItemMarkedEligible';
    /**
     * Constant for value 'NoCoverage'
     * @return string 'NoCoverage'
     */
    const VALUE_NO_COVERAGE = 'NoCoverage';
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
     * @uses self::VALUE_ITEM_INELIGIBLE
     * @uses self::VALUE_ITEM_ELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_INELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_ELIGIBLE
     * @uses self::VALUE_NO_COVERAGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_INELIGIBLE,
            self::VALUE_ITEM_ELIGIBLE,
            self::VALUE_ITEM_MARKED_INELIGIBLE,
            self::VALUE_ITEM_MARKED_ELIGIBLE,
            self::VALUE_NO_COVERAGE,
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
