<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SiteCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The enumerated type consists of all eBay marketplaces on which a user is registered and on which items can be listed. Generally, each enumeration value is simply the name of the couuntry (of the eBay marketplace), but there are some
 * variations. Note that there are some countries where eBay listings are available, but that country does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't
 * have an official eBay marketplace to view inventory from other eBay marketplaces around the world.
 * @subpackage Enumerations
 */
class SiteCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'US'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay US marketplace.
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'Canada'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Canada marketplace.
     * @return string 'Canada'
     */
    const VALUE_CANADA = 'Canada';
    /**
     * Constant for value 'UK'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay UK marketplace.
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'Australia'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Australia marketplace.
     * @return string 'Australia'
     */
    const VALUE_AUSTRALIA = 'Australia';
    /**
     * Constant for value 'Austria'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Austria marketplace.
     * @return string 'Austria'
     */
    const VALUE_AUSTRIA = 'Austria';
    /**
     * Constant for value 'Belgium_French'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Belgium marketplace, translated into the French language.
     * @return string 'Belgium_French'
     */
    const VALUE_BELGIUM_FRENCH = 'Belgium_French';
    /**
     * Constant for value 'France'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay France marketplace.
     * @return string 'France'
     */
    const VALUE_FRANCE = 'France';
    /**
     * Constant for value 'Germany'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Germany marketplace.
     * @return string 'Germany'
     */
    const VALUE_GERMANY = 'Germany';
    /**
     * Constant for value 'Italy'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Italy marketplace.
     * @return string 'Italy'
     */
    const VALUE_ITALY = 'Italy';
    /**
     * Constant for value 'Belgium_Dutch'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Belgium marketplace, translated into the Dutch language.
     * @return string 'Belgium_Dutch'
     */
    const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
    /**
     * Constant for value 'Netherlands'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Netherlands marketplace.
     * @return string 'Netherlands'
     */
    const VALUE_NETHERLANDS = 'Netherlands';
    /**
     * Constant for value 'Spain'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Spain marketplace.
     * @return string 'Spain'
     */
    const VALUE_SPAIN = 'Spain';
    /**
     * Constant for value 'Switzerland'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Switzerland marketplace.
     * @return string 'Switzerland'
     */
    const VALUE_SWITZERLAND = 'Switzerland';
    /**
     * Constant for value 'Taiwan'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Taiwan marketplace.
     * @return string 'Taiwan'
     */
    const VALUE_TAIWAN = 'Taiwan';
    /**
     * Constant for value 'eBayMotors'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Motors. eBay Motors is technically a subdomain of eBay.com, but this value is still returned if the listing is in an eBay Motors category.
     * @return string 'eBayMotors'
     */
    const VALUE_E_BAY_MOTORS = 'eBayMotors';
    /**
     * Constant for value 'HongKong'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as Hong Kong does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     * @return string 'HongKong'
     */
    const VALUE_HONG_KONG = 'HongKong';
    /**
     * Constant for value 'Singapore'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as Singapore does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     * @return string 'Singapore'
     */
    const VALUE_SINGAPORE = 'Singapore';
    /**
     * Constant for value 'India'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as India no longer has an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to view
     * inventory from other eBay marketplaces around the world.
     * @return string 'India'
     */
    const VALUE_INDIA = 'India';
    /**
     * Constant for value 'China'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as China does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to view
     * inventory from other eBay marketplaces around the world.
     * @return string 'China'
     */
    const VALUE_CHINA = 'China';
    /**
     * Constant for value 'Ireland'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Ireland marketplace.
     * @return string 'Ireland'
     */
    const VALUE_IRELAND = 'Ireland';
    /**
     * Constant for value 'Malaysia'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as Malaysia does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     * @return string 'Malaysia'
     */
    const VALUE_MALAYSIA = 'Malaysia';
    /**
     * Constant for value 'Philippines'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Philippines marketplace.
     * @return string 'Philippines'
     */
    const VALUE_PHILIPPINES = 'Philippines';
    /**
     * Constant for value 'Poland'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Poland marketplace.
     * @return string 'Poland'
     */
    const VALUE_POLAND = 'Poland';
    /**
     * Constant for value 'Sweden'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as there is no longer an eBay Sweden marketplace or a 'Global Buying Hub' available in Sweden.
     * @return string 'Sweden'
     */
    const VALUE_SWEDEN = 'Sweden';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Placeholder value. See <a href="https://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'CanadaFrench'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates that the site is the eBay Canada French marketplace. The eBay Canada French marketplace is actually its own eBay marketplace, and not just the eBay Canada marketplace translated into the French language.
     * @return string 'CanadaFrench'
     */
    const VALUE_CANADA_FRENCH = 'CanadaFrench';
    /**
     * Constant for value 'Russia'
     * Meta information extracted from the WSDL
     * - documentation: This value is not applicable, as Russia does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to view
     * inventory from other eBay marketplaces around the world.
     * @return string 'Russia'
     */
    const VALUE_RUSSIA = 'Russia';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
