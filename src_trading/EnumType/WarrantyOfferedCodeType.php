<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for WarrantyOfferedCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyOfferedCodeType
{
    /**
     * Constant for value 'WarrantyOffered'
     * @return string 'WarrantyOffered'
     */
    const VALUE_WARRANTY_OFFERED = 'WarrantyOffered';
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
     * @uses self::VALUE_WARRANTY_OFFERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WARRANTY_OFFERED,
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
