<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerProductSortCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Sorting specifications for retrieved Selling Manager Inventory products.
 * @subpackage Enumerations
 */
class SellingManagerProductSortCodeType
{
    /**
     * Constant for value 'ActiveQuantity'
     * @return string 'ActiveQuantity'
     */
    const VALUE_ACTIVE_QUANTITY = 'ActiveQuantity';
    /**
     * Constant for value 'AvailableToList'
     * @return string 'AvailableToList'
     */
    const VALUE_AVAILABLE_TO_LIST = 'AvailableToList';
    /**
     * Constant for value 'AveragePrice'
     * @return string 'AveragePrice'
     */
    const VALUE_AVERAGE_PRICE = 'AveragePrice';
    /**
     * Constant for value 'AverageUnitCost'
     * @return string 'AverageUnitCost'
     */
    const VALUE_AVERAGE_UNIT_COST = 'AverageUnitCost';
    /**
     * Constant for value 'CustomLabel'
     * @return string 'CustomLabel'
     */
    const VALUE_CUSTOM_LABEL = 'CustomLabel';
    /**
     * Constant for value 'ProductName'
     * @return string 'ProductName'
     */
    const VALUE_PRODUCT_NAME = 'ProductName';
    /**
     * Constant for value 'LastSubmittedDate'
     * @return string 'LastSubmittedDate'
     */
    const VALUE_LAST_SUBMITTED_DATE = 'LastSubmittedDate';
    /**
     * Constant for value 'ScheduledQuantity'
     * @return string 'ScheduledQuantity'
     */
    const VALUE_SCHEDULED_QUANTITY = 'ScheduledQuantity';
    /**
     * Constant for value 'SoldQuantity'
     * @return string 'SoldQuantity'
     */
    const VALUE_SOLD_QUANTITY = 'SoldQuantity';
    /**
     * Constant for value 'SuccessPercent'
     * @return string 'SuccessPercent'
     */
    const VALUE_SUCCESS_PERCENT = 'SuccessPercent';
    /**
     * Constant for value 'UnsoldQuantity'
     * @return string 'UnsoldQuantity'
     */
    const VALUE_UNSOLD_QUANTITY = 'UnsoldQuantity';
    /**
     * Constant for value 'FolderName'
     * @return string 'FolderName'
     */
    const VALUE_FOLDER_NAME = 'FolderName';
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
     * @uses self::VALUE_ACTIVE_QUANTITY
     * @uses self::VALUE_AVAILABLE_TO_LIST
     * @uses self::VALUE_AVERAGE_PRICE
     * @uses self::VALUE_AVERAGE_UNIT_COST
     * @uses self::VALUE_CUSTOM_LABEL
     * @uses self::VALUE_PRODUCT_NAME
     * @uses self::VALUE_LAST_SUBMITTED_DATE
     * @uses self::VALUE_SCHEDULED_QUANTITY
     * @uses self::VALUE_SOLD_QUANTITY
     * @uses self::VALUE_SUCCESS_PERCENT
     * @uses self::VALUE_UNSOLD_QUANTITY
     * @uses self::VALUE_FOLDER_NAME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE_QUANTITY,
            self::VALUE_AVAILABLE_TO_LIST,
            self::VALUE_AVERAGE_PRICE,
            self::VALUE_AVERAGE_UNIT_COST,
            self::VALUE_CUSTOM_LABEL,
            self::VALUE_PRODUCT_NAME,
            self::VALUE_LAST_SUBMITTED_DATE,
            self::VALUE_SCHEDULED_QUANTITY,
            self::VALUE_SOLD_QUANTITY,
            self::VALUE_SUCCESS_PERCENT,
            self::VALUE_UNSOLD_QUANTITY,
            self::VALUE_FOLDER_NAME,
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
