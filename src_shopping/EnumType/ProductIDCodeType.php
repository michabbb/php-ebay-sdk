<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductIDCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the different type of product identifiers that are available to identify a product. Product identifiers are returned for order line items and eBay Catalog products, and these identifier types and their
 * values can also be used by the <b>FindProducts</b> call as a search filter. These enumeration values are used as attribute values for the <b>ProductID</b> field in Shopping API calls.
 * @subpackage Enumerations
 */
class ProductIDCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ISBN'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the product identifier type is an International Standard Book Number. ISBN values can be 10 characters (ISBN-10) or 13 characters (ISBN-13) in length, and they identify books.
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'EAN'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the product identifier type is an International Article Number (also known as European Article Number). EAN values are typically 13 digits in length, but some use only eight digits. EAN identify a
     * wide variety of products.
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'UPC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the product identifier type is a Universal Product Code. UPC values are 12 digits in length. UPC values identify a wide variety of products, and are typically used in the US and Canada.
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'MPN'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the product identifier type is a Manufacturer Part Number. Unlike ISBNs, EANs, and UPCs, an MPN value is not based on an international standard, but is defined by the seller/manufacturer of the
     * product. Technically, there is no maximum length for an MPN, but eBay actually enforces a 65-character limit for MPN values.
     * @return string 'MPN'
     */
    const VALUE_MPN = 'MPN';
    /**
     * Constant for value 'Keywords'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable. In a <b>FindProducts</b> call, if you want to search for a product using a query string, use the <b>QueryKeywords</b> field in the call request instead.
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'CatalogItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'CatalogItem'
     */
    const VALUE_CATALOG_ITEM = 'CatalogItem';
    /**
     * Constant for value 'Reference'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the product identifier type is an eBay Catalog product ID. EPID is a commonly-used acronymn for an eBay Catalog product ID.
     * @return string 'Reference'
     */
    const VALUE_REFERENCE = 'Reference';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISBN,
            self::VALUE_EAN,
            self::VALUE_UPC,
            self::VALUE_MPN,
            self::VALUE_KEYWORDS,
            self::VALUE_CATALOG_ITEM,
            self::VALUE_REFERENCE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
