<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type containing values that provide more information on the type of filtering the buyer used when setting up a Saved Search in My eBay.
 * @subpackage Enumerations
 */
class ItemTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AuctionItemsOnly'
     * Meta information extracted from the WSDL
     * - documentation: When setting up filtering for the Saved Search, the buyer was only looking for auction items (with or without the Buy It Now option), so only selected the <b>Auction</b> checkbox in the <b>Format</b> dialog box. When this filter is
     * used in a Saved Search, fixed-price items and classified ad listings are not retrieved for the buyer.
     * @return string 'AuctionItemsOnly'
     */
    const VALUE_AUCTION_ITEMS_ONLY = 'AuctionItemsOnly';
    /**
     * Constant for value 'FixedPricedItem'
     * Meta information extracted from the WSDL
     * - documentation: When setting up filtering for the Saved Search, the buyer was looking for all fixed-price items and auction items with Buy It Now available, so only selected the <b>Buy It Now</b> checkbox in the <b>Format</b> dialog box. When this
     * filter is used in a Saved Search, auction items (without the Buy It Now option) and classified ad listings are not retrieved for the buyer.
     * @return string 'FixedPricedItem'
     */
    const VALUE_FIXED_PRICED_ITEM = 'FixedPricedItem';
    /**
     * Constant for value 'AllItems'
     * Meta information extracted from the WSDL
     * - documentation: When setting up filtering for the Saved Search, the buyer was looking for all items closely associated with the search term, so selected all buying formats (Auction, Buy It Now, and Classified Ads). All items are retrieved for the
     * buyer, including auction items (with or without the Buy It Now option), fixed-price items, and classified ad listings.
     * @return string 'AllItems'
     */
    const VALUE_ALL_ITEMS = 'AllItems';
    /**
     * Constant for value 'StoreInventoryOnly'
     * Meta information extracted from the WSDL
     * - documentation: When setting up filtering for the Saved Search, the buyer was only looking for items sold by sellers with eBay stores, so selected the <b>Sellers with eBay stores</b> checkbox in the <b>Seller</b> dialog box. When this filter is used
     * in a Saved Search, only items for sale in an eBay store are retrieved for the buyer.
     * @return string 'StoreInventoryOnly'
     */
    const VALUE_STORE_INVENTORY_ONLY = 'StoreInventoryOnly';
    /**
     * Constant for value 'FixedPriceExcludeStoreInventory'
     * Meta information extracted from the WSDL
     * - documentation: Excludes listings that have listing type set to StoresFixedPrice. Excludes listings that have listing type set to AdType. Excludes auction listings in which BuyItNowEnabled is false.
     * @return string 'FixedPriceExcludeStoreInventory'
     */
    const VALUE_FIXED_PRICE_EXCLUDE_STORE_INVENTORY = 'FixedPriceExcludeStoreInventory';
    /**
     * Constant for value 'ExcludeStoreInventory'
     * Meta information extracted from the WSDL
     * - documentation: Excludes listings that have listing type set to StoresFixedPrice.
     * @return string 'ExcludeStoreInventory'
     */
    const VALUE_EXCLUDE_STORE_INVENTORY = 'ExcludeStoreInventory';
    /**
     * Constant for value 'AllItemTypes'
     * Meta information extracted from the WSDL
     * - documentation: Retrieves listings whether or not listing type is set to StoresFixedPrice; include auction items.
     * @return string 'AllItemTypes'
     */
    const VALUE_ALL_ITEM_TYPES = 'AllItemTypes';
    /**
     * Constant for value 'AllFixedPriceItemTypes'
     * Meta information extracted from the WSDL
     * - documentation: Retrieves fixed-price items. Whether StoresFixedPrice items are retrieved does not depend on the site default. The StoresFixedPrice items are retrieved after the basic fixed price items. Items are retrieved whether or not listing
     * type is set to StoresFixedPrice. Does not retrieve items for which listing type is AdType. Does not retrieve auction items for which BuyItNowEnabled is false.
     * @return string 'AllFixedPriceItemTypes'
     */
    const VALUE_ALL_FIXED_PRICE_ITEM_TYPES = 'AllFixedPriceItemTypes';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ClassifiedItemsOnly'
     * Meta information extracted from the WSDL
     * - documentation: When setting up filtering for the Saved Search, the buyer was only looking for classified ad listings, so only selected the <b>Classified ads</b> checkbox in the <b>Format</b> dialog box. When this filter is used in a Saved Search,
     * auction (with or without the Buy It Now option) and fixed-price items are not retrieved for the buyer.
     * @return string 'ClassifiedItemsOnly'
     */
    const VALUE_CLASSIFIED_ITEMS_ONLY = 'ClassifiedItemsOnly';
    /**
     * Constant for value 'AdFormat'
     * Meta information extracted from the WSDL
     * - documentation: Restricts listings to return only items that have the Ad Format feature.
     * @return string 'AdFormat'
     */
    const VALUE_AD_FORMAT = 'AdFormat';
    /**
     * Return allowed values
     * @uses self::VALUE_AUCTION_ITEMS_ONLY
     * @uses self::VALUE_FIXED_PRICED_ITEM
     * @uses self::VALUE_ALL_ITEMS
     * @uses self::VALUE_STORE_INVENTORY_ONLY
     * @uses self::VALUE_FIXED_PRICE_EXCLUDE_STORE_INVENTORY
     * @uses self::VALUE_EXCLUDE_STORE_INVENTORY
     * @uses self::VALUE_ALL_ITEM_TYPES
     * @uses self::VALUE_ALL_FIXED_PRICE_ITEM_TYPES
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_CLASSIFIED_ITEMS_ONLY
     * @uses self::VALUE_AD_FORMAT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUCTION_ITEMS_ONLY,
            self::VALUE_FIXED_PRICED_ITEM,
            self::VALUE_ALL_ITEMS,
            self::VALUE_STORE_INVENTORY_ONLY,
            self::VALUE_FIXED_PRICE_EXCLUDE_STORE_INVENTORY,
            self::VALUE_EXCLUDE_STORE_INVENTORY,
            self::VALUE_ALL_ITEM_TYPES,
            self::VALUE_ALL_FIXED_PRICE_ITEM_TYPES,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_CLASSIFIED_ITEMS_ONLY,
            self::VALUE_AD_FORMAT,
        ];
    }
}
