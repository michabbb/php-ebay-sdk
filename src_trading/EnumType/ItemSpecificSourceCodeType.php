<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemSpecificSourceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the sources for an Item Specific.
 * @subpackage Enumerations
 */
class ItemSpecificSourceCodeType
{
    /**
     * Constant for value 'ItemSpecific'
     * @return string 'ItemSpecific'
     */
    const VALUE_ITEM_SPECIFIC = 'ItemSpecific';
    /**
     * Constant for value 'Attribute'
     * @return string 'Attribute'
     */
    const VALUE_ATTRIBUTE = 'Attribute';
    /**
     * Constant for value 'Product'
     * @return string 'Product'
     */
    const VALUE_PRODUCT = 'Product';
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
     * @uses self::VALUE_ITEM_SPECIFIC
     * @uses self::VALUE_ATTRIBUTE
     * @uses self::VALUE_PRODUCT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_SPECIFIC,
            self::VALUE_ATTRIBUTE,
            self::VALUE_PRODUCT,
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
