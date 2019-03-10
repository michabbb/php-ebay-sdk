<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeSortTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how a list of returned disputes should be sorted. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeSortTypeCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DisputeCreatedTimeAscending'
     * @return string 'DisputeCreatedTimeAscending'
     */
    const VALUE_DISPUTE_CREATED_TIME_ASCENDING = 'DisputeCreatedTimeAscending';
    /**
     * Constant for value 'DisputeCreatedTimeDescending'
     * @return string 'DisputeCreatedTimeDescending'
     */
    const VALUE_DISPUTE_CREATED_TIME_DESCENDING = 'DisputeCreatedTimeDescending';
    /**
     * Constant for value 'DisputeStatusAscending'
     * @return string 'DisputeStatusAscending'
     */
    const VALUE_DISPUTE_STATUS_ASCENDING = 'DisputeStatusAscending';
    /**
     * Constant for value 'DisputeStatusDescending'
     * @return string 'DisputeStatusDescending'
     */
    const VALUE_DISPUTE_STATUS_DESCENDING = 'DisputeStatusDescending';
    /**
     * Constant for value 'DisputeCreditEligibilityAscending'
     * @return string 'DisputeCreditEligibilityAscending'
     */
    const VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING = 'DisputeCreditEligibilityAscending';
    /**
     * Constant for value 'DisputeCreditEligibilityDescending'
     * @return string 'DisputeCreditEligibilityDescending'
     */
    const VALUE_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING = 'DisputeCreditEligibilityDescending';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DISPUTE_CREATED_TIME_ASCENDING,
            self::VALUE_DISPUTE_CREATED_TIME_DESCENDING,
            self::VALUE_DISPUTE_STATUS_ASCENDING,
            self::VALUE_DISPUTE_STATUS_DESCENDING,
            self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING,
            self::VALUE_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
