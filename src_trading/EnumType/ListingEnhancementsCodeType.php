<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingEnhancementsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining all listing upgrades that may be available to the seller when listing an item. The listing upgrades that are available vary by site and by the seller's account status. To discover which listing upgrades are available,
 * call <b>GeteBayDetails</b>, pass in the appropriate <b>SiteID</b> value and set the <b>DetailName</b> input filter to <code>ListingFeatureDetails</code>, and then look for the <b>ListingFeatureDetails</b> container in the response. Listing upgrades
 * will either be listed as <code>Enabled</code> or <code>Disabled</code>.
 * @subpackage Enumerations
 */
class ListingEnhancementsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Border'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * If specified, the seller wants to add a border around the listing's pictures. Applicable listing fees apply. <br> <br>
     * @return string 'Border'
     */
    const VALUE_BORDER = 'Border';
    /**
     * Constant for value 'BoldTitle'
     * Meta information extracted from the WSDL
     * - documentation: This value is used if the seller wants the listing title to be in boldface type. This feature will incur a listing fee. Note that this enhancement will not put the listing subtitle in boldface type (if a subtitle is used). <br> <br>
     * Currently, Bold Titles are only supported on eBay US, both Canada sites, eBay Netherlands, and eBay Poland.
     * @return string 'BoldTitle'
     */
    const VALUE_BOLD_TITLE = 'BoldTitle';
    /**
     * Constant for value 'Featured'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Featured listing feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span>
     * <br> Listing is a "Featured Plus" item. The item will display prominently in the Featured Items section of its category list, and it will stand out on search results pages. It will also display in the regular, non- featured item list. Only available
     * to users with a Feedback rating of 10 or greater.
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Highlight'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Highlighted listing feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span>
     * <br> Listing is highlighted in a different color in lists.
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'HomePageFeatured'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Featured Gallery listing feature is no longer available on any eBay sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Listing will have a chance to rotate into a special display on eBay's Home page. Your item is very likely to show up on the Home page, although eBay does not guarantee that your item will be highlighted in this way. This is the highest level of
     * visibility on eBay.
     * @return string 'HomePageFeatured'
     */
    const VALUE_HOME_PAGE_FEATURED = 'HomePageFeatured';
    /**
     * Constant for value 'ProPackBundle'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Pro Pack Bundle is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br> Listing
     * is using ProPackBundle (a feature pack). Applies only to vehicle listings on eBay Motors (US and Canada), and to the Parts and Accessories category in the eBay Motors US site. Contains the BoldTitle, Border, Featured and Highlight features.
     * @return string 'ProPackBundle'
     */
    const VALUE_PRO_PACK_BUNDLE = 'ProPackBundle';
    /**
     * Constant for value 'BasicUpgradePackBundle'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Basic Upgrade Pack Bundle is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span>
     * @return string 'BasicUpgradePackBundle'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE = 'BasicUpgradePackBundle';
    /**
     * Constant for value 'ValuePackBundle'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified in an Add/Revise/Relist call, a Value Pack bundle is applied to the listing. The Value Pack bundle includes the Gallery Plus feature, a listing subtitle, and use of a Listing Designer template for a
     * discounted price. Support for this feature varies by site and category. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings, so use of a
     * Listing Designer template will no longer be a part of this bundle.</span>
     * @return string 'ValuePackBundle'
     */
    const VALUE_VALUE_PACK_BUNDLE = 'ValuePackBundle';
    /**
     * Constant for value 'ProPackPlusBundle'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Pro Pack Plus Bundle is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Support for this feature varies by site and category. A ProPackPlusBundle listing is using ProPackPlus bundle (a feature pack), which combines the features of BoldTitle, Border, Highlight, Featured (which is equivalent to a GalleryType value of
     * Featured), and Gallery, for a discounted price. Note that if, for example, in AddItem, if you use ProPackPlusBundle and a GalleryType value of Gallery, then the resulting item will have a GalleryType value of Featured.
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
