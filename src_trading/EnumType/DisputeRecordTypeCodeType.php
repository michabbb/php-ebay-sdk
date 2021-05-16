<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeRecordTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the different types of order disputes that can occur between buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases,
 * initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeRecordTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UnpaidItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is an Unpaid Item case created by the seller against the buyer. A seller should always try to resolve an Unpaid Item issue with the buyer before opening up a case with eBay.
     * Sometimes, just sending payment reminders to the buyer or messaging the buyer through the Messaging platform can be helpful. The <a href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items-buyers?id=4137">Resolving unpaid items
     * with buyers</a> help topic provides more details and tips on trying to work Unpaid Item issues out with the buyer.
     * @return string 'UnpaidItem'
     */
    const VALUE_UNPAID_ITEM = 'UnpaidItem';
    /**
     * Constant for value 'ItemNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is an Item Not Received case created by the buyer against the seller through PayPal's platform. <br/><br/> <span class="tablenote"><strong>Note:</strong> As noted above, the
     * <b>GetDispute</b> or <b>GetUserDisputes</b> calls will not return any eBay Money Back Guarantee cases. </span>
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'HalfDispute'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Half.com marketplace is shut down.
     * @return string 'HalfDispute'
     */
    const VALUE_HALF_DISPUTE = 'HalfDispute';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNPAID_ITEM
     * @uses self::VALUE_ITEM_NOT_RECEIVED
     * @uses self::VALUE_HALF_DISPUTE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNPAID_ITEM,
            self::VALUE_ITEM_NOT_RECEIVED,
            self::VALUE_HALF_DISPUTE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
