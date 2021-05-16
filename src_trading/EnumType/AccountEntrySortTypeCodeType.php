<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccountEntrySortTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type defining the possible values that can be used in the <b>AccountEntrySortType</b> field of the <b>GetAccount</b> request to sort account entries returned in the response.
 * @subpackage Enumerations
 */
class AccountEntrySortTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This is the default value. With this value set, account entries in the <b>GetAccount</b> response are sorted by transaction date (see <b>AccountEntry.Date</b> field) in ascending order (oldest transaction to most recent transaction).
     * This value will produce the same results as the <b>AccountEntryCreatedTimeAscending</b> value.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AccountEntryCreatedTimeAscending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted by transaction date (see <b>AccountEntry.Date</b> field) in ascending order (oldest transaction to most recent transaction). This value will produce
     * the same results as the <b>None</b> value.
     * @return string 'AccountEntryCreatedTimeAscending'
     */
    const VALUE_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING = 'AccountEntryCreatedTimeAscending';
    /**
     * Constant for value 'AccountEntryCreatedTimeDescending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted by transaction date (see <b>AccountEntry.Date</b> field) in descending order (most recent transaction to oldest transaction).
     * @return string 'AccountEntryCreatedTimeDescending'
     */
    const VALUE_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING = 'AccountEntryCreatedTimeDescending';
    /**
     * Constant for value 'AccountEntryItemNumberAscending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted by Item ID value (see <b>AccountEntry.ItemID</b> field) in ascending order (oldest eBay listing to most recent eBay listing).
     * @return string 'AccountEntryItemNumberAscending'
     */
    const VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING = 'AccountEntryItemNumberAscending';
    /**
     * Constant for value 'AccountEntryItemNumberDescending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted by Item ID value (see <b>AccountEntry.ItemID</b> field) in descending order (most recent eBay listing to oldest eBay listing).
     * @return string 'AccountEntryItemNumberDescending'
     */
    const VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING = 'AccountEntryItemNumberDescending';
    /**
     * Constant for value 'AccountEntryFeeTypeAscending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted in alphabetical order according to each entry's <b>AccountEntry.Description</b> value. When account entries are sorted according to fee type, the
     * secondary sort criterion is transaction date, and for account entries with identical fee types, the oldest account entries will appear first in the response.
     * @return string 'AccountEntryFeeTypeAscending'
     */
    const VALUE_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING = 'AccountEntryFeeTypeAscending';
    /**
     * Constant for value 'AccountEntryFeeTypeDescending'
     * Meta information extracted from the WSDL
     * - documentation: With this value set, account entries in the <b>GetAccount</b> response are sorted in reverse alphabetical order according to each entry's <b>AccountEntry.Description</b> value. When account entries are sorted according to fee type,
     * the secondary sort criterion is transaction date, and for account entries with identical fee types, the oldest account entries will appear first in the response.
     * @return string 'AccountEntryFeeTypeDescending'
     */
    const VALUE_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING = 'AccountEntryFeeTypeDescending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING,
            self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING,
            self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING,
            self::VALUE_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
