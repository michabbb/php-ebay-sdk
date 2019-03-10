<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the top-level reasons for a buyer or seller to create a case against one another. These values are specified in the <b>DisputeReason</b> field of <b>AddDispute</b>, and are returned in the
 * <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The <b>DisputeReason</b> value will dictate what <b>DisputeExplanation</b> values that can be used/returned. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back
 * guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeReasonCodeType
{
    /**
     * Constant for value 'BuyerHasNotPaid'
     * @return string 'BuyerHasNotPaid'
     */
    const VALUE_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';
    /**
     * Constant for value 'TransactionMutuallyCanceled'
     * @return string 'TransactionMutuallyCanceled'
     */
    const VALUE_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';
    /**
     * Constant for value 'ItemNotReceived'
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'SignificantlyNotAsDescribed'
     * @return string 'SignificantlyNotAsDescribed'
     */
    const VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';
    /**
     * Constant for value 'NoRefund'
     * @return string 'NoRefund'
     */
    const VALUE_NO_REFUND = 'NoRefund';
    /**
     * Constant for value 'ReturnPolicyUnpaidItem'
     * @return string 'ReturnPolicyUnpaidItem'
     */
    const VALUE_RETURN_POLICY_UNPAID_ITEM = 'ReturnPolicyUnpaidItem';
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
     * @uses self::VALUE_BUYER_HAS_NOT_PAID
     * @uses self::VALUE_TRANSACTION_MUTUALLY_CANCELED
     * @uses self::VALUE_ITEM_NOT_RECEIVED
     * @uses self::VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED
     * @uses self::VALUE_NO_REFUND
     * @uses self::VALUE_RETURN_POLICY_UNPAID_ITEM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER_HAS_NOT_PAID,
            self::VALUE_TRANSACTION_MUTUALLY_CANCELED,
            self::VALUE_ITEM_NOT_RECEIVED,
            self::VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED,
            self::VALUE_NO_REFUND,
            self::VALUE_RETURN_POLICY_UNPAID_ITEM,
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
