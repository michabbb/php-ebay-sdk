<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShippingRateTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A shipping rate scale for shipping through USPS that affects the shipping cost calculated for USPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). For calculated shipping only.
 * @subpackage Enumerations
 */
class ShippingRateTypeCodeType
{
    /**
     * Constant for value 'OnDemand'
     * @return string 'OnDemand'
     */
    const VALUE_ON_DEMAND = 'OnDemand';
    /**
     * Constant for value 'DailyPickup'
     * @return string 'DailyPickup'
     */
    const VALUE_DAILY_PICKUP = 'DailyPickup';
    /**
     * Constant for value 'StandardList'
     * @return string 'StandardList'
     */
    const VALUE_STANDARD_LIST = 'StandardList';
    /**
     * Constant for value 'Counter'
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
    /**
     * Constant for value 'Discounted'
     * @return string 'Discounted'
     */
    const VALUE_DISCOUNTED = 'Discounted';
    /**
     * Constant for value 'CommercialPlus'
     * @return string 'CommercialPlus'
     */
    const VALUE_COMMERCIAL_PLUS = 'CommercialPlus';
    /**
     * Constant for value 'GoldSilver'
     * @return string 'GoldSilver'
     */
    const VALUE_GOLD_SILVER = 'GoldSilver';
    /**
     * Constant for value 'PlatTitanium'
     * @return string 'PlatTitanium'
     */
    const VALUE_PLAT_TITANIUM = 'PlatTitanium';
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
     * @uses self::VALUE_ON_DEMAND
     * @uses self::VALUE_DAILY_PICKUP
     * @uses self::VALUE_STANDARD_LIST
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_DISCOUNTED
     * @uses self::VALUE_COMMERCIAL_PLUS
     * @uses self::VALUE_GOLD_SILVER
     * @uses self::VALUE_PLAT_TITANIUM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ON_DEMAND,
            self::VALUE_DAILY_PICKUP,
            self::VALUE_STANDARD_LIST,
            self::VALUE_COUNTER,
            self::VALUE_DISCOUNTED,
            self::VALUE_COMMERCIAL_PLUS,
            self::VALUE_GOLD_SILVER,
            self::VALUE_PLAT_TITANIUM,
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
