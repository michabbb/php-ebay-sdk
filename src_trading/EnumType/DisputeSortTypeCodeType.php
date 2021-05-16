<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeSortTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the values that can be used in the <b>DisputeSortType</b> filter of the <b>GetUserDisputes</b> request to control the order of disputes that are returned. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeSortTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This is the default value. If this value is used in the <b>DisputeSortType</b> field, or if the <b>DisputeSortType</b> field is omitted from the <b>GetUserDisputes</b> request, retrieved disputes are sorted according to dispute
     * creation time, in descending order.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DisputeCreatedTimeAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to dispute creation time, in ascending order.
     * @return string 'DisputeCreatedTimeAscending'
     */
    const VALUE_DISPUTE_CREATED_TIME_ASCENDING = 'DisputeCreatedTimeAscending';
    /**
     * Constant for value 'DisputeCreatedTimeDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to dispute creation time, in descending order.
     * @return string 'DisputeCreatedTimeDescending'
     */
    const VALUE_DISPUTE_CREATED_TIME_DESCENDING = 'DisputeCreatedTimeDescending';
    /**
     * Constant for value 'DisputeStatusAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to dispute status, in ascending order.
     * @return string 'DisputeStatusAscending'
     */
    const VALUE_DISPUTE_STATUS_ASCENDING = 'DisputeStatusAscending';
    /**
     * Constant for value 'DisputeStatusDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to dispute status, in descending order.
     * @return string 'DisputeStatusDescending'
     */
    const VALUE_DISPUTE_STATUS_DESCENDING = 'DisputeStatusDescending';
    /**
     * Constant for value 'DisputeCreditEligibilityAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to whether the disputes are eligible for a Final Value Fee credit to the seller, in ascending order. In other words, disputes
     * ineligible for a FVF credit are listed before disputes that are eligible for a FVF credit.
     * @return string 'DisputeCreditEligibilityAscending'
     */
    const VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING = 'DisputeCreditEligibilityAscending';
    /**
     * Constant for value 'DisputeCreditEligibilityDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved disputes are sorted according to whether the disputes are eligible for a Final Value Fee credit to the seller, in descending order. In other words, disputes
     * eligible for a FVF credit are listed before disputes that are not eligible for a FVF credit.
     * @return string 'DisputeCreditEligibilityDescending'
     */
    const VALUE_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING = 'DisputeCreditEligibilityDescending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DISPUTE_CREATED_TIME_ASCENDING
     * @uses self::VALUE_DISPUTE_CREATED_TIME_DESCENDING
     * @uses self::VALUE_DISPUTE_STATUS_ASCENDING
     * @uses self::VALUE_DISPUTE_STATUS_DESCENDING
     * @uses self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING
     * @uses self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_DISPUTE_CREATED_TIME_ASCENDING,
            self::VALUE_DISPUTE_CREATED_TIME_DESCENDING,
            self::VALUE_DISPUTE_STATUS_ASCENDING,
            self::VALUE_DISPUTE_STATUS_DESCENDING,
            self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING,
            self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
