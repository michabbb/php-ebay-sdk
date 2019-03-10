<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellerAccountStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the different states of a seller's account.
 * @subpackage Enumerations
 */
class SellerAccountStatusCodeType
{
    /**
     * Constant for value 'Current'
     * @return string 'Current'
     */
    const VALUE_CURRENT = 'Current';
    /**
     * Constant for value 'PastDue'
     * @return string 'PastDue'
     */
    const VALUE_PAST_DUE = 'PastDue';
    /**
     * Constant for value 'OnHold'
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
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
     * @uses self::VALUE_CURRENT
     * @uses self::VALUE_PAST_DUE
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CURRENT,
            self::VALUE_PAST_DUE,
            self::VALUE_ON_HOLD,
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
