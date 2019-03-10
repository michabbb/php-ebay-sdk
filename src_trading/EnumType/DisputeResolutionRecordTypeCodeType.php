<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeResolutionRecordTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the action taken by eBay as a result of the dispute resolution. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeResolutionRecordTypeCodeType
{
    /**
     * Constant for value 'StrikeBuyer'
     * @return string 'StrikeBuyer'
     */
    const VALUE_STRIKE_BUYER = 'StrikeBuyer';
    /**
     * Constant for value 'SuspendBuyer'
     * @return string 'SuspendBuyer'
     */
    const VALUE_SUSPEND_BUYER = 'SuspendBuyer';
    /**
     * Constant for value 'RestrictBuyer'
     * @return string 'RestrictBuyer'
     */
    const VALUE_RESTRICT_BUYER = 'RestrictBuyer';
    /**
     * Constant for value 'FVFCredit'
     * @return string 'FVFCredit'
     */
    const VALUE_FVFCREDIT = 'FVFCredit';
    /**
     * Constant for value 'InsertionFeeCredit'
     * @return string 'InsertionFeeCredit'
     */
    const VALUE_INSERTION_FEE_CREDIT = 'InsertionFeeCredit';
    /**
     * Constant for value 'AppealBuyerStrike'
     * @return string 'AppealBuyerStrike'
     */
    const VALUE_APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';
    /**
     * Constant for value 'UnsuspendBuyer'
     * @return string 'UnsuspendBuyer'
     */
    const VALUE_UNSUSPEND_BUYER = 'UnsuspendBuyer';
    /**
     * Constant for value 'UnrestrictBuyer'
     * @return string 'UnrestrictBuyer'
     */
    const VALUE_UNRESTRICT_BUYER = 'UnrestrictBuyer';
    /**
     * Constant for value 'ReverseFVFCredit'
     * @return string 'ReverseFVFCredit'
     */
    const VALUE_REVERSE_FVFCREDIT = 'ReverseFVFCredit';
    /**
     * Constant for value 'ReverseInsertionFeeCredit'
     * @return string 'ReverseInsertionFeeCredit'
     */
    const VALUE_REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';
    /**
     * Constant for value 'GenerateCSTicketForSuspend'
     * @return string 'GenerateCSTicketForSuspend'
     */
    const VALUE_GENERATE_CSTICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';
    /**
     * Constant for value 'FVFCreditNotGranted'
     * @return string 'FVFCreditNotGranted'
     */
    const VALUE_FVFCREDIT_NOT_GRANTED = 'FVFCreditNotGranted';
    /**
     * Constant for value 'ItemNotReceivedClaimFiled'
     * @return string 'ItemNotReceivedClaimFiled'
     */
    const VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';
    /**
     * Constant for value 'UnpaidItemRelisted'
     * @return string 'UnpaidItemRelisted'
     */
    const VALUE_UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';
    /**
     * Constant for value 'UnpaidItemRevised'
     * @return string 'UnpaidItemRevised'
     */
    const VALUE_UNPAID_ITEM_REVISED = 'UnpaidItemRevised';
    /**
     * Constant for value 'FVFOnShippingCredit'
     * @return string 'FVFOnShippingCredit'
     */
    const VALUE_FVFON_SHIPPING_CREDIT = 'FVFOnShippingCredit';
    /**
     * Constant for value 'FVFOnShippingCreditNotGranted'
     * @return string 'FVFOnShippingCreditNotGranted'
     */
    const VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';
    /**
     * Constant for value 'ReverseFVFOnShippingCredit'
     * @return string 'ReverseFVFOnShippingCredit'
     */
    const VALUE_REVERSE_FVFON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';
    /**
     * Constant for value 'FeatureFeeCredit'
     * @return string 'FeatureFeeCredit'
     */
    const VALUE_FEATURE_FEE_CREDIT = 'FeatureFeeCredit';
    /**
     * Constant for value 'FeatureFeeNotCredit'
     * @return string 'FeatureFeeNotCredit'
     */
    const VALUE_FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';
    /**
     * Constant for value 'ReverseFeatureFeeCredit'
     * @return string 'ReverseFeatureFeeCredit'
     */
    const VALUE_REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';
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
     * @uses self::VALUE_STRIKE_BUYER
     * @uses self::VALUE_SUSPEND_BUYER
     * @uses self::VALUE_RESTRICT_BUYER
     * @uses self::VALUE_FVFCREDIT
     * @uses self::VALUE_INSERTION_FEE_CREDIT
     * @uses self::VALUE_APPEAL_BUYER_STRIKE
     * @uses self::VALUE_UNSUSPEND_BUYER
     * @uses self::VALUE_UNRESTRICT_BUYER
     * @uses self::VALUE_REVERSE_FVFCREDIT
     * @uses self::VALUE_REVERSE_INSERTION_FEE_CREDIT
     * @uses self::VALUE_GENERATE_CSTICKET_FOR_SUSPEND
     * @uses self::VALUE_FVFCREDIT_NOT_GRANTED
     * @uses self::VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED
     * @uses self::VALUE_UNPAID_ITEM_RELISTED
     * @uses self::VALUE_UNPAID_ITEM_REVISED
     * @uses self::VALUE_FVFON_SHIPPING_CREDIT
     * @uses self::VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED
     * @uses self::VALUE_REVERSE_FVFON_SHIPPING_CREDIT
     * @uses self::VALUE_FEATURE_FEE_CREDIT
     * @uses self::VALUE_FEATURE_FEE_NOT_CREDIT
     * @uses self::VALUE_REVERSE_FEATURE_FEE_CREDIT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STRIKE_BUYER,
            self::VALUE_SUSPEND_BUYER,
            self::VALUE_RESTRICT_BUYER,
            self::VALUE_FVFCREDIT,
            self::VALUE_INSERTION_FEE_CREDIT,
            self::VALUE_APPEAL_BUYER_STRIKE,
            self::VALUE_UNSUSPEND_BUYER,
            self::VALUE_UNRESTRICT_BUYER,
            self::VALUE_REVERSE_FVFCREDIT,
            self::VALUE_REVERSE_INSERTION_FEE_CREDIT,
            self::VALUE_GENERATE_CSTICKET_FOR_SUSPEND,
            self::VALUE_FVFCREDIT_NOT_GRANTED,
            self::VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED,
            self::VALUE_UNPAID_ITEM_RELISTED,
            self::VALUE_UNPAID_ITEM_REVISED,
            self::VALUE_FVFON_SHIPPING_CREDIT,
            self::VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED,
            self::VALUE_REVERSE_FVFON_SHIPPING_CREDIT,
            self::VALUE_FEATURE_FEE_CREDIT,
            self::VALUE_FEATURE_FEE_NOT_CREDIT,
            self::VALUE_REVERSE_FEATURE_FEE_CREDIT,
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
