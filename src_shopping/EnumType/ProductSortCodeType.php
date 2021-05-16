<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductSortCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the sort values that can be used to control the order of eBay Catalog products that are returned with a <b>FindProducts</b> call.
 * @subpackage Enumerations
 */
class ProductSortCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Popularity'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is input into the <b>ProductSort</b> field if the user would like the eBay Catalog products to be sorted by product popularity (as determined by eBay). This is also the default value, so if the
     * <b>ProductSort</b> field is omitted, eBay Catalog products will be sorted by product popularity by default.
     * @return string 'Popularity'
     */
    const VALUE_POPULARITY = 'Popularity';
    /**
     * Constant for value 'Rating'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is input into the <b>ProductSort</b> field if the user would like the eBay Catalog products to be sorted by product rating.
     * @return string 'Rating'
     */
    const VALUE_RATING = 'Rating';
    /**
     * Constant for value 'ReviewCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is input into the <b>ProductSort</b> field if the user would like the eBay Catalog products to be sorted according to the number of reviews for that product on eBay.
     * @return string 'ReviewCount'
     */
    const VALUE_REVIEW_COUNT = 'ReviewCount';
    /**
     * Constant for value 'ItemCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is input into the <b>ProductSort</b> field if the user would like the eBay Catalog products to be sorted according to the number of of active listings associated with each product.
     * @return string 'ItemCount'
     */
    const VALUE_ITEM_COUNT = 'ItemCount';
    /**
     * Constant for value 'Title'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is input into the <b>ProductSort</b> field if the user would like the eBay Catalog products to be sorted according to the product title.
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for values that are not available in the version of the schema you are using. This means if in a newer version of the API eBay adds a new value to <b>ProductSortCodeList</b> type and the request was using a <i>lower</i>
     * version, 'CustomCode' is returned instead of the new value.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_POPULARITY
     * @uses self::VALUE_RATING
     * @uses self::VALUE_REVIEW_COUNT
     * @uses self::VALUE_ITEM_COUNT
     * @uses self::VALUE_TITLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POPULARITY,
            self::VALUE_RATING,
            self::VALUE_REVIEW_COUNT,
            self::VALUE_ITEM_COUNT,
            self::VALUE_TITLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
