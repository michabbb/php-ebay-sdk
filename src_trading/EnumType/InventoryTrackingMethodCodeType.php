<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for InventoryTrackingMethodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines options to track a listing by the eBay item ID or the seller's SKU. In some calls, elements of this type are only returned in the response when the value is set to SKU on the item.
 * @subpackage Enumerations
 */
class InventoryTrackingMethodCodeType
{
    /**
     * Constant for value 'ItemID'
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'SKU'
     * @return string 'SKU'
     */
    const VALUE_SKU = 'SKU';
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
     * @uses self::VALUE_ITEM_ID
     * @uses self::VALUE_SKU
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_ID,
            self::VALUE_SKU,
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
