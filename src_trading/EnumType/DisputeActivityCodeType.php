<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeActivityCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the action taken on a dispute with <b>AddDisputeResponse</b>. The value you can use at a given time depends on the current value of <b>DisputeState</b> (see the <a
 * href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/UPI-Assistant.html">Unpaid Item Assistant</a> for more information). Some values are for <i>Unpaid Item</i> disputes and some are for <i>Item Not Received</i> disputes.
 * <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay Money Back Guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeActivityCodeType
{
    /**
     * Constant for value 'SellerAddInformation'
     * @return string 'SellerAddInformation'
     */
    const VALUE_SELLER_ADD_INFORMATION = 'SellerAddInformation';
    /**
     * Constant for value 'SellerCompletedTransaction'
     * @return string 'SellerCompletedTransaction'
     */
    const VALUE_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';
    /**
     * Constant for value 'CameToAgreementNeedFVFCredit'
     * @return string 'CameToAgreementNeedFVFCredit'
     */
    const VALUE_CAME_TO_AGREEMENT_NEED_FVFCREDIT = 'CameToAgreementNeedFVFCredit';
    /**
     * Constant for value 'SellerEndCommunication'
     * @return string 'SellerEndCommunication'
     */
    const VALUE_SELLER_END_COMMUNICATION = 'SellerEndCommunication';
    /**
     * Constant for value 'MutualAgreementOrNoBuyerResponse'
     * @return string 'MutualAgreementOrNoBuyerResponse'
     */
    const VALUE_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';
    /**
     * Constant for value 'SellerOffersRefund'
     * @return string 'SellerOffersRefund'
     */
    const VALUE_SELLER_OFFERS_REFUND = 'SellerOffersRefund';
    /**
     * Constant for value 'SellerShippedItem'
     * @return string 'SellerShippedItem'
     */
    const VALUE_SELLER_SHIPPED_ITEM = 'SellerShippedItem';
    /**
     * Constant for value 'SellerComment'
     * @return string 'SellerComment'
     */
    const VALUE_SELLER_COMMENT = 'SellerComment';
    /**
     * Constant for value 'SellerPaymentNotReceived'
     * @return string 'SellerPaymentNotReceived'
     */
    const VALUE_SELLER_PAYMENT_NOT_RECEIVED = 'SellerPaymentNotReceived';
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
     * @uses self::VALUE_SELLER_ADD_INFORMATION
     * @uses self::VALUE_SELLER_COMPLETED_TRANSACTION
     * @uses self::VALUE_CAME_TO_AGREEMENT_NEED_FVFCREDIT
     * @uses self::VALUE_SELLER_END_COMMUNICATION
     * @uses self::VALUE_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE
     * @uses self::VALUE_SELLER_OFFERS_REFUND
     * @uses self::VALUE_SELLER_SHIPPED_ITEM
     * @uses self::VALUE_SELLER_COMMENT
     * @uses self::VALUE_SELLER_PAYMENT_NOT_RECEIVED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SELLER_ADD_INFORMATION,
            self::VALUE_SELLER_COMPLETED_TRANSACTION,
            self::VALUE_CAME_TO_AGREEMENT_NEED_FVFCREDIT,
            self::VALUE_SELLER_END_COMMUNICATION,
            self::VALUE_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE,
            self::VALUE_SELLER_OFFERS_REFUND,
            self::VALUE_SELLER_SHIPPED_ITEM,
            self::VALUE_SELLER_COMMENT,
            self::VALUE_SELLER_PAYMENT_NOT_RECEIVED,
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
