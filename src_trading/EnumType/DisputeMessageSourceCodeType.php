<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeMessageSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines who added a message to a dispute. Used for both <i>Unpaid Item</i> cases and <i>Item Not Received</i> disputes initiated by buyers through PayPal's platform. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not
 * Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeMessageSourceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: The buyer of the item under dispute.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: The seller of the item under dispute.
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: eBay, either an administrator or the site itself.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUYER,
            self::VALUE_SELLER,
            self::VALUE_E_BAY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
