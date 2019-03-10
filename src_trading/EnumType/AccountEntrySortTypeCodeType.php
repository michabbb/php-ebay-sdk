<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AccountEntrySortTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type defining the possible values that can be used in the <b>AccountEntrySortType</b> field of the <b>GetAccount</b> request to sort account entries returned in the response.
 * @subpackage Enumerations
 */
class AccountEntrySortTypeCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AccountEntryCreatedTimeAscending'
     * @return string 'AccountEntryCreatedTimeAscending'
     */
    const VALUE_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING = 'AccountEntryCreatedTimeAscending';
    /**
     * Constant for value 'AccountEntryCreatedTimeDescending'
     * @return string 'AccountEntryCreatedTimeDescending'
     */
    const VALUE_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING = 'AccountEntryCreatedTimeDescending';
    /**
     * Constant for value 'AccountEntryItemNumberAscending'
     * @return string 'AccountEntryItemNumberAscending'
     */
    const VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING = 'AccountEntryItemNumberAscending';
    /**
     * Constant for value 'AccountEntryItemNumberDescending'
     * @return string 'AccountEntryItemNumberDescending'
     */
    const VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING = 'AccountEntryItemNumberDescending';
    /**
     * Constant for value 'AccountEntryFeeTypeAscending'
     * @return string 'AccountEntryFeeTypeAscending'
     */
    const VALUE_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING = 'AccountEntryFeeTypeAscending';
    /**
     * Constant for value 'AccountEntryFeeTypeDescending'
     * @return string 'AccountEntryFeeTypeDescending'
     */
    const VALUE_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING = 'AccountEntryFeeTypeDescending';
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
     * @uses self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING
     * @uses self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING
     * @uses self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING
     * @uses self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING
     * @uses self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING
     * @uses self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING,
            self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING,
            self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING,
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
