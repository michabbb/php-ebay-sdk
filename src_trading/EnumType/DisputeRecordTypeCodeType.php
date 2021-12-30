<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeRecordTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the different types of order disputes/cases that can occur between buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only
 * retrieve Unpaid Item cases. They are no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and
 * these calls do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management
 * calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
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
     * - documentation: This enumeration value is no longer applicable since the <b>GetDispute</b> and <b>GetUserDisputes</b> calls will not return any INR disputes.
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
