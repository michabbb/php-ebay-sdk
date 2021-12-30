<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeActivityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the different dispute activity enum value that can be used when the seller is creating an Unpaid Item case using the <b>AddDisputeResponse</b> call. The value you can use at a given time depends on the
 * current value of <b>DisputeState</b>. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>AddDisputeResponse</b> call now only supports the seller updating or responding to an Unpaid Item case. This call is no longer used to respond to
 * an Item not Received (INR) or Significantly not as Described (SNAD) dispute created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center, and Trading API
 * dispute calls do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management
 * calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeActivityCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SellerAddInformation'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used if the seller wants to add information about the Unpaid Item case. If this enum value is used, the information that the seller wants to add to the case should be passed in as a text string into the
     * corresponding <strong>MessageText</strong> field.
     * @return string 'SellerAddInformation'
     */
    const VALUE_SELLER_ADD_INFORMATION = 'SellerAddInformation';
    /**
     * Constant for value 'SellerCompletedTransaction'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used if the buyer has paid for the item or the seller otherwise does not need to pursue the Unpaid Item case any longer.
     * @return string 'SellerCompletedTransaction'
     */
    const VALUE_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';
    /**
     * Constant for value 'CameToAgreementNeedFVFCredit'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used if the seller has made an agreement with the buyer, and is requesting that eBay reimburse him/her for the variable portion of the Final Value Fee charged for the order line item.
     * @return string 'CameToAgreementNeedFVFCredit'
     */
    const VALUE_CAME_TO_AGREEMENT_NEED_FVFCREDIT = 'CameToAgreementNeedFVFCredit';
    /**
     * Constant for value 'SellerEndCommunication'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used if the seller wants to end communication or stop waiting for the buyer to pay.
     * @return string 'SellerEndCommunication'
     */
    const VALUE_SELLER_END_COMMUNICATION = 'SellerEndCommunication';
    /**
     * Constant for value 'MutualAgreementOrNoBuyerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used if the seller and buyer have agree to mutually cancel the order, or if the buyer has not responded to the Unpaid Item case after four days.
     * @return string 'MutualAgreementOrNoBuyerResponse'
     */
    const VALUE_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';
    /**
     * Constant for value 'SellerOffersRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be used, as it only pertains to <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes initiated through PayPal, and those disputes are no longer supported by the
     * <b>AddDisputeResponse</b>.
     * @return string 'SellerOffersRefund'
     */
    const VALUE_SELLER_OFFERS_REFUND = 'SellerOffersRefund';
    /**
     * Constant for value 'SellerShippedItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be used, as it only pertains to <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes initiated through PayPal, and those disputes are no longer supported by the
     * <b>AddDisputeResponse</b>.
     * @return string 'SellerShippedItem'
     */
    const VALUE_SELLER_SHIPPED_ITEM = 'SellerShippedItem';
    /**
     * Constant for value 'SellerComment'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be used, as it only pertains to <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes initiated through PayPal, and those disputes are no longer supported by the
     * <b>AddDisputeResponse</b>.
     * @return string 'SellerComment'
     */
    const VALUE_SELLER_COMMENT = 'SellerComment';
    /**
     * Constant for value 'SellerPaymentNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be used, as it only pertains to <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes initiated through PayPal, and those disputes are no longer supported by the
     * <b>AddDisputeResponse</b>.
     * @return string 'SellerPaymentNotReceived'
     */
    const VALUE_SELLER_PAYMENT_NOT_RECEIVED = 'SellerPaymentNotReceived';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
