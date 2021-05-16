<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchFlagCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type lists the possible values that can be returned under the <b>FavoriteSearch.SearchFlag</b> field of a <b>GetMyeBayBuying</b> response. These values are output only and are controlled by the filter types used in a
 * buyer's Saved Search.
 * @subpackage Enumerations
 */
class SearchFlagCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Charity'
     * Meta information extracted from the WSDL
     * - documentation: This value being returned in the <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer selected the <b>eBay for Charity</b> option in the Saved Search.
     * @return string 'Charity'
     */
    const VALUE_CHARITY = 'Charity';
    /**
     * Constant for value 'Gift'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as Gift Icon and Gift Services are deprecated.
     * @return string 'Gift'
     */
    const VALUE_GIFT = 'Gift';
    /**
     * Constant for value 'NowAndNew'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the Now and New feature is deprecated.
     * @return string 'NowAndNew'
     */
    const VALUE_NOW_AND_NEW = 'NowAndNew';
    /**
     * Constant for value 'LocalSearch'
     * Meta information extracted from the WSDL
     * - documentation: This value being returned in the <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer selected the <b>Local pickup</b> option in the Saved Search. A buyer would select the <b>Local Pickup</b> filter in a Saved Search to
     * restrict retrieved listings to those that offer 'local pickup' as an option to buyers.
     * @return string 'LocalSearch'
     */
    const VALUE_LOCAL_SEARCH = 'LocalSearch';
    /**
     * Constant for value 'FreeShipping'
     * Meta information extracted from the WSDL
     * - documentation: This value being returned in the <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer selected the <b>Free shipping</b> option in the Saved Search. A buyer would select the <b>Free shipping</b> filter in a Saved Search to
     * restrict retrieved listings to those that offer a free shipping option to that specific buyer (the availability of free shipping may be dependent on the buyer's location).
     * @return string 'FreeShipping'
     */
    const VALUE_FREE_SHIPPING = 'FreeShipping';
    /**
     * Constant for value 'Gallery'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as there is always a gallery picture by default since all listings must have at least one picture.
     * @return string 'Gallery'
     */
    const VALUE_GALLERY = 'Gallery';
    /**
     * Constant for value 'Picture'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as there is now a requirement that all listings have at least one picture.
     * @return string 'Picture'
     */
    const VALUE_PICTURE = 'Picture';
    /**
     * Constant for value 'GetItFast'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the Get It Fast feature is deprecated.
     * @return string 'GetItFast'
     */
    const VALUE_GET_IT_FAST = 'GetItFast';
    /**
     * Constant for value 'Lot'
     * Meta information extracted from the WSDL
     * - documentation: This value being returned in the <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer selected the <b>Items listed as lots</b> option in the Saved Search. A buyer would select the <b>Items listed as lots</b> filter in a
     * Saved Search to restrict retrieved listings to those that are offering a "lot" of items in one listing. Specifically, a "lot" is defined as, "a group of similar or identical items that are sold together to one buyer."
     * @return string 'Lot'
     */
    const VALUE_LOT = 'Lot';
    /**
     * Constant for value 'GermanMotorsSearchable'
     * Meta information extracted from the WSDL
     * - documentation: This value is only applicable to the German site and if the user is searching for motor vehicle listings. This value being returned in the <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer selected a filter in a Saved
     * Search to restrict retrieved eBay Germany motor vehicle listings that are also being displayed on the mobile.de vehicle marketplace.
     * @return string 'GermanMotorsSearchable'
     */
    const VALUE_GERMAN_MOTORS_SEARCHABLE = 'GermanMotorsSearchable';
    /**
     * Constant for value 'WorldOfGood'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the World of Good site no longer exists.
     * @return string 'WorldOfGood'
     */
    const VALUE_WORLD_OF_GOOD = 'WorldOfGood';
    /**
     * Constant for value 'DigitalDelivery'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'DigitalDelivery'
     */
    const VALUE_DIGITAL_DELIVERY = 'DigitalDelivery';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CHARITY
     * @uses self::VALUE_GIFT
     * @uses self::VALUE_NOW_AND_NEW
     * @uses self::VALUE_LOCAL_SEARCH
     * @uses self::VALUE_FREE_SHIPPING
     * @uses self::VALUE_GALLERY
     * @uses self::VALUE_PICTURE
     * @uses self::VALUE_GET_IT_FAST
     * @uses self::VALUE_LOT
     * @uses self::VALUE_GERMAN_MOTORS_SEARCHABLE
     * @uses self::VALUE_WORLD_OF_GOOD
     * @uses self::VALUE_DIGITAL_DELIVERY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHARITY,
            self::VALUE_GIFT,
            self::VALUE_NOW_AND_NEW,
            self::VALUE_LOCAL_SEARCH,
            self::VALUE_FREE_SHIPPING,
            self::VALUE_GALLERY,
            self::VALUE_PICTURE,
            self::VALUE_GET_IT_FAST,
            self::VALUE_LOT,
            self::VALUE_GERMAN_MOTORS_SEARCHABLE,
            self::VALUE_WORLD_OF_GOOD,
            self::VALUE_DIGITAL_DELIVERY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
