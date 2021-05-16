<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingRegionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Regions to which the seller is willing to ship the item. These values are applicable to ShipToLocation.
 * @subpackage Enumerations
 */
class ShippingRegionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Africa'
     * Meta information extracted from the WSDL
     * - documentation: Africa
     * @return string 'Africa'
     */
    const VALUE_AFRICA = 'Africa';
    /**
     * Constant for value 'Asia'
     * Meta information extracted from the WSDL
     * - documentation: Asia
     * @return string 'Asia'
     */
    const VALUE_ASIA = 'Asia';
    /**
     * Constant for value 'Caribbean'
     * Meta information extracted from the WSDL
     * - documentation: Caribbean
     * @return string 'Caribbean'
     */
    const VALUE_CARIBBEAN = 'Caribbean';
    /**
     * Constant for value 'Europe'
     * Meta information extracted from the WSDL
     * - documentation: Europe
     * @return string 'Europe'
     */
    const VALUE_EUROPE = 'Europe';
    /**
     * Constant for value 'LatinAmerica'
     * Meta information extracted from the WSDL
     * - documentation: Latin America
     * @return string 'LatinAmerica'
     */
    const VALUE_LATIN_AMERICA = 'LatinAmerica';
    /**
     * Constant for value 'MiddleEast'
     * Meta information extracted from the WSDL
     * - documentation: Middle East
     * @return string 'MiddleEast'
     */
    const VALUE_MIDDLE_EAST = 'MiddleEast';
    /**
     * Constant for value 'NorthAmerica'
     * Meta information extracted from the WSDL
     * - documentation: North America
     * @return string 'NorthAmerica'
     */
    const VALUE_NORTH_AMERICA = 'NorthAmerica';
    /**
     * Constant for value 'Oceania'
     * Meta information extracted from the WSDL
     * - documentation: Oceania (Pacific region other than Asia)
     * @return string 'Oceania'
     */
    const VALUE_OCEANIA = 'Oceania';
    /**
     * Constant for value 'SouthAmerica'
     * Meta information extracted from the WSDL
     * - documentation: South America
     * @return string 'SouthAmerica'
     */
    const VALUE_SOUTH_AMERICA = 'SouthAmerica';
    /**
     * Constant for value 'EuropeanUnion'
     * Meta information extracted from the WSDL
     * - documentation: European Union
     * @return string 'EuropeanUnion'
     */
    const VALUE_EUROPEAN_UNION = 'EuropeanUnion';
    /**
     * Constant for value 'WillNotShip'
     * Meta information extracted from the WSDL
     * - documentation: Seller will not ship the item.
     * @return string 'WillNotShip'
     */
    const VALUE_WILL_NOT_SHIP = 'WillNotShip';
    /**
     * Constant for value 'Worldwide'
     * Meta information extracted from the WSDL
     * - documentation: Seller has specified Worldwide or eBay has determined that the specified regions add up to Worldwide.
     * @return string 'Worldwide'
     */
    const VALUE_WORLDWIDE = 'Worldwide';
    /**
     * Constant for value 'Americas'
     * Meta information extracted from the WSDL
     * - documentation: Americas
     * @return string 'Americas'
     */
    const VALUE_AMERICAS = 'Americas';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AFRICA
     * @uses self::VALUE_ASIA
     * @uses self::VALUE_CARIBBEAN
     * @uses self::VALUE_EUROPE
     * @uses self::VALUE_LATIN_AMERICA
     * @uses self::VALUE_MIDDLE_EAST
     * @uses self::VALUE_NORTH_AMERICA
     * @uses self::VALUE_OCEANIA
     * @uses self::VALUE_SOUTH_AMERICA
     * @uses self::VALUE_EUROPEAN_UNION
     * @uses self::VALUE_WILL_NOT_SHIP
     * @uses self::VALUE_WORLDWIDE
     * @uses self::VALUE_AMERICAS
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AFRICA,
            self::VALUE_ASIA,
            self::VALUE_CARIBBEAN,
            self::VALUE_EUROPE,
            self::VALUE_LATIN_AMERICA,
            self::VALUE_MIDDLE_EAST,
            self::VALUE_NORTH_AMERICA,
            self::VALUE_OCEANIA,
            self::VALUE_SOUTH_AMERICA,
            self::VALUE_EUROPEAN_UNION,
            self::VALUE_WILL_NOT_SHIP,
            self::VALUE_WORLDWIDE,
            self::VALUE_AMERICAS,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
