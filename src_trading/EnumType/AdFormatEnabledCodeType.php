<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AdFormatEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains a list of values that will indicate whether or not an Ad Format listing type is enabled for an eBay site or for an eBay category.
 * @subpackage Enumerations
 */
class AdFormatEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Classified Ad format feature is disabled for the site or category.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Classified Ad format feature is enabled for the site or category.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Only'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Classified Ad format is the only listing type supported by the eBay category. This value is not applicable at the eBay site level.
     * @return string 'Only'
     */
    const VALUE_ONLY = 'Only';
    /**
     * Constant for value 'ClassifiedAdEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the lead-generation Classified Ad format feature is enabled for the site or category.
     * @return string 'ClassifiedAdEnabled'
     */
    const VALUE_CLASSIFIED_AD_ENABLED = 'ClassifiedAdEnabled';
    /**
     * Constant for value 'ClassifiedAdOnly'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the lead-generation Classified Ad format is the only listing type supported by the eBay category. This value is not applicable at the eBay site level.
     * @return string 'ClassifiedAdOnly'
     */
    const VALUE_CLASSIFIED_AD_ONLY = 'ClassifiedAdOnly';
    /**
     * Constant for value 'LocalMarketBestOfferOnly'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that eBay Motors Local Market listings are enabled for the site or category.
     * @return string 'LocalMarketBestOfferOnly'
     */
    const VALUE_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_ONLY
     * @uses self::VALUE_CLASSIFIED_AD_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_ONLY
     * @uses self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_ONLY,
            self::VALUE_CLASSIFIED_AD_ENABLED,
            self::VALUE_CLASSIFIED_AD_ONLY,
            self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
