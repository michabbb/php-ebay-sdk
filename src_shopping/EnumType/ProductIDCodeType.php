<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ProductIDCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the different type of product identifiers that are available to identify a product. Product identifiers are returned for order line items and eBay Catalog products, and these identifier types and their
 * values can also be used by the <b>FindProducts</b> call as a search filter. These enumeration values are used as attribute values for the <b>ProductID</b> field in Shopping API calls.
 * @subpackage Enumerations
 */
class ProductIDCodeType
{
    /**
     * Constant for value 'ISBN'
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'EAN'
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'UPC'
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'MPN'
     * @return string 'MPN'
     */
    const VALUE_MPN = 'MPN';
    /**
     * Constant for value 'Keywords'
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'CatalogItem'
     * @return string 'CatalogItem'
     */
    const VALUE_CATALOG_ITEM = 'CatalogItem';
    /**
     * Constant for value 'Reference'
     * @return string 'Reference'
     */
    const VALUE_REFERENCE = 'Reference';
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
     * @uses self::VALUE_ISBN
     * @uses self::VALUE_EAN
     * @uses self::VALUE_UPC
     * @uses self::VALUE_MPN
     * @uses self::VALUE_KEYWORDS
     * @uses self::VALUE_CATALOG_ITEM
     * @uses self::VALUE_REFERENCE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ISBN,
            self::VALUE_EAN,
            self::VALUE_UPC,
            self::VALUE_MPN,
            self::VALUE_KEYWORDS,
            self::VALUE_CATALOG_ITEM,
            self::VALUE_REFERENCE,
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
