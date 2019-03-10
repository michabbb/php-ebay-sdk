<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type containing values that provide more information on the type of filtering the buyer used when setting up a Saved Search in My eBay.
 * @subpackage Enumerations
 */
class ItemTypeCodeType
{
    /**
     * Constant for value 'AuctionItemsOnly'
     * @return string 'AuctionItemsOnly'
     */
    const VALUE_AUCTION_ITEMS_ONLY = 'AuctionItemsOnly';
    /**
     * Constant for value 'FixedPricedItem'
     * @return string 'FixedPricedItem'
     */
    const VALUE_FIXED_PRICED_ITEM = 'FixedPricedItem';
    /**
     * Constant for value 'AllItems'
     * @return string 'AllItems'
     */
    const VALUE_ALL_ITEMS = 'AllItems';
    /**
     * Constant for value 'StoreInventoryOnly'
     * @return string 'StoreInventoryOnly'
     */
    const VALUE_STORE_INVENTORY_ONLY = 'StoreInventoryOnly';
    /**
     * Constant for value 'FixedPriceExcludeStoreInventory'
     * @return string 'FixedPriceExcludeStoreInventory'
     */
    const VALUE_FIXED_PRICE_EXCLUDE_STORE_INVENTORY = 'FixedPriceExcludeStoreInventory';
    /**
     * Constant for value 'ExcludeStoreInventory'
     * @return string 'ExcludeStoreInventory'
     */
    const VALUE_EXCLUDE_STORE_INVENTORY = 'ExcludeStoreInventory';
    /**
     * Constant for value 'AllItemTypes'
     * @return string 'AllItemTypes'
     */
    const VALUE_ALL_ITEM_TYPES = 'AllItemTypes';
    /**
     * Constant for value 'AllFixedPriceItemTypes'
     * @return string 'AllFixedPriceItemTypes'
     */
    const VALUE_ALL_FIXED_PRICE_ITEM_TYPES = 'AllFixedPriceItemTypes';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ClassifiedItemsOnly'
     * @return string 'ClassifiedItemsOnly'
     */
    const VALUE_CLASSIFIED_ITEMS_ONLY = 'ClassifiedItemsOnly';
    /**
     * Constant for value 'AdFormat'
     * @return string 'AdFormat'
     */
    const VALUE_AD_FORMAT = 'AdFormat';
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
    public static function getValidValues()
    {
        return array(
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
