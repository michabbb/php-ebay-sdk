<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TransactionPlatformCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> Currently, the only supported value for this enumeration type is <code>eBay</code>. Half.com listings will no longer be supported in APIs. </span> Specifies the site on which the purchase was
 * made.
 * @subpackage Enumerations
 */
class TransactionPlatformCodeType
{
    /**
     * Constant for value 'eBay'
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'Express'
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'Half'
     * @return string 'Half'
     */
    const VALUE_HALF = 'Half';
    /**
     * Constant for value 'Shopping'
     * @return string 'Shopping'
     */
    const VALUE_SHOPPING = 'Shopping';
    /**
     * Constant for value 'WorldOfGood'
     * @return string 'WorldOfGood'
     */
    const VALUE_WORLD_OF_GOOD = 'WorldOfGood';
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
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_HALF
     * @uses self::VALUE_SHOPPING
     * @uses self::VALUE_WORLD_OF_GOOD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BAY,
            self::VALUE_EXPRESS,
            self::VALUE_HALF,
            self::VALUE_SHOPPING,
            self::VALUE_WORLD_OF_GOOD,
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
