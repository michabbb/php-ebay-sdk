<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerAlertTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Container for various alert types.
 * @subpackage Enumerations
 */
class SellingManagerAlertTypeCodeType
{
    /**
     * Constant for value 'Sold'
     * @return string 'Sold'
     */
    const VALUE_SOLD = 'Sold';
    /**
     * Constant for value 'Inventory'
     * @return string 'Inventory'
     */
    const VALUE_INVENTORY = 'Inventory';
    /**
     * Constant for value 'Automation'
     * @return string 'Automation'
     */
    const VALUE_AUTOMATION = 'Automation';
    /**
     * Constant for value 'PaisaPay'
     * @return string 'PaisaPay'
     */
    const VALUE_PAISA_PAY = 'PaisaPay';
    /**
     * Constant for value 'General'
     * @return string 'General'
     */
    const VALUE_GENERAL = 'General';
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
     * @uses self::VALUE_SOLD
     * @uses self::VALUE_INVENTORY
     * @uses self::VALUE_AUTOMATION
     * @uses self::VALUE_PAISA_PAY
     * @uses self::VALUE_GENERAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SOLD,
            self::VALUE_INVENTORY,
            self::VALUE_AUTOMATION,
            self::VALUE_PAISA_PAY,
            self::VALUE_GENERAL,
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
