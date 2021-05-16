<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnpaidItemStatusTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type consists of each Unpaid Item case state.
 * @subpackage Enumerations
 */
class UnpaidItemStatusTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FinalValueFeeDenied'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's request for a Final Value Fee credit has been denied.
     * @return string 'FinalValueFeeDenied'
     */
    const VALUE_FINAL_VALUE_FEE_DENIED = 'FinalValueFeeDenied';
    /**
     * Constant for value 'FinalValueFeeCredited'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Final Value Fee has been credited back to the seller's account.
     * @return string 'FinalValueFeeCredited'
     */
    const VALUE_FINAL_VALUE_FEE_CREDITED = 'FinalValueFeeCredited';
    /**
     * Constant for value 'FinalValueFeeEligible'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is eligible to received a Final Value Fee credit back to the their account.
     * @return string 'FinalValueFeeEligible'
     */
    const VALUE_FINAL_VALUE_FEE_ELIGIBLE = 'FinalValueFeeEligible';
    /**
     * Constant for value 'AwaitingSellerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item case is currently waiting for a response from the seller.
     * @return string 'AwaitingSellerResponse'
     */
    const VALUE_AWAITING_SELLER_RESPONSE = 'AwaitingSellerResponse';
    /**
     * Constant for value 'AwaitingBuyerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item case is currently waiting for a response from the buyer.
     * @return string 'AwaitingBuyerResponse'
     */
    const VALUE_AWAITING_BUYER_RESPONSE = 'AwaitingBuyerResponse';
    /**
     * Constant for value 'UnpaidItemFiled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item case has been opened by the seller against the buyer.
     * @return string 'UnpaidItemFiled'
     */
    const VALUE_UNPAID_ITEM_FILED = 'UnpaidItemFiled';
    /**
     * Constant for value 'UnpaidItemEligible'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is eligible to create an Unpaid Item case against the buyer.
     * @return string 'UnpaidItemEligible'
     */
    const VALUE_UNPAID_ITEM_ELIGIBLE = 'UnpaidItemEligible';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FINAL_VALUE_FEE_DENIED
     * @uses self::VALUE_FINAL_VALUE_FEE_CREDITED
     * @uses self::VALUE_FINAL_VALUE_FEE_ELIGIBLE
     * @uses self::VALUE_AWAITING_SELLER_RESPONSE
     * @uses self::VALUE_AWAITING_BUYER_RESPONSE
     * @uses self::VALUE_UNPAID_ITEM_FILED
     * @uses self::VALUE_UNPAID_ITEM_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FINAL_VALUE_FEE_DENIED,
            self::VALUE_FINAL_VALUE_FEE_CREDITED,
            self::VALUE_FINAL_VALUE_FEE_ELIGIBLE,
            self::VALUE_AWAITING_SELLER_RESPONSE,
            self::VALUE_AWAITING_BUYER_RESPONSE,
            self::VALUE_UNPAID_ITEM_FILED,
            self::VALUE_UNPAID_ITEM_ELIGIBLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
