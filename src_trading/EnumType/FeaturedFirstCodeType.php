<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeaturedFirstCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that indicates if the Featured First listing upgrade is enabled for the specified site, and whether it is restricted to a specific seller level. <br/><br/> <span class="tablenote"><strong>Note:</strong> The Featured
 * First listing upgrade can no longer be added for new listings in any eBay marketplace. </span>
 * @subpackage Enumerations
 */
class FeaturedFirstCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is enabled for all sellers on the site.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is not available for any sellers on the site.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'PowerSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is only enabled for Power Sellers on the site.
     * @return string 'PowerSellerOnly'
     */
    const VALUE_POWER_SELLER_ONLY = 'PowerSellerOnly';
    /**
     * Constant for value 'TopRatedSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is only enabled for Top-Rated Sellers on the site.
     * @return string 'TopRatedSellerOnly'
     */
    const VALUE_TOP_RATED_SELLER_ONLY = 'TopRatedSellerOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_POWER_SELLER_ONLY
     * @uses self::VALUE_TOP_RATED_SELLER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_POWER_SELLER_ONLY,
            self::VALUE_TOP_RATED_SELLER_ONLY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
