<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ExternalProductCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated. </span> <br/><br/> Indicates the type of external product ID being used to identify a stock product.
 * @subpackage Enumerations
 */
class ExternalProductCodeType
{
    /**
     * Constant for value 'ISBN'
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'UPC'
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'ProductID'
     * @return string 'ProductID'
     */
    const VALUE_PRODUCT_ID = 'ProductID';
    /**
     * Constant for value 'EAN'
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'Keywords'
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'MPN'
     * @return string 'MPN'
     */
    const VALUE_MPN = 'MPN';
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
     * @uses self::VALUE_UPC
     * @uses self::VALUE_PRODUCT_ID
     * @uses self::VALUE_EAN
     * @uses self::VALUE_KEYWORDS
     * @uses self::VALUE_MPN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ISBN,
            self::VALUE_UPC,
            self::VALUE_PRODUCT_ID,
            self::VALUE_EAN,
            self::VALUE_KEYWORDS,
            self::VALUE_MPN,
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
