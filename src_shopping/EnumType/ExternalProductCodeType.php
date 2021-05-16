<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExternalProductCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated. </span> <br/><br/> Indicates the type of external product ID being used to identify a stock product.
 * @subpackage Enumerations
 */
class ExternalProductCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ISBN'
     * Meta information extracted from the WSDL
     * - documentation: ExternalProductID.Value contains an ISBN value. Required when you pass an ISBN as the external product ID.
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'UPC'
     * Meta information extracted from the WSDL
     * - documentation: ExternalProductID.Value contains a UPC value. Required when you pass a UPC as the external product ID.
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'ProductID'
     * Meta information extracted from the WSDL
     * - documentation: ExternalProductID.Value contains an eBay catalog product ID. Required when you pass an eBay product ID as the external product ID.
     * @return string 'ProductID'
     */
    const VALUE_PRODUCT_ID = 'ProductID';
    /**
     * Constant for value 'EAN'
     * Meta information extracted from the WSDL
     * - documentation: ExternalProductID.Value contains an EAN value. Required when you pass an EAN as the external product ID.
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'Keywords'
     * Meta information extracted from the WSDL
     * - documentation: ExternalProductID.Value contains a set of keywords that uniquely identify the product. Only applicable when listing event ticket. See the eBay Features Guide for information about valid ticket keywords for an external product ID.
     * Required when you pass a set of keywords as the external product ID.
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'MPN'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'MPN'
     */
    const VALUE_MPN = 'MPN';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ISBN
     * @uses self::VALUE_UPC
     * @uses self::VALUE_PRODUCT_ID
     * @uses self::VALUE_EAN
     * @uses self::VALUE_KEYWORDS
     * @uses self::VALUE_MPN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISBN,
            self::VALUE_UPC,
            self::VALUE_PRODUCT_ID,
            self::VALUE_EAN,
            self::VALUE_KEYWORDS,
            self::VALUE_MPN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
