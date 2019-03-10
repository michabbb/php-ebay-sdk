<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ListingEnhancementsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining all listing upgrades that may be available to the seller when listing an item. The listing upgrades that are available vary by site and by the seller's account status. To discover which listing upgrades are available,
 * call <b>GeteBayDetails</b>, pass in the appropriate <b>SiteID</b> value and set the <b>DetailName</b> input filter to <code>ListingFeatureDetails</code>, and then look for the <b>ListingFeatureDetails</b> container in the response. Listing upgrades
 * will either be listed as <code>Enabled</code> or <code>Disabled</code>.
 * @subpackage Enumerations
 */
class ListingEnhancementsCodeType
{
    /**
     * Constant for value 'Border'
     * @return string 'Border'
     */
    const VALUE_BORDER = 'Border';
    /**
     * Constant for value 'BoldTitle'
     * @return string 'BoldTitle'
     */
    const VALUE_BOLD_TITLE = 'BoldTitle';
    /**
     * Constant for value 'Featured'
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Highlight'
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'HomePageFeatured'
     * @return string 'HomePageFeatured'
     */
    const VALUE_HOME_PAGE_FEATURED = 'HomePageFeatured';
    /**
     * Constant for value 'ProPackBundle'
     * @return string 'ProPackBundle'
     */
    const VALUE_PRO_PACK_BUNDLE = 'ProPackBundle';
    /**
     * Constant for value 'BasicUpgradePackBundle'
     * @return string 'BasicUpgradePackBundle'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE = 'BasicUpgradePackBundle';
    /**
     * Constant for value 'ValuePackBundle'
     * @return string 'ValuePackBundle'
     */
    const VALUE_VALUE_PACK_BUNDLE = 'ValuePackBundle';
    /**
     * Constant for value 'ProPackPlusBundle'
     * @return string 'ProPackPlusBundle'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE = 'ProPackPlusBundle';
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
     * @uses self::VALUE_BORDER
     * @uses self::VALUE_BOLD_TITLE
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_HIGHLIGHT
     * @uses self::VALUE_HOME_PAGE_FEATURED
     * @uses self::VALUE_PRO_PACK_BUNDLE
     * @uses self::VALUE_BASIC_UPGRADE_PACK_BUNDLE
     * @uses self::VALUE_VALUE_PACK_BUNDLE
     * @uses self::VALUE_PRO_PACK_PLUS_BUNDLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BORDER,
            self::VALUE_BOLD_TITLE,
            self::VALUE_FEATURED,
            self::VALUE_HIGHLIGHT,
            self::VALUE_HOME_PAGE_FEATURED,
            self::VALUE_PRO_PACK_BUNDLE,
            self::VALUE_BASIC_UPGRADE_PACK_BUNDLE,
            self::VALUE_VALUE_PACK_BUNDLE,
            self::VALUE_PRO_PACK_PLUS_BUNDLE,
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
