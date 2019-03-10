<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SiteCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: eBay sites (by the country in which each resides) on which a user is registered and on which items can be listed through the Trading API.
 * @subpackage Enumerations
 */
class SiteCodeType
{
    /**
     * Constant for value 'US'
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'Canada'
     * @return string 'Canada'
     */
    const VALUE_CANADA = 'Canada';
    /**
     * Constant for value 'UK'
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'Australia'
     * @return string 'Australia'
     */
    const VALUE_AUSTRALIA = 'Australia';
    /**
     * Constant for value 'Austria'
     * @return string 'Austria'
     */
    const VALUE_AUSTRIA = 'Austria';
    /**
     * Constant for value 'Belgium_French'
     * @return string 'Belgium_French'
     */
    const VALUE_BELGIUM_FRENCH = 'Belgium_French';
    /**
     * Constant for value 'France'
     * @return string 'France'
     */
    const VALUE_FRANCE = 'France';
    /**
     * Constant for value 'Germany'
     * @return string 'Germany'
     */
    const VALUE_GERMANY = 'Germany';
    /**
     * Constant for value 'Italy'
     * @return string 'Italy'
     */
    const VALUE_ITALY = 'Italy';
    /**
     * Constant for value 'Belgium_Dutch'
     * @return string 'Belgium_Dutch'
     */
    const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
    /**
     * Constant for value 'Netherlands'
     * @return string 'Netherlands'
     */
    const VALUE_NETHERLANDS = 'Netherlands';
    /**
     * Constant for value 'Spain'
     * @return string 'Spain'
     */
    const VALUE_SPAIN = 'Spain';
    /**
     * Constant for value 'Switzerland'
     * @return string 'Switzerland'
     */
    const VALUE_SWITZERLAND = 'Switzerland';
    /**
     * Constant for value 'Taiwan'
     * @return string 'Taiwan'
     */
    const VALUE_TAIWAN = 'Taiwan';
    /**
     * Constant for value 'eBayMotors'
     * @return string 'eBayMotors'
     */
    const VALUE_E_BAY_MOTORS = 'eBayMotors';
    /**
     * Constant for value 'HongKong'
     * @return string 'HongKong'
     */
    const VALUE_HONG_KONG = 'HongKong';
    /**
     * Constant for value 'Singapore'
     * @return string 'Singapore'
     */
    const VALUE_SINGAPORE = 'Singapore';
    /**
     * Constant for value 'India'
     * @return string 'India'
     */
    const VALUE_INDIA = 'India';
    /**
     * Constant for value 'China'
     * @return string 'China'
     */
    const VALUE_CHINA = 'China';
    /**
     * Constant for value 'Ireland'
     * @return string 'Ireland'
     */
    const VALUE_IRELAND = 'Ireland';
    /**
     * Constant for value 'Malaysia'
     * @return string 'Malaysia'
     */
    const VALUE_MALAYSIA = 'Malaysia';
    /**
     * Constant for value 'Philippines'
     * @return string 'Philippines'
     */
    const VALUE_PHILIPPINES = 'Philippines';
    /**
     * Constant for value 'Poland'
     * @return string 'Poland'
     */
    const VALUE_POLAND = 'Poland';
    /**
     * Constant for value 'Sweden'
     * @return string 'Sweden'
     */
    const VALUE_SWEDEN = 'Sweden';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'CanadaFrench'
     * @return string 'CanadaFrench'
     */
    const VALUE_CANADA_FRENCH = 'CanadaFrench';
    /**
     * Constant for value 'Russia'
     * @return string 'Russia'
     */
    const VALUE_RUSSIA = 'Russia';
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
     * @uses self::VALUE_US
     * @uses self::VALUE_CANADA
     * @uses self::VALUE_UK
     * @uses self::VALUE_AUSTRALIA
     * @uses self::VALUE_AUSTRIA
     * @uses self::VALUE_BELGIUM_FRENCH
     * @uses self::VALUE_FRANCE
     * @uses self::VALUE_GERMANY
     * @uses self::VALUE_ITALY
     * @uses self::VALUE_BELGIUM_DUTCH
     * @uses self::VALUE_NETHERLANDS
     * @uses self::VALUE_SPAIN
     * @uses self::VALUE_SWITZERLAND
     * @uses self::VALUE_TAIWAN
     * @uses self::VALUE_E_BAY_MOTORS
     * @uses self::VALUE_HONG_KONG
     * @uses self::VALUE_SINGAPORE
     * @uses self::VALUE_INDIA
     * @uses self::VALUE_CHINA
     * @uses self::VALUE_IRELAND
     * @uses self::VALUE_MALAYSIA
     * @uses self::VALUE_PHILIPPINES
     * @uses self::VALUE_POLAND
     * @uses self::VALUE_SWEDEN
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_CANADA_FRENCH
     * @uses self::VALUE_RUSSIA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_US,
            self::VALUE_CANADA,
            self::VALUE_UK,
            self::VALUE_AUSTRALIA,
            self::VALUE_AUSTRIA,
            self::VALUE_BELGIUM_FRENCH,
            self::VALUE_FRANCE,
            self::VALUE_GERMANY,
            self::VALUE_ITALY,
            self::VALUE_BELGIUM_DUTCH,
            self::VALUE_NETHERLANDS,
            self::VALUE_SPAIN,
            self::VALUE_SWITZERLAND,
            self::VALUE_TAIWAN,
            self::VALUE_E_BAY_MOTORS,
            self::VALUE_HONG_KONG,
            self::VALUE_SINGAPORE,
            self::VALUE_INDIA,
            self::VALUE_CHINA,
            self::VALUE_IRELAND,
            self::VALUE_MALAYSIA,
            self::VALUE_PHILIPPINES,
            self::VALUE_POLAND,
            self::VALUE_SWEDEN,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_CANADA_FRENCH,
            self::VALUE_RUSSIA,
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
