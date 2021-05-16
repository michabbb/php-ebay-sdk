<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Explanation of the reason that the refund is being
 * issued. Applicable to Half.com refunds only.
 * @subpackage Enumerations
 */
class RefundTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Full'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The seller has issued a refund for the transaction price that was
     * originally paid to the seller. (The seller's shipping reimbursement is not included if Half.com calculates the refund amount).
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'FullPlusShipping'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The seller has issued a refund for the transaction price and shipping
     * reimbursement that was originally paid to the seller. (The buyer's return shipping costs might not be included if Half.com calculates the refund amount.)
     * @return string 'FullPlusShipping'
     */
    const VALUE_FULL_PLUS_SHIPPING = 'FullPlusShipping';
    /**
     * Constant for value 'CustomOrPartial'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The seller has issued a refund amount that is different from the full
     * refund (with or without shipping). If specified, it may be helpful to explain the amount in your note to the buyer.
     * @return string 'CustomOrPartial'
     */
    const VALUE_CUSTOM_OR_PARTIAL = 'CustomOrPartial';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FULL
     * @uses self::VALUE_FULL_PLUS_SHIPPING
     * @uses self::VALUE_CUSTOM_OR_PARTIAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FULL,
            self::VALUE_FULL_PLUS_SHIPPING,
            self::VALUE_CUSTOM_OR_PARTIAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
