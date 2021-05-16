<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the user's eBay PowerSeller tier. PowerSellers are distinguished in 5 tiers based on average monthly sales. Benefits and services vary for each tier. eBay calculates eligibility for each tier monthly.
 * @subpackage Enumerations
 */
class SellerLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Bronze'
     * Meta information extracted from the WSDL
     * - documentation: Bronze (lowest tier)
     * @return string 'Bronze'
     */
    const VALUE_BRONZE = 'Bronze';
    /**
     * Constant for value 'Silver'
     * Meta information extracted from the WSDL
     * - documentation: Silver (between Bronze and Gold)
     * @return string 'Silver'
     */
    const VALUE_SILVER = 'Silver';
    /**
     * Constant for value 'Gold'
     * Meta information extracted from the WSDL
     * - documentation: Gold (between Silver and Platinum)
     * @return string 'Gold'
     */
    const VALUE_GOLD = 'Gold';
    /**
     * Constant for value 'Platinum'
     * Meta information extracted from the WSDL
     * - documentation: Platinum (between Gold and Titanium)
     * @return string 'Platinum'
     */
    const VALUE_PLATINUM = 'Platinum';
    /**
     * Constant for value 'Titanium'
     * Meta information extracted from the WSDL
     * - documentation: Titanium (highest tier)
     * @return string 'Titanium'
     */
    const VALUE_TITANIUM = 'Titanium';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: Not a PowerSeller (eBay has not yet evaluated your PowerSeller status, or you have not chosen to be a member of the PowerSeller program, or you lost your PowerSeller status due to a policy violation.)
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
     * @uses self::VALUE_BRONZE
     * @uses self::VALUE_SILVER
     * @uses self::VALUE_GOLD
     * @uses self::VALUE_PLATINUM
     * @uses self::VALUE_TITANIUM
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
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
