<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeSortTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the values that can be used in the <b>DisputeSortType</b> filter of the <b>GetUserDisputes</b> request to control the order of disputes that are returned. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> The <strong>GetUserDisputes</strong> call of the Trading API now only supports Unpaid Item cases, and no longer supports Item not Received (INR) or Significantly not as Described (SNAD) disputes created
 * through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center, and this call also does not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money
 * Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution
 * Center. </span>
 * @subpackage Enumerations
 */
class DisputeSortTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This is the default value. If this value is used in the <b>DisputeSortType</b> field, or if the <b>DisputeSortType</b> field is omitted from the <b>GetUserDisputes</b> request, retrieved Unpaid Item cases are sorted according to
     * dispute creation time, in descending order.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DisputeCreatedTimeAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to creation time, in ascending order.
     * @return string 'DisputeCreatedTimeAscending'
     */
    const VALUE_DISPUTE_CREATED_TIME_ASCENDING = 'DisputeCreatedTimeAscending';
    /**
     * Constant for value 'DisputeCreatedTimeDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to creation time, in descending order.
     * @return string 'DisputeCreatedTimeDescending'
     */
    const VALUE_DISPUTE_CREATED_TIME_DESCENDING = 'DisputeCreatedTimeDescending';
    /**
     * Constant for value 'DisputeStatusAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to status, in ascending order.
     * @return string 'DisputeStatusAscending'
     */
    const VALUE_DISPUTE_STATUS_ASCENDING = 'DisputeStatusAscending';
    /**
     * Constant for value 'DisputeStatusDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to status, in descending order.
     * @return string 'DisputeStatusDescending'
     */
    const VALUE_DISPUTE_STATUS_DESCENDING = 'DisputeStatusDescending';
    /**
     * Constant for value 'DisputeCreditEligibilityAscending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to whether the cases are eligible for a Final Value Fee credit to the seller, in ascending order. In other words, Unpaid Item
     * cases ineligible for a FVF credit are listed before Unpaid Item cases that are eligible for a FVF credit.
     * @return string 'DisputeCreditEligibilityAscending'
     */
    const VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING = 'DisputeCreditEligibilityAscending';
    /**
     * Constant for value 'DisputeCreditEligibilityDescending'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item cases are sorted according to whether the Unpaid Item cases are eligible for a Final Value Fee credit to the seller, in descending order. In other
     * words, Unpaid Item cases eligible for a FVF credit are listed before Unpaid Item cases that are not eligible for a FVF credit.
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
