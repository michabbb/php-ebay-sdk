<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemSpecificSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by <b>GetItem</b>, and indicates the source for an Item Specific.
 * @subpackage Enumerations
 */
class ItemSpecificSourceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemSpecific'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the corresponding Item Specific was specified by the seller in Add/Revise/Relist call or flow. In an Add/Revise/Relist API call, Item Specifics for a listing are specified through the
     * <b>ItemSpecifics.NameValueList</b> or <b>VariationSpecifics.NameValueList</b> (for a variation in a multiple-variation listing) containers.
     * @return string 'ItemSpecific'
     */
    const VALUE_ITEM_SPECIFIC = 'ItemSpecific';
    /**
     * Constant for value 'Attribute'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be returned.
     * @return string 'Attribute'
     */
    const VALUE_ATTRIBUTE = 'Attribute';
    /**
     * Constant for value 'Product'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the corresponding Item Specific was derived from a product in the eBay Catalog, and was automatically picked up by the listing when the seller created, revised, or relisted an item referencing
     * and matching an eBay catalog product through the use of an ePID or GTIN value in the <b>ProductListingDetails</b> container.
     * @return string 'Product'
     */
    const VALUE_PRODUCT = 'Product';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_SPECIFIC
     * @uses self::VALUE_ATTRIBUTE
     * @uses self::VALUE_PRODUCT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITEM_SPECIFIC,
            self::VALUE_ATTRIBUTE,
            self::VALUE_PRODUCT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
