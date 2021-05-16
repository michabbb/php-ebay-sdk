<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InventoryTrackingMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines options to track a listing by the eBay item ID or the seller's SKU. In some calls, elements of this type are only returned in the response when the value is set to SKU on the item.
 * @subpackage Enumerations
 */
class InventoryTrackingMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemID'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the seller prefers to track the listing by its eBay item ID. This is the default for all listings.
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'SKU'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the seller prefers to track the listing by their own SKU. <br/><br/> When you track by SKU, it means you can pass in your SKU instead of the eBay item ID in other calls that support SKU as an input field. If you choose SKU
     * as your tracking preference for a listing, the value in <b>Item.SKU</b> must be unique across your active listings. You cannot create new listings with the same <b>Item.SKU</b> value while the listing is active (that is, until the existing listing
     * with that SKU has ended). <br/><br/> However, you can use <b>ReviseInventoryStatus</b> to update the quantity and/or price for the existing SKU as needed. When revising a listing where the <b>InventoryTrackingMethod</b> was set to SKU, you must pass
     * in both the <b>InventoryTrackingMethod</b> tag (with the value set to SKU) and the SKU tag with the SKU value from your original listing.
     * @return string 'SKU'
     */
    const VALUE_SKU = 'SKU';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_ID
     * @uses self::VALUE_SKU
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITEM_ID,
            self::VALUE_SKU,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
