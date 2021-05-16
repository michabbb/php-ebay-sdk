<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExternalProductCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ExternalProductCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ISBN'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'UPC'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'ProductID'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ProductID'
     */
    const VALUE_PRODUCT_ID = 'ProductID';
    /**
     * Constant for value 'EAN'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'Keywords'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'MPN'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'MPN'
     */
    const VALUE_MPN = 'MPN';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
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
