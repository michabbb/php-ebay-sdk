<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SelectionModeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the values that will be returned in a <b>GetCategorySpecifics</b>. The value that is returned will determine whether a seller can only use recommended Item Specifics, can create custom Item Specifics, or
 * if they should use a product identifer and then the recommended Item Specifics for the product are picked up automatically.
 * @subpackage Enumerations
 */
class SelectionModeCodeType
{
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Prefilled'
     * @return string 'Prefilled'
     */
    const VALUE_PREFILLED = 'Prefilled';
    /**
     * Constant for value 'SelectionOnly'
     * @return string 'SelectionOnly'
     */
    const VALUE_SELECTION_ONLY = 'SelectionOnly';
    /**
     * Constant for value 'FreeText'
     * @return string 'FreeText'
     */
    const VALUE_FREE_TEXT = 'FreeText';
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_PREFILLED
     * @uses self::VALUE_SELECTION_ONLY
     * @uses self::VALUE_FREE_TEXT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATIC,
            self::VALUE_MANUAL,
            self::VALUE_PREFILLED,
            self::VALUE_SELECTION_ONLY,
            self::VALUE_FREE_TEXT,
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
