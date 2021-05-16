<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClassifiedAdBestOfferEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the values used to indicate whether Best Offers for the Classified Ad listing format are enabled/disabled for all/most of a site's categories (<b>SiteDefaults.ClassifiedAdBestOfferEnabled</b>), or
 * enabled/required/disabled for a specific eBay category (<b>Category.ClassifiedAdBestOfferEnabled</b>).
 * @subpackage Enumerations
 */
class ClassifiedAdBestOfferEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Classified Ad Best Offer feature is disabled for all/most of a site's categories (if returned in the <b>SiteDefaults.ClassifiedAdBestOfferEnabled</b> field), or disabled for a specific category (if returned
     * in the <b>Category.ClassifiedAdBestOfferEnabled</b> field).
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Classified Ad Best Offer feature is enabled for all/most of a site's categories (if returned in the <b>SiteDefaults.ClassifiedAdBestOfferEnabled</b> field), or enabled for a specific category (if returned in
     * the <b>Category.ClassifiedAdBestOfferEnabled</b> field).
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Classified Ad Best Offer feature is required for a specific category (if returned in the <b>Category.ClassifiedAdBestOfferEnabled</b> field). This value is not applicable at the site level
     * (<b>SiteDefaults</b> container).
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
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
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_REQUIRED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
