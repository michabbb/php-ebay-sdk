<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for USPSRateOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the rate types that United States Postal Service (USPS) can offer to sellers for shipping.
 * @subpackage Enumerations
 */
class USPSRateOptionCodeType
{
    /**
     * Constant for value 'USPSDiscounted'
     * @return string 'USPSDiscounted'
     */
    const VALUE_USPSDISCOUNTED = 'USPSDiscounted';
    /**
     * Constant for value 'USPSRetail'
     * @return string 'USPSRetail'
     */
    const VALUE_USPSRETAIL = 'USPSRetail';
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
     * @uses self::VALUE_USPSDISCOUNTED
     * @uses self::VALUE_USPSRETAIL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USPSDISCOUNTED,
            self::VALUE_USPSRETAIL,
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
