<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerAutoSecondChanceOfferTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: SellingManagerAutoSecondChanceOfferTypeCodeType - Specifies the type of Second Chance Offer automation rule that will be added to an item.
 * @subpackage Enumerations
 */
class SellingManagerAutoSecondChanceOfferTypeCodeType
{
    /**
     * Constant for value 'BidsGreaterThanAmount'
     * @return string 'BidsGreaterThanAmount'
     */
    const VALUE_BIDS_GREATER_THAN_AMOUNT = 'BidsGreaterThanAmount';
    /**
     * Constant for value 'BidsGreaterThanCostPlusAmount'
     * @return string 'BidsGreaterThanCostPlusAmount'
     */
    const VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT = 'BidsGreaterThanCostPlusAmount';
    /**
     * Constant for value 'BidsGreaterThanCostPlusPercentage'
     * @return string 'BidsGreaterThanCostPlusPercentage'
     */
    const VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE = 'BidsGreaterThanCostPlusPercentage';
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
     * @uses self::VALUE_BIDS_GREATER_THAN_AMOUNT
     * @uses self::VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT
     * @uses self::VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BIDS_GREATER_THAN_AMOUNT,
            self::VALUE_BIDS_GREATER_THAN_COST_PLUS_AMOUNT,
            self::VALUE_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE,
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
