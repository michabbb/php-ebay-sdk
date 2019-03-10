<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PromotionalSaleStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Values indicate the status of a sale. Used for the Promotional Price Display feature, which enables sellers to apply discounts across many listings.
 * @subpackage Enumerations
 */
class PromotionalSaleStatusCodeType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Scheduled'
     * @return string 'Scheduled'
     */
    const VALUE_SCHEDULED = 'Scheduled';
    /**
     * Constant for value 'Processing'
     * @return string 'Processing'
     */
    const VALUE_PROCESSING = 'Processing';
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_SCHEDULED
     * @uses self::VALUE_PROCESSING
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_SCHEDULED,
            self::VALUE_PROCESSING,
            self::VALUE_INACTIVE,
            self::VALUE_DELETED,
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
