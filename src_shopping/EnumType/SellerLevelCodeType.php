<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for SellerLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that consists of the five different Power Seller levels. Each Power Seller tier is based on average monthly sales, and eBay reviews eligibility on a monthly basis. Available benefits and services to the seller vary
 * for each tier.
 * @subpackage Enumerations
 */
class SellerLevelCodeType
{
    /**
     * Constant for value 'Bronze'
     * @return string 'Bronze'
     */
    const VALUE_BRONZE = 'Bronze';
    /**
     * Constant for value 'Silver'
     * @return string 'Silver'
     */
    const VALUE_SILVER = 'Silver';
    /**
     * Constant for value 'Gold'
     * @return string 'Gold'
     */
    const VALUE_GOLD = 'Gold';
    /**
     * Constant for value 'Platinum'
     * @return string 'Platinum'
     */
    const VALUE_PLATINUM = 'Platinum';
    /**
     * Constant for value 'Titanium'
     * @return string 'Titanium'
     */
    const VALUE_TITANIUM = 'Titanium';
    /**
     * Constant for value 'Diamond'
     * @return string 'Diamond'
     */
    const VALUE_DIAMOND = 'Diamond';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_BRONZE
     * @uses self::VALUE_SILVER
     * @uses self::VALUE_GOLD
     * @uses self::VALUE_PLATINUM
     * @uses self::VALUE_TITANIUM
     * @uses self::VALUE_DIAMOND
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BRONZE,
            self::VALUE_SILVER,
            self::VALUE_GOLD,
            self::VALUE_PLATINUM,
            self::VALUE_TITANIUM,
            self::VALUE_DIAMOND,
            self::VALUE_NONE,
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
