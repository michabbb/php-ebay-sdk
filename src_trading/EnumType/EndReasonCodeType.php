<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EndReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the reasons that a seller can end an item listing early. This value is required if the seller ends a listing early. This can be on an item that hasn't sold and has no bids or on an item that has bids and the seller
 * wants to sell the item to the high bidder now.
 * @subpackage Enumerations
 */
class EndReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LostOrBroken'
     * Meta information extracted from the WSDL
     * - documentation: Use this enumeration value in an End listing call if the seller is ending a listing because the item was lost or is broken.
     * @return string 'LostOrBroken'
     */
    const VALUE_LOST_OR_BROKEN = 'LostOrBroken';
    /**
     * Constant for value 'NotAvailable'
     * Meta information extracted from the WSDL
     * - documentation: Use this enumeration value in an End listing call if the seller is ending a listing because the item is no longer available for sale.
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'Incorrect'
     * Meta information extracted from the WSDL
     * - documentation: Use this enumeration value in an End listing call if the seller is ending a listing because the start price or reserve price is incorrect.
     * @return string 'Incorrect'
     */
    const VALUE_INCORRECT = 'Incorrect';
    /**
     * Constant for value 'OtherListingError'
     * Meta information extracted from the WSDL
     * - documentation: Use this enumeration value in an End listing call if the seller is ending a listing because the listing contained an error (other than start price or reserve price).
     * @return string 'OtherListingError'
     */
    const VALUE_OTHER_LISTING_ERROR = 'OtherListingError';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'SellToHighBidder'
     * Meta information extracted from the WSDL
     * - documentation: Use this enumeration value in an End listing call if the seller is ending a listing because they want to sell an auction item to the current high bidder. A seller can end a listing early in order to sell to the current high bidder
     * when the listing has qualifying bids (i.e., there is a current high bid that, when applicable, meets the minimum reserve price) and there is more than 12 hours before the listing ends. <br> <b>Note</b>: In the last 12 hours of an item listing, you
     * cannot end an item early if it has bids.
     * @return string 'SellToHighBidder'
     */
    const VALUE_SELL_TO_HIGH_BIDDER = 'SellToHighBidder';
    /**
     * Constant for value 'Sold'
     * Meta information extracted from the WSDL
     * - documentation: The vehicle was sold. Applies to local classified listings for vehicles only.
     * @return string 'Sold'
     */
    const VALUE_SOLD = 'Sold';
    /**
     * Constant for value 'ProductDeleted'
     * Meta information extracted from the WSDL
     * - documentation: For internal use only. This enumeration value cannot be used by the seller in an End listing call, but it will get returned in <b>GetItem</b> if a listing was administratively ended by eBay if the item in a listing becomes
     * unpurchasable due to the eBay Catalog product associated with the listing being removed from the catalog.
     * @return string 'ProductDeleted'
     */
    const VALUE_PRODUCT_DELETED = 'ProductDeleted';
    /**
     * Return allowed values
     * @uses self::VALUE_LOST_OR_BROKEN
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_INCORRECT
     * @uses self::VALUE_OTHER_LISTING_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_SELL_TO_HIGH_BIDDER
     * @uses self::VALUE_SOLD
     * @uses self::VALUE_PRODUCT_DELETED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOST_OR_BROKEN,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_INCORRECT,
            self::VALUE_OTHER_LISTING_ERROR,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_SELL_TO_HIGH_BIDDER,
            self::VALUE_SOLD,
            self::VALUE_PRODUCT_DELETED,
        ];
    }
}
