<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerInventoryPropertyTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the filters for Selling Manager Inventory listings.
 * @subpackage Enumerations
 */
class SellingManagerInventoryPropertyTypeCodeType
{
    /**
     * Constant for value 'ProductsOutOfStock'
     * @return string 'ProductsOutOfStock'
     */
    const VALUE_PRODUCTS_OUT_OF_STOCK = 'ProductsOutOfStock';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'InActive'
     * @return string 'InActive'
     */
    const VALUE_IN_ACTIVE = 'InActive';
    /**
     * Constant for value 'LowStock'
     * @return string 'LowStock'
     */
    const VALUE_LOW_STOCK = 'LowStock';
    /**
     * Constant for value 'WithListings'
     * @return string 'WithListings'
     */
    const VALUE_WITH_LISTINGS = 'WithListings';
    /**
     * Constant for value 'WithoutListings'
     * @return string 'WithoutListings'
     */
    const VALUE_WITHOUT_LISTINGS = 'WithoutListings';
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
     * @uses self::VALUE_PRODUCTS_OUT_OF_STOCK
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_IN_ACTIVE
     * @uses self::VALUE_LOW_STOCK
     * @uses self::VALUE_WITH_LISTINGS
     * @uses self::VALUE_WITHOUT_LISTINGS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTS_OUT_OF_STOCK,
            self::VALUE_ACTIVE,
            self::VALUE_IN_ACTIVE,
            self::VALUE_LOW_STOCK,
            self::VALUE_WITH_LISTINGS,
            self::VALUE_WITHOUT_LISTINGS,
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
