<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReasonHideFromSearchCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible reasons why a listing is being hidden from search on the eBay site.
 * @subpackage Enumerations
 */
class ReasonHideFromSearchCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DuplicateListing'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the listing is being hidden from search on the eBay site because the listing has been determined by eBay to be a duplicate listing. <br/><br/> This enumeration value is associated with eBay Duplicate
     * Listings Policy, which is applicable on the US, CA, CA-FR, and eBay Motors (Parts and Accessories only) sites. Event Tickets, Real Estate, and Motor Vehicle categories are excluded from this policy. For more information, read <a
     * href="http://pages.ebay.com/help/policies/listing-multi.html">eBay's Duplicate Listings Policy</a> help page.
     * @return string 'DuplicateListing'
     */
    const VALUE_DUPLICATE_LISTING = 'DuplicateListing';
    /**
     * Constant for value 'OutOfStock'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the listing is currently hidden from search because the quantity in the listing is zero. However, the listing is still alive and will reappear in the search results when the quantity is set to something
     * greater than zero. The 'Out-of-stock' option is set by the seller at the account level. This option can be enabled in My eBay Site Preferences, or the seller can use the <a
     * href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> field in the <b>SetUserPreferences</b> call.
     * @return string 'OutOfStock'
     */
    const VALUE_OUT_OF_STOCK = 'OutOfStock';
    /**
     * Return allowed values
     * @uses self::VALUE_DUPLICATE_LISTING
     * @uses self::VALUE_OUT_OF_STOCK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DUPLICATE_LISTING,
            self::VALUE_OUT_OF_STOCK,
        ];
    }
}
