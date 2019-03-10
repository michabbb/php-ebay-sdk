<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerSearchTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies search term types for Selling Manager listings.
 * @subpackage Enumerations
 */
class SellingManagerSearchTypeCodeType
{
    /**
     * Constant for value 'BuyerUserID'
     * @return string 'BuyerUserID'
     */
    const VALUE_BUYER_USER_ID = 'BuyerUserID';
    /**
     * Constant for value 'BuyerEmail'
     * @return string 'BuyerEmail'
     */
    const VALUE_BUYER_EMAIL = 'BuyerEmail';
    /**
     * Constant for value 'BuyerFullName'
     * @return string 'BuyerFullName'
     */
    const VALUE_BUYER_FULL_NAME = 'BuyerFullName';
    /**
     * Constant for value 'ItemID'
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'Title'
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
    /**
     * Constant for value 'ProductID'
     * @return string 'ProductID'
     */
    const VALUE_PRODUCT_ID = 'ProductID';
    /**
     * Constant for value 'ProductName'
     * @return string 'ProductName'
     */
    const VALUE_PRODUCT_NAME = 'ProductName';
    /**
     * Constant for value 'CustomLabel'
     * @return string 'CustomLabel'
     */
    const VALUE_CUSTOM_LABEL = 'CustomLabel';
    /**
     * Constant for value 'SaleRecordID'
     * @return string 'SaleRecordID'
     */
    const VALUE_SALE_RECORD_ID = 'SaleRecordID';
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
    public static function getValidValues()
    {
        return array(
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
