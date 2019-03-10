<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UserIdentityCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type this is used to indicate the type of user that initiated a monetary transaction.
 * @subpackage Enumerations
 */
class UserIdentityCodeType
{
    /**
     * Constant for value 'eBayUser'
     * @return string 'eBayUser'
     */
    const VALUE_E_BAY_USER = 'eBayUser';
    /**
     * Constant for value 'eBayPartner'
     * @return string 'eBayPartner'
     */
    const VALUE_E_BAY_PARTNER = 'eBayPartner';
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
     * @uses self::VALUE_E_BAY_USER
     * @uses self::VALUE_E_BAY_PARTNER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BAY_USER,
            self::VALUE_E_BAY_PARTNER,
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
