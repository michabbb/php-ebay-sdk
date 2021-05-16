<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GalleryTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates which Gallery image enhancements to apply to the listing.
 * @subpackage Enumerations
 */
class GalleryTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: Gallery is supported free on all sites. So this field is useful only for removing an existing feature setting when using <b>RelistItem</b>.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Featured'
     * Meta information extracted from the WSDL
     * - documentation: Highlights the listing by randomly placing it at the top of the search results. When the Featured First listing upgrade is selected for an item listing, the listing also automatically gets the Gallery and Plus functionality at no
     * extra cost. <br><br> A user can see if a site supports the Featured First listing upgrade by using the <b>GeteBayDetails</b> call and passing in <code>ListingFeatureDetails</code> in the <b>DetailName</b> field. In the response, the value of the
     * <b>ListingFeatureDetails.FeaturedFirst</b> field will show a value other than <code>Disabled</code> if the eBay site supports the Featured First listing upgrade. <br/><br/> <span class="tablenote"><strong>Note:</strong> The Featured First listing
     * upgrade can no longer be used for new listings or revising existing listings in any eBay marketplace. If this value is used in an Add/Revise/Relist call, sellers will get a warning message about this value/feature being deprecated. </span>
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Gallery'
     * Meta information extracted from the WSDL
     * - documentation: This feature, which is free on all sites, adds a Gallery image in the search results. A Gallery image is an image that was uploaded and copied to EPS (eBay Picture Service). This copy is stored for 30 days or until the image is
     * associated with a listing. Once the image is associated with a listing, the period is extended to 90 days after the item's sale_end date and is extended again if the item is relisted or used in subsequent listings. As part of storing a copy, EPS also
     * makes additional sizes available (thumbnail, main image, supersize, popup, etc.), which are used by the various Gallery enhancements. <br/><br/> All images must comply to the <a
     * href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements.</a>
     * @return string 'Gallery'
     */
    const VALUE_GALLERY = 'Gallery';
    /**
     * Constant for value 'Plus'
     * Meta information extracted from the WSDL
     * - documentation: Adds a Gallery Plus icon to the listing. <br/><br/> When Plus is selected in a request that specifies at least two images (using ItemType.PictureDetailsType.PictureURL), the Gallery Plus feature automatically includes a Gallery
     * Showcase of all the listing's images. <br><br> The Gallery Showcase displays when hovering over or clicking on the listing's Gallery Plus icon in the search results. The Showcase window displays a large (400px x 400px) preview image which is first
     * image specified PictureURL, as well as up to 11 (64 px x 64 px) selectable thumbnails for the remaining EPS images. Clicking on the preview image displays the item's listing page. <br/><br/> If Plus is selected and the request includes only one EPS
     * image or any self-hosted images, the listing includes a Gallery Plus icon that, when hovered over or clicked, displays a large (400px x 400px) preview image of the item. Clicking the image displays the View Item page for that listing. <br><br> When
     * using RelistItem or ReviseItem (item has no bids and more than 12 hours before the listing's end), Plus can be unselected in the request. However, the Plus fee will still apply if a previous request selected Plus. There is at most one Plus fee per
     * listing. <br><br> When "Plus" is included in an item listing, the listing also automatically gets the Gallery functionality at no extra cost. "Gallery" does not need to be specified separately in the listing. <br><br> Listing images that are
     * originally smaller than 400px x 400px are centered in the preview frame. Images that are originally larger than 400px x 400px are scaled down to 400px on their longest side (maintaining their original aspect ratio).
     * @return string 'Plus'
     */
    const VALUE_PLUS = 'Plus';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use <b>only</b>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_GALLERY
     * @uses self::VALUE_PLUS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_FEATURED,
            self::VALUE_GALLERY,
            self::VALUE_PLUS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
