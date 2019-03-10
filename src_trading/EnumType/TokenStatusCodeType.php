<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TokenStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the status of the token
 * @subpackage Enumerations
 */
class TokenStatusCodeType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Expired'
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Constant for value 'RevokedByeBay'
     * @return string 'RevokedByeBay'
     */
    const VALUE_REVOKED_BYE_BAY = 'RevokedByeBay';
    /**
     * Constant for value 'RevokedByUser'
     * @return string 'RevokedByUser'
     */
    const VALUE_REVOKED_BY_USER = 'RevokedByUser';
    /**
     * Constant for value 'RevokedByApp'
     * @return string 'RevokedByApp'
     */
    const VALUE_REVOKED_BY_APP = 'RevokedByApp';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_REVOKED_BYE_BAY
     * @uses self::VALUE_REVOKED_BY_USER
     * @uses self::VALUE_REVOKED_BY_APP
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_EXPIRED,
            self::VALUE_REVOKED_BYE_BAY,
            self::VALUE_REVOKED_BY_USER,
            self::VALUE_REVOKED_BY_APP,
            self::VALUE_INVALID,
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
