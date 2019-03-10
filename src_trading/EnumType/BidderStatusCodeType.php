<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BidderStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidderStatusCodeType
{
    /**
     * Constant for value 'Approved'
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'Denied'
     * @return string 'Denied'
     */
    const VALUE_DENIED = 'Denied';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
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
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_DENIED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPROVED,
            self::VALUE_DENIED,
            self::VALUE_PENDING,
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
