<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AspectUsageCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used by the <b>AspectUsage</b> field that is returned in <b>GetCategorySpecifics</b> to indicate if a category aspect is a product-level aspect, or if it is an aspect that is typically unique to a particular
 * instance of a product in that category.
 * @subpackage Enumerations
 */
class AspectUsageCodeType
{
    /**
     * Constant for value 'Product'
     * @return string 'Product'
     */
    const VALUE_PRODUCT = 'Product';
    /**
     * Constant for value 'Instance'
     * @return string 'Instance'
     */
    const VALUE_INSTANCE = 'Instance';
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
     * @uses self::VALUE_PRODUCT
     * @uses self::VALUE_INSTANCE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCT,
            self::VALUE_INSTANCE,
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
