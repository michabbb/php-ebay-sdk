<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingEnhancementsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the listing upgrades that may be available to the seller when listing or revising an item. <br> <span class="tablenote"><b>Note: </b> <code>BoldTitle</code> is the only enum value that can be used in the
 * <b>ListingEnhancement</b> field. </span>
 * @subpackage Enumerations
 */
class ListingEnhancementsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Border'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Border'
     */
    const VALUE_BORDER = 'Border';
    /**
     * Constant for value 'BoldTitle'
     * Meta information extracted from the WSDL
     * - documentation: This value is used if the seller wants the listing title to be in boldface type. This feature will incur a listing fee. Note that this enhancement will not put the listing subtitle in boldface type (if a subtitle is used).
     * @return string 'BoldTitle'
     */
    const VALUE_BOLD_TITLE = 'BoldTitle';
    /**
     * Constant for value 'Featured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Highlight'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'HomePageFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'HomePageFeatured'
     */
    const VALUE_HOME_PAGE_FEATURED = 'HomePageFeatured';
    /**
     * Constant for value 'ProPackBundle'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'ProPackBundle'
     */
    const VALUE_PRO_PACK_BUNDLE = 'ProPackBundle';
    /**
     * Constant for value 'BasicUpgradePackBundle'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'BasicUpgradePackBundle'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE = 'BasicUpgradePackBundle';
    /**
     * Constant for value 'ValuePackBundle'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'ValuePackBundle'
     */
    const VALUE_VALUE_PACK_BUNDLE = 'ValuePackBundle';
    /**
     * Constant for value 'ProPackPlusBundle'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'ProPackPlusBundle'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE = 'ProPackPlusBundle';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
