<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnsRefundMethodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying the available refund methods.
 * @subpackage Enumerations
 */
class ReturnsRefundMethodCodeType
{
    /**
     * Constant for value 'MoneyBack'
     * @return string 'MoneyBack'
     */
    const VALUE_MONEY_BACK = 'MoneyBack';
    /**
     * Constant for value 'MoneyBackorReplacement'
     * @return string 'MoneyBackorReplacement'
     */
    const VALUE_MONEY_BACKOR_REPLACEMENT = 'MoneyBackorReplacement';
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
     * @uses self::VALUE_MONEY_BACK
     * @uses self::VALUE_MONEY_BACKOR_REPLACEMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MONEY_BACK,
            self::VALUE_MONEY_BACKOR_REPLACEMENT,
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
