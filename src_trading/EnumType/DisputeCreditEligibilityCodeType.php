<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeCreditEligibilityCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether the seller is eligible for a Final Value Fee credit if the dispute is resolved by the buyer and seller, or if eBay customer support makes a decision on the dispute in the seller's favor. Note that even if the item
 * is eligible for a Final Value Fee credit, the credit is not guaranteed in any way. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeCreditEligibilityCodeType
{
    /**
     * Constant for value 'InEligible'
     * @return string 'InEligible'
     */
    const VALUE_IN_ELIGIBLE = 'InEligible';
    /**
     * Constant for value 'Eligible'
     * @return string 'Eligible'
     */
    const VALUE_ELIGIBLE = 'Eligible';
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
     * @uses self::VALUE_IN_ELIGIBLE
     * @uses self::VALUE_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_ELIGIBLE,
            self::VALUE_ELIGIBLE,
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
