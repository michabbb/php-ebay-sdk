<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingDurationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the duration (number of days or Good 'Til Cancelled) of a listing. <br><br> Listing durations available to the seller vary based on the site,
 * category, listing type, and the seller's selling profile, so it is a best practice for the seller to call <b>GetCategoryFeatures</b> with <b>ListingDurations</b> included as a <b>FeatureID</b> value in the call request. The <b>GetCategoryFeatures</b>
 * response will include the complete list of listing duration values that can be used for the various listing types. <br> <br> <span class="tablenote"><b>Note: </b> As of April 1, 2019, <code>GTC</code> (Good 'Til Cancelled) is the only supported
 * listing duration for fixed-price listings on all eBay marketplaces and categories except for motor vehicle listings on eBay Motors US, and on the eBay UK and eBay Italy sites. Sellers do not have to take any action on existing listings with listing
 * durations other than GTC, but if/when these items need to be relisted, only GTC will be supported. If any other listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and GTC will be used instead. </span>
 * @subpackage Enumerations
 */
class ListingDurationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_1'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to one day. A one-day listing duration is typically only available to sellers with a Feedback score of 10 or higher, so sellers with a Feedback score of less than 10 may be
     * restricted from using a one-day listing duration. The seller can call <b>GetCategoryFeatures</b> with <b>ListingDurations</b> included as a <b>FeatureID</b> value in the call request to see if the one-day listing duration is available. <br><br> A
     * one-day listing duration is generally applicable to an auction listing or to a Real Estate Classified Ad.
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to three days.
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_5'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to five days.
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to seven days.
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_10'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 10 days.
     * @return string 'Days_10'
     */
    const VALUE_DAYS_10 = 'Days_10';
    /**
     * Constant for value 'Days_14'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 14 days.
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_21'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 21 days. <br/><br/> <span class="tablenote"><b>Note: </b> A 21-day listing duration was typically only applicable to eBay Motors Local Market vehicle listings, but this listing
     * duration is no longer valid/supported. </span>
     * @return string 'Days_21'
     */
    const VALUE_DAYS_21 = 'Days_21';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 30 days. <br/><br/> <span class="tablenote"><b>Note: </b> In October 2018, this listing duration was enabled for eBay Motors Local Listings, and replaced the formerly supported
     * <code>Days_21</code> enumeration value. </span>
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_60'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 60 days. <br><br> A 60-day listing duration is typically only applicable to Classified Ad listings in specific categories.
     * @return string 'Days_60'
     */
    const VALUE_DAYS_60 = 'Days_60';
    /**
     * Constant for value 'Days_90'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 90 days. <br><br> A 90-day listing duration is generally only applicable to a Real Estate Classified Ad.
     * @return string 'Days_90'
     */
    const VALUE_DAYS_90 = 'Days_90';
    /**
     * Constant for value 'Days_120'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 120 days. <br><br> An 120-day listing duration is typically only applicable to Classified Ad listings in specific categories.
     * @return string 'Days_120'
     */
    const VALUE_DAYS_120 = 'Days_120';
    /**
     * Constant for value 'GTC'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to set the duration of the listing to 'Good 'Til Cancelled. This option is available for fixed-price and Classified Ad listings. "Good 'Til Cancelled" fixed-price listings will be relisted automatically each month
     * until all inventory is sold out (e.g., <b>Item.Quantity</b>=0 in a single-variation fixed-price listing, or all occurences of <b>Item.Variations.Variation.Quantity</b>=0 in a multi-variation fixed-price listing), or the seller ends the fixed-price
     * listing. <br> <br> <span class="tablenote"><b>Note: </b> As of April 1, 2019, <code>GTC</code> (Good 'Til Cancelled) is the only supported listing duration for fixed-price listings on all eBay marketplaces and categories except for motor vehicle
     * listings on eBay Motors US, and on the eBay UK and eBay Italy sites. Sellers do not have to take any action on existing listings with listing durations other than GTC, but if/when these items need to be relisted, only GTC will be supported. If any
     * other listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and GTC will be used instead. </span> <br> <span class="tablenote"><b>Note: </b> On July 1, 2019, the Good 'Til Cancelled renewal schedule was
     * modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days,
     * the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * @return string 'GTC'
     */
    const VALUE_GTC = 'GTC';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_21
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @uses self::VALUE_DAYS_90
     * @uses self::VALUE_DAYS_120
     * @uses self::VALUE_GTC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_21,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
            self::VALUE_DAYS_90,
            self::VALUE_DAYS_120,
            self::VALUE_GTC,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
