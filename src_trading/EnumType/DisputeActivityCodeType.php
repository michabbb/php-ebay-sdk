<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeActivityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the action taken on a dispute with <b>AddDisputeResponse</b>. The value you can use at a given time depends on the current value of <b>DisputeState</b> (see the <a
 * href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#Development/UPI-Assistant.html">Unpaid Item Assistant</a> for more information). Some values are for <i>Unpaid Item</i> disputes and some are for <i>Item Not Received</i>
 * disputes. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>AddDisputeResponse</b> call cannot be used to communicate about an 'Item Not Received' or 'Significantly Not As Described' case initiated by a buyer through the eBay Money
 * Back Guarantee program. The <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to respond to eBay Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeActivityCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SellerAddInformation'
     * Meta information extracted from the WSDL
     * - documentation: The seller wants to add a response to the dispute. For <i>Unpaid Item</i> disputes. The seller is limited to 25 responses.
     * @return string 'SellerAddInformation'
     */
    const VALUE_SELLER_ADD_INFORMATION = 'SellerAddInformation';
    /**
     * Constant for value 'SellerCompletedTransaction'
     * Meta information extracted from the WSDL
     * - documentation: The buyer has paid or the seller otherwise does not need to pursue the dispute any longer. For <i>Unpaid Item</i> disputes.
     * @return string 'SellerCompletedTransaction'
     */
    const VALUE_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';
    /**
     * Constant for value 'CameToAgreementNeedFVFCredit'
     * Meta information extracted from the WSDL
     * - documentation: The seller has made an agreement with the buyer and requires a credit for a Final Value Fee already paid. For <i>Unpaid Item</i> disputes.
     * @return string 'CameToAgreementNeedFVFCredit'
     */
    const VALUE_CAME_TO_AGREEMENT_NEED_FVFCREDIT = 'CameToAgreementNeedFVFCredit';
    /**
     * Constant for value 'SellerEndCommunication'
     * Meta information extracted from the WSDL
     * - documentation: The seller wants to end communication or stop waiting for the buyer. For <i>Unpaid Item</i> disputes.
     * @return string 'SellerEndCommunication'
     */
    const VALUE_SELLER_END_COMMUNICATION = 'SellerEndCommunication';
    /**
     * Constant for value 'MutualAgreementOrNoBuyerResponse'
     * Meta information extracted from the WSDL
     * - documentation: The seller wants to end communication or stop waiting for the buyer. Mutual agreement has been reached or the buyer has not responded within four days. For <i>Unpaid Item</i> disputes.
     * @return string 'MutualAgreementOrNoBuyerResponse'
     */
    const VALUE_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';
    /**
     * Constant for value 'SellerOffersRefund'
     * Meta information extracted from the WSDL
     * - documentation: The seller offers a full refund if the buyer did not receive the item or a partial refund if the item is significantly not as described. For <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes. <br/><br/> This
     * can be used when <b>DisputeState</b> is: <br> <code>NotReceivedNoSellerResponse</code><br> <code>NotAsDescribedNoSellerResponse</code><br> <code>NotReceivedMutualCommunication</code><br> <code>NotAsDescribedMutualCommunication</code>
     * @return string 'SellerOffersRefund'
     */
    const VALUE_SELLER_OFFERS_REFUND = 'SellerOffersRefund';
    /**
     * Constant for value 'SellerShippedItem'
     * Meta information extracted from the WSDL
     * - documentation: The seller has shipped the item or a replacement and provides shipping information. For <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes. <br/><br/> This can be used when <b>DisputeState</b> is: <br>
     * <code>NotReceivedNoSellerResponse</code><br> <code>NotReceivedMutualCommunication</code>
     * @return string 'SellerShippedItem'
     */
    const VALUE_SELLER_SHIPPED_ITEM = 'SellerShippedItem';
    /**
     * Constant for value 'SellerComment'
     * Meta information extracted from the WSDL
     * - documentation: The seller communicates with the buyer, offering a response or comment. The seller is limited to 25 responses. For <i>Item Not Received</i> and <i>Significantly Not As Described</i> disputes. <br/><br/> This can be used when
     * DisputeState is:<br> <code>NotReceivedNoSellerResponse</code><br> <code>NotAsDescribedNoSellerResponse</code><br> <code>NotReceivedMutualCommunication</code><br> <code>NotAsDescribedMutualCommunication</code>
     * @return string 'SellerComment'
     */
    const VALUE_SELLER_COMMENT = 'SellerComment';
    /**
     * Constant for value 'SellerPaymentNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: The buyer has not received an expected full or partial refund from the seller in an <i>Item Not Received</i> and <i>Significantly Not As Described</i> buyer dispute. <br/><br/> This can be used when <b>DisputeState</b> is:<br>
     * <code>NotReceivedNoSellerResponse</code> <br> <code>NotReceivedMutualCommunication</code> <br>
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
