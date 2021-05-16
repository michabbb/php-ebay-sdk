<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerSearchTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies search term types for Selling Manager listings.
 * @subpackage Enumerations
 */
class SellingManagerSearchTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BuyerUserID'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Buyer ID.
     * @return string 'BuyerUserID'
     */
    const VALUE_BUYER_USER_ID = 'BuyerUserID';
    /**
     * Constant for value 'BuyerEmail'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Buyers email.
     * @return string 'BuyerEmail'
     */
    const VALUE_BUYER_EMAIL = 'BuyerEmail';
    /**
     * Constant for value 'BuyerFullName'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Buyers full name.
     * @return string 'BuyerFullName'
     */
    const VALUE_BUYER_FULL_NAME = 'BuyerFullName';
    /**
     * Constant for value 'ItemID'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on ItemID.
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'Title'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Item Title.
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
    /**
     * Constant for value 'ProductID'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Product ID.
     * @return string 'ProductID'
     */
    const VALUE_PRODUCT_ID = 'ProductID';
    /**
     * Constant for value 'ProductName'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on Product Name.
     * @return string 'ProductName'
     */
    const VALUE_PRODUCT_NAME = 'ProductName';
    /**
     * Constant for value 'CustomLabel'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on SKU.
     * @return string 'CustomLabel'
     */
    const VALUE_CUSTOM_LABEL = 'CustomLabel';
    /**
     * Constant for value 'SaleRecordID'
     * Meta information extracted from the WSDL
     * - documentation: Search for listings based on the sale record ID. <br/><br/> When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the
     * Sold view in Selling Manager. <br/><br/> In the following calls, the value for the sale record ID is in the <b>SellingManagerSalesRecordNumber</b> field: <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>,
     * <b>GetOrderTransactions</b>. In the Selling Manager calls, the value for the sale record ID is in the <b>SaleRecordID</b> field. The sale record ID can be for a single or multiple line item order. <br/><br/> For orders that occurred within the last
     * 30 days, passing only the <b>SaleRecordID </b> into the <b>GetSellingManagerSoldListings</b> request will return the sale record. However, for sales that occurred more than 30 days ago, the <b>SaleDateRange</b> container must also be used, passing in
     * a date range that includes the date on which the specific sale occurred.
     * @return string 'SaleRecordID'
     */
    const VALUE_SALE_RECORD_ID = 'SaleRecordID';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER_USER_ID
     * @uses self::VALUE_BUYER_EMAIL
     * @uses self::VALUE_BUYER_FULL_NAME
     * @uses self::VALUE_ITEM_ID
     * @uses self::VALUE_TITLE
     * @uses self::VALUE_PRODUCT_ID
     * @uses self::VALUE_PRODUCT_NAME
     * @uses self::VALUE_CUSTOM_LABEL
     * @uses self::VALUE_SALE_RECORD_ID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUYER_USER_ID,
            self::VALUE_BUYER_EMAIL,
            self::VALUE_BUYER_FULL_NAME,
            self::VALUE_ITEM_ID,
            self::VALUE_TITLE,
            self::VALUE_PRODUCT_ID,
            self::VALUE_PRODUCT_NAME,
            self::VALUE_CUSTOM_LABEL,
            self::VALUE_SALE_RECORD_ID,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
