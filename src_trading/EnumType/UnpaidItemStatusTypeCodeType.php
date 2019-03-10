<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UnpaidItemStatusTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type consists of each Unpaid Item case state.
 * @subpackage Enumerations
 */
class UnpaidItemStatusTypeCodeType
{
    /**
     * Constant for value 'FinalValueFeeDenied'
     * @return string 'FinalValueFeeDenied'
     */
    const VALUE_FINAL_VALUE_FEE_DENIED = 'FinalValueFeeDenied';
    /**
     * Constant for value 'FinalValueFeeCredited'
     * @return string 'FinalValueFeeCredited'
     */
    const VALUE_FINAL_VALUE_FEE_CREDITED = 'FinalValueFeeCredited';
    /**
     * Constant for value 'FinalValueFeeEligible'
     * @return string 'FinalValueFeeEligible'
     */
    const VALUE_FINAL_VALUE_FEE_ELIGIBLE = 'FinalValueFeeEligible';
    /**
     * Constant for value 'AwaitingSellerResponse'
     * @return string 'AwaitingSellerResponse'
     */
    const VALUE_AWAITING_SELLER_RESPONSE = 'AwaitingSellerResponse';
    /**
     * Constant for value 'AwaitingBuyerResponse'
     * @return string 'AwaitingBuyerResponse'
     */
    const VALUE_AWAITING_BUYER_RESPONSE = 'AwaitingBuyerResponse';
    /**
     * Constant for value 'UnpaidItemFiled'
     * @return string 'UnpaidItemFiled'
     */
    const VALUE_UNPAID_ITEM_FILED = 'UnpaidItemFiled';
    /**
     * Constant for value 'UnpaidItemEligible'
     * @return string 'UnpaidItemEligible'
     */
    const VALUE_UNPAID_ITEM_ELIGIBLE = 'UnpaidItemEligible';
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
     * @uses self::VALUE_FINAL_VALUE_FEE_DENIED
     * @uses self::VALUE_FINAL_VALUE_FEE_CREDITED
     * @uses self::VALUE_FINAL_VALUE_FEE_ELIGIBLE
     * @uses self::VALUE_AWAITING_SELLER_RESPONSE
     * @uses self::VALUE_AWAITING_BUYER_RESPONSE
     * @uses self::VALUE_UNPAID_ITEM_FILED
     * @uses self::VALUE_UNPAID_ITEM_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FINAL_VALUE_FEE_DENIED,
            self::VALUE_FINAL_VALUE_FEE_CREDITED,
            self::VALUE_FINAL_VALUE_FEE_ELIGIBLE,
            self::VALUE_AWAITING_SELLER_RESPONSE,
            self::VALUE_AWAITING_BUYER_RESPONSE,
            self::VALUE_UNPAID_ITEM_FILED,
            self::VALUE_UNPAID_ITEM_ELIGIBLE,
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
