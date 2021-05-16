<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductSortCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ProductSortCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PopularityAsc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PopularityAsc'
     */
    const VALUE_POPULARITY_ASC = 'PopularityAsc';
    /**
     * Constant for value 'PopularityDesc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PopularityDesc'
     */
    const VALUE_POPULARITY_DESC = 'PopularityDesc';
    /**
     * Constant for value 'RatingAsc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'RatingAsc'
     */
    const VALUE_RATING_ASC = 'RatingAsc';
    /**
     * Constant for value 'RatingDesc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'RatingDesc'
     */
    const VALUE_RATING_DESC = 'RatingDesc';
    /**
     * Constant for value 'ReviewCountAsc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReviewCountAsc'
     */
    const VALUE_REVIEW_COUNT_ASC = 'ReviewCountAsc';
    /**
     * Constant for value 'ReviewCountDesc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReviewCountDesc'
     */
    const VALUE_REVIEW_COUNT_DESC = 'ReviewCountDesc';
    /**
     * Constant for value 'ItemCountAsc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ItemCountAsc'
     */
    const VALUE_ITEM_COUNT_ASC = 'ItemCountAsc';
    /**
     * Constant for value 'ItemCountDesc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ItemCountDesc'
     */
    const VALUE_ITEM_COUNT_DESC = 'ItemCountDesc';
    /**
     * Constant for value 'TitleAsc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'TitleAsc'
     */
    const VALUE_TITLE_ASC = 'TitleAsc';
    /**
     * Constant for value 'TitleDesc'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'TitleDesc'
     */
    const VALUE_TITLE_DESC = 'TitleDesc';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_POPULARITY_ASC
     * @uses self::VALUE_POPULARITY_DESC
     * @uses self::VALUE_RATING_ASC
     * @uses self::VALUE_RATING_DESC
     * @uses self::VALUE_REVIEW_COUNT_ASC
     * @uses self::VALUE_REVIEW_COUNT_DESC
     * @uses self::VALUE_ITEM_COUNT_ASC
     * @uses self::VALUE_ITEM_COUNT_DESC
     * @uses self::VALUE_TITLE_ASC
     * @uses self::VALUE_TITLE_DESC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POPULARITY_ASC,
            self::VALUE_POPULARITY_DESC,
            self::VALUE_RATING_ASC,
            self::VALUE_RATING_DESC,
            self::VALUE_REVIEW_COUNT_ASC,
            self::VALUE_REVIEW_COUNT_DESC,
            self::VALUE_ITEM_COUNT_ASC,
            self::VALUE_ITEM_COUNT_DESC,
            self::VALUE_TITLE_ASC,
            self::VALUE_TITLE_DESC,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
