<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SiteCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: eBay sites (by the country in which each resides) on which a user is registered and on which items can be listed through the Trading API.
 * @subpackage Enumerations
 */
class SiteCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'US'
     * Meta information extracted from the WSDL
     * - documentation: USA, site ID 0, abbreviation US, currency USD. <br/>(<a href="http://www.ebay.com" target="_blank">http://www.ebay.com</a>)
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'Canada'
     * Meta information extracted from the WSDL
     * - documentation: Canada, site ID 2, abbreviation CA, currencies CAD and USD. <br/>(<a href="http://www.ebay.ca" target="_blank">http://www.ebay.ca</a>)
     * @return string 'Canada'
     */
    const VALUE_CANADA = 'Canada';
    /**
     * Constant for value 'UK'
     * Meta information extracted from the WSDL
     * - documentation: United Kingdom, site ID 3, abbreviation UK, currency GBP. <br/>(<a href="http://www.ebay.co.uk" target="_blank">http://www.ebay.co.uk</a>)
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'Australia'
     * Meta information extracted from the WSDL
     * - documentation: Australia, site ID 15, abbreviation AU, currency AUD. <br/>(<a href="http://www.ebay.com.au" target="_blank">http://www.ebay.com.au</a>)
     * @return string 'Australia'
     */
    const VALUE_AUSTRALIA = 'Australia';
    /**
     * Constant for value 'Austria'
     * Meta information extracted from the WSDL
     * - documentation: Austria, site ID 16, abbreviation AT, currency EUR. <br/>(<a href="http://www.ebay.at" target="_blank">http://www.ebay.at</a>)
     * @return string 'Austria'
     */
    const VALUE_AUSTRIA = 'Austria';
    /**
     * Constant for value 'Belgium_French'
     * Meta information extracted from the WSDL
     * - documentation: Belgium (French), site ID 23, abbreviation BEFR, currency EUR. <br/>(<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     * @return string 'Belgium_French'
     */
    const VALUE_BELGIUM_FRENCH = 'Belgium_French';
    /**
     * Constant for value 'France'
     * Meta information extracted from the WSDL
     * - documentation: France, site ID 71, abbreviation FR, currency EUR. <br/>(<a href="http://www.ebay.fr" target="_blank">http://www.ebay.fr</a>)
     * @return string 'France'
     */
    const VALUE_FRANCE = 'France';
    /**
     * Constant for value 'Germany'
     * Meta information extracted from the WSDL
     * - documentation: Germany, site ID 77, abbreviation DE, currency EUR. <br/>(<a href="http://www.ebay.de" target="_blank">http://www.ebay.de</a>)
     * @return string 'Germany'
     */
    const VALUE_GERMANY = 'Germany';
    /**
     * Constant for value 'Italy'
     * Meta information extracted from the WSDL
     * - documentation: Italy, site ID 101, abbreviation IT, currency EUR. <br/>(<a href="http://www.ebay.it" target="_blank">http://www.ebay.it</a>)
     * @return string 'Italy'
     */
    const VALUE_ITALY = 'Italy';
    /**
     * Constant for value 'Belgium_Dutch'
     * Meta information extracted from the WSDL
     * - documentation: Belgium (Dutch), site ID 123, abbreviation BENL, currency EUR. <br/>(<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     * @return string 'Belgium_Dutch'
     */
    const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
    /**
     * Constant for value 'Netherlands'
     * Meta information extracted from the WSDL
     * - documentation: Netherlands, site ID 146, abbreviation NL, currency EUR. <br/>(<a href="http://www.ebay.nl" target="_blank">http://www.ebay.nl</a>)
     * @return string 'Netherlands'
     */
    const VALUE_NETHERLANDS = 'Netherlands';
    /**
     * Constant for value 'Spain'
     * Meta information extracted from the WSDL
     * - documentation: Spain, site ID 186, abbreviation ES, currency EUR. <br/>(<a href="http://www.ebay.es" target="_blank">http://www.ebay.es</a>)
     * @return string 'Spain'
     */
    const VALUE_SPAIN = 'Spain';
    /**
     * Constant for value 'Switzerland'
     * Meta information extracted from the WSDL
     * - documentation: Switzerland, site ID 193, abbreviation CH, currency CHF. <br/>(<a href="http://www.ebay.ch" target="_blank">http://www.ebay.ch</a>)
     * @return string 'Switzerland'
     */
    const VALUE_SWITZERLAND = 'Switzerland';
    /**
     * Constant for value 'Taiwan'
     * Meta information extracted from the WSDL
     * - documentation: Taiwan, currency TWD. Note that the old eBay Taiwan site is no longer in operation, and the new site does not use this API.
     * @return string 'Taiwan'
     */
    const VALUE_TAIWAN = 'Taiwan';
    /**
     * Constant for value 'eBayMotors'
     * Meta information extracted from the WSDL
     * - documentation: Although Site ID 100 is still valid in APIs, eBay Motors US is no longer its own site, but just a vertical within the eBay US site.
     * @return string 'eBayMotors'
     */
    const VALUE_E_BAY_MOTORS = 'eBayMotors';
    /**
     * Constant for value 'HongKong'
     * Meta information extracted from the WSDL
     * - documentation: Hong Kong, site ID 201, abbreviation HK, currency HKD. <br/>(<a href="http://www.ebay.com.hk" target="_blank">http://www.ebay.com.hk</a>)
     * @return string 'HongKong'
     */
    const VALUE_HONG_KONG = 'HongKong';
    /**
     * Constant for value 'Singapore'
     * Meta information extracted from the WSDL
     * - documentation: Singapore, site ID 216, abbreviation SG, currency SGD. <br/>(<a href="http://www.ebay.com.sg" target="_blank">http://www.ebay.com.sg</a>)
     * @return string 'Singapore'
     */
    const VALUE_SINGAPORE = 'Singapore';
    /**
     * Constant for value 'India'
     * Meta information extracted from the WSDL
     * - documentation: India, site ID 203, abbreviation IN, currency INR. <br/>(<a href="http://www.ebay.in" target="_blank">http://www.ebay.in</a>)
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
     * Meta information extracted from the WSDL
     * - documentation: Ireland, site ID 205, abbreviation IE, currency EUR. <br/>(<a href="http://www.ebay.ie" target="_blank">http://www.ebay.ie</a>)
     * @return string 'Ireland'
     */
    const VALUE_IRELAND = 'Ireland';
    /**
     * Constant for value 'Malaysia'
     * Meta information extracted from the WSDL
     * - documentation: Malaysia, site ID 207, abbreviation MY, currency MYR. <br/>(<a href="http://www.ebay.com.my" target="_blank">http://www.ebay.com.my</a>)
     * @return string 'Malaysia'
     */
    const VALUE_MALAYSIA = 'Malaysia';
    /**
     * Constant for value 'Philippines'
     * Meta information extracted from the WSDL
     * - documentation: Philippines, site ID 211, abbreviation PH, currency PHP. <br/>(<a href="http://www.ebay.ph" target="_blank">http://www.ebay.ph</a>)
     * @return string 'Philippines'
     */
    const VALUE_PHILIPPINES = 'Philippines';
    /**
     * Constant for value 'Poland'
     * Meta information extracted from the WSDL
     * - documentation: Poland, site ID 212, abbreviation PL, currency PLN. <br/>(<a href="http://www.ebay.pl" target="_blank">http://www.ebay.pl</a>)
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
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'CanadaFrench'
     * Meta information extracted from the WSDL
     * - documentation: Canada French, site ID 210, abbreviation CAFR, currencies CAD and USD.
     * @return string 'CanadaFrench'
     */
    const VALUE_CANADA_FRENCH = 'CanadaFrench';
    /**
     * Constant for value 'Russia'
     * Meta information extracted from the WSDL
     * - documentation: Russia, site ID 215, abbreviation RU, currency RUB. Sellers must use Merchant Integration Platform (MIP) to create and revise listings on the Russia site. Russian listings cannot be created or revised through the Trading API's add
     * and revise calls, so 'Russia' would not be a valid value to pass in through <b>Item.Site</b> field of an Add or Revise Trading API call.
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
