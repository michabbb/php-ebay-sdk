<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeMessageSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that defines the parties who may be the source of a message related to an <i>Unpaid Item</i> case. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now
 * only retrieve Unpaid Item cases. They are no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and
 * these calls do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management
 * calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeMessageSourceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: The buyer involved in the Unpaid Item case.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: The seller involved in the Unpaid Item case.
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
