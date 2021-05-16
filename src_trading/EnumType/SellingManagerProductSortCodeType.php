<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerProductSortCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Sorting specifications for retrieved Selling Manager Inventory products.
 * @subpackage Enumerations
 */
class SellingManagerProductSortCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ActiveQuantity'
     * Meta information extracted from the WSDL
     * - documentation: Sort products by by quantity currently listed.
     * @return string 'ActiveQuantity'
     */
    const VALUE_ACTIVE_QUANTITY = 'ActiveQuantity';
    /**
     * Constant for value 'AvailableToList'
     * Meta information extracted from the WSDL
     * - documentation: Sort unlisted products by availability to list.
     * @return string 'AvailableToList'
     */
    const VALUE_AVAILABLE_TO_LIST = 'AvailableToList';
    /**
     * Constant for value 'AveragePrice'
     * Meta information extracted from the WSDL
     * - documentation: Sort by average price of sold items.
     * @return string 'AveragePrice'
     */
    const VALUE_AVERAGE_PRICE = 'AveragePrice';
    /**
     * Constant for value 'AverageUnitCost'
     * Meta information extracted from the WSDL
     * - documentation: Sort by average unit cost of items.
     * @return string 'AverageUnitCost'
     */
    const VALUE_AVERAGE_UNIT_COST = 'AverageUnitCost';
    /**
     * Constant for value 'CustomLabel'
     * Meta information extracted from the WSDL
     * - documentation: Sort products by label.
     * @return string 'CustomLabel'
     */
    const VALUE_CUSTOM_LABEL = 'CustomLabel';
    /**
     * Constant for value 'ProductName'
     * Meta information extracted from the WSDL
     * - documentation: Sort by product name.
     * @return string 'ProductName'
     */
    const VALUE_PRODUCT_NAME = 'ProductName';
    /**
     * Constant for value 'LastSubmittedDate'
     * Meta information extracted from the WSDL
     * - documentation: Sort by submitted date.
     * @return string 'LastSubmittedDate'
     */
    const VALUE_LAST_SUBMITTED_DATE = 'LastSubmittedDate';
    /**
     * Constant for value 'ScheduledQuantity'
     * Meta information extracted from the WSDL
     * - documentation: Sort by quantity scheduled to be listed.
     * @return string 'ScheduledQuantity'
     */
    const VALUE_SCHEDULED_QUANTITY = 'ScheduledQuantity';
    /**
     * Constant for value 'SoldQuantity'
     * Meta information extracted from the WSDL
     * - documentation: Sort by quantity sold.
     * @return string 'SoldQuantity'
     */
    const VALUE_SOLD_QUANTITY = 'SoldQuantity';
    /**
     * Constant for value 'SuccessPercent'
     * Meta information extracted from the WSDL
     * - documentation: Sort by the percentage of ended listings that had a sale.
     * @return string 'SuccessPercent'
     */
    const VALUE_SUCCESS_PERCENT = 'SuccessPercent';
    /**
     * Constant for value 'UnsoldQuantity'
     * Meta information extracted from the WSDL
     * - documentation: Sort by number of unsold items.
     * @return string 'UnsoldQuantity'
     */
    const VALUE_UNSOLD_QUANTITY = 'UnsoldQuantity';
    /**
     * Constant for value 'FolderName'
     * Meta information extracted from the WSDL
     * - documentation: Sort products by folder name.
     * @return string 'FolderName'
     */
    const VALUE_FOLDER_NAME = 'FolderName';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
