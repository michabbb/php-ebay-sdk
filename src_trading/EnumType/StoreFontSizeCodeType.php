<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreFontSizeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Font size selection for Store configuration.
 * @subpackage Enumerations
 */
class StoreFontSizeCodeType
{
    /**
     * Constant for value 'XXS'
     * @return string 'XXS'
     */
    const VALUE_XXS = 'XXS';
    /**
     * Constant for value 'XS'
     * @return string 'XS'
     */
    const VALUE_XS = 'XS';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'XL'
     * @return string 'XL'
     */
    const VALUE_XL = 'XL';
    /**
     * Constant for value 'XXL'
     * @return string 'XXL'
     */
    const VALUE_XXL = 'XXL';
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
     * @uses self::VALUE_XXS
     * @uses self::VALUE_XS
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @uses self::VALUE_XL
     * @uses self::VALUE_XXL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_XXS,
            self::VALUE_XS,
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
            self::VALUE_XL,
            self::VALUE_XXL,
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
