<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UPSRateOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the rate types that United Parcel Service (UPS) can offer to sellers for shipping.
 * @subpackage Enumerations
 */
class UPSRateOptionCodeType
{
    /**
     * Constant for value 'UPSDailyRates'
     * @return string 'UPSDailyRates'
     */
    const VALUE_UPSDAILY_RATES = 'UPSDailyRates';
    /**
     * Constant for value 'UPSOnDemandRates'
     * @return string 'UPSOnDemandRates'
     */
    const VALUE_UPSON_DEMAND_RATES = 'UPSOnDemandRates';
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
     * @uses self::VALUE_UPSDAILY_RATES
     * @uses self::VALUE_UPSON_DEMAND_RATES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UPSDAILY_RATES,
            self::VALUE_UPSON_DEMAND_RATES,
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
