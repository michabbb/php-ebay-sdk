<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that consists of the five different Power Seller levels. Each Power Seller tier is based on average monthly sales, and eBay reviews eligibility on a monthly basis. Available benefits and services to the seller vary
 * for each tier.
 * @subpackage Enumerations
 */
class SellerLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Bronze'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Power Seller is at the Bronze level, which is the lowest tier.
     * @return string 'Bronze'
     */
    const VALUE_BRONZE = 'Bronze';
    /**
     * Constant for value 'Silver'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Power Seller is at the Silver level, which is the second lowest tier (between Bronze and Gold).
     * @return string 'Silver'
     */
    const VALUE_SILVER = 'Silver';
    /**
     * Constant for value 'Gold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Power Seller is at the Gold level, which is the third tier (between Silver and Platinum).
     * @return string 'Gold'
     */
    const VALUE_GOLD = 'Gold';
    /**
     * Constant for value 'Platinum'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Power Seller is at the Platinum level, which is the second highest tier (between Gold and Titanium).
     * @return string 'Platinum'
     */
    const VALUE_PLATINUM = 'Platinum';
    /**
     * Constant for value 'Titanium'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Power Seller is at the Titanium level, which is the highest tier.
     * @return string 'Titanium'
     */
    const VALUE_TITANIUM = 'Titanium';
    /**
     * Constant for value 'Diamond'
     * Meta information extracted from the WSDL
     * - documentation: Deprecated value.
     * @return string 'Diamond'
     */
    const VALUE_DIAMOND = 'Diamond';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller does not qualify to be a Power Seller based on calculated monthly sales.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: eserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BRONZE,
            self::VALUE_SILVER,
            self::VALUE_GOLD,
            self::VALUE_PLATINUM,
            self::VALUE_TITANIUM,
            self::VALUE_DIAMOND,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
